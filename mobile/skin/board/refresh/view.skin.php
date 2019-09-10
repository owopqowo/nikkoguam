<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<!-- <div id="bo_v_table"><?php echo ($board['bo_mobile_subject'] ? $board['bo_mobile_subject'] : $board['bo_subject']); ?></div> -->
<div class="radius">
	<!-- sub nav -->
	<div class="sub_nav_wrap">
		<div class="sub_nav scroll_y" id="test">
			<ul>
				<li<?php echo (!$wr_id)? ' class="on"':'';?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=refresh"><span>풀&#38;스파 소개</span></a></li>
				<li<?php echo ($wr_id == 5)? ' class="on"':'';?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=refresh&wr_id=5"><span>풀</span></a></li>
				<li<?php echo ($wr_id == 4)? ' class="on"':'';?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=refresh&wr_id=4"><span>비치</span></a></li>
				<li<?php echo ($wr_id == 3)? ' class="on"':'';?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=refresh&wr_id=3"><span>스파 아유아람</span></a></li>
				<li<?php echo ($wr_id == 2)? ' class="on"':'';?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=refresh&wr_id=2"><span>휴식</span></a></li>
				<li<?php echo ($wr_id == 1)? ' class="on"':'';?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=refresh&wr_id=1"><span>액티비티</span></a></li>
			</ul>
		</div>
	</div>
	<!-- //sub nav -->

	<h3 class="tit"><?php echo $view['wr_2'];?></h3>
	<p class="wave"><?php echo $view['wr_subject'];?></p>
	<p><?php echo $view['wr_1'];?></p>

	<article id="bo_v" style="width:<?php echo $width; ?>">

    <?php if($cnt) { ?>
    <section id="bo_v_file">
        <h2>첨부파일</h2>
        <ul>
        <?php
        // 가변 파일
        for ($i=0; $i<count($view['file']); $i++) {
            if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view']) {
         ?>
            <li>
                <a href="<?php echo $view['file'][$i]['href'];  ?>" class="view_file_download">
                    <img src="<?php echo $board_skin_url ?>/img/icon_file.gif" alt="첨부">
                    <strong><?php echo $view['file'][$i]['source'] ?></strong>
                    <?php echo $view['file'][$i]['content'] ?> (<?php echo $view['file'][$i]['size'] ?>)
                </a>
                <span class="bo_v_file_cnt"><?php echo $view['file'][$i]['download'] ?>회 다운로드</span>
                <span>DATE : <?php echo $view['file'][$i]['datetime'] ?></span>
            </li>
        <?php
            }
        }
         ?>
        </ul>
    </section>
    <?php } ?>

    <section id="bo_v_atc">
        <h2 id="bo_v_atc_title">본문</h2>

        <?php
        // 파일 출력
        $v_img_count = count($view['file']);
		$imgs_thumbnail = $imgs = '';
        if($v_img_count) {

            for ($i=1; $i<=$v_img_count; $i++) {
                if ($view['file'][$i]['file']) {
					$imgs_thumbnail .= '						<div><img src="/theme/basic/img/mobile/null.png" alt=""></div>'.PHP_EOL;
					$imgs .= sprintf('
						<div>
							<div class="img" style="background-image: url(%s)"><img src="/theme/basic/img/mobile/null.png" alt=""></div>
						</div>',
						'/data/file/'.$bo_table.'/'.$view['file'][$i]['file']
					);
                }
            }

        }
         ?>
				<div class="full">
					<div class="slider thumb_nav">
<?php echo $imgs_thumbnail;?>
					</div>

					<div class="slider thumb_for">
<?php echo $imgs;?>
					</div>
					<?php if ($view['wr_3']) {?><a href="<?php echo G5_BBS_URL;?>/restaurant_reservation.php?bo_table=<?php echo $bo_table;?>&wr_id=<?php echo $view['wr_id'];?>" class="btn btn_blue">예약하기</a><?php } ?>

				</div>

        <div class="content_board">
					<?php echo $view['wr_10'];?>
        </div>
        <?php//echo $view['rich_content']; // {이미지:0} 과 같은 코드를 사용할 경우 ?>

        <?php if ($is_signature) { ?><p><?php echo $signature ?></p><?php } ?>

        <?php if ($scrap_href || $good_href || $nogood_href) { ?>
        <div id="bo_v_act">
            <?php if ($scrap_href) { ?><a href="<?php echo $scrap_href; ?>" target="_blank" class="btn_b01" onclick="win_scrap(this.href); return false;">스크랩</a><?php } ?>
            <?php if ($good_href) { ?>
            <span class="bo_v_act_gng">
                <a href="<?php echo $good_href.'&amp;'.$qstr ?>" id="good_button" class="btn_b01">추천 <strong><?php echo number_format($view['wr_good']) ?></strong></a>
                <b id="bo_v_act_good"></b>
            </span>
            <?php } ?>
            <?php if ($nogood_href) { ?>
            <span class="bo_v_act_gng">
                <a href="<?php echo $nogood_href.'&amp;'.$qstr ?>" id="nogood_button" class="btn_b01">비추천  <strong><?php echo number_format($view['wr_nogood']) ?></strong></a>
                <b id="bo_v_act_nogood"></b>
            </span>
            <?php } ?>
        </div>
        <?php } else {
            if($board['bo_use_good'] || $board['bo_use_nogood']) {
        ?>
        <div id="bo_v_act">
            <?php if($board['bo_use_good']) { ?><span>추천 <strong><?php echo number_format($view['wr_good']) ?></strong></span><?php } ?>
            <?php if($board['bo_use_nogood']) { ?><span>비추천 <strong><?php echo number_format($view['wr_nogood']) ?></strong></span><?php } ?>
        </div>
        <?php
            }
        }
        ?>
        <?php
        include(G5_SNS_PATH."/view.sns.skin.php");
        ?>
    </section>

    <?php
    // 코멘트 입출력
    //include_once(G5_BBS_PATH.'/view_comment.php');
     ?>

    <!-- <div id="bo_v_bot">
        <?php echo $link_buttons ?>
    </div> -->

		<div class="btn_wrap">
			<a href="<?php echo $list_href;?>" class="btn btn_border">목록보기</a>
		</div>

</article>
</div>
<script>
<?php if ($board['bo_download_point'] < 0) { ?>
$(function() {
    $("a.view_file_download").click(function() {
        if(!g5_is_member) {
            alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
            return false;
        }

        var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

        if(confirm(msg)) {
            var href = $(this).attr("href")+"&js=on";
            $(this).attr("href", href);

            return true;
        } else {
            return false;
        }
    });
});
<?php } ?>

function board_move(href)
{
    window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>

<!-- 게시글 보기 끝 -->

<script>
$(function() {
    $("a.view_image").click(function() {
        window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
        return false;
    });

    // 추천, 비추천
    $("#good_button, #nogood_button").click(function() {
        var $tx;
        if(this.id == "good_button")
            $tx = $("#bo_v_act_good");
        else
            $tx = $("#bo_v_act_nogood");

        excute_good(this.href, $(this), $tx);
        return false;
    });

    // 이미지 리사이즈
    $("#bo_v_atc").viewimageresize();
});

function excute_good(href, $el, $tx)
{
    $.post(
        href,
        { js: "on" },
        function(data) {
            if(data.error) {
                alert(data.error);
                return false;
            }

            if(data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                if($tx.attr("id").search("nogood") > -1) {
                    $tx.text("이 글을 비추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                } else {
                    $tx.text("이 글을 추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                }
            }
        }, "json"
    );
}
</script>
