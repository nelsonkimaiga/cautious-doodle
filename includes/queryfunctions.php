<?php
$host="127.0.0.1"; // Host name  
$db_name='taifa_jobs';
{
	$conn=mysqli_connect('127.0.0.1', 'root', '303seminarian', 'taifa_jobs');
	mysqli_select_db($conn, $db_name) or die("cannot select DB");
	return $conn;
}

//close a connection
function db_close($conn)
{
	mysql_close($conn);
}

function query($strsql,$conn)
{
	$rs = mysql_query($strsql,$conn);
	return $rs;
}

function num_rows($rs)
{
	return @mysql_num_rows($rs); 
}

function fetch_array($rs)
{
	return mysql_fetch_array($rs);
}

function fetch_object($rs)
{
	return mysql_fetch_object($rs);
}

function free_result($rs)
{
	@mysql_free_result($rs);
}

function data_seek($rs,$cnt)
{
	@mysql_data_seek($rs, $cnt);
}

function error()
{
	return mysql_error();
}
?>
<?php
//	define("HOST", "127.0.0.1");
	define("PORT", 3306);
	define("USER", "root");
	define("PASS", "303seminarian");
//	define("DB", "taifa_jobs");
	define("smptserver",'smtpserver');
	define("supportemail",'emailadress');
	define("bcc",'emailaddress');		
?>