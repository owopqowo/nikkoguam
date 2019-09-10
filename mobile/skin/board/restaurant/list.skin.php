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
			<li class="on"><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=restaurant"><span>레스토랑 소개</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=restaurant&wr_id=10"><span>마젤란</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=restaurant&wr_id=9"><span>벤케이</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=restaurant&wr_id=8"><span>토리</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=restaurant&wr_id=7"><span>선셋 비치 바비큐</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=restaurant&wr_id=11"><span>닛코 매직 &amp; 일루션 쇼</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=restaurant&wr_id=5"><span>부겐빌리아</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=restaurant&wr_id=4"><span>파운틴</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=restaurant&wr_id=3"><span>프리미엄 서비스</span></a></li>
		</ul>
	</div>
</div>
<!-- //sub nav -->
<h3 class="tit">Restaurant</h3>
<p class="wave">레스토랑</p>
<p>
투몬 비치가 <strong class="blue">파노라마 뷰</strong>로 펼쳐지는<br>
정통 중국식 레스토랑, 모던함과 일본의 전통이<br>
어울러진 일식 레스토랑, 세계 각국의 요리가<br>
다양하게 마련된 뷔페 스타일의 레스토랑,<br>
환상적인 마술쇼를 경험하실 수 있는 디너쇼,<br>
폴리네시안 민속춤과 불쇼가 어우러진<br>
바비큐 파티가 준비되어 있습니다.
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
				%s
				<a href="%s" class="btn btn_border">자세히보기</a>
			</div>
		</div>',
		$list[$i]['wr_2'],
		$list[$i]['wr_subject'],
		$list[$i]['wr_1'],
		($list[$i]['wr_3'] ? '<a href="'.G5_BBS_URL.'/restaurant_reservation.php?bo_table='.$bo_table.'&wr_id='.$list[$i]['wr_id'].'" class="btn btn_blue">예약하기</a>':''),
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