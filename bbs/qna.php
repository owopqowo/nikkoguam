<?php
include_once('./_common.php');
$board['gr_id']      = 'reserv';
$group['gr_subject'] = '예약';
$board['bo_subject'] = '확정예약 문의';
$page_link2 = G5_BBS_URL.'/qna.php';

include_once(G5_BBS_PATH.'/_head.reservation.php'); // 페이지별로 head 파일 생성.
?>
<?php if (G5_IS_MOBILE) {	// 분기시작 : 모바일?>
<div class="radius inquiry">
	<!-- sub nav -->
	<div class="sub_nav_wrap">
		<div class="sub_nav">
			<ul>
				<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=reservationgoods1"><span>스페셜 오퍼</span></a></li>
				<li><a href="<?php echo G5_BBS_URL;?>/faq.php"><span>자주하는 질문</span></a></li>
				<li><a href="<?php echo G5_BBS_URL;?>/contact.php"><span>일반문의</span></a></li>
				<li class="on"><a href="<?php echo G5_BBS_URL;?>/qna.php"><span>확정예약 문의</span></a></li>
				<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=promotion"><span>프로모션</span></a></li>
			</ul>
		</div>
	</div>
	<!-- //sub nav -->
	<h3 class="tit">Inquiry</h3>
	<p class="wave">확정예약 문의 게시판</p>

	<p><strong class="blue">호텔 닛코 괌</strong> 고객님의 문의는<br>다음과 같은 과정으로 처리되고 있습니다.</p>

	<div class="slider_wrap">
		<div class="slider finite">
			<div>
				<img src="/theme/basic/img/mobile/inquiry_01.jpg" alt="">
				<div class="text">
					<p>01. 웹메일 문의게시판 등록</p>
				</div>
			</div>
			<div>
				<img src="/theme/basic/img/mobile/inquiry_02.jpg" alt="">
				<div class="text">
					<p>02. 호텔 닛코 괌 접수</p>
				</div>
			</div>
			<div>
				<img src="/theme/basic/img/mobile/inquiry_03.jpg" alt="">
				<div class="text">
					<p>03. 내용 및 상황 확인</p>
				</div>
			</div>
			<div>
				<img src="/theme/basic/img/mobile/inquiry_04.jpg" alt="">
				<div class="text">
					<p>04. 이메일 발송</p>
				</div>
			</div>
		</div>
		<div class="num"><strong>1</strong> / <span></span></div>
	</div>

	<h4>이용안내</h4>
	<p>고객님의 예약 정보를 정확히 입력해 주시기 바랍니다.</p>

	<div class="box_g">
		<p class="dash">예약 전 문의는 <a href="<?php echo G5_BBS_URL;?>/contact.php" class="black">여기</a> 를 눌러주세요.</p>
		<p class="dash">호텔 회신은 약 2~5일 정도 소요되며 출발 전 급한 문의는 회신되지 않을 수 있습니다.</p>
		<p class="dash">체크인 전 1~3일 내의 급한 문의는 유선 연락해 주시기 바랍니다.  <span class="blue">(+1-671-649-8815)</span></p>
		<p class="dash">예약 문의는 영문으로 작성해 주시기 바랍니다. (한글 문의는 회신되지 않습니다.)</p>
		<p class="dash">문의 전 <a href="<?php echo G5_BBS_URL;?>/faq.php" class="black">자주하는 질문</a> 을 확인해 주시기 바랍니다.</p>
	</div>


	<h4>문의 전 필수 확인사항</h4>
	<ul class="check_list">
		<li>
			<h5 class="blue">예약확인</h5>
			<p>웹사이트를 통한 직접 예약은 예약 페이지를 통해 예약 조회가 가능한 경우 확정 상태입니다. 예약대행 사이트나 여행사 예약은 해당 경로로 예약을 확인해 주시기 바랍니다.</p>
		</li>
		<li>
			<h5 class="blue">차량서비스 신청 및 이용 방법</h5>
			<p>유료로 제공되는 차량서비스는 공항에서 호텔로(Pick up), 호텔 에서 공항으로(Drop off), 호텔과 공항 간 왕복(Round trip)으로 신청 가능하며 예약 시 "옵션"란 에서 신청 가능합니다. 타 경로로 예약했을 경우 해당 경로로 신청해 주시고, 이가 어려울 경우에만 본 게시판을 이용해 주시기 바랍니다.</p>
		</li>
		<li>
			<h5 class="blue">디파짓 가승인 취소</h5>
			<p>현지에서 체크인 시 진행하는 디파짓 가승인은 체크아웃 시 자동으로 취소됩니다. 단, 해외카드 취소 절차에 의해 카드 내역상 취소 확인까지 약 4주 내외가 소요되니 추후 카드 내역을 확인해 주시기 바랍니다.</p>
		</li>
	</ul>

	<div class="btn_wrap">
		<a href="<?php echo G5_BBS_URL;?>/qna_write.php" class="btn btn_blue">문의하기</a>
	</div>
</div>
<?php } else {	// 분기 : PC?>
<article class="content_box reservation inquiry">
	<header class="page_title">
		<h2>INQUIRY</h2>
		<h3>Guam’s Best Beach &amp; View</h3>
	</header>

	<dl class="title">
		<dt>확정예약 문의게시판</dt>
		<dd>호텔 닛코 괌 고객님의 문의는 다음과 같은 과정으로 처리되고 있습니다.</dd>
	</dl>

	<ul class="list">
		<li>
			<img src="../img/reservation_inquiry1.jpg" alt="">
			<p>웹메일 문의게시판 등록</p>
		</li>
		<li>
			<img src="../img/reservation_inquiry2.jpg" alt="">
			<p>호텔 닛코 괌 접수</p>
		</li>
		<li>
			<img src="../img/reservation_inquiry3.jpg" alt="">
			<p>내용 및 상황 확인</p>
		</li>
		<li>
			<img src="../img/reservation_inquiry4.jpg" alt="">
			<p>이메일 발송</p>
		</li>
	</ul>

	<div class="guide">
		<h4>이용안내 <span>고객님의 예약 정보를 정확히 입력해 주시기 바랍니다.</span></h4>
		<ul>
			<li>예약 전 문의는  <a href="<?php echo G5_BBS_URL;?>/contact.php">여기</a>  를 눌러주세요.</li>
			<li>호텔 회신은 약 2~5일 정도 소요되며 출발 전 급한 문의는 회신되지 않을 수 있습니다.</li>
			<li>체크인 전 1~3일 내의 급한 문의는 유선 연락해 주시기 바랍니다. <br><span>(+1.671.649.8815)</span></li>
			<li>예약 문의는 <strong>영문</strong>으로 작성해 주시기 바랍니다.(한글 문의는 회신되지 않습니다.)</li>
			<li>문의 전   <a href="<?php echo G5_BBS_URL;?>/faq.php">자주하는 질문</a>  을 확인해 주시기 바랍니다.</li>
		</ul>
	</div>

	<div class="necessary">
		<h4>문의 전 필수 확인사항</h4>
		<ul>
			<li>
				<dl>
					<dt>예약확인</dt>
					<dd>웹사이트를 통한 직접 예약은 예약 페이지를 통해 예약 조회가  가능한 경우 확정 상태입니다.  <br>
					예약대행 사이트나 여행사 예약은  해당 경로로 예약을 확인해  주시기  바랍니다.</dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt>차량서비스 신청 및 이용 방법</dt>
					<dd>유료로 제공되는 차량서비스는 공항에서 호텔로(Pick up), 호텔 에서 공항으로(Drop off), 호텔과 공항 간 왕복(Round trip)으로 신청 가능하며 예약 시 "옵션"란<br>
					에서 신청 가능합니다. 타 경로로 예약했을 경우 해당 경로로 신청해 주시고, 이가 어려울 경우에만 본 게시판을 이용해 주시기 바랍니다.</dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt>디파짓 가승인 취소</dt>
					<dd>현지에서 체크인 시 진행하는 디파짓 가승인은 체크아웃 시 자동으로 취소됩니다. <br>
					단, 해외카드 취소 절차에 의해 카드 내역상 취소 확인까지 약 4주 내외가 소요되니 추후 카드 내역을 확인해 주시기 바랍니다.</dd>
				</dl>
			</li>
		</ul>
	</div>

	<div class="btns center">
		<a href="<?php echo G5_BBS_URL;?>/qna_write.php"><img src="../img/btn_contact_us_190x43.gif" alt="문의하기"></a>
	</div>
</article>
<?php }	// 분기 끝?>
<?php
include_once(G5_BBS_PATH.'/_tail.php');
?>
