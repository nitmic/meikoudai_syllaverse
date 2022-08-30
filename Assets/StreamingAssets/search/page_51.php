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
<input type="hidden" name="sesskey" value="BRAGaknxli ">
</form>
</td></tr></table>
<h2>2061 科目</h2><div class="paging">ページ:&nbsp;(<a  href="JavaScript:course_custom_paging(50)">前へ</a>)&nbsp;&nbsp<a href="JavaScript:course_custom_paging(0)">1</a>&nbsp;...&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(41)">42</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(42)">43</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(43)">44</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(44)">45</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(45)">46</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(46)">47</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(47)">48</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(48)">49</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(49)">50</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(50)">51</a>&nbsp;&nbsp;52&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(52)">53</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(53)">54</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(54)">55</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(55)">56</a>&nbsp;...<a href="JavaScript:course_custom_paging(103)">104</a>&nbsp;&nbsp;&nbsp;(<a href="JavaScript:course_custom_paging(52)">次へ</a>)</div><p><table width="90%" align="center" border="0" cellspacing="0" bgcolor="lightgrey" cellpadding="5"><tr bgcolor="lightblue"><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">区分</FONT></th><th align="center" width=100 nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">時間割番号<br>時間割コード</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">授業科目名</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">シラバス</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">年次</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">単位数</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">担当教員名</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">時間割</FONT></th></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  社会工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7702<br>( 202217702 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">地震リスク工学<br>Seismic Risk Engineering</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70279" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">渡辺　研司</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 火曜7-8限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  社会工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7703<br>( 202217703 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">建設マネジメント<br>Construction Management</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70281" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">秀島　栄三</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 月曜9-10限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  社会工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7704<br>( 202217704 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">耐震工学<br>Seismic Engineering</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70283" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前田　健一 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 金曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  社会工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7706<br>( 202217706 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">流域環境工学<br>Watershed Environmental Engineering</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70285" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">吉田　奈央子 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 木曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  社会工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7708<br>( 202217708 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">交通システム工学<br>Transportation System Engineering</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70287" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">藤田　素弘</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 木曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  社会工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7710<br>( 202217710 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">実践研究セミナー<br>Research Seminar</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70289" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">庄　建治朗 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 水曜1-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  社会工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7711<br>( 202217711 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">実践研究セミナー<br>Research Seminar</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70291" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">分野全教員 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 水曜5-8限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  社会工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7712<br>( 202217712 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">データサイエンス<br>Data Science</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70293" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">林　篤裕 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 木曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  社会工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7713<br>( 202217713 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">創造的問題解決論<br>Creative Problem Solving</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70295" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">鷲見　克典（主担当），竹野　忠弘，神田　幸治，横山　淳一 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 月曜7-8限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  社会工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7716<br>( 202217716 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">経済性工学<br>Engineering Economy</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70297" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">小島　貢利</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 木曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  社会工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7718<br>( 202217718 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">サービスマネジメント<br>Service Management</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70299" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">川村　大伸 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 火曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  社会工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7720<br>( 202217720 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">環境都市設計製図<br>Design and Drawing in Civil Engineering</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70301" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">岩本　政巳 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 火曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  社会工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7721<br>( 202217721 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">経営システム工学応用演習<br>Applied Exercises in Systems Management and Engineering</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70303" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">鷲見　克典</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 金曜7-8限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  社会工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7722<br>( 202217722 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">経営システム工学演習Ⅳ<br>Exercises for Data Analysis in Business ProcessⅣ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70305" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">経営システム分野全教員 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 金曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  社会工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7723<br>( 202217723 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">環境都市工学実験Ⅱ<br>Experiments in Civil EngineeringⅡ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70307" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">海老澤　健正 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 水曜5-8限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  社会工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7724<br>( 202217724 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">建築設計製図Ⅵ<br>Architectural Design StudioⅥ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=73327" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">北川，加茂，夏目，佐藤，近藤，陳</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 月曜5-8限  木曜5-8限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  社会工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7725<br>( 202217725 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">空間デザイン学<br>Space Design</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=73329" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">伊藤　孝紀</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 水曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  社会工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7726<br>( 202217726 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">生活道具デザイン学<br>Industrial Design</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=73331" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">近藤　哲雄</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 木曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  社会工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7727<br>( 202217727 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">デザイン演習Ⅱ<br>Design PracticeⅡ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=73333" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">伊藤　孝紀 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 金曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7751<br>( 202217751 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">PBL演習<br>PBL Exercises</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70309" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">犬塚　信博 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 月曜1-2限  金曜9-10限</FONT></td></tr><input type="hidden"name="perpage" value="20"><input type="hidden" name="page"   value="51">
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
</table></p><div class="paging">ページ:&nbsp;(<a  href="JavaScript:course_custom_paging(50)">前へ</a>)&nbsp;&nbsp<a href="JavaScript:course_custom_paging(0)">1</a>&nbsp;...&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(41)">42</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(42)">43</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(43)">44</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(44)">45</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(45)">46</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(46)">47</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(47)">48</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(48)">49</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(49)">50</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(50)">51</a>&nbsp;&nbsp;52&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(52)">53</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(53)">54</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(54)">55</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(55)">56</a>&nbsp;...<a href="JavaScript:course_custom_paging(103)">104</a>&nbsp;&nbsp;&nbsp;(<a href="JavaScript:course_custom_paging(52)">次へ</a>)</div></center><br />