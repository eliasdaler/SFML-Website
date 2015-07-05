<?php
    $version = '2.3.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Event::MouseWheelScrollEvent Struct Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Event.php">Event</a></li><li class="navelem"><a class="el" href="structsf_1_1Event_1_1MouseWheelScrollEvent.php">MouseWheelScrollEvent</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-attribs">Public Attributes</a> &#124;
<a href="structsf_1_1Event_1_1MouseWheelScrollEvent-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::Event::MouseWheelScrollEvent Struct Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p><a class="el" href="classsf_1_1Mouse.php" title="Give access to the real-time state of the mouse. ">Mouse</a> wheel events parameters (MouseWheelScrolled)  
 <a href="structsf_1_1Event_1_1MouseWheelScrollEvent.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="Event_8hpp_source.php">Event.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Public Attributes</h2></td></tr>
<tr class="memitem:a1d82dccecc46968d517b2fc66639dd74"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Mouse.php#a60dd479a43f26f200e7957aa11803ff4">Mouse::Wheel</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1Event_1_1MouseWheelScrollEvent.php#a1d82dccecc46968d517b2fc66639dd74">wheel</a></td></tr>
<tr class="memdesc:a1d82dccecc46968d517b2fc66639dd74"><td class="mdescLeft">&#160;</td><td class="mdescRight">Which wheel (for mice with multiple ones)  <a href="#a1d82dccecc46968d517b2fc66639dd74">More...</a><br /></td></tr>
<tr class="separator:a1d82dccecc46968d517b2fc66639dd74"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac45c164997a594d424071e74b53b5817"><td class="memItemLeft" align="right" valign="top">float&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1Event_1_1MouseWheelScrollEvent.php#ac45c164997a594d424071e74b53b5817">delta</a></td></tr>
<tr class="memdesc:ac45c164997a594d424071e74b53b5817"><td class="mdescLeft">&#160;</td><td class="mdescRight">Wheel offset (positive is up/left, negative is down/right). High-precision mice may use non-integral offsets.  <a href="#ac45c164997a594d424071e74b53b5817">More...</a><br /></td></tr>
<tr class="separator:ac45c164997a594d424071e74b53b5817"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3d17cae0568d18083f879655abdc8ae4"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1Event_1_1MouseWheelScrollEvent.php#a3d17cae0568d18083f879655abdc8ae4">x</a></td></tr>
<tr class="memdesc:a3d17cae0568d18083f879655abdc8ae4"><td class="mdescLeft">&#160;</td><td class="mdescRight">X position of the mouse pointer, relative to the left of the owner window.  <a href="#a3d17cae0568d18083f879655abdc8ae4">More...</a><br /></td></tr>
<tr class="separator:a3d17cae0568d18083f879655abdc8ae4"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa38bf23704162024eed19917eef3853c"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1Event_1_1MouseWheelScrollEvent.php#aa38bf23704162024eed19917eef3853c">y</a></td></tr>
<tr class="memdesc:aa38bf23704162024eed19917eef3853c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Y position of the mouse pointer, relative to the top of the owner window.  <a href="#aa38bf23704162024eed19917eef3853c">More...</a><br /></td></tr>
<tr class="separator:aa38bf23704162024eed19917eef3853c"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p><a class="el" href="classsf_1_1Mouse.php" title="Give access to the real-time state of the mouse. ">Mouse</a> wheel events parameters (MouseWheelScrolled) </p>

<p>Definition at line <a class="el" href="Event_8hpp_source.php#l00120">120</a> of file <a class="el" href="Event_8hpp_source.php">Event.hpp</a>.</p>
</div><h2 class="groupheader">Member Data Documentation</h2>
<a class="anchor" id="ac45c164997a594d424071e74b53b5817"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">float sf::Event::MouseWheelScrollEvent::delta</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Wheel offset (positive is up/left, negative is down/right). High-precision mice may use non-integral offsets. </p>

<p>Definition at line <a class="el" href="Event_8hpp_source.php#l00123">123</a> of file <a class="el" href="Event_8hpp_source.php">Event.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a1d82dccecc46968d517b2fc66639dd74"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Mouse.php#a60dd479a43f26f200e7957aa11803ff4">Mouse::Wheel</a> sf::Event::MouseWheelScrollEvent::wheel</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Which wheel (for mice with multiple ones) </p>

<p>Definition at line <a class="el" href="Event_8hpp_source.php#l00122">122</a> of file <a class="el" href="Event_8hpp_source.php">Event.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a3d17cae0568d18083f879655abdc8ae4"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int sf::Event::MouseWheelScrollEvent::x</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>X position of the mouse pointer, relative to the left of the owner window. </p>

<p>Definition at line <a class="el" href="Event_8hpp_source.php#l00124">124</a> of file <a class="el" href="Event_8hpp_source.php">Event.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="aa38bf23704162024eed19917eef3853c"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int sf::Event::MouseWheelScrollEvent::y</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Y position of the mouse pointer, relative to the top of the owner window. </p>

<p>Definition at line <a class="el" href="Event_8hpp_source.php#l00125">125</a> of file <a class="el" href="Event_8hpp_source.php">Event.hpp</a>.</p>

</div>
</div>
<hr/>The documentation for this struct was generated from the following file:<ul>
<li><a class="el" href="Event_8hpp_source.php">Event.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
