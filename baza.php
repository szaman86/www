 <?php
require_once 'phplogin.php';
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
mysql_select_db($db_database)
or die("Unable to select database: " . mysql_error());
$query = "SELECT * FROM posty";
$result = mysql_query($query);

if (!$result) die ("Database access failed: " . mysql_error());
$rows = mysql_num_rows($result);
for ($j = 0 ; $j < $rows ; ++$j)
{
echo '<p>' . mysql_result($result,$j,'post') . '</p>';
};
mysql_close($db_server);
?>