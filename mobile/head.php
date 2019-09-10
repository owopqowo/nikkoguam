<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
$_bo_table = isset($bo_table)? $bo_table:'';
$_wr_id = isset($wr_id)? $wr_id:'';
?>

<header id="header">
	<h1 id="hd_h1"><?php echo $g5['title'] ?></h1>

	<div class="to_content"><a href="#container">본문 바로가기</a></div>

	<?php
		if(defined('_INDEX_')) { // index에서만 실행
			include G5_MOBILE_PATH.'/newwin.inc.php'; // 팝업레이어
	} ?>

	<div id="hd_wrapper">
		<div id="logo">
			<a href="<?php echo G5_URL ?>"><img src="/theme/basic/img/mobile/logo.png" alt="<?php echo $config['cf_title']; ?>"></a>
		</div>

		<a href="https://asp.hotel-story.ne.jp/ver3m/planlist.asp?hcod1=50142&hcod2=001&mode=seek&chkymd=1&chkpsn=1&dispunit=room&clrmode=seek" class="btn_reserve" target="_blank">예약</a>

		<a href="javascript:;" class="btn_menu"><span>메뉴 버튼</span></a>

		<div class="gnb_wrap">
			<ul class="gnb">
				<li>
					<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=reservationgoods1"><span>Reservation</span></a>
					<ul>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'reservationgoods1')? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=reservationgoods1">스페셜 오퍼</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/faq.php')? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/faq.php">자주하는 질문</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/contact.php')? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/contact.php">일반문의</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/qna.php')? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/qna.php">확정예약 문의</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'promotion')? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=promotion">프로모션</a></li>
					</ul>
				</li>
				<li>
					<a href="<?php echo G5_BBS_URL;?>/hotel_1.php"><span>Hotel</span></a>
					<ul>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/hotel_1.php')? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/hotel_1.php">호텔 소개</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/hotel_2.php')? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/hotel_2.php">호텔 서비스</a></li>
						<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=structure">호텔 시설정보</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/hotel_4.php')? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/hotel_4.php">주변 관광 안내</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/location.php')? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/location.php">위치</a></li>
					</ul>
				</li>
				<li>
					<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=accommodation"><span>Accommodation</span></a>
					<ul>
						<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=accommodation">객실 소개</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'accommodation' && $_wr_id == 6)? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=accommodation&wr_id=6">오션프론트</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'accommodation' && $_wr_id == 9)? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=accommodation&wr_id=9">오션프론트 트리플</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'accommodation' && $_wr_id == 10)? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=accommodation&wr_id=10">오션프론트 디럭스</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'accommodation' && $_wr_id == 5)? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=accommodation&wr_id=5">오션프론트 프리미어</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'accommodation' && $_wr_id == 4)? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=accommodation&wr_id=4">오션프론트 스위트</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'accommodation' && $_wr_id == 3)? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=accommodation&wr_id=3">오션프론트 프리미어 스위트</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'accommodation' && $_wr_id == 2)? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=accommodation&wr_id=2">오션프론트 프리미어 이그제큐티브 스위트</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'accommodation' && $_wr_id == 1)? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=accommodation&wr_id=1">프레지덴셜 스위트</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'accommodation' && $_wr_id == 7)? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=accommodation&wr_id=7">프리미어 라운지</a></li>
					</ul>
				</li>
				<li>
					<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=restaurant"><span>Restaurant</span></a>
					<ul>
						<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=restaurant">레스토랑 소개</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'restaurant' && $_wr_id == 10)? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=restaurant&wr_id=10">마젤란</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'restaurant' && $_wr_id == 9)? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=restaurant&wr_id=9">벤케이</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'restaurant' && $_wr_id == 8)? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=restaurant&wr_id=8">토리</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'restaurant' && $_wr_id == 7)? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=restaurant&wr_id=7">선셋 비치 바비큐</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'restaurant' && $_wr_id == 11)? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=restaurant&wr_id=11">닛코 매직 &amp; 일루션 쇼</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'restaurant' && $_wr_id == 5)? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=restaurant&wr_id=5">부겐빌리아</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'restaurant' && $_wr_id == 4)? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=restaurant&wr_id=4">파운틴</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'restaurant' && $_wr_id == 3)? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=restaurant&wr_id=3">프리미엄 서비스</a></li>
					</ul>
				</li>
				<li>
					<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=refresh"><span>Refresh</span></a>
					<ul>
						<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=refresh">풀&#38;스파 소개</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'refresh' && $_wr_id == 5)? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=refresh&wr_id=5">풀</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'refresh' && $_wr_id == 4)? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=refresh&wr_id=4">비치</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'refresh' && $_wr_id == 3)? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=refresh&wr_id=3">스파 아유아람</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'refresh' && $_wr_id == 2)? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=refresh&wr_id=2">휴식</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'refresh' && $_wr_id == 1)? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=refresh&wr_id=1">액티비티</a></li>
					</ul>
				</li>
				<li>
					<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=facility"><span>Facility</span></a>
					<ul>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'facility' && !$_wr_id)? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=facility">부대시설 소개</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'facility' && $_wr_id == 5)? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=facility&wr_id=5">연회장</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'facility' && $_wr_id == 4)? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=facility&wr_id=4">어린이 시설</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'facility' && $_wr_id == 3)? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=facility&wr_id=3">기프트숍</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'facility' && $_wr_id == 2)? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=facility&wr_id=2">크리스탈 채플</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'facility' && $_wr_id == 1)? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=facility&wr_id=1">기타 시설</a></li>
					</ul>
				</li>
				<li>
					<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=notice"><span>Notice</span></a>
					<ul>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'notice')? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=notice">공지사항</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'event')? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=event">이벤트</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'gallery')? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=gallery">갤러리</a></li>
						<li<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'vod')? ' class="on"':''; ?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=vod">동영상</a></li>
					</ul>
				</li>
			</ul>
			<ul class="reserve">
				<li><a href="https://asp.hotel-story.ne.jp/ver3m/planlist.asp?hcod1=50142&hcod2=001&mode=seek&chkymd=1&chkpsn=1&dispunit=room&clrmode=seek" target="_blank">Reservation</a></li>
				<li><a href="https://asp.hotel-story.ne.jp/ver3m/ASPY0300.asp?cod1=50142&cod2=" target="_blank">Reservation Confirm</a></li>
			</ul>
			<ul class="sns">
				<li><a href="http://blog.naver.com/phrkorea" target="_blank"><img src="/theme/basic/img/mobile/icon_blog.png" alt="blog"></a></li>
				<li><a href="https://www.facebook.com/hotelnikkoguam/?ref=page_internal" target="_blank"><img src="/theme/basic/img/mobile/icon_fb.png" alt="facebook"></a></li>
				<li><a href="https://www.instagram.com/hotelnikkoguam/?hl=ko" target="_blank"><img src="/theme/basic/img/mobile/icon_insta.png" alt="instagram"></a></li>
			</ul>
		</div>
	</div>
</header>
<div class="dim">
</div>
<hr>

<div id="wrapper">
	<?php if ((!$bo_table || $w == 's' ) && !defined("_INDEX_")) { ?><?php } ?>
	<?php
	if (!defined('_INDEX_')) { // 메인화면에만 적용

	if ($board['gr_id'] == 'reserv') {
		//$sub = ($_SERVER['SCRIPT_NAME'] === '/bbs/faq.php')? 'faq':'reservation';
		$sub = 'reservation';
	}
	elseif ($board['gr_id'] == 'hotel') {
		$sub = 'hotel';
	}
	elseif ($board['gr_id'] == 'room') {
		$sub = 'accommodation';
	}
	elseif ($board['gr_id'] == 'restaurant') {
		$sub = 'restaurant';
	}
	elseif ($board['gr_id'] == 'refresh') {
		$sub = 'refresh';
	}
	elseif ($board['gr_id'] == 'facility') {
		$sub = 'facility';
	}
	elseif ($board['gr_id'] == 'board') {
		$sub = 'notice';
	}
	?>
	<div id="container" class="sub <?php echo $sub?>">
		<div class="title_bar">
			<h2>Hotel<br>Nikko Guam</h2>
			<select class="">
				<option value="<?php echo G5_BBS_URL;?>/board.php?bo_table=reservationgoods1"<?php echo (in_array($_SERVER['SCRIPT_NAME'], array('/bbs/faq.php', '/bbs/contact.php', '/bbs/qna.php', '/bbs/qna_write.php')) || ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && in_array($_bo_table, array('reservationgoods1', 'promotion'))))? ' selected':'';?>>예약</option>
				<option value="<?php echo G5_BBS_URL;?>/hotel_1.php"<?php echo (in_array($_SERVER['SCRIPT_NAME'], array('/bbs/hotel_1.php', '/bbs/hotel_2.php', '/bbs/hotel_4.php', '/bbs/location.php')) || ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && in_array($_bo_table, array('structure'))))? ' selected':'';?>>호텔</option>
				<option value="<?php echo G5_BBS_URL;?>/board.php?bo_table=accommodation"<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'accommodation')? ' selected':'';?>>객실</option>
				<option value="<?php echo G5_BBS_URL;?>/board.php?bo_table=restaurant"<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'restaurant')? ' selected':'';?>>레스토랑</option>
				<option value="<?php echo G5_BBS_URL;?>/board.php?bo_table=refresh"<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'refresh')? ' selected':'';?>>풀&#38;스파</option>
				<option value="<?php echo G5_BBS_URL;?>/board.php?bo_table=facility"<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && $_bo_table === 'facility')? ' selected':'';?>>부대시설</option>
				<option value="<?php echo G5_BBS_URL;?>/board.php?bo_table=notice"<?php echo ($_SERVER['SCRIPT_NAME'] === '/bbs/board.php' && in_array($_bo_table, array('notice', 'event', 'gallery', 'vod')))? ' selected':'';?>>공지사항</option>
			</select>
		</div>
	<?php }
unset($_bo_table, $_wr_id);
?>
