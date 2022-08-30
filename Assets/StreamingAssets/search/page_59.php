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
<input type="hidden" name="sesskey" value="JnKV0GD6Xi ">
</form>
</td></tr></table>
<h2>2061 科目</h2><div class="paging">ページ:&nbsp;(<a  href="JavaScript:course_custom_paging(58)">前へ</a>)&nbsp;&nbsp<a href="JavaScript:course_custom_paging(0)">1</a>&nbsp;...&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(49)">50</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(50)">51</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(51)">52</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(52)">53</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(53)">54</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(54)">55</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(55)">56</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(56)">57</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(57)">58</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(58)">59</a>&nbsp;&nbsp;60&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(60)">61</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(61)">62</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(62)">63</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(63)">64</a>&nbsp;...<a href="JavaScript:course_custom_paging(103)">104</a>&nbsp;&nbsp;&nbsp;(<a href="JavaScript:course_custom_paging(60)">次へ</a>)</div><p><table width="90%" align="center" border="0" cellspacing="0" bgcolor="lightgrey" cellpadding="5"><tr bgcolor="lightblue"><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">区分</FONT></th><th align="center" width=100 nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">時間割番号<br>時間割コード</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">授業科目名</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">シラバス</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">年次</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">単位数</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">担当教員名</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">時間割</FONT></th></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 社会開発工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7804<br>( 202227804 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">コンクリート構造学<br>Concrete Structures</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70593" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">吉田　亮</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 月曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 社会開発工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7806<br>( 202227806 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">地盤工学<br>Exercises in Geomechanics</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70595" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前田　健一</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 月曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 社会開発工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7807<br>( 202227807 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">トライボロジー<br>Tribology</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70597" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">糸魚川　文広 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 社会開発工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7809<br>( 202227809 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">環境水理学演習<br>Exercises in Hydraulics</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70599" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">庄　建治朗 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 木曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 物質工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">8501<br>( 202228501 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">生体分析化学<br>Analytical Chemistry for Biological Compounds</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70601" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">北川　慎也</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 物質工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">8502<br>( 202228502 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">固体化学<br>Solid State Chemistry</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70603" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">猪股　智彦 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 月曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 物質工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">8503<br>( 202228503 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">応用電気化学<br>Applied Electrochemistry</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70605" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">川崎　晋司 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 木曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 物質工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">8504<br>( 202228504 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">高分子設計<br>Polymer Design</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70607" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">水野　稔久</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 木曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 物質工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">8505<br>( 202228505 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">材料科学基礎<br>Fundmentals of Material Science</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70609" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">奥村　圭二 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 水曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 物質工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">8506<br>( 202228506 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">セラミックス材料概論<br>Introduction of Ceramic Materials</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70611" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">春日　敏宏</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 火曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 物質工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">8507<br>( 202228507 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">環境生態学<br>Environmental Ecology</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70613" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">増田　理子</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 水曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 機械工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">8601<br>( 202228601 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">材料科学基礎<br>Fundmentals of Material Science</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70615" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">奥村　圭二 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 水曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 機械工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">8602<br>( 202228602 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">セラミックス材料概論<br>Introduction of Ceramic Materials</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70617" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">春日　敏宏</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 火曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 機械工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">8603<br>( 202228603 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">環境生態学<br>Environmental Ecology</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70619" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">増田　理子</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 水曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 機械工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">8604<br>( 202228604 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">設計製図<br>Machine Design and Drawing</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70621" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">長谷川　豊</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 木曜1-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 機械工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">8605<br>( 202228605 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">特別講義Ⅰ<br>Advanced LectureⅠ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70623" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">鵜野　弘樹 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 月曜1-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 機械工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">8606<br>( 202228606 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">特別講義Ⅱ<br>Advanced LectureⅡ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70625" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">藤井　和慶 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 月曜1-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 電気情報工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">8701<br>( 202228701 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">電気エネルギー工学<br>Electric Energy Generation System</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70627" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">安井　晋示</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 月曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 電気情報工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">8702<br>( 202228702 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">通信工学<br>Communication Engineering</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70629" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">平山　裕</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 電気情報工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">8703<br>( 202228703 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">電子デバイス工学<br>Electronic Devices</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70631" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">曾我　哲夫</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 金曜1-2限</FONT></td></tr><input type="hidden"name="perpage" value="20"><input type="hidden" name="page"   value="59">
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
</table></p><div class="paging">ページ:&nbsp;(<a  href="JavaScript:course_custom_paging(58)">前へ</a>)&nbsp;&nbsp<a href="JavaScript:course_custom_paging(0)">1</a>&nbsp;...&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(49)">50</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(50)">51</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(51)">52</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(52)">53</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(53)">54</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(54)">55</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(55)">56</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(56)">57</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(57)">58</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(58)">59</a>&nbsp;&nbsp;60&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(60)">61</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(61)">62</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(62)">63</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(63)">64</a>&nbsp;...<a href="JavaScript:course_custom_paging(103)">104</a>&nbsp;&nbsp;&nbsp;(<a href="JavaScript:course_custom_paging(60)">次へ</a>)</div></center><br />