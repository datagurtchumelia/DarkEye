<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/style.css?v=<?php echo(time())?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>DarkEye | Home</title>
</head>
<body>
  <section class="global">
    <header>
      <nav>
      <a href="./index.php"><img id="cover" src="./images/Project.jpg" alt=""></a>
        <ul>
          <a href="./pages/sqli.php">
            
            <li>
              <i class="fa-solid fa-database"></i>
              SQL Injection
            </li>
          </a>
          
          <a href="./pages/xss.php">
            
            <li>
              <i class="fa-brands fa-js"></i>
              XSS
            </li>
          </a>

        </li>
        <a href="./pages/lfi.php">
          
          <li>
            <i class="fa-solid fa-folder-closed"></i>
            LFI
          </li>
        </a>
        <a href="./pages/msf.php">
          
          <li>
            <i class="fa-solid fa-shield-halved"></i>
            MSF Builder
            </li>
          </a>
          <a href="./pages/osint.php">
            
            <li>
              <i class="fa-solid fa-eye"></i>
              Osint
            </li>
          </a>
          <a href="./pages/webshell.php">
            
            <li>
              <i class="fa-solid fa-viruses"></i>
              Web Shell
            </li>
          </a>
          
          <a href="./pages/terminal.php">
            <li>
              <i class="fa-solid fa-terminal"></i>
              Terminal
            </li>
          </a>
        </ul>
      </nav>
    </header>
    <main>
      <h1 id="Welcome-messege"></h1>
      <p id="description"></p>
      <br>
      <div class="terminal">
        <div class="">
            <h1 class="description">Welcome To DarkEye</h1>
        </div>
        <br>
        <div class="output">
        </div>
        <div class="output">
            <span class="description">DarkEye is a cyber security and hacking project that helps you find vulnerabilities, use different tools, create a backdoor, Osint the site
            <br><br><br><br><br><br><br><br><br><br><br>
            <span>Created by:</span>
            <br>
            <i class="fa-brands fa-github"></i>
            <a href="https://github.com/datagurtchumelia">github.com/datagurtchumelia</a>
            <br>
            <i class="fa-brands fa-linkedin"></i>
            <a href="https://www.linkedin.com/in/data-gurtchumelia/">www.linkedin.com/in/data-gurtchumelia/</a>
            </span>
        </div>
      </div>
    </main>
  </section>
    
    <script src="./javascript/script.js"></script>
  </body>
</html>