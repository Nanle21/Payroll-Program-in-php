 dey
<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_dbconnect = "localhost";
$database_dbconnect = "payroll";
$username_dbconnect = "nanle";
$password_dbconnect = "precious";
$dbconnect = mysql_pconnect($hostname_dbconnect, $username_dbconnect, $password_dbconnect) or trigger_error(mysql_error(),E_USER_ERROR); 
?>