<?php
    $version = '2.3.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Sensor.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.8.10 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
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
<li class="navelem"><a class="el" href="dir_7107138a9ca528d5a30fb6c42d13b481.php">SFML</a></li><li class="navelem"><a class="el" href="dir_186e0dcb96ed2747fde77bc4d13d2016.php">include</a></li><li class="navelem"><a class="el" href="dir_8300c2a4f3c47520e59b1ed4cebc1d64.php">SFML</a></li><li class="navelem"><a class="el" href="dir_c6bbad27641286b84fe3bd1ab85ed533.php">Window</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Sensor.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2015 Laurent Gomila (laurent@sfml-dev.org)</span></div>
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
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_SENSOR_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_SENSOR_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Window/Export.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Vector3.hpp&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Time.hpp&gt;</span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;</div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;{</div>
<div class="line"><a name="l00042"></a><span class="lineno"><a class="line" href="classsf_1_1Sensor.php">   42</a></span>&#160;<span class="keyword">class </span>SFML_WINDOW_API <a class="code" href="classsf_1_1Sensor.php">Sensor</a></div>
<div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;{</div>
<div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;<span class="keyword">public</span>:</div>
<div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;</div>
<div class="line"><a name="l00050"></a><span class="lineno"><a class="line" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84">   50</a></span>&#160;    <span class="keyword">enum</span> <a class="code" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84">Type</a></div>
<div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;    {</div>
<div class="line"><a name="l00052"></a><span class="lineno"><a class="line" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84a11bc58199593e217de23641755ecc867">   52</a></span>&#160;        <a class="code" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84a11bc58199593e217de23641755ecc867">Accelerometer</a>,    </div>
<div class="line"><a name="l00053"></a><span class="lineno"><a class="line" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84a1c43984aacd29b1fda5356883fb19656">   53</a></span>&#160;        <a class="code" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84a1c43984aacd29b1fda5356883fb19656">Gyroscope</a>,        </div>
<div class="line"><a name="l00054"></a><span class="lineno"><a class="line" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84ae706bb678bde8d3c370e246ffde6a63d">   54</a></span>&#160;        <a class="code" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84ae706bb678bde8d3c370e246ffde6a63d">Magnetometer</a>,     </div>
<div class="line"><a name="l00055"></a><span class="lineno"><a class="line" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84afab4d098cc64e791a0c4a9ef6b32db92">   55</a></span>&#160;        <a class="code" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84afab4d098cc64e791a0c4a9ef6b32db92">Gravity</a>,          </div>
<div class="line"><a name="l00056"></a><span class="lineno"><a class="line" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84ad3a399e0025892b7c53e8767cebb9215">   56</a></span>&#160;        <a class="code" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84ad3a399e0025892b7c53e8767cebb9215">UserAcceleration</a>, </div>
<div class="line"><a name="l00057"></a><span class="lineno"><a class="line" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84aa428c5260446555de87c69b65f6edf00">   57</a></span>&#160;        <a class="code" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84aa428c5260446555de87c69b65f6edf00">Orientation</a>,      </div>
<div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;</div>
<div class="line"><a name="l00059"></a><span class="lineno"><a class="line" href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84afcb4a80eb9e3f927c5837207a1b9eb29">   59</a></span>&#160;        Count             </div>
<div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;    };</div>
<div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;</div>
<div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;    <span class="keyword">static</span> <span class="keywordtype">bool</span> isAvailable(Type sensor);</div>
<div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;</div>
<div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;    <span class="keyword">static</span> <span class="keywordtype">void</span> setEnabled(Type sensor, <span class="keywordtype">bool</span> enabled);</div>
<div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;</div>
<div class="line"><a name="l00095"></a><span class="lineno">   95</span>&#160;    <span class="keyword">static</span> <a class="code" href="classsf_1_1Vector3.php">Vector3f</a> getValue(Type sensor);</div>
<div class="line"><a name="l00096"></a><span class="lineno">   96</span>&#160;};</div>
<div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;</div>
<div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;</div>
<div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;</div>
<div class="line"><a name="l00101"></a><span class="lineno">  101</span>&#160;<span class="preprocessor">#endif // SFML_SENSOR_HPP</span></div>
<div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;</div>
<div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;</div>
<div class="ttc" id="classsf_1_1Sensor_php_a687375af3ab77b818fca73735bcaea84"><div class="ttname"><a href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84">sf::Sensor::Type</a></div><div class="ttdeci">Type</div><div class="ttdoc">Sensor type. </div><div class="ttdef"><b>Definition:</b> <a href="Sensor_8hpp_source.php#l00050">Sensor.hpp:50</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1Sensor_php_a687375af3ab77b818fca73735bcaea84ad3a399e0025892b7c53e8767cebb9215"><div class="ttname"><a href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84ad3a399e0025892b7c53e8767cebb9215">sf::Sensor::UserAcceleration</a></div><div class="ttdoc">Measures the direction and intensity of device acceleration, independent of the gravity (m/s^2) ...</div><div class="ttdef"><b>Definition:</b> <a href="Sensor_8hpp_source.php#l00056">Sensor.hpp:56</a></div></div>
<div class="ttc" id="classsf_1_1Sensor_php_a687375af3ab77b818fca73735bcaea84afab4d098cc64e791a0c4a9ef6b32db92"><div class="ttname"><a href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84afab4d098cc64e791a0c4a9ef6b32db92">sf::Sensor::Gravity</a></div><div class="ttdoc">Measures the direction and intensity of gravity, independent of device acceleration (m/s^2) ...</div><div class="ttdef"><b>Definition:</b> <a href="Sensor_8hpp_source.php#l00055">Sensor.hpp:55</a></div></div>
<div class="ttc" id="classsf_1_1Sensor_php"><div class="ttname"><a href="classsf_1_1Sensor.php">sf::Sensor</a></div><div class="ttdoc">Give access to the real-time state of the sensors. </div><div class="ttdef"><b>Definition:</b> <a href="Sensor_8hpp_source.php#l00042">Sensor.hpp:42</a></div></div>
<div class="ttc" id="classsf_1_1Vector3_php"><div class="ttname"><a href="classsf_1_1Vector3.php">sf::Vector3</a></div><div class="ttdoc">Utility template class for manipulating 3-dimensional vectors. </div><div class="ttdef"><b>Definition:</b> <a href="Vector3_8hpp_source.php#l00037">Vector3.hpp:37</a></div></div>
<div class="ttc" id="classsf_1_1Sensor_php_a687375af3ab77b818fca73735bcaea84aa428c5260446555de87c69b65f6edf00"><div class="ttname"><a href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84aa428c5260446555de87c69b65f6edf00">sf::Sensor::Orientation</a></div><div class="ttdoc">Measures the absolute 3D orientation (degrees) </div><div class="ttdef"><b>Definition:</b> <a href="Sensor_8hpp_source.php#l00057">Sensor.hpp:57</a></div></div>
<div class="ttc" id="classsf_1_1Sensor_php_a687375af3ab77b818fca73735bcaea84ae706bb678bde8d3c370e246ffde6a63d"><div class="ttname"><a href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84ae706bb678bde8d3c370e246ffde6a63d">sf::Sensor::Magnetometer</a></div><div class="ttdoc">Measures the ambient magnetic field (micro-teslas) </div><div class="ttdef"><b>Definition:</b> <a href="Sensor_8hpp_source.php#l00054">Sensor.hpp:54</a></div></div>
<div class="ttc" id="classsf_1_1Sensor_php_a687375af3ab77b818fca73735bcaea84a11bc58199593e217de23641755ecc867"><div class="ttname"><a href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84a11bc58199593e217de23641755ecc867">sf::Sensor::Accelerometer</a></div><div class="ttdoc">Measures the raw acceleration (m/s^2) </div><div class="ttdef"><b>Definition:</b> <a href="Sensor_8hpp_source.php#l00052">Sensor.hpp:52</a></div></div>
<div class="ttc" id="classsf_1_1Sensor_php_a687375af3ab77b818fca73735bcaea84a1c43984aacd29b1fda5356883fb19656"><div class="ttname"><a href="classsf_1_1Sensor.php#a687375af3ab77b818fca73735bcaea84a1c43984aacd29b1fda5356883fb19656">sf::Sensor::Gyroscope</a></div><div class="ttdoc">Measures the raw rotation rates (degrees/s) </div><div class="ttdef"><b>Definition:</b> <a href="Sensor_8hpp_source.php#l00053">Sensor.hpp:53</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
