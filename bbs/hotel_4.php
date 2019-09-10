<?php
include_once('./_common.php');

$page_name1 = '호텔';
$page_name2 = '주변 관광 안내';

$page_link1 = G5_BBS_URL.'/hotel_1.php';
$page_link2 = G5_BBS_URL.'/hotel_4.php';

$board['gr_id'] = 'hotel';

include_once(G5_PATH.'/_head.php');
?>

<link href="http://code.google.com/apis/maps/documentation/javascript/examples/default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCloh0RqPpd9cHjjzsQ81Q3rcUi-zLrcm8&sensor=false"></script>
<?php if (G5_IS_MOBILE) {	// 분기시작 : 모바일?>
<script>
var geocoder = new google.maps.Geocoder();
var map;
var infoWindow; // infoWindow Object를 담을 변수
var mapZoom = 13;
jQuery(document).ready(function () {
	initialize();
});
function initialize(mapLat, mapLng){

	if (!mapLat && !mapLng) {
		latlng = new google.maps.LatLng(13.522525,144.8034998);// 좌표값
	}
	else {
		latlng = new google.maps.LatLng(mapLat, mapLng);// 좌표값
	}

	var myOptions = {
        zoom: mapZoom,
        center:latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
	};

	map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);


    /*
    var transitLayer = new google.maps.TransitLayer();
        transitLayer.setMap(map);
    */

	// 테이블정보, 지역
    var markers = new Array;
        markers = [

        {
            icon : '/img/map/red-dot.png',
            subject : '괌 프리미어 아울렛(GPO)',
            info : '괌 프리미어 아울렛(GPO)<br />차량 13분',
            lat : 13.489716,
            lng : 144.781919
        },
        {
            icon : '/img/map/red-dot.png',
            subject : 'T갤러리아 by DFS',
            info : 'T갤러리아 by DFS<br />차량 5분',
            lat : 13.514211,
            lng : 144.806241
        },
        {
            icon : '/img/map/red-dot.png',
            subject : '마이크로네시아 몰',
            info : '마이크로네시아 몰<br />차량 7분',
            lat : 13.520685,
            lng : 144.816432
        },
        {
            icon : '/img/map/red-dot.png',
            subject : '이파오 비치 공원/투몬비치',
            info : '이파오 비치 공원/투몬비치<br />차량 12분',
            lat : 13.503068,
            lng : 144.790300
        },
        {
            icon : '/img/map/red-dot.png',
            subject : '스페인광장',
            info : '스페인광장<br />차량 19분',
            lat : 13.473869,
            lng : 144.751679
        },
        {
            icon : '/img/map/red-dot.png',
            subject : '사랑의 절벽',
            info : '사랑의 절벽<br />차량 11분',
            lat : 13.534971,
            lng : 144.802495
        },
        {
            icon : '/img/map/red-dot.png',
            subject : 'K마트',
            info : 'K마트<br />차량 9분',
            lat : 13.500061,
            lng : 144.800027
        },
        {
            icon : '/theme/basic/img/mobile/maker.png',
            subject : 'Hotel Nikko GUAM',
            info : 'Hotel Nikko GUAM',
            lat : 13.522525,
            lng : 144.8034998
        },


    ];
    for (index in markers) {
        addMarker(markers[index]);
    }

	function addMarker(data) {
		var marker = new google.maps.Marker({
            position: new google.maps.LatLng(data.lat, data.lng),
            //label: data.subject,
            map: map,
            icon: data.icon,
            title: data.subject,
            draggable:false,
            animation: google.maps.Animation.DROP // Bounce
		});

		var contentString = data.info;

		var infowindow = new google.maps.InfoWindow({ content: contentString});

		google.maps.event.addListener(marker, "click", function() {
    		infowindow.open(map,marker);
		});
        //infowindow.open(map,marker); // info window by default.
	}
}
</script>
<div class="radius map">
	<!-- sub nav -->
	<div class="sub_nav_wrap">
		<div class="sub_nav">
			<ul>
				<li><a href="<?php echo G5_BBS_URL;?>/hotel_1.php"><span>호텔 소개</span></a></li>
				<li><a href="<?php echo G5_BBS_URL;?>/hotel_2.php"><span>호텔 서비스</span></a></li>
				<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=structure"><span>호텔 시설정보</span></a></li>
				<li class="on"><a href="<?php echo G5_BBS_URL;?>/hotel_4.php"><span>주변 관광 안내</span></a></li>
				<li><a href="<?php echo G5_BBS_URL;?>/location.php"><span>위치</span></a></li>
			</ul>
		</div>
	</div>
	<!-- //sub nav -->

	<h3 class="tit">Tour Information</h3>
	<p class="desc wave">주변관광안내</p>
	<div id="map_canvas" style="height: 360px; margin:0 -20px"></div>
</div>
<?php } else {	// 분기 : PC?>
<script>
var geocoder = new google.maps.Geocoder();
var map;
var infoWindow; // infoWindow Object를 담을 변수
var mapZoom = 13;
jQuery(document).ready(function () {
	initialize();
});
function initialize(mapLat, mapLng){

	if (!mapLat && !mapLng) {
		latlng = new google.maps.LatLng(13.522525,144.8034998);// 좌표값
	}
	else {
		latlng = new google.maps.LatLng(mapLat, mapLng);// 좌표값
	}

	var myOptions = {
        zoom: mapZoom,
        center:latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
	};

	map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);


    /*
    var transitLayer = new google.maps.TransitLayer();
        transitLayer.setMap(map);
    */

	// 테이블정보, 지역
    var markers = new Array;
        markers = [

        {
            icon : '/img/map/red-dot.png',
            subject : '괌 프리미어 아울렛(GPO)',
            info : '괌 프리미어 아울렛(GPO)<br />차량 13분',
            lat : 13.489716,
            lng : 144.781919
        },
        {
            icon : '/img/map/red-dot.png',
            subject : 'T갤러리아 by DFS',
            info : 'T갤러리아 by DFS<br />차량 5분',
            lat : 13.514211,
            lng : 144.806241
        },
        {
            icon : '/img/map/red-dot.png',
            subject : '마이크로네시아 몰',
            info : '마이크로네시아 몰<br />차량 7분',
            lat : 13.520685,
            lng : 144.816432
        },
        {
            icon : '/img/map/red-dot.png',
            subject : '이파오 비치 공원/투몬비치',
            info : '이파오 비치 공원/투몬비치<br />차량 12분',
            lat : 13.503068,
            lng : 144.790300
        },
        {
            icon : '/img/map/red-dot.png',
            subject : '스페인광장',
            info : '스페인광장<br />차량 19분',
            lat : 13.473869,
            lng : 144.751679
        },
        {
            icon : '/img/map/red-dot.png',
            subject : '사랑의 절벽',
            info : '사랑의 절벽<br />차량 11분',
            lat : 13.534971,
            lng : 144.802495
        },
        {
            icon : '/img/map/red-dot.png',
            subject : 'K마트',
            info : 'K마트<br />차량 9분',
            lat : 13.500061,
            lng : 144.800027
        },
        {
            //icon : {url : '/img/map/place-to-stay.png', size : new google.maps.Size(50, 50), origin: new google.maps.Point(0, 0), anchor: new google.maps.Point(0, 32)},
            icon : '/img/map/place-to-stay.png',
            subject : 'Hotel Nikko GUAM',
            info : 'Hotel Nikko GUAM',
            lat : 13.522525,
            lng : 144.8034998
        },


    ];
    for (index in markers) {
        addMarker(markers[index]);
    }

	function addMarker(data) {
		var marker = new google.maps.Marker({
            position: new google.maps.LatLng(data.lat, data.lng),
            //label: data.subject,
            map: map,
            icon: data.icon,
            title: data.subject,
            draggable:false,
            animation: google.maps.Animation.DROP // Bounce
		});

		var contentString = data.info;

		var infowindow = new google.maps.InfoWindow({ content: contentString});

		google.maps.event.addListener(marker, "click", function() {
    		infowindow.open(map,marker);
		});
        //infowindow.open(map,marker); // info window by default.
	}
}
</script>
<article class="content_box hotel">
	<header class="page_title">
		<h2>tour information</h2>
		<h3>Guam’s Best Beach &amp; View</h3>
	</header>

	<div id="map_canvas" style="height: 955px; border: 1px solid #c8c8c8;"></div>

</article>
<?php }	// 분기 끝?>
<?php
include_once('./_tail.php');
?>
