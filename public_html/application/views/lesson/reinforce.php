<form action='/index.php/lesson/reinforce' method='post'>
<div>
    <p style="font-size:18px; text-align:center"><strong>보　강　계　획　서</strong></p>
	</div>
	<div style="text-align:center">
		<table style="border:1px solid #000000; margin:0px 0px 20px 180px">
			<tr>
				<td rowspan="2" style="background-color:RGB(127,127,127); border:1px solid #000000">
                    <p><strong>교 과 목 명</strong></p>
				</td>
                <td rowspan="2" style="background-color:RGB(127,127,127);border:1px solid #000000">
                    <p><strong>보 강 사 유</strong></p>
				</td>
                <td colspan="3" style="background-color:RGB(127,127,127); border:1px solid #000000">
                    <p style="margin:5px;"><strong>보 강 계 획</strong></p>
				</td>
			</tr>
			<tr>
				
				<td style="background-color:RGB(127,127,127);border:1px solid #000000">
                    <p style="margin:5px;"><strong>날짜</strong></p>
				</td>
				<td style="background-color:RGB(127,127,127);border:1px solid #000000">
                    <p style="margin:5px;"><strong>시간</strong></p>
				</td>
				<td style="background-color:RGB(127,127,127);border:1px solid #000000">
                    <p style="margin:5px;"><strong>강의실</strong></p>
				</td>
				
			</tr>
			<tr>
				
				<td style="border:1px solid #000000">
                    <input type='edit' name='subject'/>
				</td>
				<td style="border:1px solid #000000">
                    <input type='edit' name='reason'/>
				</td>
				<td style="border:1px solid #000000">
					 <select name="month" style="width:60px;">
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
		<option value="1">1일</option>
		<option value="2">2일</option>
		<option value="3">3일</option>
		<option value="4">4일</option>
		<option value="5">5일</option>
		<option value="6">6일</option>
		<option value="7">7일</option>
		<option value="8">8일</option>
		<option value="9">9일</option>
        <option value="10">10일</option>              
		<option value="11">11일</option>
		<option value="12">12일</option>
		<option value="13">13일</option>
		<option value="14">14일</option>
		<option value="15">15일</option>
		<option value="16">16일</option>
		<option value="17">17일</option>
		<option value="18">18일</option>
		<option value="19">19일</option>
        <option value="20">20일</option>           
		<option value="21">21일</option>
		<option value="22">22일</option>
		<option value="23">23일</option>
		<option value="24">24일</option>
		<option value="25">25일</option>
		<option value="26">26일</option>
		<option value="27">27일</option>
		<option value="28">28일</option>
		<option value="29">29일</option>
        <option value="30">30일</option>
        <option value="31">31일</option>
	</select>
				</td>
								<td style="border:1px solid #000000">
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
                                             
	</select>
                        <span>
                            ~
                        </span>
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
	</select>
				</td>
				<td style="border:1px solid #000000">
					<input type='edit' name='classroom' style="width:100px;"/>
				</td>
			</tr>
		</table>
	</div>
	<div>
		<p style="text-align:center">위와 같이 보강계획을 제출합니다.</p>
	</div>
	<div style="text-align:right">
		<input type='submit' value="제출하기">
	</div>
	</form>