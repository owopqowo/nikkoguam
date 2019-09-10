<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>
		<div class="slider normal">
<?php for ($i=0; $i<count($list); $i++) {
	$_pos = strrpos($list[$i]['wr_subject'], ']');
	if ($_pos) $_pos += 1;
	$subject1 = substr($list[$i]['wr_subject'], 0, $_pos);
	$subject2 = substr($list[$i]['wr_subject'], $_pos);

	$row = sql_fetch(sprintf('SELECT wr_2 FROM %s WHERE wr_id=%s', $g5['write_prefix'].$list[$i]['bo_table'], $list[$i]['wr_id']));
	$row['wr_2'] = trim($row['wr_2']);
	if ($pos = strpos($row['wr_2'], ' ')) {
		$_wr_2 = substr($row['wr_2'], $pos+1);
		$class_name = 'btn_navy';
	} else {
		$_wr_2 = $row['wr_2'];
		$class_name = 'btn_blue';
	}
?>
			<div>
				<div class="box_w">
					<strong class="blue"><?php echo $subject1;?></strong>
					<h3 class="wave"><?php echo $subject2;?></h3>
					<p><?php echo $list[$i]['wr_content'];?></p>
					<div class="btn_wrap">
						<span class="btn <?php echo $class_name;?>"><?php echo $_wr_2;?></span>
						<a href="<?php echo $list[$i]['wr_link1'];?>" target="_blank" class="btn btn_border">예약하기</a>
					</div>
				</div>
			</div>
<?php } ?>
<?php if (count($list) == 0) { //게시물이 없을 때 ?>
<?php } ?>
		</div>
