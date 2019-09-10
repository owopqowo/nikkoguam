<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$faq_skin_url.'/style.css">', 0);
?>

<!-- FAQ 시작 { -->
<div class="radius faq">
<!-- sub nav -->
<div class="sub_nav_wrap">
	<div class="sub_nav">
		<ul>
			<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=reservationgoods1"><span>스페셜 오퍼</span></a></li>
			<li class="on"><a href="<?php echo G5_BBS_URL;?>/faq.php"><span>자주하는 질문</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/contact.php"><span>일반문의</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/qna.php"><span>확정예약 문의</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=promotion"><span>프로모션</span></a></li>
		</ul>
	</div>
</div>
<!-- //sub nav -->
<h3 class="tit">FAQ</h3>
<p class="wave">자주하는 질문</p>

<?php
// 상단 HTML
echo '<div id="faq_hhtml">'.conv_content($fm['fm_mobile_head_html'], 1).'</div>';
?>

<?php
if( count($faq_master_list) ){
?>
<nav id="bo_cate">
    <h2>자주하시는질문 분류</h2>
    <ul class="tab_menu">
        <?php
        foreach( $faq_master_list as $v ){
            $category_msg = '';
            $category_option = '';
            if($v['fm_id'] == $fm_id){ // 현재 선택된 카테고리라면
                $category_option = 'class="on"';
                $category_msg = '<span class="sound_only">열린 분류 </span>';
            }
        ?>
        <li <?php echo $category_option;?>><a href="<?php echo $category_href;?>?fm_id=<?php echo $v['fm_id']?>"><span><?php echo $category_msg.$v['fm_subject'];?></span></a></li>
        <?php
        }
        ?>
    </ul>
</nav>
<?php } ?>

<p class="total">Total <strong class="blue"><?php echo number_format($total_count) ?></strong>건 <?php echo $page;?> 페이지</p>
<div id="faq_wrap" class="faq_<?php echo $fm_id; ?>">
    <?php // FAQ 내용
    if( count($faq_list) ){
    ?>
    <section id="faq_con">
        <h2><?php echo $g5['title']; ?> 목록</h2>
        <ol>
            <?php
            foreach($faq_list as $key=>$v){
                if(empty($v))
                    continue;
            ?>
            <li>
                <h3><a href="#none" onclick="return faq_open(this);"><?php echo conv_content($v['fa_subject'], 1); ?></a></h3>
                <div class="con_inner">
                    <?php echo conv_content($v['fa_content'], 1); ?>
                    <div class="con_closer"><button type="button" class="closer_btn">닫기</button></div>
                </div>
            </li>
            <?php
            }
            ?>
        </ol>
    </section>
    <?php

    } else {
        if($stx){
            echo '<p class="empty_list">검색된 게시물이 없습니다.</p>';
        } else {
            echo '<div class="empty_table">등록된 FAQ가 없습니다.';
            if($is_admin)
                echo '<br><a href="'.G5_ADMIN_URL.'/faqmasterlist.php">FAQ를 새로 등록하시려면 FAQ관리</a> 메뉴를 이용하십시오.';
            echo '</div>';
        }
    }
    ?>
</div>
<!--
<?php echo get_paging($page_rows, $page, $total_page, $_SERVER['SCRIPT_NAME'].'?'.$qstr.'&amp;page='); ?>
-->
<!-- pager -->
<div class="pager">
<?php if ($total_page > 1 && $page > 1) printf('<a href="%s" class="prev">이전</a>', $_SERVER['SCRIPT_NAME'].'?'.$qstr.'&amp;page='.($page-1)); ?>
	<p class="num">
		<strong><?php echo $page;?></strong>/<span><?php echo $total_page;?></span>
	</p>
<?php if ($total_page > 1 && $page < $total_page) printf('<a href="%s" class="next">다음</a>', $_SERVER['SCRIPT_NAME'].'?'.$qstr.'&amp;page='.($page+1)); ?>
</div>
<!-- //pager -->

<?php
// 하단 HTML
echo '<div id="faq_thtml">'.conv_content($fm['fm_mobile_tail_html'], 1).'</div>';
?>

<div id="faq_sch" class="box_sch">
	<form name="faq_search_form" method="get">
		<input type="hidden" name="fm_id" value="<?php echo $fm_id;?>">
		<select class="" name="">
			<option value="">제목</option>
			<option value="">내용</option>
			<option value="">제목+내용</option>
		</select>
		<div class="input_sch">
			<label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
			<input type="text" name="stx" value="<?php echo $stx;?>" placeholder="입력해 주세요." required id="stx" class="frm_input required" size="15" maxlength="15">
			<input type="submit" value="검색" class="btn_submit">
		</div>
	</form>
</div>

<div class="info">
	<p>찾으시는 질문과 답변이 없을 경우<br><a href="<?php echo G5_BBS_URL;?>/contact.php" class="blue">일반문의 게시판</a>을 이용해 주시기 바랍니다.</p>
	<a href="<?php echo G5_BBS_URL;?>/contact.php" class="btn btn_blue">문의하기</a>
</div>
</div>
<!-- } FAQ 끝 -->

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>
<script>
$(function() {
    $(".closer_btn").on("click", function() {
        $(this).closest(".con_inner").slideToggle();
    });
});

function faq_open(el)
{
    var $con = $(el).closest("li").find(".con_inner");

    if($con.is(":visible")) {
			$(el).closest("ol").find("a").removeClass('on');
        $con.slideUp();
    } else {
			$(el).closest("ol").find("a").removeClass('on');
			$(el).addClass('on');
        $("#faq_con .con_inner:visible").css("display", "none");

        $con.slideDown(
            function() {
                // 이미지 리사이즈
                $con.viewimageresize2();
            }
        );
    }

    return false;
}
</script>
