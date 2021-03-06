<?php
    $version = '1.6'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Unicode.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.8.2 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_83ae1a5e8455fc62607b4936b42116e9.php">sfml</a></li><li class="navelem"><a class="el" href="dir_79a044fa5ec8bbf4af7d440d8995a178.php">sfml</a></li><li class="navelem"><a class="el" href="dir_f3190241575fd2bd132a392ae6942f4a.php">include</a></li><li class="navelem"><a class="el" href="dir_692f376662c82a26cfe4cfa3aceebe24.php">SFML</a></li><li class="navelem"><a class="el" href="dir_60c5c649f8df3b69a45a020d59f81335.php">System</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Unicode.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2009 Laurent Gomila (laurent.gom@gmail.com)</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div>
<div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div>
<div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div>
<div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div>
<div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div>
<div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div>
<div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_UNICODE_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#define SFML_UNICODE_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Config.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;iterator&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;locale&gt;</span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#include &lt;string&gt;</span></div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;<span class="preprocessor">#include &lt;stdlib.h&gt;</span></div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;</div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;</div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="keyword">namespace </span>sf</div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;{</div>
<div class="line"><a name="l00044"></a><span class="lineno"><a class="code" href="classsf_1_1Unicode.php">   44</a></span>&#160;<span class="keyword">class </span>SFML_API <a class="code" href="classsf_1_1Unicode.php" title="Provides utility functions to convert from and to any unicode and ASCII encoding.">Unicode</a></div>
<div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;{</div>
<div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;<span class="keyword">public</span> :</div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;</div>
<div class="line"><a name="l00054"></a><span class="lineno"><a class="code" href="classsf_1_1Unicode.php#a3c6081f88e93693ff8e713053982a9f9">   54</a></span>&#160;    <span class="keyword">typedef</span> std::basic_string&lt;Uint8&gt;  <a class="code" href="classsf_1_1Unicode.php#a3c6081f88e93693ff8e713053982a9f9" title="Define a string type for each encoding Warning : in UTF8 and UTF16 strings, one element doesn&#39;t neces...">UTF8String</a>;</div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;    <span class="keyword">typedef</span> std::basic_string&lt;Uint16&gt; UTF16String;</div>
<div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;    <span class="keyword">typedef</span> std::basic_string&lt;Uint32&gt; UTF32String;</div>
<div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;</div>
<div class="line"><a name="l00063"></a><span class="lineno"><a class="code" href="classsf_1_1Unicode_1_1Text.php">   63</a></span>&#160;    <span class="keyword">class </span>SFML_API <a class="code" href="classsf_1_1Unicode_1_1Text.php" title="This class is an abstract definition of a unicode text, it can be converted from and to any kind of s...">Text</a></div>
<div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;    {</div>
<div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;    <span class="keyword">public</span> :</div>
<div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;</div>
<div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;        <a class="code" href="classsf_1_1Unicode_1_1Text.php" title="This class is an abstract definition of a unicode text, it can be converted from and to any kind of s...">Text</a>();</div>
<div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;</div>
<div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;        <a class="code" href="classsf_1_1Unicode_1_1Text.php" title="This class is an abstract definition of a unicode text, it can be converted from and to any kind of s...">Text</a>(<span class="keyword">const</span> <span class="keywordtype">char</span>*                 Str);</div>
<div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;        <a class="code" href="classsf_1_1Unicode_1_1Text.php" title="This class is an abstract definition of a unicode text, it can be converted from and to any kind of s...">Text</a>(<span class="keyword">const</span> <span class="keywordtype">wchar_t</span>*              Str);</div>
<div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;        <a class="code" href="classsf_1_1Unicode_1_1Text.php" title="This class is an abstract definition of a unicode text, it can be converted from and to any kind of s...">Text</a>(<span class="keyword">const</span> Uint8*                Str);</div>
<div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;        <a class="code" href="classsf_1_1Unicode_1_1Text.php" title="This class is an abstract definition of a unicode text, it can be converted from and to any kind of s...">Text</a>(<span class="keyword">const</span> Uint16*               Str);</div>
<div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;        <a class="code" href="classsf_1_1Unicode_1_1Text.php" title="This class is an abstract definition of a unicode text, it can be converted from and to any kind of s...">Text</a>(<span class="keyword">const</span> Uint32*               Str);</div>
<div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;        <a class="code" href="classsf_1_1Unicode_1_1Text.php" title="This class is an abstract definition of a unicode text, it can be converted from and to any kind of s...">Text</a>(<span class="keyword">const</span> std::string&amp;          Str);</div>
<div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;        <a class="code" href="classsf_1_1Unicode_1_1Text.php" title="This class is an abstract definition of a unicode text, it can be converted from and to any kind of s...">Text</a>(<span class="keyword">const</span> std::wstring&amp;         Str);</div>
<div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;        <a class="code" href="classsf_1_1Unicode_1_1Text.php" title="This class is an abstract definition of a unicode text, it can be converted from and to any kind of s...">Text</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1Unicode.php#a3c6081f88e93693ff8e713053982a9f9" title="Define a string type for each encoding Warning : in UTF8 and UTF16 strings, one element doesn&#39;t neces...">Unicode::UTF8String</a>&amp;  Str);</div>
<div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;        <a class="code" href="classsf_1_1Unicode_1_1Text.php" title="This class is an abstract definition of a unicode text, it can be converted from and to any kind of s...">Text</a>(<span class="keyword">const</span> Unicode::UTF16String&amp; Str);</div>
<div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;        <a class="code" href="classsf_1_1Unicode_1_1Text.php" title="This class is an abstract definition of a unicode text, it can be converted from and to any kind of s...">Text</a>(<span class="keyword">const</span> Unicode::UTF32String&amp; Str);</div>
<div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;</div>
<div class="line"><a name="l00096"></a><span class="lineno">   96</span>&#160;        <span class="keyword">operator</span>       std::string          () <span class="keyword">const</span>;</div>
<div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;        <span class="keyword">operator</span>       std::wstring         () <span class="keyword">const</span>;</div>
<div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;        <span class="keyword">operator</span>       <a class="code" href="classsf_1_1Unicode.php#a3c6081f88e93693ff8e713053982a9f9" title="Define a string type for each encoding Warning : in UTF8 and UTF16 strings, one element doesn&#39;t neces...">Unicode::UTF8String</a>  () <span class="keyword">const</span>;</div>
<div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;        <span class="keyword">operator</span>       Unicode::UTF16String () <span class="keyword">const</span>;</div>
<div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;        <span class="keyword">operator</span> <span class="keyword">const</span> Unicode::UTF32String&amp;() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00101"></a><span class="lineno">  101</span>&#160;</div>
<div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;    <span class="keyword">private</span> :</div>
<div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;</div>
<div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;        <span class="comment">// Data member</span></div>
<div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;<span class="comment"></span>        sf::Unicode::UTF32String myUTF32String; </div>
<div class="line"><a name="l00108"></a><span class="lineno">  108</span>&#160;    };</div>
<div class="line"><a name="l00109"></a><span class="lineno">  109</span>&#160;</div>
<div class="line"><a name="l00123"></a><span class="lineno">  123</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00124"></a><span class="lineno">  124</span>&#160;    <span class="keyword">static</span> Out UTF32ToANSI(In Begin, In End, Out Output, <span class="keywordtype">char</span> Replacement = <span class="charliteral">&#39;?&#39;</span>, <span class="keyword">const</span> std::locale&amp; Locale = GetDefaultLocale());</div>
<div class="line"><a name="l00125"></a><span class="lineno">  125</span>&#160;</div>
<div class="line"><a name="l00138"></a><span class="lineno">  138</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00139"></a><span class="lineno">  139</span>&#160;    <span class="keyword">static</span> Out ANSIToUTF32(In Begin, In End, Out Output, <span class="keyword">const</span> std::locale&amp; Locale = GetDefaultLocale());</div>
<div class="line"><a name="l00140"></a><span class="lineno">  140</span>&#160;</div>
<div class="line"><a name="l00153"></a><span class="lineno">  153</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00154"></a><span class="lineno">  154</span>&#160;    <span class="keyword">static</span> Out UTF8ToUTF16(In Begin, In End, Out Output, Uint16 Replacement = <span class="charliteral">&#39;?&#39;</span>);</div>
<div class="line"><a name="l00155"></a><span class="lineno">  155</span>&#160;</div>
<div class="line"><a name="l00168"></a><span class="lineno">  168</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00169"></a><span class="lineno">  169</span>&#160;    <span class="keyword">static</span> Out UTF8ToUTF32(In Begin, In End, Out Output, Uint32 Replacement = <span class="charliteral">&#39;?&#39;</span>);</div>
<div class="line"><a name="l00170"></a><span class="lineno">  170</span>&#160;</div>
<div class="line"><a name="l00183"></a><span class="lineno">  183</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00184"></a><span class="lineno">  184</span>&#160;    <span class="keyword">static</span> Out UTF16ToUTF8(In Begin, In End, Out Output, Uint8 Replacement = <span class="charliteral">&#39;?&#39;</span>);</div>
<div class="line"><a name="l00185"></a><span class="lineno">  185</span>&#160;</div>
<div class="line"><a name="l00198"></a><span class="lineno">  198</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00199"></a><span class="lineno">  199</span>&#160;    <span class="keyword">static</span> Out UTF16ToUTF32(In Begin, In End, Out Output, Uint32 Replacement = <span class="charliteral">&#39;?&#39;</span>);</div>
<div class="line"><a name="l00200"></a><span class="lineno">  200</span>&#160;</div>
<div class="line"><a name="l00213"></a><span class="lineno">  213</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00214"></a><span class="lineno">  214</span>&#160;    <span class="keyword">static</span> Out UTF32ToUTF8(In Begin, In End, Out Output, Uint8 Replacement = <span class="charliteral">&#39;?&#39;</span>);</div>
<div class="line"><a name="l00215"></a><span class="lineno">  215</span>&#160;</div>
<div class="line"><a name="l00228"></a><span class="lineno">  228</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In, <span class="keyword">typename</span> Out&gt;</div>
<div class="line"><a name="l00229"></a><span class="lineno">  229</span>&#160;    <span class="keyword">static</span> Out UTF32ToUTF16(In Begin, In End, Out Output, Uint16 Replacement = <span class="charliteral">&#39;?&#39;</span>);</div>
<div class="line"><a name="l00230"></a><span class="lineno">  230</span>&#160;</div>
<div class="line"><a name="l00240"></a><span class="lineno">  240</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In&gt;</div>
<div class="line"><a name="l00241"></a><span class="lineno">  241</span>&#160;    <span class="keyword">static</span> std::size_t GetUTF8Length(In Begin, In End);</div>
<div class="line"><a name="l00242"></a><span class="lineno">  242</span>&#160;</div>
<div class="line"><a name="l00252"></a><span class="lineno">  252</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In&gt;</div>
<div class="line"><a name="l00253"></a><span class="lineno">  253</span>&#160;    <span class="keyword">static</span> std::size_t GetUTF16Length(In Begin, In End);</div>
<div class="line"><a name="l00254"></a><span class="lineno">  254</span>&#160;</div>
<div class="line"><a name="l00264"></a><span class="lineno">  264</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> In&gt;</div>
<div class="line"><a name="l00265"></a><span class="lineno">  265</span>&#160;    <span class="keyword">static</span> std::size_t GetUTF32Length(In Begin, In End);</div>
<div class="line"><a name="l00266"></a><span class="lineno">  266</span>&#160;</div>
<div class="line"><a name="l00267"></a><span class="lineno">  267</span>&#160;<span class="keyword">private</span> :</div>
<div class="line"><a name="l00268"></a><span class="lineno">  268</span>&#160;</div>
<div class="line"><a name="l00275"></a><span class="lineno">  275</span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> std::locale&amp; GetDefaultLocale();</div>
<div class="line"><a name="l00276"></a><span class="lineno">  276</span>&#160;</div>
<div class="line"><a name="l00278"></a><span class="lineno">  278</span>&#160;    <span class="comment">// Static member data</span></div>
<div class="line"><a name="l00280"></a><span class="lineno">  280</span>&#160;<span class="comment"></span>    <span class="keyword">static</span> <span class="keyword">const</span> <span class="keywordtype">int</span>    UTF8TrailingBytes[256]; </div>
<div class="line"><a name="l00281"></a><span class="lineno">  281</span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> Uint32 UTF8Offsets[6];         </div>
<div class="line"><a name="l00282"></a><span class="lineno">  282</span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> Uint8  UTF8FirstBytes[7];      </div>
<div class="line"><a name="l00283"></a><span class="lineno">  283</span>&#160;};</div>
<div class="line"><a name="l00284"></a><span class="lineno">  284</span>&#160;</div>
<div class="line"><a name="l00285"></a><span class="lineno">  285</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Unicode.inl&gt;</span></div>
<div class="line"><a name="l00286"></a><span class="lineno">  286</span>&#160;</div>
<div class="line"><a name="l00287"></a><span class="lineno">  287</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00288"></a><span class="lineno">  288</span>&#160;</div>
<div class="line"><a name="l00289"></a><span class="lineno">  289</span>&#160;</div>
<div class="line"><a name="l00290"></a><span class="lineno">  290</span>&#160;<span class="preprocessor">#endif // SFML_UNICODE_HPP</span></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
