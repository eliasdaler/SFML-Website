<?php
    $version = '2.3.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Member List'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.10 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="hierarchy.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Font.php">Font</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">sf::Font Member List</div>  </div>
</div><!--header-->
<div class="contents">

<p>This is the complete list of members for <a class="el" href="classsf_1_1Font.php">sf::Font</a>, including all inherited members.</p>
<table class="directory">
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Font.php#a506404655b8869ed60d1e7709812f583">Font</a>()</td><td class="entry"><a class="el" href="classsf_1_1Font.php">sf::Font</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Font.php#a72d7322b355ee2f1be4500f530e98081">Font</a>(const Font &amp;copy)</td><td class="entry"><a class="el" href="classsf_1_1Font.php">sf::Font</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Font.php#a148eb92890113052f12f8a231ad619b9">getGlyph</a>(Uint32 codePoint, unsigned int characterSize, bool bold) const </td><td class="entry"><a class="el" href="classsf_1_1Font.php">sf::Font</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Font.php#ac4b60eeb5adfc98a2c7727a0f3ce1029">getInfo</a>() const </td><td class="entry"><a class="el" href="classsf_1_1Font.php">sf::Font</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Font.php#a03b32e8cf6448d269f6dd9d69c138f68">getKerning</a>(Uint32 first, Uint32 second, unsigned int characterSize) const </td><td class="entry"><a class="el" href="classsf_1_1Font.php">sf::Font</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Font.php#a0a9b9ab6aaa50a572057127aec7c3adc">getLineSpacing</a>(unsigned int characterSize) const </td><td class="entry"><a class="el" href="classsf_1_1Font.php">sf::Font</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Font.php#a887368a4e6a3dfa32dea89d2af315951">getTexture</a>(unsigned int characterSize) const </td><td class="entry"><a class="el" href="classsf_1_1Font.php">sf::Font</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Font.php#a9b21290b1b8bbf75232f64bdd7a994da">getUnderlinePosition</a>(unsigned int characterSize) const </td><td class="entry"><a class="el" href="classsf_1_1Font.php">sf::Font</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Font.php#a17fd6090e585a76f1f7b7f658ea70ee1">getUnderlineThickness</a>(unsigned int characterSize) const </td><td class="entry"><a class="el" href="classsf_1_1Font.php">sf::Font</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Font.php#ab020052ef4e01f6c749a85571c0f3fd1">loadFromFile</a>(const std::string &amp;filename)</td><td class="entry"><a class="el" href="classsf_1_1Font.php">sf::Font</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Font.php#abf2f8d6de31eb4e1db02e061c323e346">loadFromMemory</a>(const void *data, std::size_t sizeInBytes)</td><td class="entry"><a class="el" href="classsf_1_1Font.php">sf::Font</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Font.php#abc3f37a354ce8b9a21f8eb93bd9fdafb">loadFromStream</a>(InputStream &amp;stream)</td><td class="entry"><a class="el" href="classsf_1_1Font.php">sf::Font</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Font.php#a232515549846e3172a514d0b47918399">operator=</a>(const Font &amp;right)</td><td class="entry"><a class="el" href="classsf_1_1Font.php">sf::Font</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Font.php#aa18a3c62e6e01e9a21c531b5cad4b7f2">~Font</a>()</td><td class="entry"><a class="el" href="classsf_1_1Font.php">sf::Font</a></td><td class="entry"></td></tr>
</table></div><!-- contents -->
<?php
    require("../footer.php");
?>
