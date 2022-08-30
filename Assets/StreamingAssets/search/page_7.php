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
<input type="hidden" name="sesskey" value="ZmLO4T5mCT ">
</form>
</td></tr></table>
<h2>2061 科目</h2><div class="paging">ページ:&nbsp;(<a  href="JavaScript:course_custom_paging(6)">前へ</a>)&nbsp;&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(0)">1</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(1)">2</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(2)">3</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(3)">4</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(4)">5</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(5)">6</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(6)">7</a>&nbsp;&nbsp;8&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(8)">9</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(9)">10</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(10)">11</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(11)">12</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(12)">13</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(13)">14</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(14)">15</a>&nbsp;...<a href="JavaScript:course_custom_paging(103)">104</a>&nbsp;&nbsp;&nbsp;(<a href="JavaScript:course_custom_paging(8)">次へ</a>)</div><p><table width="90%" align="center" border="0" cellspacing="0" bgcolor="lightgrey" cellpadding="5"><tr bgcolor="lightblue"><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">区分</FONT></th><th align="center" width=100 nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">時間割番号<br>時間割コード</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">授業科目名</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">シラバス</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">年次</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">単位数</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">担当教員名</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">時間割</FONT></th></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  人間社会</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">0315<br>( 202210315 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">地域研究Ⅰ（ドイツ）<br>Area StudiesⅠ(Germany)</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72715" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">武田　竜弥</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  人間社会</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">0316<br>( 202210316 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">地域研究Ⅰ（中国）<br>Area StudiesⅠ(China)</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72717" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">武田　みゆき</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  人間社会</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">0321<br>( 202210321 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">地域研究Ⅰ（韓国）<br>Area StudiesⅠ(South Korea)</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72719" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">金　銀珠</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  人間社会</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">0322<br>( 202210322 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">生物と環境<br>Life and Environment</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72721" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">増田　理子 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  人間社会</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">0323<br>( 202210323 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">対人コミュニケーション論<br>Interpersonal Communication</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72723" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">田中　優子</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  人間社会</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">0324<br>( 202210324 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">人間行動学<br>Human Behavior</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72725" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">小田　亮</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  人間社会</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">0325<br>( 202210325 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">科学と哲学<br>Science and Philosophy</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72727" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">瀬口　昌久</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  人間社会</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">0326<br>( 202210326 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">共生社会論<br>Human Coexistence</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72729" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">川崎　雄二郎</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  人間社会</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">0327<br>( 202210327 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">近現代史<br>Modern History</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72731" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">古結　諒子</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  人間社会</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">0328<br>( 202210328 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">公共の哲学<br>Public Philosophy</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72733" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">藤本　温</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  人間社会</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">0329<br>( 202210329 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">経済学<br>Economics</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72735" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">竹野　忠弘 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  人間社会</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">0330<br>( 202210330 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">現代社会論<br>Contemporary Society</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72737" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">松波　京子</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  人間社会</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">0331<br>( 202210331 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">現代政治論<br>Contemporary Politics</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72739" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">安武　裕和</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  人間社会</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">0332<br>( 202210332 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">公共政策論<br>Public Policy</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72741" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">上原　直人</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  人間社会</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">0333<br>( 202210333 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">情報社会論<br>Information Society</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72743" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">齋藤　彰一</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  人間社会</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">0334<br>( 202210334 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">日本国憲法<br>Japanese Constitution</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72745" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">小林　正嗣</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  人間社会</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">0335<br>( 202210335 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">地域研究Ⅰ（ドイツ）<br>Area StudiesⅠ(Germany)</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72747" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">武田　竜弥</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  人間社会</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">0336<br>( 202210336 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">地域研究Ⅰ（中国）<br>Area StudiesⅠ(China)</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72749" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">武田　みゆき</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  人間社会</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">0337<br>( 202210337 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">科学技術史<br>History of Science and Technology</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72751" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">川島　慶子</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  人間社会</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">0338<br>( 202210338 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">宗教文化論<br>Religion and Culture</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72753" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">犬塚　悠</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜3-4限</FONT></td></tr><input type="hidden"name="perpage" value="20"><input type="hidden" name="page"   value="7">
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
</table></p><div class="paging">ページ:&nbsp;(<a  href="JavaScript:course_custom_paging(6)">前へ</a>)&nbsp;&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(0)">1</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(1)">2</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(2)">3</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(3)">4</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(4)">5</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(5)">6</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(6)">7</a>&nbsp;&nbsp;8&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(8)">9</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(9)">10</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(10)">11</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(11)">12</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(12)">13</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(13)">14</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(14)">15</a>&nbsp;...<a href="JavaScript:course_custom_paging(103)">104</a>&nbsp;&nbsp;&nbsp;(<a href="JavaScript:course_custom_paging(8)">次へ</a>)</div></center><br />