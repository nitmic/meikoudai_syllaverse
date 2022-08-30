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
<input type="hidden" name="sesskey" value="GjM4OYlN4B ">
</form>
</td></tr></table>
<h2>2061 科目</h2><div class="paging">ページ:&nbsp;(<a  href="JavaScript:course_custom_paging(20)">前へ</a>)&nbsp;&nbsp<a href="JavaScript:course_custom_paging(0)">1</a>&nbsp;...&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(11)">12</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(12)">13</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(13)">14</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(14)">15</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(15)">16</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(16)">17</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(17)">18</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(18)">19</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(19)">20</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(20)">21</a>&nbsp;&nbsp;22&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(22)">23</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(23)">24</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(24)">25</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(25)">26</a>&nbsp;...<a href="JavaScript:course_custom_paging(103)">104</a>&nbsp;&nbsp;&nbsp;(<a href="JavaScript:course_custom_paging(22)">次へ</a>)</div><p><table width="90%" align="center" border="0" cellspacing="0" bgcolor="lightgrey" cellpadding="5"><tr bgcolor="lightblue"><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">区分</FONT></th><th align="center" width=100 nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">時間割番号<br>時間割コード</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">授業科目名</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">シラバス</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">年次</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">単位数</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">担当教員名</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">時間割</FONT></th></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  生命・応用化学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2417<br>( 202212417 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">計算機化学<br>Computational Chemistry</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69539" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">稲井　嘉人</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 水曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  生命・応用化学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2418<br>( 202212418 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">固体反応速度学<br>Kinetics of Solid State Reaction</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69541" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">籠宮　功</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  生命・応用化学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2419<br>( 202212419 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">物理化学実験<br>Physical Chemistry Laboratory</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69543" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">神取　秀樹 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 月曜3-8限  木曜3-8限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  生命・応用化学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2420<br>( 202212420 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">有機化学実験<br>Organic Chemistry Laboratory</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69545" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">山村　初雄 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 月曜3-8限  木曜3-8限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  生命・応用化学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2421<br>( 202212421 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">分析化学実験<br>Analytical Chemistry Laboratory</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69547" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">北川　慎也 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 月曜3-8限  木曜3-8限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  生命・応用化学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2422<br>( 202212422 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">ソフトマテリアル化学実験Ⅰ<br>Soft Materials LaboratoryⅠ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69549" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">4</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">迫　克也 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 木曜1-8限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  生命・応用化学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2423<br>( 202212423 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">セラミックス応用学実験Ⅰ<br>Experiments in Applied Ceramic ScienceⅠ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69551" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">谷端　直人 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 月曜3-8限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  生命・応用化学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2424<br>( 202212424 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">セラミックス応用学実験Ⅱ<br>Experiments in Applied Ceramic ScienceⅡ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69553" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">谷端　直人 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 木曜3-8限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  生命・応用化学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2425<br>( 202212425 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">セラミックス応用学演習Ⅱ<br>Exercises in Applied Ceramic ScienceⅡ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69555" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">籠宮　功 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 木曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  生命・応用化学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2426<br>( 202212426 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">セラミックス材料強度学<br>Strength and Toughness of Ceramics</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69557" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">白井　孝</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 金曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  物理工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2453<br>( 202212453 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">固体物理Ⅱ<br>Solid State PhysicsⅡ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69559" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">濱中　泰</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 水曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  物理工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2454<br>( 202212454 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">電子材料の量子論<br>Quantum Theory of Electronic Materials</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72865" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">大原　繁男</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 金曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  物理工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2455<br>( 202212455 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">反応速度論<br>Kinetics of Material Reaction</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69561" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">奥村　圭二 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 木曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  物理工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2456<br>( 202212456 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">材料強度学<br>Strength and Plasticity of Materials</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69563" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">萩原　幸司</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 木曜7-8限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  物理工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2457<br>( 202212457 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">シミュレーション工学<br>Simulation of Physical Phenomena</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69565" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">尾形　修司 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 金曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  物理工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2458<br>( 202212458 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">材料電気化学<br>Electrochemistry of Materials</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72867" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">栗田　典明 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 火曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  物理工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2459<br>( 202212459 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">固体物理Ⅰ<br>Solid State PhysicsⅠ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69567" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">岩田　真</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 木曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  物理工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2460<br>( 202212460 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">応用物理学実験Ⅱ<br>Experiments in Applied PhysicsⅡ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69569" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">小林　亮 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 月曜5-8限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  物理工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2461<br>( 202212461 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">量子力学演習<br>Exercises in Quantum Mechanics</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69571" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">小林　亮 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 水曜3-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  物理工学科<BR> 工学部第一部  創造工学教育課程</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2462<br>( 202212462 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">材料機能工学演習Ⅰ<br>Materials Function ExerciseⅠ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=69573" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">宮崎　怜雄奈</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前期 月曜1-2限</FONT></td></tr><input type="hidden"name="perpage" value="20"><input type="hidden" name="page"   value="21">
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
</table></p><div class="paging">ページ:&nbsp;(<a  href="JavaScript:course_custom_paging(20)">前へ</a>)&nbsp;&nbsp<a href="JavaScript:course_custom_paging(0)">1</a>&nbsp;...&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(11)">12</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(12)">13</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(13)">14</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(14)">15</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(15)">16</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(16)">17</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(17)">18</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(18)">19</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(19)">20</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(20)">21</a>&nbsp;&nbsp;22&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(22)">23</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(23)">24</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(24)">25</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(25)">26</a>&nbsp;...<a href="JavaScript:course_custom_paging(103)">104</a>&nbsp;&nbsp;&nbsp;(<a href="JavaScript:course_custom_paging(22)">次へ</a>)</div></center><br />