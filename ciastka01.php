<?php 
if (isset($size)) {
setcookie($size, 25);	

$msg = '<p>Your settings have been entered! Click <a href="view_settings.php">here</a>to see them in action.</p>';
};

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
  </head>
  <body>
   <?php 
	if (isset($msg)) {
	print $msg;}
?>
</body>
</html>
