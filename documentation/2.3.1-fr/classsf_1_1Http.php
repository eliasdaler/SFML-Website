<?php
    $version = '2.3.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Http Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Http.php">Http</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#nested-classes">Classes</a> &#124;
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="classsf_1_1Http-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::Http Class Reference<div class="ingroups"><a class="el" href="group__network.php">Network module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>A HTTP client.  
 <a href="classsf_1_1Http.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="Http_8hpp_source.php">Http.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for sf::Http:</div>
<div class="dyncontent">
 <div class="center">
  <img src="classsf_1_1Http.png" usemap="#sf::Http_map" alt=""/>
  <map id="sf::Http_map" name="sf::Http_map">
<area href="classsf_1_1NonCopyable.php" title="Utility class that makes any derived class non-copyable. " alt="sf::NonCopyable" shape="rect" coords="0,0,105,24"/>
</map>
 </div></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Http_1_1Request.php">Request</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">Define a HTTP request.  <a href="classsf_1_1Http_1_1Request.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Http_1_1Response.php">Response</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">Define a HTTP response.  <a href="classsf_1_1Http_1_1Response.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:abe2360194f99bdde402c9f97a85cf067"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Http.php#abe2360194f99bdde402c9f97a85cf067">Http</a> ()</td></tr>
<tr class="memdesc:abe2360194f99bdde402c9f97a85cf067"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#abe2360194f99bdde402c9f97a85cf067">More...</a><br /></td></tr>
<tr class="separator:abe2360194f99bdde402c9f97a85cf067"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a79efd844a735f083fcce0edbf1092385"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Http.php#a79efd844a735f083fcce0edbf1092385">Http</a> (const std::string &amp;host, unsigned short port=0)</td></tr>
<tr class="memdesc:a79efd844a735f083fcce0edbf1092385"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct the HTTP client with the target host.  <a href="#a79efd844a735f083fcce0edbf1092385">More...</a><br /></td></tr>
<tr class="separator:a79efd844a735f083fcce0edbf1092385"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a55121d543b61c41cf20b885a97b04e65"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Http.php#a55121d543b61c41cf20b885a97b04e65">setHost</a> (const std::string &amp;host, unsigned short port=0)</td></tr>
<tr class="memdesc:a55121d543b61c41cf20b885a97b04e65"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the target host.  <a href="#a55121d543b61c41cf20b885a97b04e65">More...</a><br /></td></tr>
<tr class="separator:a55121d543b61c41cf20b885a97b04e65"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aaf09ebfb5e00dcc82e0d494d5c6a9e2a"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Http_1_1Response.php">Response</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Http.php#aaf09ebfb5e00dcc82e0d494d5c6a9e2a">sendRequest</a> (const <a class="el" href="classsf_1_1Http_1_1Request.php">Request</a> &amp;request, <a class="el" href="classsf_1_1Time.php">Time</a> timeout=<a class="el" href="classsf_1_1Time.php#a8db127b632fa8da21550e7282af11fa0">Time::Zero</a>)</td></tr>
<tr class="memdesc:aaf09ebfb5e00dcc82e0d494d5c6a9e2a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Send a HTTP request and return the server's response.  <a href="#aaf09ebfb5e00dcc82e0d494d5c6a9e2a">More...</a><br /></td></tr>
<tr class="separator:aaf09ebfb5e00dcc82e0d494d5c6a9e2a"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>A HTTP client. </p>
<p><a class="el" href="classsf_1_1Http.php" title="A HTTP client. ">sf::Http</a> is a very simple HTTP client that allows you to communicate with a web server.</p>
<p>You can retrieve web pages, send data to an interactive resource, download a remote file, etc. The HTTPS protocol is not supported.</p>
<p>The HTTP client is split into 3 classes: </p><ul>
<li><a class="el" href="classsf_1_1Http_1_1Request.php" title="Define a HTTP request. ">sf::Http::Request</a> </li>
<li><a class="el" href="classsf_1_1Http_1_1Response.php" title="Define a HTTP response. ">sf::Http::Response</a> </li>
<li><a class="el" href="classsf_1_1Http.php" title="A HTTP client. ">sf::Http</a></li>
</ul>
<p><a class="el" href="classsf_1_1Http_1_1Request.php" title="Define a HTTP request. ">sf::Http::Request</a> builds the request that will be sent to the server. A request is made of: </p><ul>
<li>a method (what you want to do) </li>
<li>a target URI (usually the name of the web page or file) </li>
<li>one or more header fields (options that you can pass to the server) </li>
<li>an optional body (for POST requests)</li>
</ul>
<p><a class="el" href="classsf_1_1Http_1_1Response.php" title="Define a HTTP response. ">sf::Http::Response</a> parse the response from the web server and provides getters to read them. The response contains: </p><ul>
<li>a status code </li>
<li>header fields (that may be answers to the ones that you requested) </li>
<li>a body, which contains the contents of the requested resource</li>
</ul>
<p><a class="el" href="classsf_1_1Http.php" title="A HTTP client. ">sf::Http</a> provides a simple function, SendRequest, to send a <a class="el" href="classsf_1_1Http_1_1Request.php" title="Define a HTTP request. ">sf::Http::Request</a> and return the corresponding <a class="el" href="classsf_1_1Http_1_1Response.php" title="Define a HTTP response. ">sf::Http::Response</a> from the server.</p>
<p>Usage example: </p><div class="fragment"><div class="line"><span class="comment">// Create a new HTTP client</span></div>
<div class="line"><a class="code" href="classsf_1_1Http.php">sf::Http</a> http;</div>
<div class="line"></div>
<div class="line"><span class="comment">// We&#39;ll work on http://www.sfml-dev.org</span></div>
<div class="line">http.<a class="code" href="classsf_1_1Http.php#a55121d543b61c41cf20b885a97b04e65">setHost</a>(<span class="stringliteral">&quot;http://www.sfml-dev.org&quot;</span>);</div>
<div class="line"></div>
<div class="line"><span class="comment">// Prepare a request to get the &#39;features.php&#39; page</span></div>
<div class="line"><a class="code" href="classsf_1_1Http_1_1Request.php">sf::Http::Request</a> request(<span class="stringliteral">&quot;features.php&quot;</span>);</div>
<div class="line"></div>
<div class="line"><span class="comment">// Send the request</span></div>
<div class="line"><a class="code" href="classsf_1_1Http_1_1Response.php">sf::Http::Response</a> response = http.<a class="code" href="classsf_1_1Http.php#aaf09ebfb5e00dcc82e0d494d5c6a9e2a">sendRequest</a>(request);</div>
<div class="line"></div>
<div class="line"><span class="comment">// Check the status code and display the result</span></div>
<div class="line"><a class="code" href="classsf_1_1Http_1_1Response.php#a663e071978e30fbbeb20ed045be874d8">sf::Http::Response::Status</a> status = response.<a class="code" href="classsf_1_1Http_1_1Response.php#a542e9856b1dd260a83940eb982b7f19a">getStatus</a>();</div>
<div class="line"><span class="keywordflow">if</span> (status == <a class="code" href="classsf_1_1Http_1_1Response.php#a663e071978e30fbbeb20ed045be874d8a0158f932254d3f09647dd1f64bd43832">sf::Http::Response::Ok</a>)</div>
<div class="line">{</div>
<div class="line">    std::cout &lt;&lt; response.<a class="code" href="classsf_1_1Http_1_1Response.php#a6b74ef73051a16ebb20041495c758e22">getBody</a>() &lt;&lt; std::endl;</div>
<div class="line">}</div>
<div class="line"><span class="keywordflow">else</span></div>
<div class="line">{</div>
<div class="line">    std::cout &lt;&lt; <span class="stringliteral">&quot;Error &quot;</span> &lt;&lt; status &lt;&lt; std::endl;</div>
<div class="line">}</div>
</div><!-- fragment --> 
<p>Definition at line <a class="el" href="Http_8hpp_source.php#l00046">46</a> of file <a class="el" href="Http_8hpp_source.php">Http.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="abe2360194f99bdde402c9f97a85cf067"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Http::Http </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Default constructor. </p>

</div>
</div>
<a class="anchor" id="a79efd844a735f083fcce0edbf1092385"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Http::Http </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>host</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned short&#160;</td>
          <td class="paramname"><em>port</em> = <code>0</code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Construct the HTTP client with the target host. </p>
<p>This is equivalent to calling setHost(host, port). The port has a default value of 0, which means that the HTTP client will use the right port according to the protocol used (80 for HTTP). You should leave it like this unless you really need a port other than the standard one, or use an unknown protocol.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">host</td><td>Web server to connect to </td></tr>
    <tr><td class="paramname">port</td><td>Port to use for connection </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="aaf09ebfb5e00dcc82e0d494d5c6a9e2a"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Http_1_1Response.php">Response</a> sf::Http::sendRequest </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Http_1_1Request.php">Request</a> &amp;&#160;</td>
          <td class="paramname"><em>request</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="classsf_1_1Time.php">Time</a>&#160;</td>
          <td class="paramname"><em>timeout</em> = <code><a class="el" href="classsf_1_1Time.php#a8db127b632fa8da21550e7282af11fa0">Time::Zero</a></code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Send a HTTP request and return the server's response. </p>
<p>You must have a valid host before sending a request (see setHost). Any missing mandatory header field in the request will be added with an appropriate value. Warning: this function waits for the server's response and may not return instantly; use a thread if you don't want to block your application, or use a timeout to limit the time to wait. A value of <a class="el" href="classsf_1_1Time.php#a8db127b632fa8da21550e7282af11fa0" title="Predefined &quot;zero&quot; time value. ">Time::Zero</a> means that the client will use the system default timeout (which is usually pretty long).</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">request</td><td><a class="el" href="classsf_1_1Http_1_1Request.php" title="Define a HTTP request. ">Request</a> to send </td></tr>
    <tr><td class="paramname">timeout</td><td>Maximum time to wait</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Server's response </dd></dl>

</div>
</div>
<a class="anchor" id="a55121d543b61c41cf20b885a97b04e65"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Http::setHost </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>host</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned short&#160;</td>
          <td class="paramname"><em>port</em> = <code>0</code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Set the target host. </p>
<p>This function just stores the host address and port, it doesn't actually connect to it until you send a request. The port has a default value of 0, which means that the HTTP client will use the right port according to the protocol used (80 for HTTP). You should leave it like this unless you really need a port other than the standard one, or use an unknown protocol.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">host</td><td>Web server to connect to </td></tr>
    <tr><td class="paramname">port</td><td>Port to use for connection </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="Http_8hpp_source.php">Http.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
