<?php include('config.php');

$servername = $CONFIG['mysqlhost'];
$username = $CONFIG['mysqluser'];
$password = $CONFIG['mysqlpass'];


// Create connection
($GLOBALS['link'] = mysqli_connect($servername,  $username,  $password, "rsps"))or die(mysqli_error($GLOBALS['link']));

mysqli_select_db($GLOBALS['link'], 'rsps');

if(!$GLOBALS['link']){
	echo('DBCON failed.');
}

?>
