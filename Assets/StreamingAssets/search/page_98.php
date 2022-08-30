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
<input type="hidden" name="sesskey" value="KBQanS6oyL ">
</form>
</td></tr></table>
<h2>2061 科目</h2><div class="paging">ページ:&nbsp;(<a  href="JavaScript:course_custom_paging(97)">前へ</a>)&nbsp;&nbsp<a href="JavaScript:course_custom_paging(0)">1</a>&nbsp;...&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(88)">89</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(89)">90</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(90)">91</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(91)">92</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(92)">93</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(93)">94</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(94)">95</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(95)">96</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(96)">97</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(97)">98</a>&nbsp;&nbsp;99&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(99)">100</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(100)">101</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(101)">102</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(102)">103</a>&nbsp;...<a href="JavaScript:course_custom_paging(103)">104</a>&nbsp;&nbsp;&nbsp;(<a href="JavaScript:course_custom_paging(99)">次へ</a>)</div><p><table width="90%" align="center" border="0" cellspacing="0" bgcolor="lightgrey" cellpadding="5"><tr bgcolor="lightblue"><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">区分</FONT></th><th align="center" width=100 nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">時間割番号<br>時間割コード</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">授業科目名</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">シラバス</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">年次</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">単位数</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">担当教員名</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">時間割</FONT></th></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士後期課程 共同ナノメディシン科学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7302<br>( 202257302 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">高精密有機合成化学<br>Advanced Organic Synthesis</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72217" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">柴田　哲男</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜7-8限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士後期課程 共同ナノメディシン科学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7304<br>( 202257304 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">生体関連物質設計学<br>Molecular designs for life science</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72219" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">水野　稔久</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士後期課程 共同ナノメディシン科学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7306<br>( 202257306 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">マイクロ・ナノバイオメカニクス<br>Micro-nano Biomechanics</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72221" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">中村　匡徳</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 月曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士後期課程 共同ナノメディシン科学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7307<br>( 202257307 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">次世代医薬品開発学１<br>Innovative Drug Discovery1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72223" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">林　秀敏</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第３クォーター 水曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士後期課程 共同ナノメディシン科学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7308<br>( 202257308 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">次世代医薬品開発学２<br>Innovative Drug Discovery2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72225" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">林　秀敏</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第４クォーター 水曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士後期課程 共同ナノメディシン科学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7309<br>( 202257309 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">製剤設計・薬物送達制御学１<br>Advanced Pharmaceutics and Drug Delivery1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72227" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">尾関　哲也</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第３クォーター 木曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士後期課程 共同ナノメディシン科学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7310<br>( 202257310 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">製剤設計・薬物送達制御学２<br>Advanced Pharmaceutics and Drug Delivery2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72229" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">尾関　哲也</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第４クォーター 木曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士後期課程 共同ナノメディシン科学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7311<br>( 202257311 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">医薬支援ソフトマター物性論１<br>Soft matter physics and chemistry for medicine1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72231" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">山中　淳平</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第３クォーター 木曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士後期課程 共同ナノメディシン科学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7312<br>( 202257312 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">医薬支援ソフトマター物性論２<br>Soft matter physics and chemistry for medicine2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72233" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">山中　淳平</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第４クォーター 木曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士後期課程 共同ナノメディシン科学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7401<br>( 202257401 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">機能医薬創成学特別研究１<br>Special study in Advanced Medical Chemistry 1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72235" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">柴田　哲男</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 金曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士後期課程 共同ナノメディシン科学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7402<br>( 202257402 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">機能医薬創成学特別研究１<br>Special study in Advanced Medical Chemistry 1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72237" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">小澤　智宏</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 金曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士後期課程 共同ナノメディシン科学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7411<br>( 202257411 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">機能医薬創成学特別研究１<br>Special study in Advanced Medical Chemistry 1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72239" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">林　秀敏、井上　靖道、宮嶋　ちはる</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 金曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士後期課程 共同ナノメディシン科学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7423<br>( 202257423 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">薬物送達・動態科学特別研究１<br>Special study in delivery and dynamic sciences of medicine 1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72243" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">出羽　毅久</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 金曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士後期課程 共同ナノメディシン科学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7431<br>( 202257431 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">薬物送達・動態科学特別研究１<br>Special study in delivery and dynamic sciences of medicine 1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72245" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">尾関哲也、田上辰秋、小川　昂輝</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 金曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士後期課程 共同ナノメディシン科学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7443<br>( 202257443 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">医薬支援ナノ工学特別研究１<br>Advanced study on nanoengineering for medicine 1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72247" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">築地　真也</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 金曜7-8限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士後期課程 共同ナノメディシン科学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7444<br>( 202257444 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">医薬支援ナノ工学特別研究１<br></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72249" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">中村　匡徳</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 金曜7-8限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士後期課程 共同ナノメディシン科学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7451<br>( 202257451 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">医薬支援ナノ工学特別研究１<br>Advanced study on nanoengineering for medicine 1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72251" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">山中淳平、奥薗透、豊玉彰子</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 金曜7-8限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士後期課程 共同ナノメディシン科学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7452<br>( 202257452 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">薬物送達・動態科学特別研究１<br></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72253" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">水野　稔久</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 金曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士後期課程 共同ナノメディシン科学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7501<br>( 202257501 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">機能医薬創成学特別研究２<br>Special study in Advanced Medical Chemistry 2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72255" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">柴田　哲男</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 金曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士後期課程 共同ナノメディシン科学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7502<br>( 202257502 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">機能医薬創成学特別研究２<br>Special study in Advanced Medical Chemistry 2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72257" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">小澤　智宏</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 金曜3-4限</FONT></td></tr><input type="hidden"name="perpage" value="20"><input type="hidden" name="page"   value="98">
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
</table></p><div class="paging">ページ:&nbsp;(<a  href="JavaScript:course_custom_paging(97)">前へ</a>)&nbsp;&nbsp<a href="JavaScript:course_custom_paging(0)">1</a>&nbsp;...&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(88)">89</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(89)">90</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(90)">91</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(91)">92</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(92)">93</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(93)">94</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(94)">95</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(95)">96</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(96)">97</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(97)">98</a>&nbsp;&nbsp;99&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(99)">100</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(100)">101</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(101)">102</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(102)">103</a>&nbsp;...<a href="JavaScript:course_custom_paging(103)">104</a>&nbsp;&nbsp;&nbsp;(<a href="JavaScript:course_custom_paging(99)">次へ</a>)</div></center><br />