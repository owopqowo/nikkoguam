<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_javascript('<script src="'.G5_THEME_URL.'/js/paging.js"></script>', 10);
?>

<script src="<?php echo G5_JS_URL; ?>/jquery.fancylist.js"></script>

<!-- <h2 id="container_title"><?php echo ($board['bo_mobile_subject'] ? $board['bo_mobile_subject'] : $board['bo_subject']) ?><span class="sound_only"> 목록</span></h2> -->

<!-- 게시판 목록 시작 -->
<div class="radius reserve">
<!-- sub nav -->
<div class="sub_nav_wrap">
	<div class="sub_nav">
		<ul>
			<li class="on"><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=reservationgoods1"><span>스페셜 오퍼</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/faq.php"><span>자주하는 질문</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/contact.php"><span>일반문의</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/qna.php"><span>확정예약 문의</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=promotion"><span>프로모션</span></a></li>
		</ul>
	</div>
</div>
<!-- //sub nav -->
<h3 class="tit">Reservation</h3>
<p class="wave">예약</p>
<p><strong class="blue">품격있는 휴식이 있는 호텔 닛코 괌</strong>에서<br>최고의 시간을 보내시기 바랍니다.<br>품격의 가치를 아는 고객을 위해 최상의<br>서비스를 준비하겠습니다.</p>


<div class="box_info">
	<ul>
		<li>본 사이트에서 객실예약 후 '스파아유아람' 이용 시 항시 20~40%할인!</li>
		<li>스팟 프로모션이 운영 중 입니다! 특별한 할인 혜택을 만나 보세요!</li>
	</ul>
</div>


<ul class="tab_menu">
	<li class="<?php echo ($bo_table == 'reservationgoods1' ? 'on' : '');?>"><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=reservationgoods1"><span>추천상품</span></a></li>
	<li class="<?php echo ($bo_table == 'reservationgoods2' ? 'on' : '');?>"><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=reservationgoods2"><span>기본예약 상품</span></a></li>
	<li class="<?php echo ($bo_table == 'reservationgoods3' ? 'on' : '');?>"><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=reservationgoods3"><span>조기예약 상품</span></a></li>
	<li class="<?php echo ($bo_table == 'reservationgoods4' ? 'on' : '');?>"><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=reservationgoods4"><span>특별 상품</span></a></li>
</ul>

<div id="bo_gall">

    <?php if ($is_category) { ?>
    <nav id="bo_cate">
        <h2><?php echo ($board['bo_mobile_subject'] ? $board['bo_mobile_subject'] : $board['bo_subject']) ?> 카테고리</h2>
        <ul id="bo_cate_ul">
            <?php echo $category_option ?>
        </ul>
    </nav>
    <?php } ?>

    <p class="total">Total <strong class="blue"><?php echo number_format($total_count) ?></strong>건</p>
    <div class="bo_fx">
        <?php if ($rss_href || $write_href) { ?>
        <ul class="btn_bo_user">
            <?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b01">RSS</a></li><?php } ?>
            <?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin">관리자</a></li><?php } ?>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02">글쓰기</a></li><?php } ?>
        </ul>
        <?php } ?>
    </div>

    <form name="fboardlist"  id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="sw" value="">

    <h2>이미지 목록</h2>

    <?php if ($is_checkbox) { ?>
    <div id="gall_allchk">
        <label for="chkall" class="sound_only">현재 페이지 게시물 전체</label>
        <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
    </div>
    <?php } ?>

    <ul id="gall_ul">
        <?php for ($i=0; $i<count($list); $i++) {
			$_pos = strrpos($list[$i]['wr_subject'], ']');
			if ($_pos) $_pos += 1;
			$subject1 = substr($list[$i]['wr_subject'], 0, $_pos);
			$subject2 = substr($list[$i]['wr_subject'], $_pos);

			$list[$i]['wr_2'] = trim($list[$i]['wr_2']);
			if ($pos = strpos($list[$i]['wr_2'], ' ')) {
				$_wr_2 = substr($list[$i]['wr_2'], $pos+1);
				$class_name = 'btn_navy';
			} else {
				$_wr_2 = $list[$i]['wr_2'];
				$class_name = 'btn_blue';
			}
        ?>
        <li class="gall_li <?php if ($wr_id == $list[$i]['wr_id']) { ?>gall_now<?php } ?>">
            <?php if ($is_checkbox) { ?>
            <label for="chk_wr_id_<?php echo $i ?>" class="sound_only"><?php echo $list[$i]['subject'] ?></label>
            <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
            <?php } ?>
            <span class="sound_only">
                <?php
                if ($wr_id == $list[$i]['wr_id'])
                    echo "<span class=\"bo_current\">열람중</span>";
                else
                    echo $list[$i]['num'];
                ?>
            </span>
            <ul class="gall_con">
                <li class="gall_text_href">
										<strong class="blue"><?php echo $subject1;?></strong>
                    <?php
                    // echo $list[$i]['icon_reply']; 갤러리는 reply 를 사용 안 할 것 같습니다. - 지운아빠 2013-03-04
                    if ($is_category && $list[$i]['ca_name']) {
                    ?>
                    <?php } ?>
                        <h4 class="wave"><strong><?php echo $subject2;?></strong></h4>
										<p><?php echo $list[$i]['wr_content'];?></p>
										<div class="btn_wrap">
											<span class="btn <?php echo $class_name;?>"><?php echo $_wr_2?></span>
											<a href="<?php echo $list[$i]['wr_link1'];?>" target="_blank" class="btn btn_border">예약하기</a>
										</div>
                    <?php
                    // if ($list[$i]['link']['count']) { echo '['.$list[$i]['link']['count']}.']'; }
                    // if ($list[$i]['file']['count']) { echo '<'.$list[$i]['file']['count'].'>'; }

                    //if (isset($list[$i]['icon_new'])) echo $list[$i]['icon_new'];
                    //if (isset($list[$i]['icon_hot'])) echo $list[$i]['icon_hot'];
                    //if (isset($list[$i]['icon_file'])) echo $list[$i]['icon_file'];
                    //if (isset($list[$i]['icon_link'])) echo $list[$i]['icon_link'];
                    //if (isset($list[$i]['icon_secret'])) echo $list[$i]['icon_secret'];
                    ?>
                </li>
            </ul>
        </li>
        <?php } ?>
        <?php if (count($list) == 0) { echo "<li class=\"empty_list\">게시물이 없습니다.</li>"; } ?>
    </ul>

    <?php if ($list_href || $is_checkbox || $write_href) { ?>
    <div class="bo_fx">
        <ul class="btn_bo_adm">
            <?php if ($list_href) { ?>
            <?php } ?>
            <?php if ($is_checkbox) { ?>
            <li><input type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value"></li>
            <li><input type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value"></li>
            <li><input type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value"></li>
            <?php } ?>
        </ul>

        <ul class="btn_bo_user">
            <li><?php if ($write_href) { ?><a href="<?php echo $write_href ?>" class="btn_b02">글쓰기</a><?php } ?></li>
        </ul>
    </div>
    <?php } ?>

    </form>
</div>

<script>
$(window).on("load", function() {
    $("#gall_ul").fancyList(".gall_li", "gall_clear");
});
</script>

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>

<!-- 페이지 -->
<!-- <?php echo $write_pages; ?> -->

<div class="box_more">
	<a href="#" class="btn btn_more">load more</a>
	<p class="num">( <strong class="blue current_items"></strong>/<span class="total_items"></span> )</p>
</div>
<?php
$_params = $_GET;
if (isset($_params['page'])) unset($_params['page']);
?>
<script>
$(function(){
	ajax_paging.init({
		'url':'<?php echo $_SERVER['SCRIPT_NAME'].(count($_params)? '?'.http_build_query($_params):'')?>&page=',
		'selector':'#gall_ul',
		'selector_btn':{'next':'.box_more > .btn_more'},
		'selector_label':{
			'current_items':'.box_more .current_items',
			'total_items':'.box_more .total_items'
		},
		'page':<?php echo $page??1;?>,
		'count':<?php echo $total_count??0;?>,
		'ipp':<?php echo $board['bo_mobile_page_rows']??1;?>,
		'load_before':function(obj){
			obj.addClass('ajax_loading');
		},
		'load_complete':function(obj){
			obj.removeClass('ajax_loading');
		},
	});
})
</script>
<!-- <fieldset id="bo_sch">
    <legend>게시물 검색</legend>

    <form name="fsearch" method="get">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sop" value="and">
    <label for="sfl" class="sound_only">검색대상</label>
    <select name="sfl" id="sfl">
        <option value="wr_subject"<?php echo get_selected($sfl, "wr_subject", true); ?>>제목</option>
        <option value="wr_content"<?php echo get_selected($sfl, "wr_content"); ?>>내용</option>
        <option value="wr_subject||wr_content"<?php echo get_selected($sfl, "wr_subject||wr_content"); ?>>제목+내용</option>
        <option value="mb_id,1"<?php echo get_selected($sfl, "mb_id,1"); ?>>회원아이디</option>
        <option value="mb_id,0"<?php echo get_selected($sfl, "mb_id,0"); ?>>회원아이디(코)</option>
        <option value="wr_name,1"<?php echo get_selected($sfl, "wr_name,1"); ?>>글쓴이</option>
        <option value="wr_name,0"<?php echo get_selected($sfl, "wr_name,0"); ?>>글쓴이(코)</option>
    </select>
    <input name="stx" value="<?php echo stripslashes($stx) ?>" placeholder="검색어(필수)" required id="stx" class="required frm_input" size="15" maxlength="20">
    <input type="submit" value="검색">
    </form>
</fieldset> -->
</div>
<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

        f.removeAttribute("target");
        f.action = "./board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == 'copy')
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = "./move.php";
    f.submit();
}
</script>
<?php } ?>
<!-- 게시판 목록 끝 -->
