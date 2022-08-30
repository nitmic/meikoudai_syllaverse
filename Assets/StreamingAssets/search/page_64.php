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
<input type="hidden" name="sesskey" value="wnDlrByPQw ">
</form>
</td></tr></table>
<h2>2061 科目</h2><div class="paging">ページ:&nbsp;(<a  href="JavaScript:course_custom_paging(63)">前へ</a>)&nbsp;&nbsp<a href="JavaScript:course_custom_paging(0)">1</a>&nbsp;...&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(54)">55</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(55)">56</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(56)">57</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(57)">58</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(58)">59</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(59)">60</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(60)">61</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(61)">62</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(62)">63</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(63)">64</a>&nbsp;&nbsp;65&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(65)">66</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(66)">67</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(67)">68</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(68)">69</a>&nbsp;...<a href="JavaScript:course_custom_paging(103)">104</a>&nbsp;&nbsp;&nbsp;(<a href="JavaScript:course_custom_paging(65)">次へ</a>)</div><p><table width="90%" align="center" border="0" cellspacing="0" bgcolor="lightgrey" cellpadding="5"><tr bgcolor="lightblue"><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">区分</FONT></th><th align="center" width=100 nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">時間割番号<br>時間割コード</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">授業科目名</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">シラバス</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">年次</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">単位数</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">担当教員名</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">時間割</FONT></th></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1009<br>( 202241009 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">化学環境システム特論Ⅰ<br>Environmental Systems of Chemical ResourcesⅠ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70793" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">迫　克也</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第１クォーター 月曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1010<br>( 202241010 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">高分子設計特論Ⅰ<br>Advanced Molecular Designs of Polymeric MaterialsⅠ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70795" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">高木　幸治</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第１クォーター 金曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1011<br>( 202241011 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">高分子物性特論<br>Physical Properties of Polymers</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70797" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">岡本　茂</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第１クォーター 木曜9-10限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1012<br>( 202241012 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">材料開発特論<br>Materials Development</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70799" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">杉本　英樹</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第１クォーター 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1013<br>( 202241013 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">高分子物理化学特論Ⅰ<br>Advanced Polymer Physical ChemistryⅠ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70801" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">石井　大佑</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第１クォーター 水曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1014<br>( 202241014 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">生体分子科学特論Ⅰ<br>Advanced Biomolecular ScienceⅠ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70803" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">築地　真也</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第１クォーター 火曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1015<br>( 202241015 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">分子自己組織化特論Ⅰ<br>Histochemistry and Molecular BiologyⅠ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70805" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">信川　省吾</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第１クォーター 水曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1016<br>( 202241016 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">分子機能評価学特論Ⅰ<br>Advanced Characterization of Functional Molecular SystemsⅠ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70807" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">吉里　秀雄</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第１クォーター 月曜7-8限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1017<br>( 202241017 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">セラミックス物理化学特論<br>Ceramics Physical Chemistry</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70809" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">中山　将伸</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第１クォーター 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1018<br>( 202241018 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">無機材料物性特論<br>Functional Properties of Ceramics</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70811" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">柿本　健一</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第１クォーター 月曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1019<br>( 202241019 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">環境エネルギー材料合成特論<br>Energy Environmental Materials Synthesis</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70813" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">羽田　政明</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第１クォーター 水曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1020<br>( 202241020 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">エンジニアリングセラミックス特論<br>Engineering Ceramics</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70815" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">日向　秀樹 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第１クォーター 火曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1021<br>( 202241021 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">セラミックス組織制御特論Ⅰ<br>Microstructure of CeramicsⅠ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70817" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">安達　信泰</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第１クォーター 水曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1101<br>( 202241101 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">生物物理化学特論<br>Advanced Biophysical Chemistry</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70819" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">神取　秀樹</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第４クォーター 火曜7-8限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1102<br>( 202241102 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">超分子化学特論<br>Advanced Supramolecular Chemistry</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70821" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">大北　雅一</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第２クォーター 月曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1103<br>( 202241103 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">精密有機合成化学特論<br>Organic Synthetic Chemistry</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70823" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">中村　修一</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第２クォーター 火曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1104<br>( 202241104 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">生物有機化学特論<br>Bioorganic Chemistry</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70825" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">宮川　淳</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第２クォーター 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1105<br>( 202241105 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">精密電気分析化学特論<br>Precise Electroanalytical Chemistry</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70827" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">高田　主岳</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第２クォーター 火曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1106<br>( 202241106 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">先端機器分析特論<br>Advanced Instrumental Analysis</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70829" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">北川　慎也,大谷　肇 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第２クォーター 火曜7-8限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1107<br>( 202241107 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">工業電気化学特論<br>Advanced Industrial Electrochemistry</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70831" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">川崎　晋司</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第２クォーター 木曜5-6限</FONT></td></tr><input type="hidden"name="perpage" value="20"><input type="hidden" name="page"   value="64">
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
</table></p><div class="paging">ページ:&nbsp;(<a  href="JavaScript:course_custom_paging(63)">前へ</a>)&nbsp;&nbsp<a href="JavaScript:course_custom_paging(0)">1</a>&nbsp;...&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(54)">55</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(55)">56</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(56)">57</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(57)">58</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(58)">59</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(59)">60</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(60)">61</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(61)">62</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(62)">63</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(63)">64</a>&nbsp;&nbsp;65&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(65)">66</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(66)">67</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(67)">68</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(68)">69</a>&nbsp;...<a href="JavaScript:course_custom_paging(103)">104</a>&nbsp;&nbsp;&nbsp;(<a href="JavaScript:course_custom_paging(65)">次へ</a>)</div></center><br />