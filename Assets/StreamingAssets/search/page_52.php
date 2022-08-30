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
<input type="hidden" name="sesskey" value="ibOuqwdXvO ">
</form>
</td></tr></table>
<h2>2061 科目</h2><div class="paging">ページ:&nbsp;(<a  href="JavaScript:course_custom_paging(51)">前へ</a>)&nbsp;&nbsp<a href="JavaScript:course_custom_paging(0)">1</a>&nbsp;...&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(42)">43</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(43)">44</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(44)">45</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(45)">46</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(46)">47</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(47)">48</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(48)">49</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(49)">50</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(50)">51</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(51)">52</a>&nbsp;&nbsp;53&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(53)">54</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(54)">55</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(55)">56</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(56)">57</a>&nbsp;...<a href="JavaScript:course_custom_paging(103)">104</a>&nbsp;&nbsp;&nbsp;(<a href="JavaScript:course_custom_paging(53)">次へ</a>)</div><p><table width="90%" align="center" border="0" cellspacing="0" bgcolor="lightgrey" cellpadding="5"><tr bgcolor="lightblue"><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">区分</FONT></th><th align="center" width=100 nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">時間割番号<br>時間割コード</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">授業科目名</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">シラバス</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">年次</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">単位数</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">担当教員名</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">時間割</FONT></th></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7752<br>( 202217752 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">創造工学研究１<br>Creative Engineering ProjectⅠ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70311" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">創造工学教育課程全教員 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 集中</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  生命・応用化学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">8401<br>( 202218401 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">生命・物質化学演習Ⅱ<br>Exercises in Molecular Chemistry and Biological ChemistryⅡ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70313" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">生命・物質化学分野全教員 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 月曜7-8限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  生命・応用化学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">8402<br>( 202218402 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">ソフトマテリアル化学演習Ⅱ<br>Soft Materials ExerciseⅡ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70315" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">ソフトマテリアル分野全教員 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 月曜7-8限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  電気・機械工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">8551<br>( 202218551 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">電波法規<br>Radio Law</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70317" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">山根　宏 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 集中</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  情報工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">8601<br>( 202218601 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">インターンシップⅡ<br>InternshipⅡ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70319" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">松井　俊浩</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 集中</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  社会工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">8701<br>( 202218701 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">経営システム工学総合演習Ⅱ<br>Integrated Exercises in Systems Management and EngineeringⅡ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70321" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">経営システム分野全教員 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 月曜9-10限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">8751<br>( 202218751 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">創造工学研究３<br>Creative Engineering Project 3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70323" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">創造工学教育課程全教員 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 集中</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 理系基礎</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1101<br>( 202221101 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">技術史<br>History of Technology</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70325" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">佐野　明人 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 月曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 リベラルアーツ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1301<br>( 202221301 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">科学技術英語Ⅱa<br>English for Science and TechnologyⅡa</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70327" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">Sweetlove Douglas 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 水曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 リベラルアーツ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1302<br>( 202221302 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">総合外国語Ⅲ<br>Foreign Language and CultureⅢ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70329" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">Sweetlove Douglas</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 木曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 リベラルアーツ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1303<br>( 202221303 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">生命の科学<br>Biological Sciences</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70331" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">小田　亮</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 リベラルアーツ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1304<br>( 202221304 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">憲法<br>Constitution</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70333" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">小林　正嗣</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 リベラルアーツ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1305<br>( 202221305 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">体育実技Ⅱ<br>Physical EducationⅡ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70335" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">吉里　秀雄</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 月曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 リベラルアーツ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1306<br>( 202221306 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">国際関係論<br>International Political Economy</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70337" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">小林　正嗣</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 物質工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1501<br>( 202221501 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">有機化学<br>Organic Chemistry</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70341" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">山村　初雄</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 水曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 物質工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1502<br>( 202221502 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">無機化学Ⅱ<br>Inorganic ChemistryⅡ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70343" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">川崎　晋司 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 金曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 物質工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1503<br>( 202221503 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">流れの科学<br>Science of flow phenomena</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70345" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">内藤　隆</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 木曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 機械工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1601<br>( 202221601 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">流れの科学<br>Science of flow phenomena</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70347" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">内藤　隆</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 木曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 機械工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1602<br>( 202221602 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">熱力学<br>Thermodynamics of Materials</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70349" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">飯田　雄章</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 水曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 機械工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1603<br>( 202221603 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">機械製図<br>Mechanical Drawing</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70351" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">齋木　悠 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 金曜1-4限</FONT></td></tr><input type="hidden"name="perpage" value="20"><input type="hidden" name="page"   value="52">
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
</table></p><div class="paging">ページ:&nbsp;(<a  href="JavaScript:course_custom_paging(51)">前へ</a>)&nbsp;&nbsp<a href="JavaScript:course_custom_paging(0)">1</a>&nbsp;...&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(42)">43</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(43)">44</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(44)">45</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(45)">46</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(46)">47</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(47)">48</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(48)">49</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(49)">50</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(50)">51</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(51)">52</a>&nbsp;&nbsp;53&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(53)">54</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(54)">55</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(55)">56</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(56)">57</a>&nbsp;...<a href="JavaScript:course_custom_paging(103)">104</a>&nbsp;&nbsp;&nbsp;(<a href="JavaScript:course_custom_paging(53)">次へ</a>)</div></center><br />