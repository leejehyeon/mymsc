<script type="text/javascript">
	function getDaysOfMonth() {
		//var year = document.year.value;
		var year = 2014;
		var mon = document.leap.month.value;
		if (mon == 2) {
			if (year % 4 == 0) {
				if (year % 100 == 0) {
					if (year % 400 == 0)
						return 29;
					else
						return 28;
				} else
					return 29;
			} else
				return 28;
		}
		if (mon == 4 || mon == 6 || mon == 9 || mon == 11)
			return 30;
		else
			return 31;
	}

	function day_change() {
		var day = rgetDaysOfMonth();
		for (var i = 1; i <= day; i++) {
			document.leap.day.options[i].text = i;
		}
	}

	function day_visible() {
		var status_visible = 'visible';
		var status_hide = 'hide';
		var day = rgetDaysOfMonth();
		for (var i = 1; i <= day; i++) {
			if (document.leap.day.option[i].value == i)
				return status_visible;
			else
				return status_hide;
		}
	}
</script>
<div class="col-xs-9">
	<form action='/index.php/lesson/enrichment_study/reinforce' method='post'>
		<fieldset>
			<div>
				<p style="font-size:18px; text-align:center">
					<strong>보　강　계　획　서</strong>
				</p>
			</div>
			<div style="text-align:center">
				<table style="margin:0px 0px 20px 0px">
					<tr>
						<td rowspan="2" style="background-color:RGB(127,127,127); border:1px solid #000000">
						<p>
							<strong>교 과 목 명</strong>
						</p></td>
						<td rowspan="2" style="background-color:RGB(127,127,127);border:1px solid #000000">
						<p>
							<strong>보 강 사 유</strong>
						</p></td>
						<td colspan="3" style="background-color:RGB(127,127,127); border:1px solid #000000">
						<p style="margin:5px;">
							<strong>보 강 계 획</strong>
						</p></td>
					</tr>
					<tr>

						<td style="background-color:RGB(127,127,127);border:1px solid #000000;">
						<p style="margin:5px; width:150px;">
							<strong>날짜</strong>
						</p></td>
						<td style="background-color:RGB(127,127,127);border:1px solid #000000;">
						<p style="margin:5px; width:220px;">
							<strong>시간</strong>
						</p></td>
						<td style="background-color:RGB(127,127,127);border:1px solid #000000; width:100px;">
						<p style="margin:5px; width:100px">
							<strong>강의실</strong>
						</p></td>

					</tr>
					<tr>

						<td style="border:1px solid #000000">
						<input type='edit' name='subject' id="subject" style="border:0px; height:62px; margin:0px; padding:0px"/>
						</td>
						<td style="border:1px solid #000000">						<textarea name='reason' style="border:0px; height:62px; margin:0px; padding:0px"></textarea></td>
						<td style="border:1px solid #000000;">
						<form name="leap">
							<select name="month" onchange= "day_change();" style="width:60px;">
								<option value="">월</option>
								<option value="1">1월</option>
								<option value="2">2월</option>
								<option value="3">3월</option>
								<option value="4">4월</option>
								<option value="5">5월</option>
								<option value="6">6월</option>
								<option value="7">7월</option>
								<option value="8">8월</option>
								<option value="9">9월</option>
								<option value="10">10월</option>
								<option value="11">11월</option>
								<option value="12">12월</option>
							</select>
							<select name="day" style="width:60px;">
								<option value="">일</option>
								<option value="1" invisibility="day_visible()"></option>
								<option value="2" invisibility="day_visible()"></option>
								<option value="3" invisibility="day_visible()"></option>
								<option value="4" invisibility="day_visible()"></option>
								<option value="5" invisibility="day_visible()"></option>
								<option value="6" invisibility="day_visible()"></option>
								<option value="7" invisibility="day_visible()"></option>
								<option value="8" invisibility="day_visible()"></option>
								<option value="09" invisibility="day_visible()">9일</option>
								<option value="10" invisibility="day_visible()">10일</option>
								<option value="11" invisibility="day_visible()">11일</option>
								<option value="12" invisibility="day_visible()">12일</option>
								<option value="13" invisibility="day_visible()">13일</option>
								<option value="14" invisibility="day_visible()">14일</option>
								<option value="15" invisibility="day_visible()">15일</option>
								<option value="16" invisibility="day_visible()">16일</option>
								<option value="17" invisibility="day_visible()">17일</option>
								<option value="18" invisibility="day_visible()">18일</option>
								<option value="19" invisibility="day_visible()">19일</option>
								<option value="20" invisibility="day_visible()">20일</option>
								<option value="21" invisibility="day_visible()">21일</option>
								<option value="22" invisibility="day_visible()">22일</option>
								<option value="23" invisibility="day_visible()">23일</option>
								<option value="24" invisibility="day_visible()">24일</option>
								<option value="25" invisibility="day_visible()">25일</option>
								<option value="26" invisibility="day_visible()">26일</option>
								<option value="27" invisibility="day_visible()">27일</option>
								<option value="28" invisibility="day_visible()">28일</option>
								<option value="29" invisibility="day_visible()">29일</option>
								<option value="30" invisibility="day_visible()">30일</option>
								<option value="31" invisibility="day_visible()">31일</option>
							</select>
						</form></td>
						<td style="border:1px solid #000000;">
						<select name="startTime" style="width:90px;" >
							<option value="">시작시간</option>
							<option value="9">09:00</option>
							<option value="10">10:00</option>
							<option value="11">11:00</option>
							<option value="12">12:00</option>
							<option value="13">13:00</option>
							<option value="14">14:00</option>
							<option value="15">15:00</option>
							<option value="16">16:00</option>
							<option value="17">17:00</option>
							<option value="18">18:00</option>
							<option value="19">19:00</option>
							<option value="20">20:00</option>
							<option value="21">21:00</option>
							<option value="22">22:00</option>
							<option value="23">23:00</option>
							<option value="24">00:00</option>

						</select><span> ~ </span>
						<select name="endTime" style="width:90px;" >
							<option value="">종료시간</option>
							<option value="9">09:00</option>
							<option value="10">10:00</option>
							<option value="11">11:00</option>
							<option value="12">12:00</option>
							<option value="13">13:00</option>
							<option value="14">14:00</option>
							<option value="15">15:00</option>
							<option value="16">16:00</option>
							<option value="17">17:00</option>
							<option value="18">18:00</option>
							<option value="19">19:00</option>
							<option value="20">20:00</option>
							<option value="21">21:00</option>
							<option value="22">22:00</option>
							<option value="23">23:00</option>
							<option value="24">00:00</option>
						</select></td>
						<td style="border:1px solid #000000; height:62px; width:100px"></td>
					</tr>
					<tr>
						<td style="font-size:10px; padding-top:20px"><?php echo form_error("subject"); ?></td>
						<td style="font-size:10px; padding-top:20px"><?php echo form_error("reason"); ?></td>
						<td style="font-size:10px; padding-top:20px"><?php echo form_error("month");
							echo form_error("day");
						?></td>
						<td style="font-size:10px; padding-top:20px"><?php echo form_error("startTime");
							echo form_error("endTime");
						?></td>
						<td style="font-size:10px; padding-top:20px"><?php echo form_error("classroom"); ?></td>
					</tr>
				</table>
			</div>
			<div>
				<p style="text-align:center">
					위와 같이 보강계획을 제출합니다.
				</p>
			</div>
			<div style="text-align:right">
				<input type='submit' value="제출하기">
			</div>
		</fieldset>
	</form>
</div>