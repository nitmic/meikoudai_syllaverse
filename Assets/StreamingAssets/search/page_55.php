<center><h2>名古屋工業大学　シラバス検索</h2><script language="JavaScript" type="text/javascript">

function course_custom_paging(page){
    document.course_custom_search.page.value=page;
    document.course_custom_search.submit();
}
<!--
function course_custom_sort(page, column, columndir){
    document.course_custom_search.page.value=page;
    document.course_custom_search.sea_sort.value=column;
    document.course_custom_search.sea_dir.value=columndir;
    document.course_custom_search.submit();
}

function course_custom_visible(id, page, visible){
    document.course_custom_search.courseid.value=id;
    document.course_custom_search.page.value=page;
    document.course_custom_search.change_visible.value=visible;
    document.course_custom_search.submit();
}

function course_custom_delete(id, page, deleteflag, destination){
    document.course_custom_search.courseid.value=id;
    document.course_custom_search.page.value=page;
    document.course_custom_search.deleteflag.value=deleteflag;
    document.course_custom_search.action=destination;
    document.course_custom_search.submit();
}
-->
</SCRIPT>
<form name="course_custom_search" action="search.php" method="POST">
<input type="hidden" name="page"                  value="0" >
<input type="hidden" name="searchsubmit"          value="" >
<input type="hidden" name="sea_course_fullname"   value="" >
<input type="hidden" name="sea_course_shortname"  value="" >
<input type="hidden" name="sea_course_teachername"  value="" >
<input type="hidden" name="sea_category"          value="" >
<input type="hidden" name="sea_term"          value="" >
<input type="hidden" name="sea_nenzi"          value="0" >
<input type="hidden" name="sea_work_experience"          value="0" >
<input type="hidden" name="sea_classmethod1"          value="0" >
<input type="hidden" name="sea_classmethod2"          value="0" >
<input type="hidden" name="sea_classmethod3"          value="0" >
<input type="hidden" name="sea_nendo"          value="22" >
<input type="hidden" name="sea_keyword"  value="" >
</form>
<!-- saved from url=(0022)http://internet.e-mail -->
<table align=center width="100%" class='generalbox' border="1" cellpadding="5" cellspacing="0" bgcolor="#ffffff">
<tr><td color="#ffffff" >
<form name="form1" action="search.php" method="post">
<div align="center">
<table border="0" cellpadding="2" cellspacing="1" bgcolor="#ffffff">
<tr>
    <td colspan="2"><div align="left"><font size="2">
<!-- nendo -->
        20<select name="sea_nendo"><option value="22" selected="selected">22
<option value="21">21
<option value="20">20
<option value="19">19
<option value="18">18
<option value="17">17
<option value="16">16
</select>    年度&nbsp;&nbsp;&nbsp
<!-- term  -->
    学期    <select name="sea_term"><option value=" "> 
<option value="前期">前期
<option value="後期">後期
<option value="通年">通年
<option value="第１クォーター">第１クォーター
<option value="第２クォーター">第２クォーター
<option value="第３クォーター">第３クォーター
<option value="第４クォーター">第４クォーター
<option value="未定">未定
</select> &nbsp&nbsp;
    </font></div></td></tr>    
<tr>
    <td colspan="2"><div align="left"><font size="2">

<!-- department -->
    区分    <select name="sea_category"><option value=" "> 
<option value="事務情報（学務・学科・専攻・センター等）">事務情報（学務・学科・専攻・センター等）
<option value="工学部第一部（新） 人間社会">工学部第一部  人間社会
<option value="工学部第一部（新） グローバルコミュニケーション">工学部第一部  グローバルコミュニケーション
<option value="工学部第一部（新） 健康運動科学">工学部第一部  健康運動科学
<option value="工学部第一部（新） 自然科学基礎">工学部第一部  自然科学基礎
<option value="工学部第一部（新） 産業・経営リテラシー">工学部第一部  産業・経営リテラシー
<option value="工学部第一部（新） 生命・応用化学科">工学部第一部  生命・応用化学科
<option value="工学部第一部（新） 物理工学科">工学部第一部  物理工学科
<option value="工学部第一部（新） 電気・機械工学科">工学部第一部  電気・機械工学科
<option value="工学部第一部（新） 情報工学科">工学部第一部  情報工学科
<option value="工学部第一部（新） 社会工学科">工学部第一部  社会工学科
<option value="工学部第一部（新） 創造工学教育課程">工学部第一部  創造工学教育課程
<option value="工学部第一部（新） 留学生科目">工学部第一部  留学生科目
<option value="工学部第二部 ものづくり・経営基礎">工学部第二部 ものづくり・経営基礎
<option value="工学部第二部 リベラルアーツ">工学部第二部 リベラルアーツ
<option value="工学部第二部 理系基礎">工学部第二部 理系基礎
<option value="工学部第二部 教職課程">工学部第二部 教職課程
<option value="工学部第二部 物質工学科">工学部第二部 物質工学科
<option value="工学部第二部 機械工学科">工学部第二部 機械工学科
<option value="工学部第二部 電気情報工学科">工学部第二部 電気情報工学科
<option value="工学部第二部 社会開発工学科">工学部第二部 社会開発工学科
<option value="工学研究科博士前期課程（新） 共通科目">工学研究科博士前期課程  共通科目
<option value="工学研究科博士前期課程（新） 生命・応用化学専攻">工学研究科博士前期課程  生命・応用化学専攻
<option value="工学研究科博士前期課程（新） 物理工学専攻">工学研究科博士前期課程  物理工学専攻
<option value="工学研究科博士前期課程（新） 電気・機械工学専攻">工学研究科博士前期課程  電気・機械工学専攻
<option value="工学研究科博士前期課程（新） 情報工学専攻">工学研究科博士前期課程  情報工学専攻
<option value="工学研究科博士前期課程（新） 社会工学専攻">工学研究科博士前期課程  社会工学専攻
<option value="工学研究科博士前期課程（新） 工学専攻">工学研究科博士前期課程  工学専攻
<option value="工学研究科博士後期課程 共同ナノメディシン科学専攻">工学研究科博士後期課程 共同ナノメディシン科学専攻
<option value="工学研究科博士後期課程（新） 共通科目">工学研究科博士後期課程  共通科目
<option value="工学研究科博士後期課程（新） 生命・応用化学専攻">工学研究科博士後期課程  生命・応用化学専攻
<option value="工学研究科博士後期課程（新） 物理工学専攻">工学研究科博士後期課程  物理工学専攻
<option value="工学研究科博士後期課程（新） 電気・機械工学専攻">工学研究科博士後期課程  電気・機械工学専攻
<option value="工学研究科博士後期課程（新） 情報工学専攻">工学研究科博士後期課程  情報工学専攻
<option value="工学研究科博士後期課程（新） 社会工学専攻">工学研究科博士後期課程  社会工学専攻
<option value="工学研究科博士後期課程（新） 工学専攻">工学研究科博士後期課程  工学専攻
<option value="工学部 基幹工学教育課程">工学部 基幹工学教育課程
</select> &nbsp&nbsp;
    </div></font></td>

</tr>
<tr>
    <td><div align="left"><FONT SIZE="2">
<!-- nenzi -->
        <select name="sea_nenzi"><option value="0" selected="selected">  
<option value="1">1
<option value="2">2
<option value="3">3
<option value="4">4
<option value="5">5
</select>    年次 &nbsp&nbsp;
<!-- lecturecode -->
    時間割番号    <input type="text" maxlength="6" size="6" pattern="\d*" name="sea_course_shortname" title="半角数字" value=""> &nbsp&nbsp
<!-- lecturename -->
    授業科目名
    <input type="text" size="14" name="sea_course_fullname" pattern="([A-za-z]|[^\x20-\x7E])*" title="日本語または半角アルファベット" value=""> &nbsp&nbsp
<!-- teacher -->
    担当教員名    <input type="text" size="14" name="sea_course_teachername" pattern="([A-Za-z]|[^\x20-\x7E])*" title="日本語または半角アルファベット" value="">
    </div></font></td>

</tr>


<tr>
  <td><div align="left"><FONT SIZE="2">
    キーワード    <input type="text" size="20" name="sea_keyword" pattern="([A-Za-z]|[^\x20-\x7E])*" title="日本語または半角アルファベット" value=""> &nbsp&nbsp
<input type="checkbox" name="sea_work_experience" value="1"  >
    実務経験のある教員による授業科目&nbsp
  </div></font></td>
</tr><td></td>
<!--
  <tr><td><font size=2>授業実施方法&nbsp&nbsp
<input type="checkbox" name="sea_classmethod1" value="1"  >
    対面&nbsp&nbsp
<input type="checkbox" name="sea_classmethod2" value="1"  >
    オンデマンド&nbsp&nbsp
<input type="checkbox" name="sea_classmethod3" value="1"  >
    同時双方向
</font></td></tr>
-->
<tr>
    <td colspan='3'><div align="center"><FONT SIZE="2">
    &nbsp;<input type="submit" name="search_submit" value="検索">
    </div></font></td>
</tr>

</table>
<input type="hidden" name="sort" value="sea_course">
<input type="hidden" name="searchsubmit" value="searchsubmit">
<input type="hidden" name="sesskey" value="x3x4g8JQQY ">
</form>
</td></tr></table>
<h2>2061 科目</h2><div class="paging">ページ:&nbsp;(<a  href="JavaScript:course_custom_paging(54)">前へ</a>)&nbsp;&nbsp<a href="JavaScript:course_custom_paging(0)">1</a>&nbsp;...&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(45)">46</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(46)">47</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(47)">48</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(48)">49</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(49)">50</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(50)">51</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(51)">52</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(52)">53</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(53)">54</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(54)">55</a>&nbsp;&nbsp;56&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(56)">57</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(57)">58</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(58)">59</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(59)">60</a>&nbsp;...<a href="JavaScript:course_custom_paging(103)">104</a>&nbsp;&nbsp;&nbsp;(<a href="JavaScript:course_custom_paging(56)">次へ</a>)</div><p><table width="90%" align="center" border="0" cellspacing="0" bgcolor="lightgrey" cellpadding="5"><tr bgcolor="lightblue"><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">区分</FONT></th><th align="center" width=100 nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">時間割番号<br>時間割コード</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">授業科目名</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">シラバス</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">年次</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">単位数</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">担当教員名</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">時間割</FONT></th></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 物質工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3502<br>( 202223502 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">生物無機化学<br>Bio-inorganic Chemistry</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70433" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">猪股　智彦</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 月曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 物質工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3503<br>( 202223503 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">単位操作<br>Unit Operations</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70435" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">廣田　雄一朗</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 水曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 物質工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3504<br>( 202223504 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">高分子物理化学<br>Polymer Physical Chemistry</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70437" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">青木　純</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 水曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 物質工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3505<br>( 202223505 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">高分子材料工学<br>Polymer Materials Engineering</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70439" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">高須　昭則 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 木曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 物質工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3506<br>( 202223506 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">技術開発特別講義<br>Advanced lecture on professional engineer</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70441" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">牧野武彦，早川伸哉</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 月曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 物質工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3507<br>( 202223507 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">物質工学実験・演習<br>Experiments in Material Engineering</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70443" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">廣田　雄一朗</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 金曜1-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 機械工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3601<br>( 202223601 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">電子機械工学<br>Electronic-Mechanical Engineering</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70445" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">佐野　明人</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 月曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 機械工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3602<br>( 202223602 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">機械工学実験<br>Experiments on Mechanical Engineering</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70447" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">山田　格 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 木曜1-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 機械工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3603<br>( 202223603 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">機械技術総合演習Ⅰ<br>Comprehensive SeminarⅠ on Mechanical Technology</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70449" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">早川　伸哉 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 水曜1-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 機械工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3604<br>( 202223604 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">機械技術総合演習Ⅱ<br>Comprehensive SeminarⅡ on Mechanical Technology</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70451" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">早川　伸哉 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 金曜1-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 機械工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3605<br>( 202223605 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">技術開発特別講義<br>Advanced lecture on professional engineer</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70453" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">牧野武彦，早川伸哉</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 月曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 電気情報工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3701<br>( 202223701 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">電気エネルギー変換<br>Electrical Energy Conversion</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70455" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">北川　亘</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 水曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 電気情報工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3702<br>( 202223702 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">信号処理回路<br>Signal Processing Circuits</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70457" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">王　建青</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 月曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 電気情報工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3703<br>( 202223703 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">半導体物性<br>Physics and Technology of Semiconductors</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70459" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">分島　彰男</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 水曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 電気情報工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3704<br>( 202223704 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">技術開発特別講義<br>Advanced lecture on professional engineer</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70461" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">牧野武彦，早川伸哉</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 月曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 電気情報工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3705<br>( 202223705 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">電気情報工学応用実験<br>Applied Experiments on Electrical and Computer Engineering</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70463" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">矢野　佑典</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 金曜1-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 社会開発工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3801<br>( 202223801 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">構造設計学<br>Structural Design</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70465" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">野中　哲也 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 水曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 社会開発工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3802<br>( 202223802 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">都市・地域計画学<br>Urban & Regional Planning</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70467" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">秀島　栄三</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 月曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 社会開発工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3803<br>( 202223803 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">建設マネジメント<br>Construction Management</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70469" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">秀島　栄三</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 金曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 社会開発工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3804<br>( 202223804 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">技術開発特別講義<br>Advanced lecture on professional engineer</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70471" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">牧野武彦，早川伸哉</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 月曜3-4限</FONT></td></tr><input type="hidden"name="perpage" value="20"><input type="hidden" name="page"   value="55">
<input type="hidden" name="searchsubmit"   value="">
<input type="hidden" name="sesskey"   value="">
<input type="hidden" name="sea_course_teachername"   value="">
<input type="hidden" name="sea_category"   value="">
<input type="hidden" name="sea_course_fullname"   value="">
<input type="hidden" name="sea_course_shortname"   value="">
<input type="hidden" name="sea_student_username"   value="">
<input type="hidden" name="sea_nenzi"   value="0">
<input type="hidden" name="sea_nendo"   value="22">
<input type="hidden" name="sea_term"   value="">
<input type="hidden" name="sea_noinput_check"   value="0">
<input type="hidden" name="out_csv"   value="0">
<input type="hidden" name="sea_work_experience"   value="0">
<input type="hidden" name="sea_classmethod1"   value="0">
<input type="hidden" name="sea_classmethod2"   value="0">
<input type="hidden" name="sea_classmethod3"   value="0">
<input type="hidden" name="sea_keyword"   value="">
</table></p><div class="paging">ページ:&nbsp;(<a  href="JavaScript:course_custom_paging(54)">前へ</a>)&nbsp;&nbsp<a href="JavaScript:course_custom_paging(0)">1</a>&nbsp;...&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(45)">46</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(46)">47</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(47)">48</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(48)">49</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(49)">50</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(50)">51</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(51)">52</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(52)">53</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(53)">54</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(54)">55</a>&nbsp;&nbsp;56&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(56)">57</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(57)">58</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(58)">59</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(59)">60</a>&nbsp;...<a href="JavaScript:course_custom_paging(103)">104</a>&nbsp;&nbsp;&nbsp;(<a href="JavaScript:course_custom_paging(56)">次へ</a>)</div></center><br />