<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_MOBILE_PATH.'/head.php');

$query = "select * from {$g5['mbanner_table']} WHERE cb_device='mobile' order by cb_order asc ";
$res = sql_query($query);
$slider1_1 = '';
$slider1_2 = '';
while($row = sql_fetch_array($res)) {
	$bimg = G5_DATA_PATH.'/mbanner/'.$row['cb_ix'];
	if (file_exists($bimg)) {
		$row['cb_title'] = addslashes($row['cb_title']);
		$slider1_1 .= sprintf('
			<div><img src="%s" alt="%s"></div>', G5_DATA_URL.'/mbanner/'.$row['cb_ix'], $row['cb_title']);
		$slider1_2 .= sprintf('
			<div>
				<span>%s</span>
				<p><a href="#">%s</a></p>
			</div>', $row['cb_title'], $row['cb_desc']);
	}
}
?>
<div id="container" class="main">
	<!-- main visual slider -->
	<div class="slider_wrap">
		<div class="slider visual_img"><?php echo $slider1_1;?>
		</div>
		<div class="slider visual_text"><?php echo $slider1_2;?>
		</div>
		<div class="title">
			<h2 class="tit">Hotel<br>Nikko Guam</h2>
			<p class="desc">Find Paradise</p>
		</div>
	</div>
	<!-- //main visual slider -->
<?php
$query = "select * from {$g5['ibanner_table']} WHERE cb_device='mobile' order by cb_order asc ";
$res = sql_query($query);
$slider1_1 = '';
$slider1_2 = '';
while($row = sql_fetch_array($res)) {
	$bimg = G5_DATA_PATH.'/ibanner/'.$row['cb_ix'];
	if (file_exists($bimg)) {
		$row['cb_title'] = addslashes($row['cb_title']);
		$slider1_1 .= '
			<div><img src="/theme/basic/img/mobile/null.png" alt=""></div>';
		$slider1_2 .= sprintf('
			<div>
				<div class="img" style="background-image:url(\'%s\')"></div>
				%s
				<a href="%s" class="btn btn_border">바로가기</a>
			</div>', '/data/ibanner/'.$row['cb_ix'], $row['cb_desc'], $row['cb_link']);		// /data/ 부분을 G5_DATA_URL 로 대체 하면 썸네일 부분이 안나옴...
	}
}
?>
	<!-- introduction -->
	<div class="cont intro">
		<h2 class="tit">Hotel<br>Introduction</h2>
		<p class="desc">Guam’s Best Beach &#38; View</p>
		<div class="slider thumb_nav"><?php echo $slider1_1;?>
		</div>
		<div class="slider thumb_for"><?php echo $slider1_2;?>
<!--
			<div>
				<div class="img" style="background-image:url(/theme/basic/img/mobile/thumb_slide_01.jpg)"></div>
				<h3 class="wave"><strong class="blue">Accommodation</strong>객실</h3>
				<p>
					호텔 닛코 괌은 에메랄드 빛 바다를<br>
					조망할 수 있는 오션프론트 호텔로 괌의<br>
					아름다운 투몬비치와 바치 바다 경관을<br>
					모두를 즐길 수 있는 최적의 장소에<br>
					위치 합니다.
				</p>
				<a href="#" class="btn btn_border">바로가기</a>
			</div>
-->
		</div>
	</div>
	<!-- //introduction -->

	<!-- special offer -->
	<div class="cont special_offer">
		<h2 class="tit">Special Offer</h2>
		<p class="desc">Recommended products</p>
<?php echo latest_group('theme/package', array('reservationgoods1', 'reservationgoods2', 'reservationgoods3', 'reservationgoods4'), 4, 24);?>
	</div>
	<!-- //special offer -->

	<!-- promotion -->
	<div class="cont promotion">
		<h2 class="tit">Promotion</h2>
		<p class="desc">Guam’s Best Beach&View</p>
<?php echo latest_group('theme/promotion', array('promotion'), 4, 24);?>
	</div>
	<!-- //promotion -->

	<div class="cont notice_event">
		<h2 class="tit">Notice &#38; Event</h2>
		<p class="desc">Hotel Nikko Guam</p>
<?php echo latest_group('theme/noticevent', array('notice', 'event'), 4, 24);?>
	</div>

	<!-- location -->
	<div class="cont location">
		<h2 class="tit">Location</h2>
		<p class="desc">호텔 닛코 괌 위치</p>
		<div id="map">
		</div>
		<ul>
			<li>
				<h3>주소 (Address)</h3>
				<p>P.O.Box 12819 Tamuning,Guam 96931 USA</p>
			</li>
			<li>
				<h3>연락처 (Tel)</h3>
				<p>+1-671-649-8815</p>
			</li>
			<li>
				<h3>이메일 (Email)</h3>
				<p>information@nikko-guam.com</p>
			</li>
		</ul>
	</div>
	<!-- //location -->

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCloh0RqPpd9cHjjzsQ81Q3rcUi-zLrcm8&sensor=false"></script>
<script>
// This example adds a marker to indicate the position of Bondi Beach in Sydney,
 // Australia.
 function initMap() {
	 var map = new google.maps.Map(document.getElementById('map'), {
		 zoom: 17,
		 center: {lat: 13.522525, lng: 144.8034998}
	 });

	 var image = '/theme/basic/img/mobile/maker.png';
	 var beachMarker = new google.maps.Marker({
		 position: {lat: 13.522425, lng: 144.8035998},
		 map: map,
		 icon: image
	 });
 }
 initMap();
</script>
<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>
