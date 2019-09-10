<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/jquery.fancylist.js"></script>

<!-- <h2 id="container_title"><?php echo ($board['bo_mobile_subject'] ? $board['bo_mobile_subject'] : $board['bo_subject']) ?><span class="sound_only"> 목록</span></h2> -->

<!-- 게시판 목록 시작 -->
<div class="radius facility">
<!-- sub nav -->
<div class="sub_nav_wrap">
	<div class="sub_nav">
		<ul>
			<li><a href="<?php echo G5_BBS_URL;?>/hotel_1.php"><span>호텔 소개</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/hotel_2.php"><span>호텔 서비스</span></a></li>
			<li class="on"><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=structure"><span>호텔 시설정보</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/hotel_4.php"><span>주변 관광 안내</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/location.php"><span>위치</span></a></li>
		</ul>
	</div>
</div>
<!-- //sub nav -->
<h3 class="tit">Facility Information</h3>
<p class="wave">호텔 시설정보</p>

<?php
$imgs_thumbnail = '';
$imgs = '';
for ($i=0; $i<count($list); $i++) {
	$file_row = sql_fetch(" select bf_file, bf_content from {$g5['board_file_table']} where bo_table = '$bo_table' and wr_id = '{$list[$i]['wr_id']}' and bf_type between '1' and '3' order by bf_no limit 0, 1 ");
	/*
	$size = (isset($file_row['bf_file']) && $file_row['bf_file'])? getimagesize(G5_DATA_PATH.'/file/'.$bo_table.'/'.$file_row['bf_file']):null;

	$size_thumb_w = $size_thumb_h = 0;
	if ($size[0] > $size[1]) {
		$size_thumb_w = $size[1];
		$size_thumb_h = $size_thumb_w * $board['bo_mobile_gallery_height'] / $board['bo_mobile_gallery_width'];
	} else {
		$size_thumb_h = $size[0];
		$size_thumb_w = $size_thumb_h * $board['bo_mobile_gallery_width'] / $board['bo_mobile_gallery_height'];
	}

	$thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $size_thumb_w, $size_thumb_h, false, true);
	*/
	$imgs_thumbnail .= '	<div><img src="/theme/basic/img/mobile/null.png" alt=""></div>'.PHP_EOL;
	$imgs .= sprintf('
		<div>
			<div class="img" style="background-image: url(%s)"><img src="/theme/basic/img/mobile/null.png" alt=""></div>
			<h4>%s</h4>
			<p>%s</p>
		</div>',
		'/data/file/'.$bo_table.'/'.$file_row['bf_file'],
		$list[$i]['wr_subject'],
		$list[$i]['wr_content']
	);
}
?>
<div class="slider thumb_nav">
<?php echo $imgs_thumbnail;?>
</div>

<div class="slider thumb_for">
<?php echo $imgs;?>
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

</div>
<!-- 게시판 목록 끝 -->
