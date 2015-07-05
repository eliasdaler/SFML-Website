<?php
    $version = '2.3.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Font Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Font.php">Font</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#nested-classes">Classes</a> &#124;
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="classsf_1_1Font-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::Font Class Reference<div class="ingroups"><a class="el" href="group__graphics.php">Graphics module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Class for loading and manipulating character fonts.  
 <a href="classsf_1_1Font.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="Font_8hpp_source.php">Font.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1Font_1_1Info.php">Info</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">Holds various information about a font.  <a href="structsf_1_1Font_1_1Info.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a506404655b8869ed60d1e7709812f583"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Font.php#a506404655b8869ed60d1e7709812f583">Font</a> ()</td></tr>
<tr class="memdesc:a506404655b8869ed60d1e7709812f583"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#a506404655b8869ed60d1e7709812f583">More...</a><br /></td></tr>
<tr class="separator:a506404655b8869ed60d1e7709812f583"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a72d7322b355ee2f1be4500f530e98081"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Font.php#a72d7322b355ee2f1be4500f530e98081">Font</a> (const <a class="el" href="classsf_1_1Font.php">Font</a> &amp;copy)</td></tr>
<tr class="memdesc:a72d7322b355ee2f1be4500f530e98081"><td class="mdescLeft">&#160;</td><td class="mdescRight">Copy constructor.  <a href="#a72d7322b355ee2f1be4500f530e98081">More...</a><br /></td></tr>
<tr class="separator:a72d7322b355ee2f1be4500f530e98081"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa18a3c62e6e01e9a21c531b5cad4b7f2"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Font.php#aa18a3c62e6e01e9a21c531b5cad4b7f2">~Font</a> ()</td></tr>
<tr class="memdesc:aa18a3c62e6e01e9a21c531b5cad4b7f2"><td class="mdescLeft">&#160;</td><td class="mdescRight">Destructor.  <a href="#aa18a3c62e6e01e9a21c531b5cad4b7f2">More...</a><br /></td></tr>
<tr class="separator:aa18a3c62e6e01e9a21c531b5cad4b7f2"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ab020052ef4e01f6c749a85571c0f3fd1"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Font.php#ab020052ef4e01f6c749a85571c0f3fd1">loadFromFile</a> (const std::string &amp;filename)</td></tr>
<tr class="memdesc:ab020052ef4e01f6c749a85571c0f3fd1"><td class="mdescLeft">&#160;</td><td class="mdescRight">Load the font from a file.  <a href="#ab020052ef4e01f6c749a85571c0f3fd1">More...</a><br /></td></tr>
<tr class="separator:ab020052ef4e01f6c749a85571c0f3fd1"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:abf2f8d6de31eb4e1db02e061c323e346"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Font.php#abf2f8d6de31eb4e1db02e061c323e346">loadFromMemory</a> (const void *data, std::size_t sizeInBytes)</td></tr>
<tr class="memdesc:abf2f8d6de31eb4e1db02e061c323e346"><td class="mdescLeft">&#160;</td><td class="mdescRight">Load the font from a file in memory.  <a href="#abf2f8d6de31eb4e1db02e061c323e346">More...</a><br /></td></tr>
<tr class="separator:abf2f8d6de31eb4e1db02e061c323e346"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:abc3f37a354ce8b9a21f8eb93bd9fdafb"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Font.php#abc3f37a354ce8b9a21f8eb93bd9fdafb">loadFromStream</a> (<a class="el" href="classsf_1_1InputStream.php">InputStream</a> &amp;stream)</td></tr>
<tr class="memdesc:abc3f37a354ce8b9a21f8eb93bd9fdafb"><td class="mdescLeft">&#160;</td><td class="mdescRight">Load the font from a custom stream.  <a href="#abc3f37a354ce8b9a21f8eb93bd9fdafb">More...</a><br /></td></tr>
<tr class="separator:abc3f37a354ce8b9a21f8eb93bd9fdafb"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac4b60eeb5adfc98a2c7727a0f3ce1029"><td class="memItemLeft" align="right" valign="top">const <a class="el" href="structsf_1_1Font_1_1Info.php">Info</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Font.php#ac4b60eeb5adfc98a2c7727a0f3ce1029">getInfo</a> () const </td></tr>
<tr class="memdesc:ac4b60eeb5adfc98a2c7727a0f3ce1029"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the font information.  <a href="#ac4b60eeb5adfc98a2c7727a0f3ce1029">More...</a><br /></td></tr>
<tr class="separator:ac4b60eeb5adfc98a2c7727a0f3ce1029"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a148eb92890113052f12f8a231ad619b9"><td class="memItemLeft" align="right" valign="top">const <a class="el" href="classsf_1_1Glyph.php">Glyph</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Font.php#a148eb92890113052f12f8a231ad619b9">getGlyph</a> (Uint32 codePoint, unsigned int characterSize, bool bold) const </td></tr>
<tr class="memdesc:a148eb92890113052f12f8a231ad619b9"><td class="mdescLeft">&#160;</td><td class="mdescRight">Retrieve a glyph of the font.  <a href="#a148eb92890113052f12f8a231ad619b9">More...</a><br /></td></tr>
<tr class="separator:a148eb92890113052f12f8a231ad619b9"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a03b32e8cf6448d269f6dd9d69c138f68"><td class="memItemLeft" align="right" valign="top">float&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Font.php#a03b32e8cf6448d269f6dd9d69c138f68">getKerning</a> (Uint32 first, Uint32 second, unsigned int characterSize) const </td></tr>
<tr class="memdesc:a03b32e8cf6448d269f6dd9d69c138f68"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the kerning offset of two glyphs.  <a href="#a03b32e8cf6448d269f6dd9d69c138f68">More...</a><br /></td></tr>
<tr class="separator:a03b32e8cf6448d269f6dd9d69c138f68"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0a9b9ab6aaa50a572057127aec7c3adc"><td class="memItemLeft" align="right" valign="top">float&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Font.php#a0a9b9ab6aaa50a572057127aec7c3adc">getLineSpacing</a> (unsigned int characterSize) const </td></tr>
<tr class="memdesc:a0a9b9ab6aaa50a572057127aec7c3adc"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the line spacing.  <a href="#a0a9b9ab6aaa50a572057127aec7c3adc">More...</a><br /></td></tr>
<tr class="separator:a0a9b9ab6aaa50a572057127aec7c3adc"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9b21290b1b8bbf75232f64bdd7a994da"><td class="memItemLeft" align="right" valign="top">float&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Font.php#a9b21290b1b8bbf75232f64bdd7a994da">getUnderlinePosition</a> (unsigned int characterSize) const </td></tr>
<tr class="memdesc:a9b21290b1b8bbf75232f64bdd7a994da"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the position of the underline.  <a href="#a9b21290b1b8bbf75232f64bdd7a994da">More...</a><br /></td></tr>
<tr class="separator:a9b21290b1b8bbf75232f64bdd7a994da"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a17fd6090e585a76f1f7b7f658ea70ee1"><td class="memItemLeft" align="right" valign="top">float&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Font.php#a17fd6090e585a76f1f7b7f658ea70ee1">getUnderlineThickness</a> (unsigned int characterSize) const </td></tr>
<tr class="memdesc:a17fd6090e585a76f1f7b7f658ea70ee1"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the thickness of the underline.  <a href="#a17fd6090e585a76f1f7b7f658ea70ee1">More...</a><br /></td></tr>
<tr class="separator:a17fd6090e585a76f1f7b7f658ea70ee1"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a887368a4e6a3dfa32dea89d2af315951"><td class="memItemLeft" align="right" valign="top">const <a class="el" href="classsf_1_1Texture.php">Texture</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Font.php#a887368a4e6a3dfa32dea89d2af315951">getTexture</a> (unsigned int characterSize) const </td></tr>
<tr class="memdesc:a887368a4e6a3dfa32dea89d2af315951"><td class="mdescLeft">&#160;</td><td class="mdescRight">Retrieve the texture containing the loaded glyphs of a certain size.  <a href="#a887368a4e6a3dfa32dea89d2af315951">More...</a><br /></td></tr>
<tr class="separator:a887368a4e6a3dfa32dea89d2af315951"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a232515549846e3172a514d0b47918399"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Font.php">Font</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Font.php#a232515549846e3172a514d0b47918399">operator=</a> (const <a class="el" href="classsf_1_1Font.php">Font</a> &amp;right)</td></tr>
<tr class="memdesc:a232515549846e3172a514d0b47918399"><td class="mdescLeft">&#160;</td><td class="mdescRight">Overload of assignment operator.  <a href="#a232515549846e3172a514d0b47918399">More...</a><br /></td></tr>
<tr class="separator:a232515549846e3172a514d0b47918399"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Class for loading and manipulating character fonts. </p>
<p>Fonts can be loaded from a file, from memory or from a custom stream, and supports the most common types of fonts.</p>
<p>See the loadFromFile function for the complete list of supported formats.</p>
<p>Once it is loaded, a <a class="el" href="classsf_1_1Font.php" title="Class for loading and manipulating character fonts. ">sf::Font</a> instance provides three types of information about the font: </p><ul>
<li>Global metrics, such as the line spacing </li>
<li>Per-glyph metrics, such as bounding box or kerning </li>
<li>Pixel representation of glyphs</li>
</ul>
<p>Fonts alone are not very useful: they hold the font data but cannot make anything useful of it. To do so you need to use the <a class="el" href="classsf_1_1Text.php" title="Graphical text that can be drawn to a render target. ">sf::Text</a> class, which is able to properly output text with several options such as character size, style, color, position, rotation, etc. This separation allows more flexibility and better performances: indeed a <a class="el" href="classsf_1_1Font.php" title="Class for loading and manipulating character fonts. ">sf::Font</a> is a heavy resource, and any operation on it is slow (often too slow for real-time applications). On the other side, a <a class="el" href="classsf_1_1Text.php" title="Graphical text that can be drawn to a render target. ">sf::Text</a> is a lightweight object which can combine the glyphs data and metrics of a <a class="el" href="classsf_1_1Font.php" title="Class for loading and manipulating character fonts. ">sf::Font</a> to display any text on a render target. Note that it is also possible to bind several <a class="el" href="classsf_1_1Text.php" title="Graphical text that can be drawn to a render target. ">sf::Text</a> instances to the same <a class="el" href="classsf_1_1Font.php" title="Class for loading and manipulating character fonts. ">sf::Font</a>.</p>
<p>It is important to note that the <a class="el" href="classsf_1_1Text.php" title="Graphical text that can be drawn to a render target. ">sf::Text</a> instance doesn't copy the font that it uses, it only keeps a reference to it. Thus, a <a class="el" href="classsf_1_1Font.php" title="Class for loading and manipulating character fonts. ">sf::Font</a> must not be destructed while it is used by a <a class="el" href="classsf_1_1Text.php" title="Graphical text that can be drawn to a render target. ">sf::Text</a> (i.e. never write a function that uses a local <a class="el" href="classsf_1_1Font.php" title="Class for loading and manipulating character fonts. ">sf::Font</a> instance for creating a text).</p>
<p>Usage example: </p><div class="fragment"><div class="line"><span class="comment">// Declare a new font</span></div>
<div class="line"><a class="code" href="classsf_1_1Font.php">sf::Font</a> font;</div>
<div class="line"></div>
<div class="line"><span class="comment">// Load it from a file</span></div>
<div class="line"><span class="keywordflow">if</span> (!font.<a class="code" href="classsf_1_1Font.php#ab020052ef4e01f6c749a85571c0f3fd1">loadFromFile</a>(<span class="stringliteral">&quot;arial.ttf&quot;</span>))</div>
<div class="line">{</div>
<div class="line">    <span class="comment">// error...</span></div>
<div class="line">}</div>
<div class="line"></div>
<div class="line"><span class="comment">// Create a text which uses our font</span></div>
<div class="line"><a class="code" href="classsf_1_1Text.php">sf::Text</a> text1;</div>
<div class="line">text1.<a class="code" href="classsf_1_1Text.php#a2927805d1ae92d57f15034ea34756b81">setFont</a>(font);</div>
<div class="line">text1.<a class="code" href="classsf_1_1Text.php#ae96f835fc1bff858f8a23c5b01eaaf7e">setCharacterSize</a>(30);</div>
<div class="line">text1.<a class="code" href="classsf_1_1Text.php#ad791702bc2d1b6590a1719aa60635edf">setStyle</a>(<a class="code" href="classsf_1_1Text.php#aa8add4aef484c6e6b20faff07452bd82a2af9ae5e1cda126570f744448e0caa32">sf::Text::Regular</a>);</div>
<div class="line"></div>
<div class="line"><span class="comment">// Create another text using the same font, but with different parameters</span></div>
<div class="line"><a class="code" href="classsf_1_1Text.php">sf::Text</a> text2;</div>
<div class="line">text2.<a class="code" href="classsf_1_1Text.php#a2927805d1ae92d57f15034ea34756b81">setFont</a>(font);</div>
<div class="line">text2.<a class="code" href="classsf_1_1Text.php#ae96f835fc1bff858f8a23c5b01eaaf7e">setCharacterSize</a>(50);</div>
<div class="line">text1.<a class="code" href="classsf_1_1Text.php#ad791702bc2d1b6590a1719aa60635edf">setStyle</a>(<a class="code" href="classsf_1_1Text.php#aa8add4aef484c6e6b20faff07452bd82aee249eb803848723c542c2062ebe69d8">sf::Text::Italic</a>);</div>
</div><!-- fragment --><p>Apart from loading font files, and passing them to instances of <a class="el" href="classsf_1_1Text.php" title="Graphical text that can be drawn to a render target. ">sf::Text</a>, you should normally not have to deal directly with this class. However, it may be useful to access the font metrics or rasterized glyphs for advanced usage.</p>
<p>Note that if the font is a bitmap font, it is not scalable, thus not all requested sizes will be available to use. This needs to be taken into consideration when using <a class="el" href="classsf_1_1Text.php" title="Graphical text that can be drawn to a render target. ">sf::Text</a>. If you need to display text of a certain size, make sure the corresponding bitmap font that supports that size is used.</p>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Text.php" title="Graphical text that can be drawn to a render target. ">sf::Text</a> </dd></dl>

<p>Definition at line <a class="el" href="Font_8hpp_source.php#l00050">50</a> of file <a class="el" href="Font_8hpp_source.php">Font.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="a506404655b8869ed60d1e7709812f583"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Font::Font </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Default constructor. </p>
<p>This constructor defines an empty font </p>

</div>
</div>
<a class="anchor" id="a72d7322b355ee2f1be4500f530e98081"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Font::Font </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Font.php">Font</a> &amp;&#160;</td>
          <td class="paramname"><em>copy</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Copy constructor. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">copy</td><td>Instance to copy </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="aa18a3c62e6e01e9a21c531b5cad4b7f2"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Font::~Font </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Destructor. </p>
<p>Cleans up all the internal resources used by the font </p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="a148eb92890113052f12f8a231ad619b9"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">const <a class="el" href="classsf_1_1Glyph.php">Glyph</a>&amp; sf::Font::getGlyph </td>
          <td>(</td>
          <td class="paramtype">Uint32&#160;</td>
          <td class="paramname"><em>codePoint</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>characterSize</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">bool&#160;</td>
          <td class="paramname"><em>bold</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Retrieve a glyph of the font. </p>
<p>If the font is a bitmap font, not all character sizes might be available. If the glyph is not available at the requested size, an empty glyph is returned.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">codePoint</td><td>Unicode code point of the character to get </td></tr>
    <tr><td class="paramname">characterSize</td><td>Reference character size </td></tr>
    <tr><td class="paramname">bold</td><td>Retrieve the bold version or the regular one?</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>The glyph corresponding to <em>codePoint</em> and <em>characterSize</em> </dd></dl>

</div>
</div>
<a class="anchor" id="ac4b60eeb5adfc98a2c7727a0f3ce1029"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">const <a class="el" href="structsf_1_1Font_1_1Info.php">Info</a>&amp; sf::Font::getInfo </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the font information. </p>
<dl class="section return"><dt>Returns</dt><dd>A structure that holds the font information </dd></dl>

</div>
</div>
<a class="anchor" id="a03b32e8cf6448d269f6dd9d69c138f68"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">float sf::Font::getKerning </td>
          <td>(</td>
          <td class="paramtype">Uint32&#160;</td>
          <td class="paramname"><em>first</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Uint32&#160;</td>
          <td class="paramname"><em>second</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>characterSize</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the kerning offset of two glyphs. </p>
<p>The kerning is an extra offset (negative) to apply between two glyphs when rendering them, to make the pair look more "natural". For example, the pair "AV" have a special kerning to make them closer than other characters. Most of the glyphs pairs have a kerning offset of zero, though.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">first</td><td>Unicode code point of the first character </td></tr>
    <tr><td class="paramname">second</td><td>Unicode code point of the second character </td></tr>
    <tr><td class="paramname">characterSize</td><td>Reference character size</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Kerning value for <em>first</em> and <em>second</em>, in pixels </dd></dl>

</div>
</div>
<a class="anchor" id="a0a9b9ab6aaa50a572057127aec7c3adc"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">float sf::Font::getLineSpacing </td>
          <td>(</td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>characterSize</em></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the line spacing. </p>
<p>Line spacing is the vertical offset to apply between two consecutive lines of text.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">characterSize</td><td>Reference character size</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Line spacing, in pixels </dd></dl>

</div>
</div>
<a class="anchor" id="a887368a4e6a3dfa32dea89d2af315951"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">const <a class="el" href="classsf_1_1Texture.php">Texture</a>&amp; sf::Font::getTexture </td>
          <td>(</td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>characterSize</em></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Retrieve the texture containing the loaded glyphs of a certain size. </p>
<p>The contents of the returned texture changes as more glyphs are requested, thus it is not very relevant. It is mainly used internally by <a class="el" href="classsf_1_1Text.php" title="Graphical text that can be drawn to a render target. ">sf::Text</a>.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">characterSize</td><td>Reference character size</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd><a class="el" href="classsf_1_1Texture.php" title="Image living on the graphics card that can be used for drawing. ">Texture</a> containing the glyphs of the requested size </dd></dl>

</div>
</div>
<a class="anchor" id="a9b21290b1b8bbf75232f64bdd7a994da"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">float sf::Font::getUnderlinePosition </td>
          <td>(</td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>characterSize</em></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the position of the underline. </p>
<p>Underline position is the vertical offset to apply between the baseline and the underline.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">characterSize</td><td>Reference character size</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Underline position, in pixels</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Font.php#a17fd6090e585a76f1f7b7f658ea70ee1" title="Get the thickness of the underline. ">getUnderlineThickness</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a17fd6090e585a76f1f7b7f658ea70ee1"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">float sf::Font::getUnderlineThickness </td>
          <td>(</td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>characterSize</em></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the thickness of the underline. </p>
<p>Underline thickness is the vertical size of the underline.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">characterSize</td><td>Reference character size</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Underline thickness, in pixels</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Font.php#a9b21290b1b8bbf75232f64bdd7a994da" title="Get the position of the underline. ">getUnderlinePosition</a> </dd></dl>

</div>
</div>
<a class="anchor" id="ab020052ef4e01f6c749a85571c0f3fd1"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::Font::loadFromFile </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>filename</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Load the font from a file. </p>
<p>The supported font formats are: TrueType, Type 1, CFF, OpenType, SFNT, X11 PCF, Windows FNT, BDF, PFR and Type 42. Note that this function know nothing about the standard fonts installed on the user's system, thus you can't load them directly.</p>
<dl class="section warning"><dt>Warning</dt><dd>SFML cannot preload all the font data in this function, so the file has to remain accessible until the <a class="el" href="classsf_1_1Font.php" title="Class for loading and manipulating character fonts. ">sf::Font</a> object loads a new font or is destroyed.</dd></dl>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">filename</td><td>Path of the font file to load</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if loading succeeded, false if it failed</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Font.php#abf2f8d6de31eb4e1db02e061c323e346" title="Load the font from a file in memory. ">loadFromMemory</a>, <a class="el" href="classsf_1_1Font.php#abc3f37a354ce8b9a21f8eb93bd9fdafb" title="Load the font from a custom stream. ">loadFromStream</a> </dd></dl>

</div>
</div>
<a class="anchor" id="abf2f8d6de31eb4e1db02e061c323e346"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::Font::loadFromMemory </td>
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
</div><div class="memdoc">

<p>Load the font from a file in memory. </p>
<p>The supported font formats are: TrueType, Type 1, CFF, OpenType, SFNT, X11 PCF, Windows FNT, BDF, PFR and Type 42.</p>
<dl class="section warning"><dt>Warning</dt><dd>SFML cannot preload all the font data in this function, so the buffer pointed by <em>data</em> has to remain valid until the <a class="el" href="classsf_1_1Font.php" title="Class for loading and manipulating character fonts. ">sf::Font</a> object loads a new font or is destroyed.</dd></dl>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">data</td><td>Pointer to the file data in memory </td></tr>
    <tr><td class="paramname">sizeInBytes</td><td>Size of the data to load, in bytes</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if loading succeeded, false if it failed</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Font.php#ab020052ef4e01f6c749a85571c0f3fd1" title="Load the font from a file. ">loadFromFile</a>, <a class="el" href="classsf_1_1Font.php#abc3f37a354ce8b9a21f8eb93bd9fdafb" title="Load the font from a custom stream. ">loadFromStream</a> </dd></dl>

</div>
</div>
<a class="anchor" id="abc3f37a354ce8b9a21f8eb93bd9fdafb"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::Font::loadFromStream </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classsf_1_1InputStream.php">InputStream</a> &amp;&#160;</td>
          <td class="paramname"><em>stream</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Load the font from a custom stream. </p>
<p>The supported font formats are: TrueType, Type 1, CFF, OpenType, SFNT, X11 PCF, Windows FNT, BDF, PFR and Type 42. Warning: SFML cannot preload all the font data in this function, so the contents of <em>stream</em> have to remain valid as long as the font is used.</p>
<dl class="section warning"><dt>Warning</dt><dd>SFML cannot preload all the font data in this function, so the stream has to remain accessible until the <a class="el" href="classsf_1_1Font.php" title="Class for loading and manipulating character fonts. ">sf::Font</a> object loads a new font or is destroyed.</dd></dl>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">stream</td><td>Source stream to read from</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if loading succeeded, false if it failed</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Font.php#ab020052ef4e01f6c749a85571c0f3fd1" title="Load the font from a file. ">loadFromFile</a>, <a class="el" href="classsf_1_1Font.php#abf2f8d6de31eb4e1db02e061c323e346" title="Load the font from a file in memory. ">loadFromMemory</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a232515549846e3172a514d0b47918399"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Font.php">Font</a>&amp; sf::Font::operator= </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Font.php">Font</a> &amp;&#160;</td>
          <td class="paramname"><em>right</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Overload of assignment operator. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">right</td><td>Instance to assign</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Reference to self </dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="Font_8hpp_source.php">Font.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
