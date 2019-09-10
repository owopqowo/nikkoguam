<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/jquery.fancylist.js"></script>

<!-- <h2 id="container_title"><?php echo ($board['bo_mobile_subject'] ? $board['bo_mobile_subject'] : $board['bo_subject']) ?><span class="sound_only"> 목록</span></h2> -->

<!-- 게시판 목록 시작 -->
<div class="radius">
<!-- sub nav -->
<div class="sub_nav_wrap">
	<div class="sub_nav">
		<ul>
			<li class="on"><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=accommodation"><span>객실 소개</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=accommodation&wr_id=6"><span>오션프론트</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=accommodation&wr_id=9"><span>오션프론트 트리플</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=accommodation&wr_id=10"><span>오션프론트 디럭스</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=accommodation&wr_id=5"><span>오션프론트 프리미어</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=accommodation&wr_id=4"><span>오션프론트 스위트</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=accommodation&wr_id=3"><span>오션프론트 프리미어 스위트</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=accommodation&wr_id=2"><span>오션프론트 프리미어 이그제큐티브 스위트</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=accommodation&wr_id=1"><span>프레지덴셜 스위트</span></a></li>
			<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=accommodation&wr_id=7"><span>프리미어 라운지</span></a></li>
		</ul>
	</div>
</div>
<!-- //sub nav -->
<h3 class="tit">Accommodation</h3>
<p class="wave">객실</p>
<p>
전 객실 2014, 2016년 두 차례에 거쳐<br>
리노베이션을 마쳐 쾌적한 컨디션과 함께<br>
눈부신 전망과 모던한 아일랜드풍 인테리어가<br>
<strong class="blue">투숙객에게 편안함</strong>을 선사 하고 있습니다.
</p>

<div class="box_info">
	<ul>
		<li>기본 48㎡의 넓은 객실</li>
		<li>모든 객실 최대 성인 3인, 아동 2인까지 투숙 가능<br>(엑스트라 베드 추가 시)</li>
	</ul>
</div>
<?php
$slide1 = $slide2 = '';
for ($i=0; $i<count($list); $i++) {

	$img_src = get_thumbnail_size($board['bo_mobile_gallery_width'], $board['bo_mobile_gallery_height'], array_merge(array('bo_table'=>$bo_table, 'file_add_where'=>'bf_width>='.$board['bo_mobile_gallery_width'].' AND bf_height>='.$board['bo_mobile_gallery_height']), $list[$i]), true);

	$slide1 .= sprintf('		<div><img src="%s" alt=""></div>'.PHP_EOL, $img_src);
	$slide2 .= sprintf('
		<div>
			<h4 class="wave"><strong class="blue">%s</strong>%s</h4>
			<p>%s</p>
			<div class="btn_wrap">
				%s
				<a href="%s" class="btn btn_border">자세히보기</a>
			</div>
		</div>',
		$list[$i]['wr_2'],
		$list[$i]['wr_subject'],
		$list[$i]['wr_1'],
		($list[$i]['wr_3'] ? '<a href="'.$list[$i]['wr_3'].'" class="btn btn_blue">예약하기</a>':''),
		$list[$i]['href']
	);
}
?>
<!-- board slider -->
<div class="slider_wrap">
	<div class="slider board_img">
<?php echo $slide1;?>
	</div>
	<div class="slider board_text">
<?php echo $slide2;?>
	</div>
	<div class="num">
		<strong>01</strong> / <span></span>
	</div>
</div>
<!-- //board slider -->

<!-- priority service -->
<div class="layering">
	<div class="img_wrap">
		<img src="/theme/basic/img/mobile/about_img_01.jpg" alt="">
		<div class="text_box">
			<h3>Priority Service</h3>
			<p>오션프론트 프리미어,<br>스위트 객실 투숙객 혜택</p>
		</div>
	</div>
</div>
<!-- //priority service -->

<!-- accordion -->
<ul class="accordion">
	<li>
		<a href="#">프리미어 라운지 무료 이용</a>
		<div>
			<strong class="blue">로비층, 7:00-21:00</strong>
			<ul>
				<li>
					<strong>조식(7:00-10:00)</strong><p>컨티넨탈 조식 비스, 조식 쿠폰 제시 필수</p>
				</li>
				<li>
					<strong>티 타임(10:00-17:00)</strong>
					<p>스낵, 탄산 음료, 커피, 차 등을 제공<span>* 단, 14:30-15:30에는 사이폰(Siphon) 커피와 딤섬 혹은 화과자 등을 제공</span></p>
				</li>
				<li>
					<strong>칵테일 타임(17:00-19:00)</strong>
					<p>식전주, 맥주, 위스키, 와인, 스파클링 와인, 소주 등, 칵테일 뷔페(핑거푸드와 디저트 제공)</p>
				</li>
				<li>
					<strong>에프터 디너 타임(19:00-21:00)</strong>
					<p>스낵, 탄산 음료, 커피, 차 등을 제공</p>
				</li>
				<li>
					<strong>그 외 서비스</strong>
					<p>그 외 서비스: 컴퓨터, 무료 무선 인터넷, 마사지 의자, 장난감, 책, 신문 등 구비<span>※ 라운지 제공 사항 및 메뉴는 현지사정에 따라 공지 없이 변경 가능합니다.</span></p>
				</li>
			</ul>
		</div>
	</li>
	<li>
		<a href="#">우선 체크인/체크아웃 서비스</a>
		<div>
			<p>프런트에 별도로 마련된 레드카펫 데스크에서 보다 빠른 체크인/아웃 서비스를 제공</p>
		</div>
	</li>
	<li>
		<a href="#">전담 컨시어지 서비스</a>
		<div>
			<p>라운지 내 컨시어지 전담 직원이 옵션 투어 안내, 호텔 정보, 괌 정보 안내 등 다양한 서비스를 제공</p>
		</div>
	</li>
	<li>
		<a href="#">웰컴 드링크 서비스</a>
		<div>
			<p>체크인 시 맥주 2캔과 탄산 음료 2캔을 객실 내 냉장고에 비치하여 시원하게 즐기실 수 있도록 준비(1회 제공)</p>
		</div>
	</li>
	<li>
		<a href="#">레스토랑 우선 좌석 배정 서비스</a>
		<div>
			<p>프런트에 별도로 마련된 레드카펫 데스크에서 보다 빠른 체크인/아웃 서비스를 제공</p>
		</div>
	</li>
	<li>
		<a href="#">전용 주차장</a>
		<div>
			<ul>
				<li><p>토리, 벤케이, 마젤란의 창가자리, 선셋 비치 BBQ의 앞자리 등을 우선으로 배정</p></li>
				<li><p>예약은 이용 원하시는 날 1일 전(17:00까지)에 이루어져야 하며 선착순으로 배정</p></li>
				<li>
					<ul>
						<li><p>- 토리/벤케이/선셋 비치 BBQ: 3블럭(블럭별 1~2테이블, 8명까지)</p></li>
						<li><p>- 마젤란: 3블럭(블럭별 1테이블, 6명까지)</p></li>
					</ul>
				</li>
			</ul>
		</div>
	</li>
	<li>
		<a href="#">록시땅 욕실비품</a>
		<div>
			<p>록시땅 인기라인 ‘버베나(Verbena)’ 시리즈가 객실 내 비치, 은은한 시트러스 향이 상쾌한 기분을 선사</p>
		</div>
	</li>
</ul>
<!-- //accordion -->

<script>
$(window).on("load", function() {
    $("#gall_ul").fancyList(".gall_li", "gall_clear");
});
</script>

<!-- 페이지 -->
</div>
<!-- 게시판 목록 끝 -->
