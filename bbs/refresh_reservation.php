<?php
include_once('./_common.php');

$page_name1 = '리프레시';
$page_name2 = '예약하기';
$board['gr_id'] = 'refresh';

include_once(G5_PATH.'/_head.php');

$action_url = https_url(G5_BBS_DIR.'/refresh_reservation_update.php', true);
?>

<article class="content_box restaurant">
	<header class="page_title">
		<h2>refresh</h2>
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
				<strong>(+1-671-648-1007)</strong></li>
				<li>스파 아유아람의 가능한 운영시간<br>
				내에 예약희망 시간을 선택해주시기 <br>
				바랍니다. </li>
			</ul>
		</li>
		<li>아래의 항목을 빠짐 없이 기입해주시기 바랍니다.</li>
		<li>예약 전 “스파 아유아람” 메뉴 탭을 통해 요금 및 이용시간을 확인하실 것을 권해드립니다. </li>
	</ul>

    <form name="frm" id="frm" method="post" action="<?php echo $action_url;?>" onSubmit="return getAction(document.forms.frm);" class="frm_resrvation">
		<fieldset>
			<legend>입력폼1</legend>

			<p class="check cols3">
				<span class="fld_name">바디 마사지</span>
				<label>
					<span><input type="checkbox" name="od_bodymassage[]" value="Balinese Massage"> 발리니즈(Balinese Massage) 60분 $120 / 90분 $160</span>
				</label>
				<label>
					<span><input type="checkbox" name="od_bodymassage[]" value="Stone Aroma"> 스톤 아로마(Stone Aroma)$130</span>
				</label>
				<label>
					<span><input type="checkbox" name="od_bodymassage[]" value="Power Tree"> 파워 트리(Power Tree) 60분 $120 / 90분 $160</span>
				</label>

				<label>
					<span><input type="checkbox" name="od_bodymassage[]" value="Bowel Detox"> 보웰디톡스(Bowel Detox) 60분 $140 </span>
				</label>
				<label>
					<span><input type="checkbox" name="od_bodymassage[]" value="Fascia/Sports Massage"> 근막/스포츠 마사지(Fascia/Sports Massage) 60분 $120 / 90분 $160 </span>
				</label>
				<label>
					<span><input type="checkbox" name="od_bodymassage[]" value="Head Spa"> 헤드 스파(Head Spa) 60분 $100 </span>
				</label>
				<label>
					<span><input type="checkbox" name="od_bodymassage[]" value="Maternity Massage"> 임산부 마사지(Maternity Massage) 60분  $130 </span>
				</label>
			</p>

			<p class="check cols3">
				<span class="fld_name">얼굴 마사지</span>
				<label>
					<span><input type="checkbox" name="od_facialmassage[]" value="Relaxation Facial"> 릴렉제이션 페이셜(Relaxation Facial) 60분 $120 / 90분 $160</span>
				</label>
				<label>
					<span><input type="checkbox" name="od_facialmassage[]" value="Facial Muscle stretch Treatment"> 페이셜 머슬 스트레치 트리트먼트(Facial Muscle stretch Treatment)  60분 $130 / 90분 $170</span>
				</label>
				<label>
					<span><input type="checkbox" name="od_facialmassage[]" value="Moisturizing Facial"> 모이스처라이징 페이셜(Moisturizing Facial) 60분 $140 / 90분 $180</span>
				</label>
			</p>

			<p class="check cols3">
				<span class="fld_name">럭셔리 패키지</span>
				<label>
					<span><input type="checkbox" name="od_package_luxury[]" value="Luxury"> 럭셔리(Luxury) 210분 $310  / 150분 $240</span>
				</label>
				<label>
					<span><input type="checkbox" name="od_package_luxury[]" value="Luxury Body"> 럭셔리 바디(Luxury Body)  120분 $190 / 90분 $150</span>
				</label>
				<label>
					<span><input type="checkbox" name="od_package_luxury[]" value="Luxury Facial"> 럭셔리 페이셜(Luxury Facial) 90분 $150</span>
				</label>
				<label>
					<span><input type="checkbox" name="od_package_luxury[]" value="Luxury Head"> 럭셔리 헤드(Luxury Head)  90분 $150</span>
				</label>
			</p>

			<p class="check cols3">
				<span class="fld_name">프리미어 패키지</span>
				<label>
					<span><input type="checkbox" name="od_package_premier[]" value="Premier Facial"> 프리미어 페이셜(Premier Facial) 90분 / $180</span>
				</label>
				<label>
					<span><input type="checkbox" name="od_package_premier[]" value="Premier Total"> 프리미어 토탈(Premier Total) 120분 / $210</span>
				</label>
				<label>
					<span><input type="checkbox" name="od_package_premier[]" value="Premier Couple"> 프리미어 커플(Premier Couple) 90분 / $300 </span>
				</label>
			</p>
		</fieldset>

		<fieldset>
			<legend>입력폼2</legend>

			<p class="text first">
				<label class="fld_name">First name</label>
                <input type="text" name="od_name_first" id="od_name_first" value="" placeholder="영문이름" class="input" style="width: 228px" required>
			</p>
			<p class="text">
				<label class="fld_name">Last name</label>
                <input type="text" name="od_name_last" id="od_name_last" value="" placeholder="영문 성" class="input" style="width: 228px" required>
			</p>
			<p class="text">
				<label class="fld_name">성별(Gender) </label>
				<select name="od_gender" id="od_gender" required style="width: 258px">
                    <option value="">선택</option>
                    <option value="Male">남(Male)</option>
                    <option value="Female">여(Female)</option>
                </select>
			</p>

			<p>
				<label class="fld_name">전화번호(Tel)</label>
                <input type="text" name="od_tel" id="od_tel" value="" placeholder="※ 기입 시 국가번호 및 지역번호를 함께 기재해주시기 바랍니다.  예) 82101234XXXX" class="input" maxlength="20" required>
			</p>
			<p>
				<label class="fld_name">이메일 주소(E-mail) <span class="caution">※ 이메일 주소 입력 시 한메일/다음 계정으로는 안내 메일이 발송되지 않을 수 있으니, 사용을 자제하여 주시기 바랍니다.</span></label>
                <input type="text" name="od_email" id="od_email" value="" placeholder="※ E-mail 주소를 잘못이 없는지 다시 한 번 확인하시기 바랍니다." class="input" required>
			</p>

			<p class="text first">
				<label class="fld_name">예약 인원(Pax) </label>
				<select name="od_cnt_adult" id="od_cnt_adult" style="width: 258px;" required>
					<option value="">※ 만 15세 이상만 예약 가능</option>
                    <?php
                    for ($i=1;$i<=20;$i++) {
                        echo '<option value="'.$i.'">'.$i.'</option>';
                    }
                    ?>
				</select>
			</p><br>

			<p class="text first">
				<label class="fld_name">예약 희망일(Date) </label>
                <select name="od_hopedatem" id="od_hopedatem" style="width: 258px;" required>
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
				<select name="od_hopedated" id="od_hopedated" style="width: 258px;" required>
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
				<select name="od_hopedatey" id="od_hopedatey" style="width: 258px;" required>
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
				<select name="od_hopetime" id="od_hopetime" style="width: 258px;" required>
                    <option value="">선택</option>
                    <?php
                    for ($i=10;$i<=21;$i++) {
                        echo '<option value="'.$i.':00">'.$i.':00</option>';
                        echo '<option value="'.$i.':30">'.$i.':30</option>';
                    }
                    ?>
                </select>
			</p><br>

			<p class="text radio first">
				<label class="fld_name">숙박 호텔(Hotel) </label>

				<label><input type="radio" name="od_hotel" value="Hote Nikko Guam" required> Hote Nikko Guam  </label>
				<label><input type="radio" name="od_hotel" value="Others" required> 기타(Others) </label>
                <input type="text" name="od_hotel_etc" id="od_hotel_etc" value="" placeholder="※ 기타를 선택하신 분들은 호텔명을 영문으로 작성해주시기 바랍니다. " class="input">
			</p><br>

			<p class="text radio first">
				<span class="fld_name">송영서비스 신청(Pick up) </span>
				<label><input type="radio" name="od_pickup" value="Not required" required> 신청안함(Not required) </label>
                <label><input type="radio" name="od_pickup" value="Required" required> 신청함(Required) </label>
			</p>
		</fieldset>

		<fieldset>
			<legend>입력폼3</legend>
			<p>
				<label class="fld_name">추가 요청사항(Additional Comment) </label>
				<textarea name="od_comment" id="od_comment" rows="" cols="" class="txta" placeholder="※ 영문만 작성"></textarea>
			</p>

			<div class="notice">
				<strong>주의사항</strong><br>
				<ul>
					<li>- 예약 시간 15분 전에 도착해 주시기 바랍니다. 예약에 늦을 경우 다음 고객에게 피해가 가지 않도록 관리는 예약 시간에 맞춰 종료되오니 시간을 엄수해 주시기 바랍니다.</li>
					<li>- 스파 내 음주와 흡연을 금합니다. 스파 전 후 알코올 섭취와 폭식 역시 피해주시기 바랍니다.</li>
					<li>- 예약 취소는 최소 24시간 전에 공지해 주시기 바랍니다.</li>
					<li>- 귀중품은 가급적 지참하지 않으시길 권합니다. 분실 시 어떠한 책임도 지지 않습니다.</li>
					<li>- 고혈압, 심장병, 알르레기 등의 증세가 있으신 고객님은 전문의와 상담 후 방문해 주십시오. 스파 이용 시 트리트먼트 전에 직원에게 알려주시기 바랍니다.</li>
					<li>- 스파는 16세 이상 이용 가능합니다.</li>
					<li>- 임산부는 17주 이상부터 일부 코스만 이용 가능합니다.</li>
				</ul>
			</div>
		</fieldset>


		<fieldset class="privacy">
			<legend>입력폼5</legend>

			<h4>개인정보 수집, 이용에 관한 사항</h4>
			<p>회사는 회원제 서비스 제공을 위해 귀하의 개인정보를 아래와 같이 수집하고자 합니다. </p>
			<div class="box">
				<dl>
					<dt>수집하는 개인정보 항목 </dt>
					<dd>이름, 아이디, 휴대폰 번호, 이메일</dd>
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
                <label><input type="checkbox" name="agree" value="1"> 동의합니다.</label>
			</p>
		</fieldset>

		<div class="btns center">
			<input type="submit" value="예약하기">
		</div>
	</form>
</article>

<script type="text/javascript">
<!--
    function getAction(f) {

        var od_hotel = $(":input:radio[name=od_hotel]:checked").val();
        if (od_hotel == 'Others' && !f.od_hotel_etc.value) {
            alert("기타를 선택하신 분들은 호텔명을 영문으로 작성해주시기 바랍니다.");
            f.od_hotel_etc.focus();
            return false;
        }
        if (!f.agree.checked) {
            alert("개인정보 수집 및 이용에 관한 사항에 동의해주세요.");
            f.agree.focus();
            return false;
        }
        if (confirm("예약을 진행하시겠습니까?")) {
            return true;
        }
        else {
            return false;
        }
    }
//-->
</script>

<?php
include_once('./_tail.php');
?>