<?php
define('DATABASE', 'sports');
define('HOSTNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
$link = mysql_connect(HOSTNAME, USERNAME, PASSWORD);
if (!$link) {
die('Connection failed: ' . mysql_error());
}
$db_selected = mysql_select_db(DATABASE, $link);
if (!$db_selected) {
die ('Can\'t select database: ' . mysql_error());
}
try {
$dbo = new PDO('mysql:host='.HOSTNAME.';dbname='.DATABASE, USERNAME, PASSWORD);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}
$site="//sports.sj/";
$images=$site."images/";
$login=$site."Login/";
$change=$login."change.php";
$forgot=$login."forgot.php";
$registration=$site."Registration/";
$events=$site."Events/";
$eventDetail=$events."event_details.php";