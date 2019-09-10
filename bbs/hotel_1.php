<?php
include_once('./_common.php');

$page_name1 = '호텔';
$page_name2 = '호텔 소개';

$page_link1 = G5_BBS_URL.'/hotel_1.php';
$page_link2 = G5_BBS_URL.'/hotel_1.php';

$board['gr_id'] = 'hotel';

include_once(G5_PATH.'/_head.php');
?>
<?php if (G5_IS_MOBILE) {	// 분기시작 : 모바일?>
<div class="radius about">
	<!-- sub nav -->
	<div class="sub_nav_wrap">
		<div class="sub_nav">
			<ul>
				<li class="on"><a href="<?php echo G5_BBS_URL;?>/hotel_1.php"><span>호텔 소개</span></a></li>
				<li><a href="<?php echo G5_BBS_URL;?>/hotel_2.php"><span>호텔 서비스</span></a></li>
				<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=structure"><span>호텔 시설정보</span></a></li>
				<li><a href="<?php echo G5_BBS_URL;?>/hotel_4.php"><span>주변 관광 안내</span></a></li>
				<li><a href="<?php echo G5_BBS_URL;?>/location.php"><span>위치</span></a></li>
			</ul>
		</div>
	</div>
	<!-- //sub nav -->

	<!-- intro -->
	<div class="intro">
		<h3 class="tit">Hotel Introduction</h3>
		<p class="desc wave">호텔 소개</p>
		<p>
			에메랄드 빛 바다를 조망할 수 있는<br>
			오션프론트 호텔로 괌의 아름다운 투몬비치와<br>
			바치 바다 경관을 모두를 즐길 수 있는<br>
			최적의 장소에 위치 합니다.
		</p>
		<p>
			넓고 쾌적한 <strong class="blue">460개 객실을 보유</strong>하고 있으며,<br>
			꾸준한 리노베이션으로 항상 청결함과<br>
			고급스러움을 유지하고 있어 전 세계인의<br>
			휴양지로 큰 사랑을 받고 있습니다.
		</p>
	</div>
	<!-- //intro -->

	<!-- slider 01 -->
	<div class="slider_01">
		<div class="slider center">
			<div><img src="/theme/basic/img/mobile/about_n_slide_01.jpg" alt="호텔 닛코 괌"></div>
			<div><img src="/theme/basic/img/mobile/about_n_slide_02.jpg" alt="호텔 닛코 괌"></div>
			<div><img src="/theme/basic/img/mobile/about_n_slide_03.jpg" alt="호텔 닛코 괌"></div>
			<div><img src="/theme/basic/img/mobile/about_n_slide_04.jpg" alt="호텔 닛코 괌"></div>
		</div>
		<p>
			레스토랑은 폴리네시안 민속춤과 불쇼를<br>
			즐길 수 있는 ‘닛코 선셋 비치 바비큐’와<br>
			짜릿한 마술을 감상할 수 있는 ‘닛코 매직 &<br>
			일루션 쇼’를 포함 7개의 레스토랑과<br>
			바를 갖추고 있습니다.
		</p>
		<p>
			매 식사가 새롭고 다채롭게 구성되어 있어<br>
			<strong class="blue">선택의 즐거움과 맛의 즐거움</strong>을 동시에<br>
			제공합니다.
		</p>
		<p>
			스릴 넘치고 짜릿한 경험을 원한다면<br>
			괌에서 <strong class="blue">가장 긴 72M 워터 슬라이드</strong>를 추천합니다.<br>
			이 외에도 투명한 괌 바다를 만끽할 수 있는<br>
			비치에서의 스노클링, 카약 등<br>
			무동력 해양 스포츠가 마련되어 있어<br>
			다채로운 여행을 완성해 줍니다.
		</p>
	</div>
	<!-- //slider 01 -->

	<!-- all about -->
	<div class="layering">
		<div class="img_wrap">
			<img src="/theme/basic/img/mobile/about_img_01.jpg" alt="">
			<div class="text_box">
				<h3>All about<br>Hotel Nikko Guam</h3>
				<p>호텔 닛코 괌만의 매력</p>
			</div>
		</div>
	</div>
	<!-- //all about -->

	<!-- slider 02 -->
	<div class="slider_02">
		<div class="slider_wrap">
			<div class="slider caption">
				<div>
					<img src="/theme/basic/img/mobile/about_c_slide_01.jpg" alt="">
					<div class="caption">
						<h3>레스토랑</h3>
						<p>다양한 레스토랑과 바 보유</p>
					</div>
				</div>
				<div>
					<img src="/theme/basic/img/mobile/about_c_slide_02.jpg" alt="">
					<div class="caption">
						<h3>오션프론트 룸</h3>
						<p>전 객실 오션프론트 전망</p>
					</div>
				</div>
				<div>
					<img src="/theme/basic/img/mobile/about_c_slide_03.jpg" alt="">
					<div class="caption">
						<h3>쇼핑몰 및 레스토랑</h3>
						<p>괌 시내 및 주요 쇼핑몰, 레스토랑까지 도보로 약 10분 거리</p>
					</div>
				</div>
				<div>
					<img src="/theme/basic/img/mobile/about_c_slide_04.jpg" alt="">
					<div class="caption">
						<h3>워터 슬라이드</h3>
						<p>괌에서 가장 길고 스릴 넘치는 72M 워터 슬라이드 보유</p>
					</div>
				</div>
				<div>
					<img src="/theme/basic/img/mobile/about_c_slide_05.jpg" alt="">
					<div class="caption">
						<h3>객실</h3>
						<p>기본 48㎡의 넓은 객실</p>
					</div>
				</div>
				<div>
					<img src="/theme/basic/img/mobile/about_c_slide_06.jpg" alt="">
					<div class="caption">
						<h3>건 비치</h3>
						<p>호텔 바로 앞에 펼쳐지는 건 비치에서 한적한 휴식 가능</p>
					</div>
				</div>
			</div>
			<div class="num">
				<strong>01</strong> / <span></span>
			</div>
		</div>
	</div>
	<!-- //slider 02 -->
</div>
<?php } else {	// 분기 : PC?>
<article class="content_box hotel">
	<header class="page_title">
		<h2>HOTEL INTRODUCTION</h2>
		<h3>Guam’s Best Beach &amp; View</h3>
	</header>

	<div class="content_top">
		<dl>
			<dt>Hotel <span>Nikko</span> guam
			<img src="../img/hotel_top_title.gif" alt="호텔 소개"></dt>
			<dd>호텔 닛코 괌은 에메랄드 빛 바다를 조망할 수 있는
			오션프론트 호텔로 괌의 아름다운 투몬 비치와 건
			비치 바다 경관을 모두 즐길 수 있는 최적의 장소에
			위치합니다. <br>
			넓고 쾌적한 460개 객실을 보유하고 있으며, 꾸준한 리노베이션으로 항상
			청결함과 고급스러움을 유지하고 있어 전 세계인의
			휴양지로 큰 사랑을 받고 있습니다.</dd>
		</dl>

		<div class="img">
			<ul>
				<li><img src="../img/hotel_top_img1.jpg" alt=""></li>
				<li><img src="../img/hotel_top_img2.jpg" alt=""></li>
				<li><img src="../img/hotel_top_img3.jpg" alt=""></li>
				<li><img src="../img/hotel_top_img4.jpg" alt=""></li>
			</ul>
		</div>

		<div class="txt_type1">
			<p>레스토랑은 폴리네시안 민속춤과 불쇼를 즐길 수 있는 ‘닛코 선셋 비치 바비큐’와 짜릿한 마술을 감상할 수 있는 ‘닛코 매직 &amp; 일루션 쇼’를 포함 7개의 레스토랑과 바를 갖추고 있습니다. 매 식사가 새롭고 다채롭게 구성되어 있어 선택의 즐거움과 맛의 즐거움을 동시에 제공합니다.</p>

			<p>스릴 넘치고 짜릿한 경험을 원한다면 괌에서 가장 긴 72M 워터 슬라이드를 추천합니다. 이 외에도 투명한 괌 바다를 만끽할 수 있는 비치에서의 스노클링, 카약 등 무동력 해양 스포츠가 마련되어 있어 다채로운 여행을 완성해 줍니다.</p>
		</div>
	</div>

	<div class="hotel_box">
		<h4>호텔 닛코 괌만의 매력</h4>
		<h5>All about <br>Hotel Nikko Guam</h5>
	</div>

	<div class="content_list">
		<ul>
			<li>
				<div class="box1">
					<div class="thumb"><img src="../img/hotel_01_img1.jpg" alt=""></div>
					<p>다양한 레스토랑과 바 보유</p>
				</div>
			</li>
			<li>
				<div class="box1">
					<div class="thumb"><img src="../img/hotel_01_img2.jpg" alt=""></div>
					<p>전 객실 오션프론트 전망</p>
				</div>
			</li>
			<li>
				<div class="box1">
					<div class="thumb"><img src="../img/hotel_01_img3.jpg" alt=""></div>
					<p>괌 시내 및 주요 쇼핑몰, 레스토랑까지 <br>도보로 약 10분 거리 </p>
				</div>
			</li>
			<li>
				<div class="box1">
					<div class="thumb"><img src="../img/hotel_01_img4.jpg" alt=""></div>
					<p>괌에서 가장 길고 스릴 넘치는 72M 워터 슬라이드 보유</p>
				</div>
			</li>
			<li>
				<div class="box1">
					<div class="thumb"><img src="../img/hotel_01_img5.jpg" alt=""></div>
					<p>기본 48㎡의 넓은 객실</p>
				</div>
			</li>
			<li>
				<div class="box1">
					<div class="thumb"><img src="../img/hotel_01_img6.jpg" alt=""></div>
					<p>호텔 바로 앞에 펼쳐지는 건 비치에서 한적한 휴식 가능</p>
				</div>
			</li>
		</ul>
	</div>


</article>
<?php }	// 분기 끝?>
<?php
include_once('./_tail.php');
?>
