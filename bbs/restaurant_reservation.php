<?php
include_once('./_common.php');

$page_name1 = '리프레시';
$page_name2 = '예약하기';
$board['gr_id'] = 'restaurant';		// refresh

include_once(G5_PATH.'/_head.php');

// 레스토랑목록
$write_table = $g5['write_prefix'].'restaurant'; // 게시판 테이블 전체이름
unset($arr_restaurant);
$arr_restaurant = array();
$sql = "select wr_id, wr_subject, wr_2 from {$write_table} where wr_3 <> '' order by wr_6 asc, wr_id desc";
$res = sql_query($sql);
while($row = sql_fetch_array($res)) {
    $arr_restaurant[] = $row;
}
$cnt_restaurant = count($arr_restaurant);
sql_free_result($res);

$action_url = https_url(G5_BBS_DIR.'/restaurant_reservation_update.php', true);
?>
<?php if (G5_IS_MOBILE) {	// 분기시작 : 모바일?>
<div class="radius">
	<!-- sub nav -->
	<div class="sub_nav_wrap">
		<div class="sub_nav">
			<ul>
				<li<?php echo (!$wr_id)? ' class="on"':'';?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=restaurant"><span>레스토랑 소개</span></a></li>
				<li<?php echo ($wr_id == 10)? ' class="on"':'';?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=restaurant&wr_id=10"><span>마젤란</span></a></li>
				<li<?php echo ($wr_id == 9)? ' class="on"':'';?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=restaurant&wr_id=9"><span>벤케이</span></a></li>
				<li<?php echo ($wr_id == 8)? ' class="on"':'';?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=restaurant&wr_id=8"><span>토리</span></a></li>
				<li<?php echo ($wr_id == 7)? ' class="on"':'';?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=restaurant&wr_id=7"><span>선셋 비치 바비큐</span></a></li>
				<li<?php echo ($wr_id == 11)? ' class="on"':'';?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=restaurant&wr_id=11"><span>닛코 매직 &amp; 일루션 쇼</span></a></li>
				<li<?php echo ($wr_id == 5)? ' class="on"':'';?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=restaurant&wr_id=5"><span>부겐빌리아</span></a></li>
				<li<?php echo ($wr_id == 4)? ' class="on"':'';?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=restaurant&wr_id=4"><span>파운틴</span></a></li>
				<li<?php echo ($wr_id == 3)? ' class="on"':'';?>><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=restaurant&wr_id=3"><span>프리미엄 서비스</span></a></li>
			</ul>
		</div>
	</div>
	<!-- //sub nav -->
	<h3 class="tit">Restaurant</h3>
	<p class="wave">Guam’s Best Beach & View</p>
	<p class="dash">예약 전 반드시 하기의 사항을 확인하시기 바랍니다.</p>
	<div class="box_g">
		<ul>
			<li>하기 예약정보는 모두 영문으로 작성을 권해드립니다.</li>
			<li>2~5일 뒤 회신을 보내드리며 확정되니 이메일 회신을 확인 해주시기 바랍니다.</li>
			<li>출발 일이 가까운 경우에는 유선으로 예약해주시기 바랍니다. <strong class="blue">(+1-671-649-8815)</strong></li>
			<li>각 레스토랑의 가능한 운영시간 내에 예약희망 시간을 선택해주시기 바랍니다.</li>
		</ul>
	</div>
	<p class="dash">아래의 항목을 빠짐 없이 기입해주시기 바랍니다.</p>
	<p class="dash">예약 전 “레스토랑” 메뉴 탭을 통해 요금 및 이용시간을 확인하실 것을 권해드립니다.</p>

	<!-- inquiry -->
	<div class="form_inquiry">
		<form name="frm" id="frm" method="post" action="restaurant_reservation_update.php" target="_self" onSubmit="return getAction(document.frm);" autocomplete="off">
		<input type="hidden" name="bo_table" id="bo_table" value="<?php echo $bo_table;?>" />
		<input type="hidden" name="wr_id" id="wr_id" value="<?php echo $wr_id;?>" />
			<fieldset>
				<legend>레스토랑 예약 문의</legend>
				<ul class="list_inquiry">
					<li>
						<h4><label for="test1">예약 희망 레스토랑 <span>(Restaurant)</span></label></h4>
						<select name="rr_restaurant" id="test1" required>
							<option value="">레스토랑 선택</option>
							<?php
							if ($cnt_restaurant > 0) { 
								for ($z = 0; $z < $cnt_restaurant; $z++) { 
									$selected = '';
									if ($wr_id == $arr_restaurant[$z]['wr_id']) { 
										$selected = 'selected=selected';
									} 
									echo '<option value="'.$arr_restaurant[$z]['wr_2'].'" '.$selected.'>'.$arr_restaurant[$z]['wr_subject'].'</option>';
								}
							}
							?>
						</select>
					</li>
					<li>
						<h4><label for="test2">First name</label></h4>
						<input type="text" id="test2" name="rr_name_first" value="<?php echo $member['mb_name_eng1'];?>" required>
					</li>
					<li>
						<h4><label for="test3">Last name</label></h4>
						<input type="text" id="test3" name="rr_name_last" value="<?php echo $member['mb_name_eng2'];?>" required>
					</li>
					<li>
						<h4><label for="test4">성별 <span>(Gender)</span></label></h4>
						<select name="rr_gender" id="test4" required>
							<option value="">선택</option>
							<option value="Male">남(Male)</option>
							<option value="Female">여(Female)</option>
						</select>
					</li>
					<li>
						<h4><label for="test5">전화번호 <span>(Tel)</span></label></h4>
						<input type="tel" id="test5" name="rr_tel" value="" placeholder="82101234xxxx" required>
					</li>
					<li>
						<h4><label for="test6">이메일 주소 <span>(E-mail)</span></label></h4>
						<input type="email" id="test6" name="rr_email" value="" required>
						<p class="reference_mark">이메일 주소 입력 시 한메일/다음 계정으로는 안내 메일이 발송되지 않을 수 있으니, 사용을 자제하여 주시기 바랍니다.</p>
					</li>
					<li>
						<h4 class="border_b">예약 인원 <span>(Pax)</span></h4>
						<div class="box_pax">
							<label for="test7">성인(만 12세 이상)</label>
							<input type="number" id="test7" name="rr_cnt_adult" value="">
							<span>명</span>
						</div>
						<div class="box_pax">
							<label for="test8">어린이(만 4세~11세)</label>
							<input type="number" id="test8" name="rr_cnt_child" value="">
							<span>명</span>
						</div>
						<div class="box_pax">
							<label for="test9">유아(만 4세 미만)</label>
							<input type="number" id="test9" name="rr_cnt_baby" value="">
							<span>명</span>
						</div>
					</li>
					<li>
						<h4><label for="test10">예약 희망일 <span>(Date)</span></label></h4>
						<div class="box_date">
							<select name="rr_hopedatem" required id="test10" title="예약 희망 월">
								<option value="">월(Month) </option>
								<?php
								for ($i=1;$i<=12;$i++) { 
									echo '<option value="'.$i.'">'.$i.'</option>';
								} 
								?>
							</select>
							<select name="rr_hopedated" required title="예약 희망 일">
								<option value="">일(Day) </option>
								<?php
								for ($i=1;$i<=31;$i++) { 
									echo '<option value="'.$i.'">'.$i.'</option>';
								} 
								?>
							</select>
							<select name="rr_hopedatey" required title="예약 희망 년도">
								<option value="">년(Year) </option>
								<?php
								$nowyear = substr(G5_TIME_YMD, 0, 4);
								$maxyear = $nowyear + 3;
								for ($i=$nowyear;$i<=$maxyear;$i++) { 
									echo '<option value="'.$i.'">'.$i.'</option>';
								} 
								?>
							</select>
						</div>
					</li>
					<li>
						<h4><label for="test11">예약 희망시간 <span>(Date)</span></label></h4>
						<select name="rr_hopetime" required id="test11">
							<option value="">선택</option>
							<?php
							for ($i=6;$i<=20;$i++) { 
								$tm = sprintf("%02d", $i);
								if ($tm != '06') { 
									echo '<option value="'.$tm.':00">'.$tm.':00</option>';
								}
								if ($tm != '20') { 
									echo '<option value="'.$tm.':30">'.$tm.':30</option>';    
								}                             
							} 
							?>
						</select>
					</li>
					<li>
						<h4 class="border_b">숙박 호텔 <span>(Hotel)</span></h4>
						<ul class="ltr">
							<li><div class="box_input"><input type="radio" id="test12" name="rr_hotel" value="Hote Nikko Guam" required><i></i><label for="test12">Hote Nikko Guam</label></div></li>
							<li><div class="box_input"><input type="radio" id="test13" name="rr_hotel" value="Others" required><i></i><label for="test13">기타(Others)</label></div></li>
						</ul>
						<input type="text" name="rr_hotel_etc" value="">
						<p class="reference_mark">기타를 선택하신 분은 호텔명을 영문으로 작성해주세요.</p>
					</li>
					<li>
						<h4 class="border_b">송영서비스 신청 <span>(Pick up)</span></h4>
						<div class="box_input"><input type="radio" id="test14" name="rr_pickup" value="Not required" required><i></i><label for="test14">신청안함(Not required)</label></div>
						<div class="box_input"><input type="radio" id="test15" name="rr_pickup" value="Required" required><i></i><label for="test15">신청함(Required)</label></div>
					</li>
					<li>
						<h4 class="border_b">선셋 비치 바비큐</h4>
						<ul>
							<li>
								<div class="box_input"><input type="checkbox" id="test16" name="rr_bbq_01_use" value="TROPICAL"><i></i><label for="test16">트로피컬(TROPICAL) *음료 및 맥주 불포함</label></div>
								<select title="트로피컬 인원선택" name="rr_bbq_01_cnt" id="rr_bbq_01_cnt">
									<option value="">인원선택</option>
									<?php
									for ($i=1;$i<=20;$i++) { 
										echo '<option value="'.$i.'">'.$i.'</option>';
									} 
									?>
								</select>
							</li>
							<li>
								<div class="box_input"><input type="checkbox" id="test17" name="rr_bbq_02_use" value="PARADISE"><i></i><label for="test17">파라다이스(PARADISE) *음료 및 맥주 포함</label></div>
								<select title="파라다이스 인원선택" name="rr_bbq_02_cnt" id="rr_bbq_02_cnt">
									<option value="">인원선택</option>
									<?php
									for ($i=1;$i<=20;$i++) { 
										echo '<option value="'.$i.'">'.$i.'</option>';
									} 
									?>
								</select>
							</li>
							<li>
								<div class="box_input"><input type="checkbox" id="test18" name="rr_bbq_03_use" value="SURPRISE"><i></i><label for="test18">서프라이즈(SURPRISE) *음료 및 맥주 포함</label></div>
								<select title="서프라이즈 인원선택" name="rr_bbq_03_cnt" id="rr_bbq_03_cnt">
									<option value="">인원선택</option>
									<?php
									for ($i=1;$i<=20;$i++) { 
										echo '<option value="'.$i.'">'.$i.'</option>';
									} 
									?>
								</select>
							</li>
							<li>
								<div class="box_input"><input type="checkbox" id="test19" name="rr_bbq_04_use" value="Kids Menu"><i></i><label for="test19">키즈메뉴(Kid’s Menu)</label></div>
								<select title="키즈메뉴 인원선택" name="rr_bbq_04_cnt" id="rr_bbq_04_cnt">
									<option value="">인원선택</option>
									<?php
									for ($i=1;$i<=20;$i++) { 
										echo '<option value="'.$i.'">'.$i.'</option>';
									} 
									?>
								</select>
							</li>
						</ul>
						<p class="reference_mark">상기 요금에 10% 봉사료가 추가됩니다.</p>
					</li>
					<li>
						<h4><label for="test20">추가 요청사항 <span>(Additional Comment)</span></label></h4>
						<textarea id="test20" name="rr_comment" placeholder="영문만 작성"></textarea>
					</li>
					<li>
						<h4 class="border_b">개인정보 수집, 이용에 관한 사항</h4>
						<p>회사는 회원제 서비스 제공을 위해 귀하의 개인정보를 아래와 같이 수집하고자 합니다.</p>
						<div class="box_g">
							<h5 class="blue">수집하는 개인정보 항목</h5>
							<p>이름, 아이디, 휴대폰 번호, 이메일을 제외하고 삭제</p>
						</div>
						<div class="box_g">
							<h5 class="blue">수집 및 이용목적</h5>
							<p>회원제 가입 서비스 제공, 계약이행을 위한 연락</p>
						</div>
						<div class="box_g">
							<h5 class="blue">보유 및 이용기간</h5>
							<p>예약 확정 후 5일까지</p>
						</div>
						<p class="reference_mark">서비스 제공을 위해 필요한 최소한의 개인정보이므로 동의를 해 주셔야 서비스를 이용하실 수 있습니다.</p>
						<div class="box_input agree"><input type="checkbox" id="test21" name="agree" value="1"><i></i><label for="test21">동의합니다.</label></div>
					</li>
				</ul>
				<div class="btn_wrap">
					<input type="submit" class="btn btn_blue" value="문의하기">
				</div>
			</fieldset>
		</form>
	</div>
	<!-- //inquiry -->
</div>
<?php } else {	// 분기 : PC?>
<article class="content_box restaurant">
	<header class="page_title">
		<h2>Restaurant</h2>
		<h3>Guam’s Best Beach &amp; View</h3>
	</header>

	<ul class="resrvation_guide">
		<li>예약 전 반드시 하기의 사항을 확인해주시기 바랍니다.
			<ul>
				<li>하기 예약정보는 모두 영문으로 <br>
				작성을 권해드립니다.</li>
				<li>2~5일 뒤 회신을 보내드리며<br>
				확정되니 이메일 회신을 확인<br>
				해주시기 바랍니다.</li>
				<li>출발 일이 가까운 경우에는 <br>
				유선으로 예약해주시기 바랍니다. <br>
				<strong>(+1-671-649-8815)</strong></li>
				<li>각 레스토랑의 가능한 운영시간<br>
				내에 예약희망 시간을 선택해주시기 <br>
				바랍니다. </li>
			</ul>
		</li>
		<li>아래의 항목을 빠짐 없이 기입해주시기 바랍니다.</li>
		<li>예약 전 “레스토랑” 메뉴 탭을 통해 요금 및 이용시간을 확인하실 것을 권해드립니다. </li>
	</ul>

    <form name="frm" id="frm" method="post" action="restaurant_reservation_update.php" target="_self" onSubmit="return getAction(document.frm);" class="frm_resrvation" autocomplete="off">
    <input type="hidden" name="bo_table" id="bo_table" value="<?php echo $bo_table;?>" />
    <input type="hidden" name="wr_id" id="wr_id" value="<?php echo $wr_id;?>" />
		<fieldset>
			<legend>입력폼1</legend>
			<p>
				<span class="fld_name ib">예약 희망 레스토랑(Restaurant) </span>
                <select name="rr_restaurant" id="rr_restaurant" style="width: 538px;" required>
					<option value="">레스토랑 선택</option>
                    <?php
                    if ($cnt_restaurant > 0) {
                        for ($z = 0; $z < $cnt_restaurant; $z++) {
                            $selected = '';
                            if ($wr_id == $arr_restaurant[$z]['wr_id']) {
                                $selected = 'selected=selected';
                            }
                            echo '<option value="'.$arr_restaurant[$z]['wr_2'].'" '.$selected.'>'.$arr_restaurant[$z]['wr_subject'].'</option>';
                        }
                    }
                    ?>
				</select>
			</p>
		</fieldset>

		<fieldset>
			<legend>입력폼2</legend>

			<p class="text first">
				<label class="fld_name">First name</label>
                <input type="text" name="rr_name_first" id="rr_name_first" value="<?php echo $member['mb_name_eng1'];?>" placeholder="First name" class="input" style="width: 228px" required>
			</p>
			<p class="text">
				<label class="fld_name">Last name</label>
                <input type="text" name="rr_name_last" id="rr_name_last" value="<?php echo $member['mb_name_eng2'];?>" placeholder="Last name" class="input" style="width: 228px" required>
			</p>
			<p class="text">
				<label class="fld_name">성별(Gender) </label>
                <select name="rr_gender" id="rr_gender" style="width: 258px" required>
					<option value="">선택</option>
                    <option value="Male">남(Male)</option>
                    <option value="Female">여(Female)</option>
				</select>
			</p>

			<p>
				<label class="fld_name">전화번호(Tel)</label>
                <input type="text" name="rr_tel" id="rr_tel" value="" placeholder="※ 기입 시 국가번호 및 지역번호를 함께 기재해주시기 바랍니다.  예) 82101234XXXX" class="input" required>
			</p>
			<p>
				<label class="fld_name">이메일 주소(E-mail) <span class="caution">※ 이메일 주소 입력 시 한메일/다음 계정으로는 안내 메일이 발송되지 않을 수 있으니, 사용을 자제하여 주시기 바랍니다.</span></label>
                <input type="text" name="rr_email" id="rr_email" value="" placeholder="※ E-mail 주소를 잘못이 없는지 다시 한 번 확인하시기 바랍니다." class="input" required>
			</p>

			<p class="text first">
				<span class="fld_name">예약 인원(Pax) </span>

				<label class="fld_name ib">
					성인(만 12세 이상)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="rr_cnt_adult" id="rr_cnt_adult" value="" class="input" style="width:64px"> 명
				</label>

				<label class="fld_name ib">
					어린이(만 4세~11세)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="rr_cnt_child" id="rr_cnt_child" value="" class="input" style="width:64px"> 명
				</label>

				<label class="fld_name ib">
					유아(만 4세 미만)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="rr_cnt_baby" id="rr_cnt_baby" value="" class="input" style="width:64px"> 명
				</label>
			</p>

			<p class="text first">
				<label class="fld_name">예약 희망일(Date) </label>
                <select name="rr_hopedatem" id="rr_hopedatem" style="width: 258px;" required>
                    <option value="">월(Month) </option>
                    <?php
                    for ($i=1;$i<=12;$i++) {
                        echo '<option value="'.$i.'">'.$i.'</option>';
                    }
                    ?>
                </select>
			</p>
			<p class="text">
				<label class="fld_name"></label>
                <select name="rr_hopedated" id="rr_hopedated" style="width: 258px;" required>
                    <option value="">일(Day) </option>
                    <?php
                    for ($i=1;$i<=31;$i++) {
                        echo '<option value="'.$i.'">'.$i.'</option>';
                    }
                    ?>
                </select>
			</p>
			<p class="text">
				<label class="fld_name"></label>
                <select name="rr_hopedatey" id="rr_hopedatey" style="width: 258px;" required>
                    <option value="">년(Year) </option>
                    <?php
                    $nowyear = substr(G5_TIME_YMD, 0, 4);
                    $maxyear = $nowyear + 3;
                    for ($i=$nowyear;$i<=$maxyear;$i++) {
                        echo '<option value="'.$i.'">'.$i.'</option>';
                    }
                    ?>
                </select>
			</p>

			<p class="text first">
				<label class="fld_name">예약 희망 시간(Time) </label>
                <select name="rr_hopetime" id="rr_hopetime" style="width: 258px;" required>
                    <option value="">선택</option>
                    <?php
                    for ($i=6;$i<=20;$i++) {
                        $tm = sprintf("%02d", $i);
                        if ($tm != '06') {
                            echo '<option value="'.$tm.':00">'.$tm.':00</option>';
                        }
                        if ($tm != '20') {
                            echo '<option value="'.$tm.':30">'.$tm.':30</option>';
                        }
                    }
                    ?>
                </select>
			</p><br>

			<p class="text radio first">
				<label class="fld_name">숙박 호텔(Hotel) </label>
                <label><input type="radio" name="rr_hotel" value="Hote Nikko Guam" required> Hote Nikko Guam</label>
                <label><input type="radio" name="rr_hotel" value="Others" required> 기타(Others)</label>
                <input type="text" name="rr_hotel_etc" id="rr_hotel_etc" value="" placeholder="※ 기타를 선택하신 분들은 호텔명을 영문으로 작성해주시기 바랍니다. " class="input">
			</p><br>

			<p class="text radio first">
				<span class="fld_name">송영서비스 신청(Pick up) </span>
                <label><input type="radio" name="rr_pickup" id="rr_pickup1" value="Not required" required> 신청안함(Not required) </label>
                <label><input type="radio" name="rr_pickup" id="rr_pickup2" value="Required" required> 신청함(Required) </label>
			</p>
		</fieldset>

		<fieldset>
			<legend>입력폼3</legend>

			<p class="check cols2">
				<span class="fld_name">선셋 비치 바비큐 </span>
				<label>
					<span><input type="checkbox" name="rr_bbq_01_use" id="rr_bbq_01_use" value="TROPICAL"> 트로피컬(TROPICAL) *음료 및 맥주 불포함  </span>
					<select name="rr_bbq_01_cnt" id="rr_bbq_01_cnt" disabled>
						<option value="">인원선택</option>
                        <?php
                        for ($i=1;$i<=20;$i++) {
                            echo '<option value="'.$i.'">'.$i.'</option>';
                        }
                        ?>
					</select>
				</label>
				<label>
					<span><input type="checkbox" name="rr_bbq_02_use" id="rr_bbq_02_use" value="PARADISE"> 파라다이스(PARADISE) *음료 및 맥주 포함 </span>
					<select name="rr_bbq_02_cnt" id="rr_bbq_02_cnt" disabled>
						<option value="">인원선택</option>
                        <?php
                        for ($i=1;$i<=20;$i++) {
                            echo '<option value="'.$i.'">'.$i.'</option>';
                        }
                        ?>
					</select>
				</label>
				<label>
					<span><input type="checkbox" name="rr_bbq_03_use" id="rr_bbq_03_use" value="SURPRISE"> 서프라이즈(SURPRISE) *음료 및 맥주 포함</span>
					<select name="rr_bbq_03_cnt" id="rr_bbq_03_cnt" disabled>
						<option value="">인원선택</option>
                        <?php
                        for ($i=1;$i<=20;$i++) {
                            echo '<option value="'.$i.'">'.$i.'</option>';
                        }
                        ?>
					</select>
				</label>
				<label>
					<span><input type="checkbox" name="rr_bbq_04_use" id="rr_bbq_04_use" value="Kids Menu"> 키즈메뉴(Kid’s Menu) </span>
					<select name="rr_bbq_04_cnt" id="rr_bbq_04_cnt" disabled>
						<option value="">인원선택</option>
                        <?php
                        for ($i=1;$i<=20;$i++) {
                            echo '<option value="'.$i.'">'.$i.'</option>';
                        }
                        ?>
					</select>
				</label>
				<br>
				<span class="guide">※ 상기 요금에 10% 봉사료가 추가됩니다.</span>
			</p>
		</fieldset>

		<fieldset>
			<legend>입력폼4</legend>
			<p>
				<label class="fld_name">추가 요청사항(Additional Comment) </label>
                <textarea name="rr_comment" id="rr_comment" rows="" cols="" class="txta" placeholder="※ 영문만 작성"></textarea>
			</p>
		</fieldset>


		<fieldset class="privacy">
			<legend>입력폼5</legend>

			<h4>개인정보 수집, 이용에 관한 사항</h4>
			<p>회사는 회원제 서비스 제공을 위해 귀하의 개인정보를 아래와 같이 수집하고자 합니다. </p>
			<div class="box">
				<dl>
					<dt>수집하는 개인정보 항목 </dt>
					<dd>이름, 아이디, 휴대폰 번호, 이메일을 <br>제외하고 삭제</dd>
				</dl>

				<dl>
					<dt>수집 및 이용목적</dt>
					<dd>회원제 가입 서비스 제공, 계약이행을 위한 연락</dd>
				</dl>

				<dl>
					<dt>보유 및 이용기간</dt>
					<dd>예약 확정 후 5일까지</dd>
				</dl>
			</div>
			<p>※ 서비스 제공을 위해 필요한 최소한의 개인정보이므로 동의를 해 주셔야 서비스를 이용하실 수 있습니다.</p>
			<p class="check">
				<label><input type="checkbox" name="agree" id="agree" value="1"> 동의합니다.</label>
			</p>
		</fieldset>

		<div class="btns center">
			<input type="submit" value="문의하기">
		</div>
	</form>
</article>

<script type="text/javascript">
<!--
    jQuery(document).ready(function () {
        $(document).on('click', '#rr_bbq_01_use', function() {
            if ($(this).is(':checked')) {
                $('#rr_bbq_01_cnt').attr('disabled', false);
            }
            else {
                $('#rr_bbq_01_cnt').attr('disabled', 'disabled').prop('selectedIndex',0);
            }
        });
        $(document).on('click', '#rr_bbq_02_use', function() {
            if ($(this).is(':checked')) {
                $('#rr_bbq_02_cnt').attr('disabled', false);
            }
            else {
                $('#rr_bbq_02_cnt').attr('disabled', 'disabled').prop('selectedIndex',0);
            }
        });
        $(document).on('click', '#rr_bbq_03_use', function() {
            if ($(this).is(':checked')) {
                $('#rr_bbq_03_cnt').attr('disabled', false);
            }
            else {
                $('#rr_bbq_03_cnt').attr('disabled', 'disabled').prop('selectedIndex',0);
            }
        });
        $(document).on('click', '#rr_bbq_04_use', function() {
            if ($(this).is(':checked')) {
                $('#rr_bbq_04_cnt').attr('disabled', false);
            }
            else {
                $('#rr_bbq_04_cnt').attr('disabled', 'disabled').prop('selectedIndex',0);
            }
        });
    });

//-->
</script>
<?php }	// 분기 끝?>
<script>
    //----------------------------------------------------------------------------------------
    function getAction(f) {

        var rr_hotel = $(":input:radio[name=rr_hotel]:checked").val();
        if (rr_hotel == 'Others' && !f.rr_hotel_etc.value) {
            alert("기타를 선택하신 분들은 호텔명을 영문으로 작성해주시기 바랍니다.");
            f.rr_hotel_etc.focus();
            return false;
        }
        if (f.agree.checked == false) {
            alert("개인정보 수집,이용에 관한 사항에 동의 해주세요.");
            f.agree.focus();
            return false;
        }
        if (!confirm("입력하신 내용대로 문의하시겠습니까?")) {
            return false;
        }
    }
</script>
<?php
include_once('./_tail.php');
?>
