<?php 
if (isset($_POST['size'])) {
setcookie('size', $_POST['size']);	

$msg = '<p>Your settings have been entered! Click <a href="view_settings.php">here</a>to see them in action.</p>';
};

?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>Ciacha</title>
    <link rel="stylesheet" href="css/foundation.css" />
  </head>
  <body>
  <?php 
	if (isset($msg)) {
	print $msg;}
?>

<form action="kustomizuj.php" method="post">
<p>Rozmiar</p>
<select name='size'>
<option value="small"> Małe </option>
<option value="medium">Srednie</option>
<option value="big">Duze</option>
</select>
<input type="submit" name="submit" value="submit"/>
</form>
  </body>
  </html>