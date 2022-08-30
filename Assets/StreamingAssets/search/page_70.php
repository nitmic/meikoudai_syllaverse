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
<input type="hidden" name="sesskey" value="V0AVwT3AlK ">
</form>
</td></tr></table>
<h2>2061 科目</h2><div class="paging">ページ:&nbsp;(<a  href="JavaScript:course_custom_paging(69)">前へ</a>)&nbsp;&nbsp<a href="JavaScript:course_custom_paging(0)">1</a>&nbsp;...&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(60)">61</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(61)">62</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(62)">63</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(63)">64</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(64)">65</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(65)">66</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(66)">67</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(67)">68</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(68)">69</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(69)">70</a>&nbsp;&nbsp;71&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(71)">72</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(72)">73</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(73)">74</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(74)">75</a>&nbsp;...<a href="JavaScript:course_custom_paging(103)">104</a>&nbsp;&nbsp;&nbsp;(<a href="JavaScript:course_custom_paging(71)">次へ</a>)</div><p><table width="90%" align="center" border="0" cellspacing="0" bgcolor="lightgrey" cellpadding="5"><tr bgcolor="lightblue"><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">区分</FONT></th><th align="center" width=100 nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">時間割番号<br>時間割コード</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">授業科目名</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">シラバス</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">年次</FONT></th><th align="center" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">単位数</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">担当教員名</FONT></th><th align="left" nowrap="nowrap" style="border:1px #000000 solid"><FONT SIZE="2">時間割</FONT></th></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3002<br>( 202243002 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">モーションコントロール解析特論<br>Motion Control Analyses</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=71033" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">岩崎　誠,関　健太 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第１クォーター 水曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3003<br>( 202243003 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">電力システム設計特論<br>Advanced Power System Design</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=71035" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">青木　睦</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第１クォーター 水曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3004<br>( 202243004 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">電磁波工学特論<br>Advanced Theory on Electromagnetic Waves</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=71037" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">菊間　信良</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第１クォーター 月曜7-8限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3005<br>( 202243005 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">計算電磁気学特論<br>Advanced Electromagnetic Compatibility</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=71039" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">平田　晃正</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第１クォーター 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3006<br>( 202243006 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">エネルギー変換デバイス特論<br>Energy Conversion Devices</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=71041" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">曾我　哲夫</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第１クォーター 月曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3007<br>( 202243007 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">半導体物性特論<br>Properties of Semiconductor Materials</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=71043" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">安部　功二</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第１クォーター 火曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3008<br>( 202243008 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">通信理論特論<br>Advanced Communication Theory</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=71045" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">岡本　英二</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第１クォーター 月曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3009<br>( 202243009 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">熱システム工学特論<br>Advanced Thermal Engineering Systems</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=71047" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">保浦　知也</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第１クォーター 金曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3010<br>( 202243010 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">粘性流体力学<br>Viscous Fluid Dynamics</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=71049" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">長谷川　豊</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第１クォーター 金曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3011<br>( 202243011 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">計算固体力学特論<br>Advanced Computational Solid Mechanics</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=71051" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">伊藤　智啓</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第１クォーター 月曜5-8限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3012<br>( 202243012 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">機械力学特論<br>Advanced Dynamics of Machinery</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=71053" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">西田　政弘</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第１クォーター 火曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3013<br>( 202243013 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">機械強度設計特論<br>Strength Design for Mechanical Elements and Systems</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=71055" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">糸魚川　文広 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第１クォーター 火曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3014<br>( 202243014 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">機械制御特論<br>Advanced Mechanical Control Theory</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=71057" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">山田　学</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第１クォーター 水曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3015<br>( 202243015 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">感覚・知覚システム論<br>Sensation and Perception Systems</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=71059" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">田中　由浩</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第１クォーター 水曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3101<br>( 202243101 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">ロバスト制御特論<br>Advanced Robust Control Theory</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=71061" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">前田　佳弘</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第２クォーター 月曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3102<br>( 202243102 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">モーションコントロール設計特論<br>Motion Control Design</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=71063" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">関　健太,岩崎　誠 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第２クォーター 水曜1-2限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3103<br>( 202243103 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">電力システム制御特論<br>Advanced Power System Control</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=71065" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">青木　睦 他</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第２クォーター 水曜3-4限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3104<br>( 202243104 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">マイクロ波工学特論<br>Advanced Microwave Engineering</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=71067" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">榊原　久二男</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第２クォーター 月曜7-8限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3105<br>( 202243105 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">応用電磁気学特論<br>Advanced Electromagnetic Engineering for Applications</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=71069" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">平山　裕</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第２クォーター 火曜5-6限</FONT></td></tr><tr><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">工学研究科博士前期課程  工学専攻</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">3106<br>( 202243106 )</FONT></td><td style="border:1px #000000 solid"><FONT SIZE="2">半導体プロセス工学特論<br>Semiconductor Process Engineering</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2"><a  href="https://syllabus.ict.nitech.ac.jp/view.php?id=71071" >閲覧</a></FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="center" style="border:1px #000000 solid"><FONT SIZE="2">1</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">三好　実人</FONT></td><td align="left" style="border:1px #000000 solid"><FONT SIZE="2">第２クォーター 火曜1-2限</FONT></td></tr><input type="hidden"name="perpage" value="20"><input type="hidden" name="page"   value="70">
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
</table></p><div class="paging">ページ:&nbsp;(<a  href="JavaScript:course_custom_paging(69)">前へ</a>)&nbsp;&nbsp<a href="JavaScript:course_custom_paging(0)">1</a>&nbsp;...&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(60)">61</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(61)">62</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(62)">63</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(63)">64</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(64)">65</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(65)">66</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(66)">67</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(67)">68</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(68)">69</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(69)">70</a>&nbsp;&nbsp;71&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(71)">72</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(72)">73</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(73)">74</a>&nbsp;&nbsp;<a href ="JavaScript:course_custom_paging(74)">75</a>&nbsp;...<a href="JavaScript:course_custom_paging(103)">104</a>&nbsp;&nbsp;&nbsp;(<a href="JavaScript:course_custom_paging(71)">次へ</a>)</div></center><br />