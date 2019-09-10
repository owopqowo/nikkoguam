<?php
include_once('./_common.php');
$board['gr_id']      = 'reserv';
$group['gr_subject'] = '예약';
$board['bo_subject'] = '일반문의';
$page_link2 = G5_BBS_URL.'/contact.php';

include_once('./_head.reservation.php'); // wetoz
$rc_contact = explode("\n", trim($rc['rc_contact']));

$fa_top_limit = 5; // TOP 갯수.
$sql = " select *
            from {$g5['faq_table']}
            order by fa_top desc, fa_id limit 0, $fa_top_limit ";
$topf = sql_query($sql);

if ($is_member) {
    if ($member['mb_email']) {
        $arr_email = explode('@', $member['mb_email']);
        $ct_email1 = $arr_email[0];
        $ct_email2 = $arr_email[1];
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
				<li class="on"><a href="<?php echo G5_BBS_URL;?>/contact.php"><span>일반문의</span></a></li>
				<li><a href="<?php echo G5_BBS_URL;?>/qna.php"><span>확정예약 문의</span></a></li>
				<li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=promotion"><span>프로모션</span></a></li>
			</ul>
		</div>
	</div>
	<!-- //sub nav -->
	<h3 class="tit">Inquiry</h3>
	<p class="wave">일반문의</p>
	<p class="dash">질문 전에 <a href="<?php echo G5_BBS_URL;?>/faq.php" class="blue">자주하는 질문</a>을 참고하세요.</p>
	<div class="box_g">
		<ul>
			<li>본 게시판은 호텔 일반 문의를 위한 곳입니다. (예약 전 문의 및 호텔 이용 관련)</li>
			<li>본 공식사이트를 통한 예약의 경우, ‘예약’ 메뉴를 통해 확인/변경/취소가 가능하며, 예약 페이지에서 변경/취소가 불가능한 경우, ‘확정예약 문의’ 게시판을 이용해 주시기 바랍니다.</li>
			<li>답변은 평일(주말/공휴일 제외) 기준 1~3일 내 발송되며, 일부 이메일 계정은 수신 거부 또는 스팸으로 분류될 수 있으니 참고 바랍니다.</li>
		</ul>
	</div>

	<h4 class="top5">자주하는 질문 <strong class="blue">TOP 5</strong></h4>
	<div id="faq_con">
		<ol>
			<?php for ($i=0;$row=sql_fetch_array($topf);$i++) { ?>
			<li>
				<h3><a href="#none" onclick="return faq_open(this);"><?php echo conv_content($row['fa_subject'], 1); ?></a></h3>
				<div class="con_inner">
					<?php echo conv_content($row['fa_content'], 1); ?>
				</div>
			</li>
			<?php } ?>
		</ol>
	</div>
	<script>
	function faq_open(el){
		var $con = $(el).closest("li").find(".con_inner");
		if($con.is(":visible")) {
			$(el).closest("ol").find("a").removeClass('on');
			$con.slideUp();
		} else {
			$(el).closest("ol").find("a").removeClass('on');
			$(el).addClass('on');
			$("#faq_con .con_inner:visible").css("display", "none");
			$con.slideDown();
		}
		return false;
	}
	$(document).ready(function(){
		elect_email1 = $(":input[name='ct_email1']");
		elect_email2 = $(":input[name='ct_email2']");
		$(":input[name='ct_email']").on('keyup', function(){
			let v = $(this).val();
			if (v.indexOf('@') !== -1) {
				elect_email1.val(v.substr(0, v.indexOf('@')));
				elect_email2.val(v.substr(v.indexOf('@')+1));
			} else {
				elect_email1.val(v);
				elect_email2.val('');
			}
		});
	});
	</script>
	<!-- inquiry -->
	<div class="form_inquiry">
		<p class="text"><span class="red">*</span> 필수입력 항목입니다</p>
		<form name="frm" id="frm" method="post" action="contact_update.php" target="_self" onSubmit="return getAction(document.frm);" class="" enctype="multipart/form-data" autocomplete="off">
			<fieldset>
				<legend>호텔 일반 문의</legend>
				<ul class="list_inquiry">
					<li>
						<h4><label for="test1">이름 <span class="red">*</span></label></h4>
						<input type="text" id="test1" name="ct_name" value="<?php echo $member['mb_name'];?>" placeholder="Name">
					</li>
					<li>
						<h4><label for="test2">연락처</label></h4>
						<input type="tel" id="test2" name="ct_tel" value="<?php echo $member['mb_tel'];?>" placeholder="01027855837">
					</li>
					<li>
						<h4><label for="test3">이메일 <span class="red">*</span></label></h4>
						<input type="email" id="test3" name="ct_email" value="<?php echo $member['mb_email'];?>">
						<input type="hidden" name="ct_email1" value="<?php echo $ct_email1;?>" />
						<input type="hidden" name="ct_email2" value="<?php echo $ct_email2;?>" />
						<p class="reference_mark">이메일 주소 입력 시 한메일/다음 계정으로는 안내 메일이 발송되지 않을 수 있으니, 사용을 자제하여 주시기 바랍니다.</p>
					</li>
					<li>
						<h4><label for="test4">예약경로</label></h4>
						<input type="text" id="test4" name="ct_route" value="" placeholder="reservation route">
					</li>
					<li>
						<h4><label for="test5">제목 <span class="red">*</span></label></h4>
						<input type="text" id="test5" name="ct_title" value="" placeholder="Title">
					</li>
					<li>
						<h4><label for="test6">내용 <span class="red">*</span></label></h4>
						<textarea id="test6" name="ct_con"></textarea>
					</li>
					<li>
						<h4><label for="test7">첨부파일</label></h4>
						<input type="file" id="test7" name="ct_file[]" value="">
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
						<div class="box_input agree"><input type="checkbox" id="test21" name="agree" value=""><i></i><label for="test21">동의합니다.</label></div>
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
<article class="content_box reservation">
	<header class="page_title">
		<h2>INQUIRY</h2>
		<h3>Guam’s Best Beach &amp; View</h3>
	</header>

	<dl class="reference_box">
		<dt>질문 전에 <a href="<?php echo G5_BBS_URL;?>/faq.php" class="btn">자주하는 질문</a>을 참고하세요.</dt>
		<dd>
			<ul>
				<li>· 본 게시판은 호텔 일반 문의를 위한 곳입니다. (예약 전 문의 및 호텔 이용 관련)</li>
				<li>· 본 공식사이트를 통한 예약의 경우, ‘예약’ 메뉴를 통해 확인/변경/취소가 가능하며, 예약 페이지에서 변경/취소가 불가능한 경우, ‘확정예약 문의’ 게시판을 이용해 주시기 바랍니다.</li>
				<li>· 답변은 평일(주말/공휴일 제외) 기준 1~3일 내 발송되며, 일부 이메일 계정은 수신 거부 또는 스팸으로 분류될 수 있으니 참고 바랍니다.</li>
				<!-- <li style="color:#900">· 설 연휴로 2월1일 오후~2월6일 접수 일반문의 - 2월7일부터 순차적으로 답변 예정입니다. 일부 이메일 계정은 수신 거부 또는 스팸으로 분류될 수 있으니 참고 바랍니다. </li> -->
				<?php
                for ($i=0; $i<count($rc_contact); $i++) {
                    if ($i>2) {
                        break;
                    }
					if(trim($rc_contact[$i])) {
	                    echo '<li>· '. trim($rc_contact[$i]) .'</li>'.PHP_EOL;
					}
                }
                ?>
			</ul>
		</dd>
	</dl>

	<div class="faq board list">
		<div class="best5">
			<table class="tbl">
				<?php for ($i=0;$row=sql_fetch_array($topf);$i++) { ?>
                <tr class="question">
                    <td><span>질문</span></td>
                    <td class="left"><a href="#faqBest<?php echo $i?>"><?php echo conv_content($row['fa_subject'], 1); ?></a></td>
                </tr>
                <tr class="answer" id="faqBest<?php echo $i?>">
                    <td><span>답변</span></td>
                    <td class="left">
                        <?php echo conv_content($row['fa_content'], 1); ?>
                    </td>
                </tr>
                <?php } ?>
			</table>
		</div>
	</div>

    <form name="frm" id="frm" method="post" action="contact_update.php" target="_self" onSubmit="return getAction(document.frm);" class="frm_contact_us" enctype="multipart/form-data" autocomplete="off">
        <p class="guide"><span class="required_field">*</span> 필수입력 항목입니다.</p>
        <fieldset>
            <legend>입력</legend>

            <p class="text first">
                <label class="fld_name">이름 <span class="required_field">*</span> </label>
                <input type="text" name="ct_name" value="<?php echo $member['mb_name'];?>" placeholder="Name" class="input" style="width: 228px">
            </p>
            <p class="text">
                <label class="fld_name">연락처</label>
                <input type="text" name="ct_tel" id="ct_tel" value="<?php echo $member['mb_tel'];?>" placeholder="연락처는 “-” 없이 숫자만 입력해주시기 바랍니다.(ex: 01027855837)" class="input" style="width: 506px" maxlength="20">
            </p>

            <p class="text first">
                <label class="fld_name">이메일 <span class="required_field">*</span></label>
                <input type="text" name="ct_email1" id="ct_email1" value="<?php echo $ct_email1;?>" placeholder="E-mail address" class="input" style="width: 228px"><span class="at">@</span>
            </p>
            <p class="text">
                <label class="fld_name">&nbsp;</label>
                <input type="text" name="ct_email2" id="ct_email2" value="<?php echo $ct_email2;?>" class="input" style="width: 228px">
            </p>

            <p class="text">
                <label class="fld_name">&nbsp;</label>
                <select name="ct_email3" id="ct_email3" style="width: 258px">
                    <option value="">선택</option>
                    <option value="직접입력">직접입력</option>
                    <option value="naver.com">naver.com</option>
                    <option value="daum.net">daum.net</option>
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
                <label class="fld_name">예약경로</label>
                <input type="text" name="ct_route" id="ct_route" placeholder="reservation route" class="input">
            </p>
            <p>
                <label class="fld_name">제목 <span class="required_field">*</span></label>
                <input type="text" name="ct_title" id="ct_title" placeholder="Title" class="input">
            </p>

            <p>
                <label class="fld_name">내용 <span class="required_field">*</span></label>
                <textarea name="ct_con" rows="" cols="" class="txta"></textarea>
            </p>
            <p>
                <label class="fld_name">첨부파일</label>
                <input type="file" name="ct_file[]" class="input">
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
                <label><input type="checkbox" name="" value=""> 동의합니다.</label>
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

        $('#ct_email3').change(function() {
            setMailString();
        });

    });
    //----------------------------------------------------------------------------------------
    function setMailString() {

        var option_val = $("#ct_email3 > option:selected").val();

        if (option_val == "직접입력") {
            $("#ct_email2").val("");
        }
        else {
            $("#ct_email2").val(option_val);
        }
    }
    //----------------------------------------------------------------------------------------
//-->
</script>
<?php }	// 분기 끝?>
<script>
    function getAction(f) {

        if (!f.ct_name.value)
        {
            alert("이름을 입력해주세요.");
            f.ct_name.focus();
            return false;
        }
        /*
        if (!f.ct_tel.value)
        {
            alert("연락처를 입력해주세요.");
            f.ct_tel.focus();
            return false;
        }
        */
        if (!f.ct_email1.value)
        {
            alert("메일주소를 입력해주세요.");
            f.ct_email1.focus();
            return false;
        }
        if (!f.ct_email2.value)
        {
            alert("메일주소를 입력해주세요.");
            f.ct_email2.focus();
            return false;
        }
        if (!f.ct_title.value)
        {
            alert("제목을 입력해주세요.");
            f.ct_title.focus();
            return false;
        }
        if (!f.ct_con.value)
        {
            alert("내용을 입력해주세요.");
            f.ct_con.focus();
            return false;
        }
        if (f.agree.checked == false)
        {
            alert("개인정보 수집,이용에 관한 사항에 동의 해주세요.");
            f.agree.focus();
            return false;
        }

    }
</script>
<?php
include_once('./_tail.php');
?>
