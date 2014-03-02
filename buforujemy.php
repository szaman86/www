<?php
ob_start();
include('layout01.php');
ob_end_flush();
print ob_get_length();

?>
