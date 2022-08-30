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
<input type="hidden" name="sesskey" value="Fkyil26Ad7 ">
</form>
</td></tr></table>
<h2>2061 科目</h2><div class="paging">ページ:&nbsp;(<a  href="JavaScript:course_custom_paging(13)">前へ</a>)&nbsp;&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(0)">1</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(1)">2</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(2)">3</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(3)">4</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(4)">5</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(5)">6</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(6)">7</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(7)">8</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(8)">9</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(9)">10</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(10)">11</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(11)">12</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(12)">13</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(13)">14</a>&nbsp;&nbsp;15&nbsp;...<a href="JavaScript:course_custom_paging(103)">104</a>&nbsp;</div><p><table width="90%" align="center" border="0" cellspacing="0" bgcolor="lightgrey" cellpadding="5"><tr bgcolor="lightblue"><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">区分</FONT></th><th align="center" width=100 nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">時間割番号<br>時間割コード</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">授業科目名</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">シラバス</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">年次</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">単位数</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">担当教員名</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">時間割</FONT></th></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  生命・応用化学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1412<br>( 202211412 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">高分子科学Ⅰ<br>Polymer ScienceⅠ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69263" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">山本　勝宏 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 水曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  生命・応用化学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1413<br>( 202211413 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">基礎有機化学Ⅱ<br>Basic Organic ChemistryⅡ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69265" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">山村　初雄</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  生命・応用化学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1414<br>( 202211414 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">高分子物理化学Ⅱ<br>Polymer Physical ChemistryⅡ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69267" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">石井　大佑</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 月曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  生命・応用化学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1415<br>( 202211415 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">固体熱科学Ⅰ<br>Solid State ThermochemistryⅠ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69269" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">福田　功一郎</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  生命・応用化学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1416<br>( 202211416 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">量子科学基礎<br>Principles of Quantum Science</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69271" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">浅香　透</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜7-8限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  生命・応用化学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1417<br>( 202211417 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">物質科学Ⅰ<br>Materials ScienceⅠ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69273" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">安達　信泰</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 水曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  生命・応用化学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1418<br>( 202211418 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">アモルファス構造化学<br>Structural Chemistry of Amorphous Materials</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69275" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">大幸　裕介</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 金曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  生命・応用化学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1419<br>( 202211419 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">無機・有機ハイブリッド化学Ⅰ<br>Inorganic-Organic Hybrid ChemistryⅠ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69277" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">岩本　雄二</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 木曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  生命・応用化学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1420<br>( 202211420 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">基礎有機化学Ⅱ<br>Basic Organic ChemistryⅡ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69279" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">塩塚　理仁</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  物理工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1451<br>( 202211451 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">熱力学<br>Thermodynamics</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69281" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">呉　松竹</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 金曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  物理工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1452<br>( 202211452 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">解析力学<br>Analytical Mechanics</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69283" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">壬生　攻</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 月曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  物理工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1453<br>( 202211453 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">物理・材料数学Ⅱ<br>Mathematics for Physics and MetallurgyⅡ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69285" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">濱中　泰、田中  雅章 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  物理工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1454<br>( 202211454 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">解析力学<br>Analytical Mechanics</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69287" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">丹澤　和寿</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  物理工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1455<br>( 202211455 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">応用電磁気学Ⅰ<br>Applied ElectromagnetismⅠ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69289" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">岩田　真</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 水曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  物理工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1456<br>( 202211456 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">熱力学<br>Thermodynamics</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69291" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">丹澤　和寿</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 月曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  物理工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1457<br>( 202211457 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">回折結晶学<br>Crystallography and Diffraction</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69293" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">宮崎　秀俊</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  物理工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1458<br>( 202211458 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">量子力学Ⅰ<br>Quantum MechanicsⅠ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69295" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">井手　直樹</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  物理工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1459<br>( 202211459 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">材料物理学<br>Material Physics</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69297" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">萩原　幸司</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 木曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  物理工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1460<br>( 202211460 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">力学・電磁気学演習<br>Exercises in Mechanics and Electromagnetism</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69299" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">田村　友幸 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜3-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  物理工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1461<br>( 202211461 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">物理数学Ⅰ<br>Physical MathematicsⅠ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69301" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">馮　偉</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 木曜3-4限</FONT></td></tr><input type="hidden"name="perpage" value="20"><input type="hidden" name="page"   value="14">
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
</table></p><div class="paging">ページ:&nbsp;(<a  href="JavaScript:course_custom_paging(13)">前へ</a>)&nbsp;&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(0)">1</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(1)">2</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(2)">3</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(3)">4</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(4)">5</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(5)">6</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(6)">7</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(7)">8</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(8)">9</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(9)">10</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(10)">11</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(11)">12</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(12)">13</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(13)">14</a>&nbsp;&nbsp;15&nbsp;...<a href="JavaScript:course_custom_paging(103)">104</a>&nbsp;</div></center><br />