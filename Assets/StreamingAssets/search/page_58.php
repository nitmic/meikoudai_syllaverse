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
<input type="hidden" name="sesskey" value="U1JkavQOuF ">
</form>
</td></tr></table>
<h2>2061 科目</h2><div class="paging">ページ:&nbsp;(<a  href="JavaScript:course_custom_paging(57)">前へ</a>)&nbsp;&nbsp<a href="JavaScript:course_custom_paging(0)">1</a>&nbsp;...&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(48)">49</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(49)">50</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(50)">51</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(51)">52</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(52)">53</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(53)">54</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(54)">55</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(55)">56</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(56)">57</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(57)">58</a>&nbsp;&nbsp;59&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(59)">60</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(60)">61</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(61)">62</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(62)">63</a>&nbsp;...<a href="JavaScript:course_custom_paging(103)">104</a>&nbsp;&nbsp;&nbsp;(<a href="JavaScript:course_custom_paging(59)">次へ</a>)</div><p><table width="90%" align="center" border="0" cellspacing="0" bgcolor="lightgrey" cellpadding="5"><tr bgcolor="lightblue"><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">区分</FONT></th><th align="center" width=100 nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">時間割番号<br>時間割コード</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">授業科目名</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">シラバス</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">年次</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">単位数</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">担当教員名</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">時間割</FONT></th></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 物質工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7505<br>( 202227505 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">基礎生化学<br>Fandamentals of Biochemistry</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70553" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">伊藤　宏 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 水曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 物質工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7506<br>( 202227506 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">生体関連化学<br>Organic Natural Product Chemistry</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70555" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">柴田　哲男</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 水曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 物質工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7507<br>( 202227507 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">トライボロジー<br>Tribology</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70557" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">糸魚川　文広 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 機械工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7601<br>( 202227601 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">ターボ機械基礎<br>Fundamentals of Turbomachinery</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70559" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">長谷川　豊</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 月曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 機械工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7602<br>( 202227602 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">機械要素デザイン工学<br>Machine Element Design</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70561" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前川　覚</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 木曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 機械工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7603<br>( 202227603 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">システム制御<br>Control for Mechanical Systems</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70563" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">森田　良文</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 金曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 機械工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7604<br>( 202227604 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">精密プロセス工学<br>Precision Processing Engineering</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70565" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">早川　伸哉</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 水曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 機械工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7605<br>( 202227605 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">トライボロジー<br>Tribology</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70567" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">糸魚川　文広 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 機械工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7606<br>( 202227606 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">成形プロセス工学<br>Forming Process Engineering</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70569" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">北村　憲彦</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 金曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 機械工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7607<br>( 202227607 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">燃焼工学<br>Combustion Engineering</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70571" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">石野　洋二郎</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 月曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 電気情報工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7701<br>( 202227701 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">計算機工学<br>Computer Engineering</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70573" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">川島　龍太</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 木曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 電気情報工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7702<br>( 202227702 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">情報理論<br>Information Theory</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70575" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">安在　大祐</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 水曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 電気情報工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7703<br>( 202227703 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">システム制御<br>System Control  - Basic Concepts -</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70577" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">森田　良文</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 金曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 電気情報工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7704<br>( 202227704 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">電子回路<br>Electronic Circuits</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70579" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">平山　裕</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 水曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 電気情報工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7705<br>( 202227705 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">トライボロジー<br>Tribology</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70581" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">糸魚川　文広 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 電気情報工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7706<br>( 202227706 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">電気情報工学基礎実験<br>Fundamental Experiments on Electrical and Computer Engineering</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70583" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">佐藤　徳孝</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 月曜1-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 電気情報工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7707<br>( 202227707 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">プログラミング応用<br>Programming 2</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70585" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後藤　富朗</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 木曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 社会開発工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7801<br>( 202227801 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">構造解析学<br>Structural Analysis</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70587" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">野中　哲也</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 水曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 社会開発工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7802<br>( 202227802 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">水域環境工学<br>Water Environmental Engineering</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70589" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">北野　利一</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 金曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学部第二部 社会開発工学科</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">7803<br>( 202227803 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">交通環境計画学<br>Transportation Planning & Environment</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=70591" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">2</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">鈴木　弘司</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">後期 金曜3-4限</FONT></td></tr><input type="hidden"name="perpage" value="20"><input type="hidden" name="page"   value="58">
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
</table></p><div class="paging">ページ:&nbsp;(<a  href="JavaScript:course_custom_paging(57)">前へ</a>)&nbsp;&nbsp<a href="JavaScript:course_custom_paging(0)">1</a>&nbsp;...&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(48)">49</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(49)">50</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(50)">51</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(51)">52</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(52)">53</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(53)">54</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(54)">55</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(55)">56</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(56)">57</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(57)">58</a>&nbsp;&nbsp;59&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(59)">60</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(60)">61</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(61)">62</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(62)">63</a>&nbsp;...<a href="JavaScript:course_custom_paging(103)">104</a>&nbsp;&nbsp;&nbsp;(<a href="JavaScript:course_custom_paging(59)">次へ</a>)</div></center><br />