<?php
include_once('./_common.php');
?>
<?php if (G5_IS_MOBILE) {	// 분기시작 : 모바일?>
<?php
$board['gr_id'] = 'hotel';
include_once(G5_PATH.'/_head.php');
?>
<div class="radius map">
	<!-- sub nav -->
	<div class="sub_nav_wrap">
		<div class="sub_nav">
			<ul>
				<li><a href="<?php echo G5_BBS_URL;?>/hotel_1.php"><span>호텔 소개</span></a></li>
				<li><a href="<?php echo G5_BBS_URL;?>/hotel_2.php"><span>호텔 서비스</span></a></li>
				<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=structure"><span>호텔 시설정보</span></a></li>
				<li><a href="<?php echo G5_BBS_URL;?>/hotel_4.php"><span>주변 관광 안내</span></a></li>
				<li class="on"><a href="<?php echo G5_BBS_URL;?>/location.php"><span>위치</span></a></li>
			</ul>
		</div>
	</div>
	<!-- //sub nav -->

	<h3 class="tit">Location</h3>
	<p class="desc wave">위치</p>
	<div id="map"></div>

	<ul class="info">
		<li>
			<h4>위치</h4>
			<p>괌 국제공항에서 차량으로 약 10분 거리에 위치</p>
		</li>
		<li>
			<h4>주소</h4>
			<p>P.O.Box 12819 Tamuning, Guam 96931 USA</p>
		</li>
		<li>
			<h4>전화번호</h4>
			<p>+1-671-649-8815</p>
		</li>
		<li>
			<h4>이메일</h4>
			<p>information@nikko-guam.com</p>
		</li>
		<li>
			<h4>공항 차량서비스</h4>
			<p>예약 시 신청 또는 출발 최소 3일 전 예약 정보 (항공편명/시간 등)와 함께 신청</p>
		</li>
		<li>
			<h4>프라이빗 픽업 서비스 <span>(공항→호텔, 호텔→공항)</span></h4>
			<p class="dash">세단(1~3인 이용 시) : 편도 <strong class="blue">$45</strong></p>
			<p class="dash">미니밴(4~6인 이용 시) : 편도 <strong class="blue">$55</strong></p>
			<p class="dash">밴(5~10인 이용 시) : 편도 <strong class="blue">$85</strong></p>
			<div class="box_g">
				<ul>
					<li><strong>신청 방법 : </strong>체크인 3일 이전까지 이메일 신청</li>
					<li><strong>결제 방법 : </strong>체크아웃 시 객실요금에 포함돼 결제</li>
				</ul>
			</div>
			<p class="reference_mark">공항→호텔 편도 이용할 경우, 만 2세 이상 1인당 $5 공항세 추가. (성인 2인, 만 4세 아동 1인, 총 3인 세단 공항→호텔  편도 이용 시 $45+$5*3=$60)</p>
		</li>
		<li>
			<h4>셔틀 픽업 서비스 <span>(공항→호텔)</span></h4>
			<p class="dash">성인(만 12세 이상) : 편도 <strong class="blue">$15</strong></p>
			<p class="dash">아동(만 3~11세) : 편도 <strong class="blue">$7.5</strong></p>
			<div class="box_g">
				<ul>
					<li><strong>신청 방법 : </strong>체크인 3일 이전까지 이메일 신청</li>
					<li><strong>결제 방법 : </strong>체크아웃 시 객실요금에 포함돼 결제</li>
				</ul>
			</div>
			<p class="reference_mark">만 0~2세 유아 셔틀 픽업 서비스 무료, 2세 이상 1인당 $5 공항세 추가.</p>
		</li>
		<li>
			<h4>시내 혹은 쇼핑지로 이용 가능한 교통편</h4>
			<p>택시, T 갤러리아 무료 셔틀버스, 트롤리 버스</p>
		</li>
	</ul>

	<div class="btn_wrap">
		<a href="/bbs/board.php?bo_table=notice&wr_id=108" class="btn btn_blue">픽업 서비스 자세히 보기</a>
	</div>
</div>

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
include_once('./_tail.php');
?>
<?php } else {	// 분기 : PC?>
<h1 class="title">호텔 닛코 괌 위치</h1>

<div class="location_pop">
	<ul class="info">
		<li>
			<p><img src="../img/location1.gif" alt=""></p>
			<dl>
				<dt>위치</dt>
				<dd>괌 국제공항에서<br>차량으로 약 10분<br>거리에 위치</dd>
			</dl>
		</li>
		<li>
			<p><img src="../img/location2.gif" alt=""></p>
			<dl>
				<dt>주소</dt>
				<dd>P.O.Box 12819<br>
				Tamuning,<br>
				Guam 96931 USA</dd>
			</dl>
		</li>
		<li>
			<p><img src="../img/location3.gif" alt=""></p>
			<dl>
				<dt>전화번호</dt>
				<dd>+1-671-649-8815</dd>
			</dl>
		</li>
		<li>
			<p><img src="../img/location4.gif" alt=""></p>
			<dl>
				<dt>이메일</dt>
				<dd>information@nikkoguam.com</dd>
			</dl>
		</li>
		<li>
			<p><img src="../img/location5.gif" alt=""></p>
			<dl>
				<dt>공항 차량서비스</dt>
				<dd>예약 시 신청 또는 출발 최소 <br>
				3일 전 예약 정보<br>
				(항공편명/시간 등)와 함께 신청</dd>
			</dl>
		</li>
	</ul>

	<h2>프라이빗 픽업 서비스(공항→호텔, 호텔→공항) </h2>
	<table class="tbl">
		<tr>
			<td width="490px">

                <ul>
					<b><li>세단(1~3인 이용 시)</li>
        			<li>미니밴(4~6인 이용 시)</li>
   					<li>밴(5~10인 이용 시)</li></b>


                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;편도 $45</li>
   					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;편도 $55</li>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;편도 $85</li>
 				</ul>


				※공항→호텔 편도 이용할 경우, 만 2세 이상 1인당 $5 공항세 추가.<br/>
                Ex) 성인 2인, 만 4세 아동 1인, 총 3인 세단 공항→호텔 편도 이용 시 $45+$5*3=$60

			</td>
			<td>
				<strong>신청 방법</strong> : 체크인 3일 이전까지 이메일 신청<br><br>
				<strong>결제 방법</strong> : 체크아웃 시 객실요금에 포함돼 결제
			</td>
		</tr>
	</table>

    <br/>

    <h2>셔틀 픽업 서비스(공항→호텔) </h2>
	<table class="tbl">
		<tr>
			<td width="490px">

                <ul>
					<b><li style="width:240px; text-align:center;">성인(만 12세 이상)</li>
        			<li style="width:240px; text-align:center;">아동(만 3~11세)</li>
                    </b>
                    </ul>

                <ul style=" margin-top:-5px;">
                    <li style="width:240px; text-align:center;">편도 $13</li>
   					<li style="width:240px; text-align:center;">편도 $7.5</li>

 				</ul>


				※ 만 0~2세 유아 셔틀 픽업 서비스 무료, 2세 이상 1인당 $5 공항세 추가. <br/>


			</td>
			<td>
				<strong>신청 방법</strong> : 체크인 3일 이전까지 이메일 신청<br><br>
				<strong>결제 방법</strong> : 체크아웃 시 객실요금에 포함돼 결제
			</td>
		</tr>
	</table>
   <div align="center" style="margin-top:10px;">
   <a href="http://www.nikkoguam.co.kr/bbs/board.php?bo_table=notice&wr_id=108" target="_blank"><img src="../img/btn_pickup.gif" /> </a>
   </div>


	<p style="padding: 32px 0 6px;"><strong style="color:#0475bb">시내 혹은 쇼핑지로 이용 가능한 교통편</strong> : 택시, T 갤러리아 무료 셔틀버스, 트롤리 버스</p>
	<div id="map_canvas" class="box" style="font-size: 0; line-height: 0;"><iframe src="<?php echo G5_BBS_URL;?>/location_map.php" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></div>
</div>


<?php
include_once(G5_PATH.'/tail.sub.php');
?>
<?php }	// 분기 끝?>
