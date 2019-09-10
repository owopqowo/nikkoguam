<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/jquery.fancylist.js"></script>

<!-- <h2 id="container_title"><?php echo ($board['bo_mobile_subject'] ? $board['bo_mobile_subject'] : $board['bo_subject']) ?><span class="sound_only"> 목록</span></h2> -->

<!-- 게시판 목록 시작 -->
<div class="radius">
<!-- sub nav -->
<div class="sub_nav_wrap">
	<div class="sub_nav">
		<ul>
			<li class="on"><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=refresh"><span>풀&#38;스파 소개</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=refresh&wr_id=5"><span>풀</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=refresh&wr_id=4"><span>비치</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=refresh&wr_id=3"><span>스파 아유아람</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=refresh&wr_id=2"><span>휴식</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=refresh&wr_id=1"><span>액티비티</span></a></li>
		</ul>
	</div>
</div>
<!-- //sub nav -->
<h3 class="tit">Refresh</h3>
<p class="wave">풀&#38;스파</p>
<p>
<strong class="blue">탁 트인 바다를 바라볼 수 있는 곳</strong>에 자리잡은<br>
수영장, 괌 최장 길이의 짜릿한 워터 슬라이드<br>
뿐만 아니라 여행에 지친 피로를 풀 수 있는<br>
스파, 가제보, 요가 클래스 등이<br>
마련되어 있습니다.
</p>
<?php
$slide1 = $slide2 = '';
for ($i=0; $i<count($list); $i++) {
	$img_src = get_thumbnail_size($board['bo_mobile_gallery_width'], $board['bo_mobile_gallery_height'], array_merge(array('bo_table'=>$bo_table, 'file_add_where'=>'bf_width>='.$board['bo_mobile_gallery_width'].' AND bf_height>='.$board['bo_mobile_gallery_height']), $list[$i]), true);

	$slide1 .= sprintf('		<div><img src="%s" alt=""></div>'.PHP_EOL, $img_src);
	$slide2 .= sprintf('
		<div>
			<h4 class="wave"><strong class="blue">%s</strong>%s</h4>
			<p>%s</p>
			<div class="btn_wrap">
				<a href="%s" class="btn btn_border">자세히보기</a>
			</div>
		</div>',
		$list[$i]['wr_2'],
		$list[$i]['wr_subject'],
		$list[$i]['wr_1'],
		$list[$i]['href']
	);
}
?>
<!-- board slider -->
<div class="slider_wrap">
	<div class="slider board_img">
<?php echo $slide1;?>
	</div>
	<div class="slider board_text">
<?php echo $slide2;?>	
	</div>
	<div class="num">
		<strong>01</strong> / <span></span>
	</div>
</div>
<!-- //board slider -->

</div>