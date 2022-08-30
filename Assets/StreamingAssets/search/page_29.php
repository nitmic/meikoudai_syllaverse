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
<input type="hidden" name="sesskey" value="p4bqBPaoIG ">
</form>
</td></tr></table>
<h2>2061 科目</h2><div class="paging">ページ:&nbsp;(<a  href="JavaScript:course_custom_paging(28)">前へ</a>)&nbsp;&nbsp<a href="JavaScript:course_custom_paging(0)">1</a>&nbsp;...&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(19)">20</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(20)">21</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(21)">22</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(22)">23</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(23)">24</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(24)">25</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(25)">26</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(26)">27</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(27)">28</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(28)">29</a>&nbsp;&nbsp;30&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(30)">31</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(31)">32</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(32)">33</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(33)">34</a>&nbsp;...<a href="JavaScript:course_custom_paging(103)">104</a>&nbsp;&nbsp;&nbsp;(<a href="JavaScript:course_custom_paging(30)">次へ</a>)</div><p><table width="90%" align="center" border="0" cellspacing="0" bgcolor="lightgrey" cellpadding="5"><tr bgcolor="lightblue"><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">区分</FONT></th><th align="center" width=100 nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">時間割番号<br>時間割コード</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">授業科目名</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">シラバス</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">年次</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">単位数</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">担当教員名</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">時間割</FONT></th></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  自然科学基礎</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">5053<br>( 202215053 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">電磁気学<br>Electricity and Magnetism</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72961" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">礒部　雅晴</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 木曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  自然科学基礎</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">5054<br>( 202215054 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">電磁気学<br>Electricity and Magnetism</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72963" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">本林　健太</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 木曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  自然科学基礎</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">5055<br>( 202215055 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">電磁気学<br>Electricity and Magnetism</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72965" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">菊間　信良</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 月曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  自然科学基礎</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">5056<br>( 202215056 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">電磁気学<br>Electricity and Magnetism</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72967" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">榊原　久二男</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 月曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  自然科学基礎</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">5057<br>( 202215057 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">電磁気学<br>Electricity and Magnetism</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72969" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">Ｎｉｒａｕｌａ　Ｍａｄａｎ</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 金曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  自然科学基礎</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">5058<br>( 202215058 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">電磁気学<br>Electricity and Magnetism</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72971" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">田中　雅章</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 金曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  自然科学基礎</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">5059<br>( 202215059 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">電磁気学<br>Electricity and Magnetism</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72973" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">在田　謙一郎</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 金曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  自然科学基礎</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">5060<br>( 202215060 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">電磁気学<br>Electricity and Magnetism</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72975" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">木村　高志</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 金曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  自然科学基礎</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">5061<br>( 202215061 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">物理学演習Ⅱ<br>Exercises in PhysicsⅡ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72977" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">小林　亮</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 月曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  自然科学基礎</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">5062<br>( 202215062 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">物理学演習Ⅱ<br>Exercises in PhysicsⅡ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72979" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">宮崎　怜雄奈，成田　麻未 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 月曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  自然科学基礎</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">5063<br>( 202215063 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">物理学演習Ⅱ<br>Exercises in PhysicsⅡ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72981" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">菊間　信良 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 金曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  自然科学基礎</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">5064<br>( 202215064 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">物理学演習Ⅱ<br>Exercises in PhysicsⅡ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72983" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">菊間　信良 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 金曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  自然科学基礎</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">5066<br>( 202215066 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">物理学演習Ⅱ<br>Exercises in PhysicsⅡ</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72985" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">森谷智一、徳永透子 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 月曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  自然科学基礎</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">5068<br>( 202215068 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">物理学実験<br>Experiments in Physics</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72987" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">大原　繁男 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 金曜5-8限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  自然科学基礎</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">5069<br>( 202215069 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">物理学実験<br>Experiments in Physics</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72989" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">大原　繁男 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 火曜5-8限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  自然科学基礎</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">5070<br>( 202215070 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">電磁気学<br>Electricity and Magnetism</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72991" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">伊藤　桂</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 金曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  自然科学基礎</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">5101<br>( 202215101 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">基礎化学<br>General Chemistry</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72993" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">迫　克也</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 火曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  自然科学基礎</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">5102<br>( 202215102 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">基礎化学<br>General Chemistry</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72995" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">塩塚　理仁</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 火曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  自然科学基礎</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">5103<br>( 202215103 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">基礎化学<br>General Chemistry</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72997" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">樋口　真弘 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 木曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第一部  自然科学基礎</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">5104<br>( 202215104 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">基礎化学<br>General Chemistry</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=72999" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">安達　信泰 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 木曜3-4限</FONT></td></tr><input type="hidden"name="perpage" value="20"><input type="hidden" name="page"   value="29">
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
</table></p><div class="paging">ページ:&nbsp;(<a  href="JavaScript:course_custom_paging(28)">前へ</a>)&nbsp;&nbsp<a href="JavaScript:course_custom_paging(0)">1</a>&nbsp;...&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(19)">20</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(20)">21</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(21)">22</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(22)">23</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(23)">24</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(24)">25</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(25)">26</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(26)">27</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(27)">28</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(28)">29</a>&nbsp;&nbsp;30&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(30)">31</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(31)">32</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(32)">33</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(33)">34</a>&nbsp;...<a href="JavaScript:course_custom_paging(103)">104</a>&nbsp;&nbsp;&nbsp;(<a href="JavaScript:course_custom_paging(30)">次へ</a>)</div></center><br />