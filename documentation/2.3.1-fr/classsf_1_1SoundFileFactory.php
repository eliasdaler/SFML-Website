<?php
    $version = '2.3.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::SoundFileFactory Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1SoundFileFactory.php">SoundFileFactory</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#nested-classes">Classes</a> &#124;
<a href="#pub-static-methods">Static Public Member Functions</a> &#124;
<a href="classsf_1_1SoundFileFactory-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::SoundFileFactory Class Reference<div class="ingroups"><a class="el" href="group__audio.php">Audio module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Manages and instantiates sound file readers and writers.  
 <a href="classsf_1_1SoundFileFactory.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="SoundFileFactory_8hpp_source.php">SoundFileFactory.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-static-methods"></a>
Static Public Member Functions</h2></td></tr>
<tr class="memitem:aeee396bfdbb6ac24c57e5c73c30ec105"><td class="memTemplParams" colspan="2">template&lt;typename T &gt; </td></tr>
<tr class="memitem:aeee396bfdbb6ac24c57e5c73c30ec105"><td class="memTemplItemLeft" align="right" valign="top">static void&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundFileFactory.php#aeee396bfdbb6ac24c57e5c73c30ec105">registerReader</a> ()</td></tr>
<tr class="memdesc:aeee396bfdbb6ac24c57e5c73c30ec105"><td class="mdescLeft">&#160;</td><td class="mdescRight">Register a new reader.  <a href="#aeee396bfdbb6ac24c57e5c73c30ec105">More...</a><br /></td></tr>
<tr class="separator:aeee396bfdbb6ac24c57e5c73c30ec105"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac42f01faf678d1f410e1ce8a18e4cebb"><td class="memTemplParams" colspan="2">template&lt;typename T &gt; </td></tr>
<tr class="memitem:ac42f01faf678d1f410e1ce8a18e4cebb"><td class="memTemplItemLeft" align="right" valign="top">static void&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundFileFactory.php#ac42f01faf678d1f410e1ce8a18e4cebb">unregisterReader</a> ()</td></tr>
<tr class="memdesc:ac42f01faf678d1f410e1ce8a18e4cebb"><td class="mdescLeft">&#160;</td><td class="mdescRight">Unregister a reader.  <a href="#ac42f01faf678d1f410e1ce8a18e4cebb">More...</a><br /></td></tr>
<tr class="separator:ac42f01faf678d1f410e1ce8a18e4cebb"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:abb6e082ea3fedf22c8648113d1be5755"><td class="memTemplParams" colspan="2">template&lt;typename T &gt; </td></tr>
<tr class="memitem:abb6e082ea3fedf22c8648113d1be5755"><td class="memTemplItemLeft" align="right" valign="top">static void&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundFileFactory.php#abb6e082ea3fedf22c8648113d1be5755">registerWriter</a> ()</td></tr>
<tr class="memdesc:abb6e082ea3fedf22c8648113d1be5755"><td class="mdescLeft">&#160;</td><td class="mdescRight">Register a new writer.  <a href="#abb6e082ea3fedf22c8648113d1be5755">More...</a><br /></td></tr>
<tr class="separator:abb6e082ea3fedf22c8648113d1be5755"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1bd8ebd264a5ec33962a9f7a8ca21a60"><td class="memTemplParams" colspan="2">template&lt;typename T &gt; </td></tr>
<tr class="memitem:a1bd8ebd264a5ec33962a9f7a8ca21a60"><td class="memTemplItemLeft" align="right" valign="top">static void&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundFileFactory.php#a1bd8ebd264a5ec33962a9f7a8ca21a60">unregisterWriter</a> ()</td></tr>
<tr class="memdesc:a1bd8ebd264a5ec33962a9f7a8ca21a60"><td class="mdescLeft">&#160;</td><td class="mdescRight">Unregister a writer.  <a href="#a1bd8ebd264a5ec33962a9f7a8ca21a60">More...</a><br /></td></tr>
<tr class="separator:a1bd8ebd264a5ec33962a9f7a8ca21a60"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af0a87110e0b8a77aada17b22a016c066"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="classsf_1_1SoundFileReader.php">SoundFileReader</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundFileFactory.php#af0a87110e0b8a77aada17b22a016c066">createReaderFromFilename</a> (const std::string &amp;filename)</td></tr>
<tr class="memdesc:af0a87110e0b8a77aada17b22a016c066"><td class="mdescLeft">&#160;</td><td class="mdescRight">Instantiate the right reader for the given file on disk.  <a href="#af0a87110e0b8a77aada17b22a016c066">More...</a><br /></td></tr>
<tr class="separator:af0a87110e0b8a77aada17b22a016c066"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aee7a0ff1eace98d5325eaadc7d26d50c"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="classsf_1_1SoundFileReader.php">SoundFileReader</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundFileFactory.php#aee7a0ff1eace98d5325eaadc7d26d50c">createReaderFromMemory</a> (const void *data, std::size_t sizeInBytes)</td></tr>
<tr class="memdesc:aee7a0ff1eace98d5325eaadc7d26d50c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Instantiate the right codec for the given file in memory.  <a href="#aee7a0ff1eace98d5325eaadc7d26d50c">More...</a><br /></td></tr>
<tr class="separator:aee7a0ff1eace98d5325eaadc7d26d50c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8d4b1f225b72a128ddba3be22f7ba5a2"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="classsf_1_1SoundFileReader.php">SoundFileReader</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundFileFactory.php#a8d4b1f225b72a128ddba3be22f7ba5a2">createReaderFromStream</a> (<a class="el" href="classsf_1_1InputStream.php">InputStream</a> &amp;stream)</td></tr>
<tr class="memdesc:a8d4b1f225b72a128ddba3be22f7ba5a2"><td class="mdescLeft">&#160;</td><td class="mdescRight">Instantiate the right codec for the given file in stream.  <a href="#a8d4b1f225b72a128ddba3be22f7ba5a2">More...</a><br /></td></tr>
<tr class="separator:a8d4b1f225b72a128ddba3be22f7ba5a2"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0702eb2e8a4a171ba80c7fbd04c4defc"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="classsf_1_1SoundFileWriter.php">SoundFileWriter</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundFileFactory.php#a0702eb2e8a4a171ba80c7fbd04c4defc">createWriterFromFilename</a> (const std::string &amp;filename)</td></tr>
<tr class="memdesc:a0702eb2e8a4a171ba80c7fbd04c4defc"><td class="mdescLeft">&#160;</td><td class="mdescRight">Instantiate the right writer for the given file on disk.  <a href="#a0702eb2e8a4a171ba80c7fbd04c4defc">More...</a><br /></td></tr>
<tr class="separator:a0702eb2e8a4a171ba80c7fbd04c4defc"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Manages and instantiates sound file readers and writers. </p>
<p>This class is where all the sound file readers and writers are registered.</p>
<p>You should normally only need to use its registration and unregistration functions; readers/writers creation and manipulation are wrapped into the higher-level classes <a class="el" href="classsf_1_1InputSoundFile.php" title="Provide read access to sound files. ">sf::InputSoundFile</a> and <a class="el" href="classsf_1_1OutputSoundFile.php" title="Provide write access to sound files. ">sf::OutputSoundFile</a>.</p>
<p>To register a new reader (writer) use the <a class="el" href="classsf_1_1SoundFileFactory.php#aeee396bfdbb6ac24c57e5c73c30ec105" title="Register a new reader. ">sf::SoundFileFactory::registerReader</a> (registerWriter) static function. You don't have to call the unregisterReader (unregisterWriter) function, unless you want to unregister a format before your application ends (typically, when a plugin is unloaded).</p>
<p>Usage example: </p><div class="fragment"><div class="line">sf::SoundFileFactory::registerReader&lt;MySoundFileReader&gt;();</div>
<div class="line">sf::SoundFileFactory::registerWriter&lt;MySoundFileWriter&gt;();</div>
</div><!-- fragment --><dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1InputSoundFile.php" title="Provide read access to sound files. ">sf::InputSoundFile</a>, <a class="el" href="classsf_1_1OutputSoundFile.php" title="Provide write access to sound files. ">sf::OutputSoundFile</a>, <a class="el" href="classsf_1_1SoundFileReader.php" title="Abstract base class for sound file decoding. ">sf::SoundFileReader</a>, <a class="el" href="classsf_1_1SoundFileWriter.php" title="Abstract base class for sound file encoding. ">sf::SoundFileWriter</a> </dd></dl>

<p>Definition at line <a class="el" href="SoundFileFactory_8hpp_source.php#l00046">46</a> of file <a class="el" href="SoundFileFactory_8hpp_source.php">SoundFileFactory.hpp</a>.</p>
</div><h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="af0a87110e0b8a77aada17b22a016c066"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="classsf_1_1SoundFileReader.php">SoundFileReader</a>* sf::SoundFileFactory::createReaderFromFilename </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>filename</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Instantiate the right reader for the given file on disk. </p>
<p>It's up to the caller to release the returned reader</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">filename</td><td>Path of the sound file</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>A new sound file reader that can read the given file, or null if no reader can handle it</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundFileFactory.php#aee7a0ff1eace98d5325eaadc7d26d50c" title="Instantiate the right codec for the given file in memory. ">createReaderFromMemory</a>, <a class="el" href="classsf_1_1SoundFileFactory.php#a8d4b1f225b72a128ddba3be22f7ba5a2" title="Instantiate the right codec for the given file in stream. ">createReaderFromStream</a> </dd></dl>

</div>
</div>
<a class="anchor" id="aee7a0ff1eace98d5325eaadc7d26d50c"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="classsf_1_1SoundFileReader.php">SoundFileReader</a>* sf::SoundFileFactory::createReaderFromMemory </td>
          <td>(</td>
          <td class="paramtype">const void *&#160;</td>
          <td class="paramname"><em>data</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">std::size_t&#160;</td>
          <td class="paramname"><em>sizeInBytes</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Instantiate the right codec for the given file in memory. </p>
<p>It's up to the caller to release the returned reader</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">data</td><td>Pointer to the file data in memory </td></tr>
    <tr><td class="paramname">sizeInBytes</td><td>Total size of the file data, in bytes</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>A new sound file codec that can read the given file, or null if no codec can handle it</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundFileFactory.php#af0a87110e0b8a77aada17b22a016c066" title="Instantiate the right reader for the given file on disk. ">createReaderFromFilename</a>, <a class="el" href="classsf_1_1SoundFileFactory.php#a8d4b1f225b72a128ddba3be22f7ba5a2" title="Instantiate the right codec for the given file in stream. ">createReaderFromStream</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a8d4b1f225b72a128ddba3be22f7ba5a2"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="classsf_1_1SoundFileReader.php">SoundFileReader</a>* sf::SoundFileFactory::createReaderFromStream </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classsf_1_1InputStream.php">InputStream</a> &amp;&#160;</td>
          <td class="paramname"><em>stream</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Instantiate the right codec for the given file in stream. </p>
<p>It's up to the caller to release the returned reader</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">stream</td><td>Source stream to read from</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>A new sound file codec that can read the given file, or null if no codec can handle it</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundFileFactory.php#af0a87110e0b8a77aada17b22a016c066" title="Instantiate the right reader for the given file on disk. ">createReaderFromFilename</a>, <a class="el" href="classsf_1_1SoundFileFactory.php#aee7a0ff1eace98d5325eaadc7d26d50c" title="Instantiate the right codec for the given file in memory. ">createReaderFromMemory</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a0702eb2e8a4a171ba80c7fbd04c4defc"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="classsf_1_1SoundFileWriter.php">SoundFileWriter</a>* sf::SoundFileFactory::createWriterFromFilename </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>filename</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Instantiate the right writer for the given file on disk. </p>
<p>It's up to the caller to release the returned writer</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">filename</td><td>Path of the sound file</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>A new sound file writer that can write given file, or null if no writer can handle it </dd></dl>

</div>
</div>
<a class="anchor" id="aeee396bfdbb6ac24c57e5c73c30ec105"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static void sf::SoundFileFactory::registerReader </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Register a new reader. </p>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundFileFactory.php#ac42f01faf678d1f410e1ce8a18e4cebb" title="Unregister a reader. ">unregisterReader</a> </dd></dl>

</div>
</div>
<a class="anchor" id="abb6e082ea3fedf22c8648113d1be5755"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static void sf::SoundFileFactory::registerWriter </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Register a new writer. </p>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundFileFactory.php#a1bd8ebd264a5ec33962a9f7a8ca21a60" title="Unregister a writer. ">unregisterWriter</a> </dd></dl>

</div>
</div>
<a class="anchor" id="ac42f01faf678d1f410e1ce8a18e4cebb"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static void sf::SoundFileFactory::unregisterReader </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Unregister a reader. </p>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundFileFactory.php#aeee396bfdbb6ac24c57e5c73c30ec105" title="Register a new reader. ">registerReader</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a1bd8ebd264a5ec33962a9f7a8ca21a60"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static void sf::SoundFileFactory::unregisterWriter </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Unregister a writer. </p>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundFileFactory.php#abb6e082ea3fedf22c8648113d1be5755" title="Register a new writer. ">registerWriter</a> </dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="SoundFileFactory_8hpp_source.php">SoundFileFactory.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
