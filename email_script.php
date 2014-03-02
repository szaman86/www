<?php
$email = $_POST['email'];
$name = $_POST['name'];
$data = $name . "," . $email;
$file = "file.csv";

file_put_contents($file, $data . PHP_EOL, FILE_APPEND);
print "Zapisano";


?>

