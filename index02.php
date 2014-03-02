<?php
require 'header.html';
require 'core.inc.php';
require 'baza02.php';
echo '<div class="row panel">' ;
include 'wyroznione.php';
echo '</div>' ;
if (loggedin()==1) {
    include 'prawypanel.php';
    include 'topbar02.php';
} else if (loggedin()==0) {
include('topbar01.html');
    require_once 'formularz01.php';
}
include 'footer.html';	
?>