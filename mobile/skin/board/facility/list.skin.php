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
			<li class="on"><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=facility"><span>부대시설 소개</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=facility&wr_id=5"><span>연회장</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=facility&wr_id=4"><span>어린이 시설</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=facility&wr_id=3"><span>기프트숍</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=facility&wr_id=2"><span>크리스탈 채플</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=facility&wr_id=1"><span>기타 시설</span></a></li>
		</ul>
	</div>
</div>
<!-- //sub nav -->
<h3 class="tit">Facility</h3>
<p class="wave">부대시설</p>
<p>
호텔 닛코 괌에는 아동을 위한 실·내외 놀이터,<br>
식료품 및 잡화점, 크고 작은 행사가 가능한<br>
연회장, 코인 세탁기, 주차장, 아이스 머신 등의<br>
편의시설이 구비되어 있습니다.
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