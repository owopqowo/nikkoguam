<?php
include_once('./_common.php');

$page_name1 = '호텔';
$page_name2 = '호텔 서비스';

$page_link1 = G5_BBS_URL.'/hotel_1.php';
$page_link2 = G5_BBS_URL.'/hotel_2.php';

$board['gr_id'] = 'hotel';

include_once(G5_PATH.'/_head.php');
?>
<?php if (G5_IS_MOBILE) {	// 분기시작 : 모바일?>
<div class="radius serve">
	<!-- sub nav -->
	<div class="sub_nav_wrap">
		<div class="sub_nav">
			<ul>
				<li><a href="<?php echo G5_BBS_URL;?>/hotel_1.php"><span>호텔 소개</span></a></li>
				<li class="on"><a href="<?php echo G5_BBS_URL;?>/hotel_2.php"><span>호텔 서비스</span></a></li>
				<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=structure"><span>호텔 시설정보</span></a></li>
				<li><a href="<?php echo G5_BBS_URL;?>/hotel_4.php"><span>주변 관광 안내</span></a></li>
				<li><a href="<?php echo G5_BBS_URL;?>/location.php"><span>위치</span></a></li>
			</ul>
		</div>
	</div>
	<!-- //sub nav -->

	<!-- intro -->
	<div class="intro">
		<h3 class="tit">Hotel Service</h3>
		<p class="desc wave">호텔 서비스</p>
		<p>
			호텔 닛코 괌은 에메랄드 빛 바다를 조망할 수<br>
			있는 오션프론트 호텔로 괌의 아름다운<br>
			투몬 비치와 건 비치 바다 경관을 모두 즐길 수<br>
			있는 최적의 장소에 위치합니다.
		</p>
		<p>
			객실을 보유하고 있으며, 꾸준한<br>
			리노베이션으로 <strong class="blue">항상 청결함과<br>
			고급스러움을 유지</strong>하고 있어 전 세계인의<br>
			휴양지로 큰 사랑을 받고 있습니다.
		</p>
		<img src="/theme/basic/img/mobile/service.jpg" alt="">
	</div>
	<!-- //intro -->
	<div class="list">
		<ul>
			<li class="checkin">
				<h4>체크인/체크아웃</h4>
				<p>체크인 : 15:00 / 체크아웃 : 12:00</p>
			</li>
			<li class="voltage">
				<h4>이용전압</h4>
				<p>110v</p>
			</li>
			<li class="smoking">
				<h4>흡연</h4>
				<p>객실 및 시설 내 금연, 발코니에서 흡연</p>
			</li>
			<li class="pay">
				<h4>결제</h4>
				<p>현금 또는 신용카드(Visa/Amex/Jcb/Diners/Master/Discover)</p>
			</li>
			<li class="parking">
				<h4>주차장</h4>
				<p>200대 주차 가능, 무료 이용, 발렛파킹($3)</p>
			</li>
			<li class="wash">
				<h4>세탁 서비스</h4>
				<p>유료(공휴일과 일요일은 휴무)</p>
			</li>
			<!-- <li class="transformer">
				<h4>변압기 대여</h4>
				<p>불가능, 호텔 내 소호숍에서 구입 가능</p>
			</li> -->
			<li class="microwave">
				<h4>전자레인지</h4>
				<p>로비층 파운틴 라운지 카페에서 무료</p>
			</li>
			<li class="wheelchair	">
				<h4>유모차(7-24개월용) / 휠체어</h4>
				<p>체크인 후 벨 데스크에서 무료 대여(제한)</p>
			</li>
			<li class="ice">
				<h4>제빙기</h4>
				<p>각층 객실 복도 및 엘리베이터 쪽 설치, 24시간 무료 이용</p>
			</li>
			<!-- <li class="pc">
				<h4>PC</h4>
				<p>24시간 무료 이용 가능한 PC 2대 보유</p>
			</li> -->
			<li class="baggage">
				<h4>수화물 보관</h4>
				<p>벨 데스크에 요청 당일이내 무료로 짐 보관</p>
			</li>
		</ul>
	</div>
</div>
<?php } else {	// 분기 : PC?>
<article class="content_box hotel">
	<header class="page_title">
		<h2>Hotel service</h2>
		<h3>Guam’s Best Beach &amp; View</h3>
	</header>

	<div class="service">
		<h4>호텔서비스</h4>
		<p>호텔 닛코 괌은 에메랄드 빛 바다를 조망할 수 있는 오션프론트 호텔로 괌의 아름다운 투몬 비치와 건 비치 바다 경관을 모두 즐길 수 있는 최적의 <br>
		장소에 위치합니다. 객실을 보유하고 있으며, 꾸준한 리노베이션으로 항상 청결함과 고급스러움을 유지하고 있어 전 세계인의 휴양지로 큰 사랑을 받고 있습니다.</p>

		<ul>
			<li>
				<img src="../img/hotel_service1.png" alt="">
				<dl>
					<dt>체크인/체크아웃</dt>
					<dd>체크인 : 15:00<br>
					체크아웃 : 12:00</dd>
				</dl>
			</li>
			<li>
				<img src="../img/hotel_service2.png" alt="">
				<dl>
					<dt>이용전압</dt>
					<dd>110V</dd>
				</dl>
			</li>
			<li>
				<img src="../img/hotel_service3.png" alt="">
				<dl>
					<dt>흡연</dt>
					<dd>전 객실 및 시설 내 금연, <br>
					발코니에서만 흡연 가능</dd>
				</dl>
			</li>
			<li>
				<img src="../img/hotel_service4.png" alt="">
				<dl>
					<dt>결제</dt>
					<dd>현금($) 또는<br>
					신용카드(VISA/AMEX/<br>
					JCB/DINERS/MASTER/<br>
					DISCOVER)</dd>
				</dl>
			</li>
			<li>
				<img src="../img/hotel_service5.png" alt="">
				<dl>
					<dt>주차장</dt>
					<dd>200대 주차 가능, <br>
					무료 이용, 발렛파킹($3)</dd>
				</dl>
			</li>
			<li>
				<img src="../img/hotel_service6.png" alt="">
				<dl>
					<dt>세탁 서비스</dt>
					<dd>유료<br>
					(공휴일과 일요일은 <br>
					휴무)</dd>
				</dl>
			</li>
			<li>
				<img src="../img/hotel_service7.png" alt="">
				<dl>
					<dt>변압기 대여</dt>
					<dd>불가능, 호텔 내 <br>
					소호숍에서 구입 가능</dd>
				</dl>
			</li>
			<li>
				<img src="../img/hotel_service8.png" alt="">
				<dl>
					<dt>전자레인지</dt>
					<dd>로비층 파운틴 라운지<br>
					카페에서 무료 이용</dd>
				</dl>
			</li>
			<li>
				<img src="../img/hotel_service9.png" alt="">
				<dl>
					<dt>유모차(7-24개월용)<br>/ 휠체어</dt>
					<dd>체크인 후 벨 데스크<br>
					에서 무료 대여<br>
					(수량 제한)</dd>
				</dl>
			</li>
			<li>
				<img src="../img/hotel_service10.png" alt="">
				<dl>
					<dt>제빙기</dt>
					<dd>각층 객실 복도 및 <br>
					엘리베이터 쪽<br>
					설치, 24시간 무료 <br>
					이용</dd>
				</dl>
			</li>
			<li>
				<img src="../img/hotel_service11.png" alt="">
				<dl>
					<dt>PC</dt>
					<dd>로비층에서 24시간 <br>
					무료 이용 <br>
					가능한 PC 2대 보유</dd>
				</dl>
			</li>
			<li>
				<img src="../img/hotel_service12.png" alt="">
				<dl>
					<dt>수화물 보관</dt>
					<dd>체크인/체크아웃 당일<br>
					이내 무료로 짐 보관 <br>
					가능, 벨 데스크에 요청</dd>
				</dl>
			</li>
		</ul>
	</div>
</article>
<?php }	// 분기 끝?>
<?php
include_once('./_tail.php');
?>
