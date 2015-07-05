<?php
    $version = '2.3.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::SocketSelector Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1SocketSelector.php">SocketSelector</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="classsf_1_1SocketSelector-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::SocketSelector Class Reference<div class="ingroups"><a class="el" href="group__network.php">Network module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Multiplexer that allows to read from multiple sockets.  
 <a href="classsf_1_1SocketSelector.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="SocketSelector_8hpp_source.php">SocketSelector.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a741959c5158aeb1e4457cad47d90f76b"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SocketSelector.php#a741959c5158aeb1e4457cad47d90f76b">SocketSelector</a> ()</td></tr>
<tr class="memdesc:a741959c5158aeb1e4457cad47d90f76b"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#a741959c5158aeb1e4457cad47d90f76b">More...</a><br /></td></tr>
<tr class="separator:a741959c5158aeb1e4457cad47d90f76b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a50b1b955eb7ecb2e7c2764f3f4722fbf"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SocketSelector.php#a50b1b955eb7ecb2e7c2764f3f4722fbf">SocketSelector</a> (const <a class="el" href="classsf_1_1SocketSelector.php">SocketSelector</a> &amp;copy)</td></tr>
<tr class="memdesc:a50b1b955eb7ecb2e7c2764f3f4722fbf"><td class="mdescLeft">&#160;</td><td class="mdescRight">Copy constructor.  <a href="#a50b1b955eb7ecb2e7c2764f3f4722fbf">More...</a><br /></td></tr>
<tr class="separator:a50b1b955eb7ecb2e7c2764f3f4722fbf"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9069cd61208260b8ed9cf233afa1f73d"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SocketSelector.php#a9069cd61208260b8ed9cf233afa1f73d">~SocketSelector</a> ()</td></tr>
<tr class="memdesc:a9069cd61208260b8ed9cf233afa1f73d"><td class="mdescLeft">&#160;</td><td class="mdescRight">Destructor.  <a href="#a9069cd61208260b8ed9cf233afa1f73d">More...</a><br /></td></tr>
<tr class="separator:a9069cd61208260b8ed9cf233afa1f73d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ade952013232802ff7b9b33668f8d2096"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SocketSelector.php#ade952013232802ff7b9b33668f8d2096">add</a> (<a class="el" href="classsf_1_1Socket.php">Socket</a> &amp;socket)</td></tr>
<tr class="memdesc:ade952013232802ff7b9b33668f8d2096"><td class="mdescLeft">&#160;</td><td class="mdescRight">Add a new socket to the selector.  <a href="#ade952013232802ff7b9b33668f8d2096">More...</a><br /></td></tr>
<tr class="separator:ade952013232802ff7b9b33668f8d2096"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a98b6ab693a65b82caa375639232357c1"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SocketSelector.php#a98b6ab693a65b82caa375639232357c1">remove</a> (<a class="el" href="classsf_1_1Socket.php">Socket</a> &amp;socket)</td></tr>
<tr class="memdesc:a98b6ab693a65b82caa375639232357c1"><td class="mdescLeft">&#160;</td><td class="mdescRight">Remove a socket from the selector.  <a href="#a98b6ab693a65b82caa375639232357c1">More...</a><br /></td></tr>
<tr class="separator:a98b6ab693a65b82caa375639232357c1"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a76e650acb0199d4be91e90a493fbc91a"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SocketSelector.php#a76e650acb0199d4be91e90a493fbc91a">clear</a> ()</td></tr>
<tr class="memdesc:a76e650acb0199d4be91e90a493fbc91a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Remove all the sockets stored in the selector.  <a href="#a76e650acb0199d4be91e90a493fbc91a">More...</a><br /></td></tr>
<tr class="separator:a76e650acb0199d4be91e90a493fbc91a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9cfda5475f17925e65889394d70af702"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SocketSelector.php#a9cfda5475f17925e65889394d70af702">wait</a> (<a class="el" href="classsf_1_1Time.php">Time</a> timeout=<a class="el" href="classsf_1_1Time.php#a8db127b632fa8da21550e7282af11fa0">Time::Zero</a>)</td></tr>
<tr class="memdesc:a9cfda5475f17925e65889394d70af702"><td class="mdescLeft">&#160;</td><td class="mdescRight">Wait until one or more sockets are ready to receive.  <a href="#a9cfda5475f17925e65889394d70af702">More...</a><br /></td></tr>
<tr class="separator:a9cfda5475f17925e65889394d70af702"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8e67b463db05eadb4d356992c896833c"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SocketSelector.php#a8e67b463db05eadb4d356992c896833c">isReady</a> (<a class="el" href="classsf_1_1Socket.php">Socket</a> &amp;socket) const </td></tr>
<tr class="memdesc:a8e67b463db05eadb4d356992c896833c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Test a socket to know if it is ready to receive data.  <a href="#a8e67b463db05eadb4d356992c896833c">More...</a><br /></td></tr>
<tr class="separator:a8e67b463db05eadb4d356992c896833c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ae6395c7a8d29a9ea14939cc5d1ba3a33"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1SocketSelector.php">SocketSelector</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SocketSelector.php#ae6395c7a8d29a9ea14939cc5d1ba3a33">operator=</a> (const <a class="el" href="classsf_1_1SocketSelector.php">SocketSelector</a> &amp;right)</td></tr>
<tr class="memdesc:ae6395c7a8d29a9ea14939cc5d1ba3a33"><td class="mdescLeft">&#160;</td><td class="mdescRight">Overload of assignment operator.  <a href="#ae6395c7a8d29a9ea14939cc5d1ba3a33">More...</a><br /></td></tr>
<tr class="separator:ae6395c7a8d29a9ea14939cc5d1ba3a33"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Multiplexer that allows to read from multiple sockets. </p>
<p><a class="el" href="classsf_1_1Socket.php" title="Base class for all the socket types. ">Socket</a> selectors provide a way to wait until some data is available on a set of sockets, instead of just one.</p>
<p>This is convenient when you have multiple sockets that may possibly receive data, but you don't know which one will be ready first. In particular, it avoids to use a thread for each socket; with selectors, a single thread can handle all the sockets.</p>
<p>All types of sockets can be used in a selector: </p><ul>
<li><a class="el" href="classsf_1_1TcpListener.php" title="Socket that listens to new TCP connections. ">sf::TcpListener</a> </li>
<li><a class="el" href="classsf_1_1TcpSocket.php" title="Specialized socket using the TCP protocol. ">sf::TcpSocket</a> </li>
<li><a class="el" href="classsf_1_1UdpSocket.php" title="Specialized socket using the UDP protocol. ">sf::UdpSocket</a></li>
</ul>
<p>A selector doesn't store its own copies of the sockets (socket classes are not copyable anyway), it simply keeps a reference to the original sockets that you pass to the "add" function. Therefore, you can't use the selector as a socket container, you must store them outside and make sure that they are alive as long as they are used in the selector.</p>
<p>Using a selector is simple: </p><ul>
<li>populate the selector with all the sockets that you want to observe </li>
<li>make it wait until there is data available on any of the sockets </li>
<li>test each socket to find out which ones are ready</li>
</ul>
<p>Usage example: </p><div class="fragment"><div class="line"><span class="comment">// Create a socket to listen to new connections</span></div>
<div class="line"><a class="code" href="classsf_1_1TcpListener.php">sf::TcpListener</a> listener;</div>
<div class="line">listener.<a class="code" href="classsf_1_1TcpListener.php#a409d9350d3abfea9636df8cf4a61004e">listen</a>(55001);</div>
<div class="line"></div>
<div class="line"><span class="comment">// Create a list to store the future clients</span></div>
<div class="line">std::list&lt;sf::TcpSocket*&gt; clients;</div>
<div class="line"></div>
<div class="line"><span class="comment">// Create a selector</span></div>
<div class="line"><a class="code" href="classsf_1_1SocketSelector.php">sf::SocketSelector</a> selector;</div>
<div class="line"></div>
<div class="line"><span class="comment">// Add the listener to the selector</span></div>
<div class="line">selector.<a class="code" href="classsf_1_1SocketSelector.php#ade952013232802ff7b9b33668f8d2096">add</a>(listener);</div>
<div class="line"></div>
<div class="line"><span class="comment">// Endless loop that waits for new connections</span></div>
<div class="line"><span class="keywordflow">while</span> (running)</div>
<div class="line">{</div>
<div class="line">    <span class="comment">// Make the selector wait for data on any socket</span></div>
<div class="line">    <span class="keywordflow">if</span> (selector.<a class="code" href="classsf_1_1SocketSelector.php#a9cfda5475f17925e65889394d70af702">wait</a>())</div>
<div class="line">    {</div>
<div class="line">        <span class="comment">// Test the listener</span></div>
<div class="line">        <span class="keywordflow">if</span> (selector.<a class="code" href="classsf_1_1SocketSelector.php#a8e67b463db05eadb4d356992c896833c">isReady</a>(listener))</div>
<div class="line">        {</div>
<div class="line">            <span class="comment">// The listener is ready: there is a pending connection</span></div>
<div class="line">            <a class="code" href="classsf_1_1TcpSocket.php">sf::TcpSocket</a>* client = <span class="keyword">new</span> <a class="code" href="classsf_1_1TcpSocket.php">sf::TcpSocket</a>;</div>
<div class="line">            <span class="keywordflow">if</span> (listener.<a class="code" href="classsf_1_1TcpListener.php#ae2c83ce5a64d50b68180c46bef0a7346">accept</a>(*client) == <a class="code" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dca1de3a85bc56d3ae85b3d0f3cfd04ae90">sf::Socket::Done</a>)</div>
<div class="line">            {</div>
<div class="line">                <span class="comment">// Add the new client to the clients list</span></div>
<div class="line">                clients.push_back(client);</div>
<div class="line"></div>
<div class="line">                <span class="comment">// Add the new client to the selector so that we will</span></div>
<div class="line">                <span class="comment">// be notified when he sends something</span></div>
<div class="line">                selector.<a class="code" href="classsf_1_1SocketSelector.php#ade952013232802ff7b9b33668f8d2096">add</a>(*client);</div>
<div class="line">            }</div>
<div class="line">            <span class="keywordflow">else</span></div>
<div class="line">            {</div>
<div class="line">                <span class="comment">// Error, we won&#39;t get a new connection, delete the socket</span></div>
<div class="line">                <span class="keyword">delete</span> client;</div>
<div class="line">            }</div>
<div class="line">        }</div>
<div class="line">        <span class="keywordflow">else</span></div>
<div class="line">        {</div>
<div class="line">            <span class="comment">// The listener socket is not ready, test all other sockets (the clients)</span></div>
<div class="line">            <span class="keywordflow">for</span> (std::list&lt;sf::TcpSocket*&gt;::iterator it = clients.begin(); it != clients.end(); ++it)</div>
<div class="line">            {</div>
<div class="line">                <a class="code" href="classsf_1_1TcpSocket.php">sf::TcpSocket</a>&amp; client = **it;</div>
<div class="line">                <span class="keywordflow">if</span> (selector.<a class="code" href="classsf_1_1SocketSelector.php#a8e67b463db05eadb4d356992c896833c">isReady</a>(client))</div>
<div class="line">                {</div>
<div class="line">                    <span class="comment">// The client has sent some data, we can receive it</span></div>
<div class="line">                    <a class="code" href="classsf_1_1Packet.php">sf::Packet</a> packet;</div>
<div class="line">                    <span class="keywordflow">if</span> (client.<a class="code" href="classsf_1_1TcpSocket.php#a90ce50811ea61d4f00efc62bb99ae1af">receive</a>(packet) == <a class="code" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dca1de3a85bc56d3ae85b3d0f3cfd04ae90">sf::Socket::Done</a>)</div>
<div class="line">                    {</div>
<div class="line">                        ...</div>
<div class="line">                    }</div>
<div class="line">                }</div>
<div class="line">            }</div>
<div class="line">        }</div>
<div class="line">    }</div>
<div class="line">}</div>
</div><!-- fragment --><dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Socket.php" title="Base class for all the socket types. ">sf::Socket</a> </dd></dl>

<p>Definition at line <a class="el" href="SocketSelector_8hpp_source.php#l00043">43</a> of file <a class="el" href="SocketSelector_8hpp_source.php">SocketSelector.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="a741959c5158aeb1e4457cad47d90f76b"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::SocketSelector::SocketSelector </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Default constructor. </p>

</div>
</div>
<a class="anchor" id="a50b1b955eb7ecb2e7c2764f3f4722fbf"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::SocketSelector::SocketSelector </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1SocketSelector.php">SocketSelector</a> &amp;&#160;</td>
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
<a class="anchor" id="a9069cd61208260b8ed9cf233afa1f73d"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::SocketSelector::~SocketSelector </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Destructor. </p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="ade952013232802ff7b9b33668f8d2096"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::SocketSelector::add </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classsf_1_1Socket.php">Socket</a> &amp;&#160;</td>
          <td class="paramname"><em>socket</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Add a new socket to the selector. </p>
<p>This function keeps a weak reference to the socket, so you have to make sure that the socket is not destroyed while it is stored in the selector. This function does nothing if the socket is not valid.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">socket</td><td>Reference to the socket to add</td></tr>
  </table>
  </dd>
</dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SocketSelector.php#a98b6ab693a65b82caa375639232357c1" title="Remove a socket from the selector. ">remove</a>, <a class="el" href="classsf_1_1SocketSelector.php#a76e650acb0199d4be91e90a493fbc91a" title="Remove all the sockets stored in the selector. ">clear</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a76e650acb0199d4be91e90a493fbc91a"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::SocketSelector::clear </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Remove all the sockets stored in the selector. </p>
<p>This function doesn't destroy any instance, it simply removes all the references that the selector has to external sockets.</p>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SocketSelector.php#ade952013232802ff7b9b33668f8d2096" title="Add a new socket to the selector. ">add</a>, <a class="el" href="classsf_1_1SocketSelector.php#a98b6ab693a65b82caa375639232357c1" title="Remove a socket from the selector. ">remove</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a8e67b463db05eadb4d356992c896833c"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::SocketSelector::isReady </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classsf_1_1Socket.php">Socket</a> &amp;&#160;</td>
          <td class="paramname"><em>socket</em></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Test a socket to know if it is ready to receive data. </p>
<p>This function must be used after a call to Wait, to know which sockets are ready to receive data. If a socket is ready, a call to receive will never block because we know that there is data available to read. Note that if this function returns true for a <a class="el" href="classsf_1_1TcpListener.php" title="Socket that listens to new TCP connections. ">TcpListener</a>, this means that it is ready to accept a new connection.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">socket</td><td><a class="el" href="classsf_1_1Socket.php" title="Base class for all the socket types. ">Socket</a> to test</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if the socket is ready to read, false otherwise</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SocketSelector.php#a8e67b463db05eadb4d356992c896833c" title="Test a socket to know if it is ready to receive data. ">isReady</a> </dd></dl>

</div>
</div>
<a class="anchor" id="ae6395c7a8d29a9ea14939cc5d1ba3a33"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1SocketSelector.php">SocketSelector</a>&amp; sf::SocketSelector::operator= </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1SocketSelector.php">SocketSelector</a> &amp;&#160;</td>
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
<a class="anchor" id="a98b6ab693a65b82caa375639232357c1"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::SocketSelector::remove </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classsf_1_1Socket.php">Socket</a> &amp;&#160;</td>
          <td class="paramname"><em>socket</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Remove a socket from the selector. </p>
<p>This function doesn't destroy the socket, it simply removes the reference that the selector has to it.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">socket</td><td>Reference to the socket to remove</td></tr>
  </table>
  </dd>
</dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SocketSelector.php#ade952013232802ff7b9b33668f8d2096" title="Add a new socket to the selector. ">add</a>, <a class="el" href="classsf_1_1SocketSelector.php#a76e650acb0199d4be91e90a493fbc91a" title="Remove all the sockets stored in the selector. ">clear</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a9cfda5475f17925e65889394d70af702"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::SocketSelector::wait </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classsf_1_1Time.php">Time</a>&#160;</td>
          <td class="paramname"><em>timeout</em> = <code><a class="el" href="classsf_1_1Time.php#a8db127b632fa8da21550e7282af11fa0">Time::Zero</a></code></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Wait until one or more sockets are ready to receive. </p>
<p>This function returns as soon as at least one socket has some data available to be received. To know which sockets are ready, use the isReady function. If you use a timeout and no socket is ready before the timeout is over, the function returns false.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">timeout</td><td>Maximum time to wait, (use <a class="el" href="classsf_1_1Time.php#a8db127b632fa8da21550e7282af11fa0" title="Predefined &quot;zero&quot; time value. ">Time::Zero</a> for infinity)</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if there are sockets ready, false otherwise</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SocketSelector.php#a8e67b463db05eadb4d356992c896833c" title="Test a socket to know if it is ready to receive data. ">isReady</a> </dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="SocketSelector_8hpp_source.php">SocketSelector.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer.php");
?>
