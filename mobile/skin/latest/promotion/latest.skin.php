<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_LIB_PATH.'/thumbnail.lib.php');

$cnt = count($list);
if ($cnt) {
	$bo_gallery_width = 443;
	$bo_gallery_height = 526;
?>

		<div class="slider_wrap">
			<div class="slider number">
<?php for ($i=0; $i<count($list); $i++) {
$img_src = get_thumbnail_size($bo_gallery_width, $bo_gallery_height, $list[$i], true);	//array('bo_table'=>$list[$i]['bo_table'], 'wr_id'=>$list[$i]['wr_id'])
if($img_src) {
	$img_content = '<img src="'.$img_src.'" alt="'.htmlspecialchars($list[$i]['wr_subject']).'">';
} else {
	$img_content = '<img src="'.G5_IMG_URL.'/no-photo.gif" />';
}
$row = sql_fetch(sprintf('SELECT wr_1, wr_2 FROM %s WHERE wr_id=%s', $g5['write_prefix'].$list[$i]['bo_table'], $list[$i]['wr_id']));
$promotion_state = (($row['wr_1'] <= G5_TIME_YMD && $row['wr_2'] >= G5_TIME_YMD) == false)? '마감':'진행중';
?>
				<div>
					<a href="<?php echo $list[$i]['href'];?>">
						<?php echo $img_content;?>
						<span class="ongoing">진행중</span>
						<div class="text">
							<h3><?php echo $list[$i]['subject'];?></h3>
							<p class="date"><?php echo str_replace('-', '.', $row['wr_1'])?> - <?php echo str_replace('-', '.', $row['wr_2']);?></p>
						</div>
					</a>
				</div>
<?php } ?>
			</div>
			<div class="num">
				<strong>1</strong> / <span></span>
			</div>
		</div>
<?php } ?>