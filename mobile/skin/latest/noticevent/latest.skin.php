<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_LIB_PATH.'/thumbnail.lib.php');

$bo_gallery_width = 369;
$bo_gallery_height = 160;
?>
		<div class="slider center">
<?php for ($i=0; $i<count($list); $i++) {
$img_src = get_thumbnail_size($bo_gallery_width, $bo_gallery_height, $list[$i], true);
?>
			<div>
				<a href="<?php echo $list[$i]['href'];?>">
					<div class="img" style="background-image:url(<?php echo $img_src;?>)">
					</div>
					<h3><?php echo $list[$i]['subject'];?></h3>
					<p class="date"><?php echo $list[$i]['datetime'];?></p>
				</a>
			</div>
<?php } ?>
		</div>