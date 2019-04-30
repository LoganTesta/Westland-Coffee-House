<?php

error_reporting(~ E_DEPRECATED & ~E_NOTICE);
/* Global settings */

/*
  define('DBHOST', 'awesomegamesdepotcom.ipagemysql.com');
  define('DBUSER', 'logan_2');
  define('DBPASS', 'abc123');
  define('DBNAME', 'userdatabaseawesomegamesdepot');
 */

/* Local settings */

define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'userdatabaseawesomegamesdepot');


$conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
if (!$conn) {
    die("Connection failed : " . mysql_error());
}
?>
