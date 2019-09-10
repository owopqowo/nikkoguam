<?php
include_once('./_common.php');
$board['gr_id']      = 'reserv';
$group['gr_subject'] = '예약';
$board['bo_1']       = '확정예약 문의';
include_once(G5_BBS_PATH.'/_head.reservation.php'); // 페이지별로 head 파일 생성

if ($is_member) {
    if ($member['mb_email']) {
        $arr_email = explode('@', $member['mb_email']);
        $re_email1 = $arr_email[0];
        $re_email2 = $arr_email[1];
    }
}
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
	<p class="wave">확정예약 문의</p>
	<h4 class="blue">HOTEL NIKKO GUAM<br>확정예약 문의게시판</h4>
	<p class="dash">고객님의 예약 정보를 정확히 입력해 주시기 바랍니다</p>
	<div class="box_g">
		<ul>
			<li><strong class="blue">문의 전 필수 확인 사항을 읽어보세요.</strong><br>하단의 필수사항을 읽어보신 후 게시판을 이용하시면 더욱더 빠른 답변을 얻으실 수 있습니다.</li>
		</ul>
	</div>
	<div class="box_scroll">
		<h5>예약 확인</h5>
		<p class="dash">웹사이트를 통한 직접 예약은 예약 페이지를 통해 예약 조회가 가능한 경우 확정 상태입니다.</p>
		<p class="dash">예약대행 사이트나 여행사 예약은 해당 경로로 예약을 확인해 주시기 바랍니다.</p>
		<h5>차량서비스 신청 및 이용 방법</h5>
		<p class="dash">유료로 제공되는 차량서비스는 공항에서 호텔로(Pick up), 호텔에서 공항으로(Drop off), 호텔과 공항 간 왕복(Round trip)으로 신청 가능하며 약 시 "옵션"란에서 신청 가능합니다. 타 경로로 예약했을 경우 해당 경로로 신청해 주시고, 이가 어려울 경우에만 본 게시판을 이용해 주시기 바랍니다.</p>
		<h5>디파짓 가승인 취소</h5>
		<p class="dash">현지에서 체크인 시 진행하는 디파짓 가승인은 체크아웃 시 자동으로 취소됩니다. 단, 해외카드 취소 절차에 의해 카드 내역상 취소 확인까지 약 4주 내외가 소요되니 추후 카드 내역을 확인해 주시기 바랍니다. </p>
	</div>
	<div class="box_g">
		<ul>
			<li>예약 전 문의는 <a href="<?php echo G5_BBS_URL;?>/contact.php" class="blue">여기</a>를 눌러주세요.</li>
			<li>호텔 회신은 약 2~5일 정도 소요되며 출발이 임박한 문의는 회신되지 않을 수 있습니다.</li>
			<li>체크인 전 1~3일 내의 급한 문의는 유선 연락해 주시기 바랍니다. (+1.671.649.8815)</li>
			<li>예약 문의는 <strong class="red">영문</strong>으로 작성해 주시기 바랍니다.(한글 문의 시 회신되지 않습니다.)</li>
			<li>문의 전 <a href="<?php echo G5_BBS_URL;?>/faq.php" class="blue">자주하는 질문</a>을 확인해 주시기 바랍니다.</li>
			<li>문의 전 필수 확인사항</li>
		</ul>
	</div>
	<script>
		$(document).ready(function(){
			elere_email1 = $(":input[name='re_email1']");
			elere_email2 = $(":input[name='re_email2']");
			$(":input[name='re_email']").on('keyup', function(){
				let v = $(this).val();
				if (v.indexOf('@') !== -1) {
					elere_email1.val(v.substr(0, v.indexOf('@')));
					elere_email2.val(v.substr(v.indexOf('@')+1));
				} else {
					elere_email1.val(v);
					elere_email2.val('');
				}
			});
		});
	</script>
	<!-- inquiry -->
	<div class="form_inquiry">
		<form name="frm" id="frm" method="post" action="qna_write_update.php" target="_self" onSubmit="return getAction(document.frm);" class="" autocomplete="off">
			<fieldset>
				<legend>확정예약 문의</legend>
				<ul class="list_inquiry">
					<li>
						<h4><label for="test1">First name</label></h4>
						<input type="text" id="test1" name="re_name_first" value="<?php echo $member['mb_name_eng1'];?>" placeholder="영문 이름">
					</li>
					<li>
						<h4><label for="test2">Last name</label></h4>
						<input type="text" id="test2" name="re_name_last" value="<?php echo $member['mb_name_eng2'];?>" placeholder="영문 성">
					</li>
					<li>
						<h4><label for="test3">E-mail</label></h4>
						<input type="email" id="test3" name="re_email" value="<?php echo $member['mb_email'];?>">
						<input type="hidden" name="re_email1" value="<?php echo $re_email1;?>" />
						<input type="hidden" name="re_email2" value="<?php echo $re_email2;?>" />
						<p class="reference_mark">이메일 주소 입력 시 한메일/다음 계정으로는 안내 메일이 발송되지 않을 수 있으니, 사용을 자제하여 주시기 바랍니다.</p>
					</li>
					<li>
						<h4><label for="test4">Check in/out date</label></h4>
						<input type="text" id="test4" name="re_check_inout_date" value="" placeholder="2017.2.3 - 2.7">
					</li>
					<li>
						<h4><label for="test5">Booked by</label></h4>
						<input type="text" id="test5" name="re_bookedby" value="" placeholder="예약경로 (영문작성)">
					</li>
					<li>
						<h4><label for="test5">Confirmation number</label></h4>
						<input type="text" id="test5" name="re_confirm_num" value="" placeholder="예약시 메일발송된 예약번호를 기입">
					</li>
					<li>
						<h4><label for="test7">Comment</label></h4>
						<textarea id="test7" name="re_con" placeholder="문의사항 (영문작성)"></textarea>
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
<article class="content_box reservation inquiry">
	<header class="page_title">
		<h2>INQUIRY</h2>
		<h3>Guam’s Best Beach &amp; View</h3>
	</header>

	<div class="guide_box">
		<dl class="guide0">
			<dt>HOTEL NIKKO GUAM 확정예약 문의게시판</dt>
			<dd>고객님의 예약 정보를 정확히 입력해 주시기 바랍니다.</dd>
		</dl>

		<dl class="guide1">
			<dt>문의 전 필수 확인 사항을 읽어보세요.</dt>
			<dd>하단의 필수사항을 읽어보신 후 게시판을 이용하시면 더욱더 빠른 답변을 얻으실 수 있습니다.</dd>
		</dl>

		<div class="guide2 scroll">
			■ 예약 확인<br>
			- 웹사이트를 통한 직접 예약은 예약 페이지를 통해 예약 조회가 가능한 경우 확정 상태입니다.<br>
			- 예약대행 사이트나 여행사 예약은 해당 경로로 예약을 확인해 주시기 바랍니다.<br>
			■ 차량서비스 신청 및 이용 방법<br>
			유료로 제공되는 차량서비스는 공항에서 호텔로(Pick up), 호텔에서 공항으로(Drop off), 호텔과 공항 간 왕복(Round trip)으로 신청 가능하며
			약 시 "옵션"란에서 신청 가능합니다.
			타 경로로 예약했을 경우 해당 경로로 신청해 주시고, 이가 어려울 경우에만 본 게시판을 이용해 주시기 바랍니다.<br>
			■ 디파짓 가승인 취소
			현지에서 체크인 시 진행하는 디파짓 가승인은 체크아웃 시 자동으로 취소됩니다. 단, 해외카드 취소 절차에 의해 카드 내역상 취소 확인까지 약 4주 내외가 소요되니 추후 카드 내역을
			확인해 주시기 바랍니다.
			<br>
			<br>
			<br>
			<br>
		</div>

		<ul class="guide3">
			<li>·  예약 전 문의는 <a href="<?php echo G5_BBS_URL;?>/contact.php">여기</a>를 눌러주세요.</li>
			<li>·  호텔 회신은 약 2~5일 정도 소요되며 출발이 임박한 문의는 회신되지 않을 수 있습니다.</li>
			<li>·  체크인 전 1~3일 내의 급한 문의는 유선 연락해 주시기 바랍니다. (+1.671.649.8815)</li>
			<li>·  예약 문의는 <strong>영문</strong>으로 작성해 주시기 바랍니다.(한글 문의 시 회신되지 않습니다.)</li>
			<li>·  문의 전 <a href="<?php echo G5_BBS_URL;?>/faq.php">자주하는 질문</a>을 확인해 주시기 바랍니다.</li>
			<li>·  문의 전 필수 확인사항</li>
		</ul>
	</div>

	<form name="frm" id="frm" method="post" action="qna_write_update.php" target="_self" onSubmit="return getAction(document.frm);" class="frm_contact_us" autocomplete="off">
        <fieldset>
            <legend>입력</legend>

            <p class="text first">
                <label class="fld_name">First name</label>
                <input type="text" name="re_name_first" id="re_name_first" value="<?php echo $member['mb_name_eng1'];?>" placeholder="영문 이름" class="input" style="width: 228px" maxlength="50">
            </p>
            <p class="text" style="width: 500px;">
                <label class="fld_name">Last name</label>
                <input type="text" name="re_name_last" id="re_name_last" value="<?php echo $member['mb_name_eng2'];?>" placeholder="영문 성" class="input" style="width: 228px" maxlength="50">
            </p>


            <p class="text first">
                <label class="fld_name">E-mail</label>
                <input type="text" name="re_email1" id="re_email1" placeholder="E-mail address" value="<?php echo $re_email1;?>" class="input" style="width: 228px"><span class="at">@</span>
            </p>
            <p class="text">
                <label class="fld_name">&nbsp;</label>
                <input type="text" name="re_email2" id="re_email2" value="<?php echo $re_email2;?>" class="input" style="width: 228px">
            </p>
            <p class="text">
                <label class="fld_name">&nbsp;</label>
                <select name="re_email3" id="re_email3" style="width: 258px">
                    <option value="">선택</option>
                    <option value="직접입력">직접입력</option>
                    <option value="naver.com">naver.com</option>
                    <option value="empal.com">empal.com</option>
                    <option value="gmail.com">gmail.com</option>
                    <option value="nate.com">nate.com</option>
                    <option value="chol.com">chol.com</option>
                    <option value="dreamwiz.com">dreamwiz.com</option>
                    <option value="freechal.com">freechal.com</option>
                    <option value="hanafos.com">hanafos.com</option>
                    <option value="hanmir.com">hanmir.com</option>
                    <option value="hitel.net">hitel.net</option>
                    <option value="hotmail.com">hotmail.com</option>
                    <option value="korea.com">korea.com</option>
                    <option value="lycos.co.kr">lycos.co.kr</option>
                    <option value="netian.com">netian.com</option>
                    <option value="paran.com">paran.com</option>
                    <option value="yahoo.com">yahoo.com</option>
                    <option value="yahoo.co.kr">yahoo.co.kr</option>
                </select>
            </p>

            <p class="text first">  <br/> <font color="#FF0000">*</font> <font color="#666666"> 이메일 주소 입력시 <b>한메일/다음 계정</b>으로는 안내 메일이 발송되지 않을 수 있으니, 사용을 자제하여 주시기 바랍니다. </font> </p>


            <p>
                <label class="fld_name">Check in/out date</label>
                <input type="text" name="re_check_inout_date" id="re_check_inout_date" value="" placeholder="예시) 2017.2.3 - 2.7" class="input" maxlength="120">
            </p>
            <p>
                <label class="fld_name">Booked by</label>
                <input type="text" name="re_bookedby" id="re_bookedby" placeholder="예약경로 (영문작성)" class="input" maxlength="120">
            </p>
            <p>
                <label class="fld_name">Confirmation number</label>
                <input type="text" name="re_confirm_num" id="re_confirm_num" placeholder="예약시 메일발송된 예약번호를 기입" class="input" maxlength="120">
            </p>

            <p>
                <label class="fld_name">Comment</label>
                <textarea name="re_con" class="txta" placeholder="문의사항 (영문작성)"></textarea>
            </p>

        </fieldset>

        <fieldset class="privacy">
            <legend>개인정보 수집, 이용에 관한 사항</legend>
            <p>회사는 회원제 서비스 제공을 위해 귀하의 개인정보를 아래와 같이 수집하고자 합니다. </p>
            <div class="box">
                <dl>
                    <dt>수집하는 개인정보 항목 </dt>
                    <dd>이름, 휴대폰 번호, 이메일</dd>
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
            <input type="image" src="/img/btn_contact_us_190x43.gif" alt="문의하기">
        </div>

    </form>

</article>

<script type="text/javascript">
<!--
    jQuery(document).ready(function () {

        $('#re_email3').change(function() {
            setMailString();
        });

    });
    //----------------------------------------------------------------------------------------
    function setMailString() {

        var option_val = $("#re_email3 > option:selected").val();

        if (option_val == "직접입력") {
            $("#re_email2").val("");
        }
        else {
            $("#re_email2").val(option_val);
        }
    }
    //----------------------------------------------------------------------------------------
//-->
</script>
<?php }	// 분기 끝?>
<script>
    function getAction(f) {

        if (!f.re_name_first.value)
        {
            alert("이름을 입력해주세요.");
            f.re_name_first.focus();
            return false;
        }
        if (!f.re_name_last.value)
        {
            alert("성을 입력해주세요.");
            f.re_name_last.focus();
            return false;
        }
        if (!f.re_email1.value)
        {
            alert("메일주소를 입력해주세요.");
            f.re_email1.focus();
            return false;
        }
        if (!f.re_email2.value)
        {
            alert("메일주소를 입력해주세요.");
            f.re_email2.focus();
            return false;
        }
        if (!f.re_confirm_num.value)
        {
            alert("예약시 메일발송된 예약번호를 입력해주세요.");
            f.re_confirm_num.focus();
            return false;
        }
        if (!f.re_con.value)
        {
            alert("문의사항을 입력해주세요.");
            f.re_con.focus();
            return false;
        }
        if (f.agree.checked == false)
        {
            alert("개인정보 수집,이용에 관한 사항에 동의 해주세요.");
            f.agree.focus();
            return false;
        }

        if (!confirm("입력하신 내용대로 문의하시겠습니까?"))
        {
            return false;
        }

    }
</script>
<?php
include_once(G5_BBS_PATH.'/_tail.php');
?>
