<?php
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];
if (!empty($_SERVER['HTTP_REFERER'])) {
    $http_referer = $_SERVER['HTTP_REFERER'];
} else {
    $http_referer = 'index02.html';
}
if (!empty($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $imie = $_SESSION['imie'];
    $nazwisko = $_SESSION['nazwisko'];
}
//Funkcja logged in rozpoznaje zalogowanego użytkownika 
function loggedin() {
if (isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])) {
return true;
} else {
return false;
//echo "sesja nieustanowiona";
}}

function getuserfield($pole) {

$query02 = "SELECT `id`, `".$pole."` 
FROM `user_base`
WHERE `id`='".$_SESSION['user_id']."'";

if ($query_run = mysql_query($query02)) {
  if ($query2_result = mysql_result($query_run,0, $pole)) {
  return $query2_result; 
  } else {
		//echo "bląd 02, query result nie działa ";
		//echo $query02 . mysql_error();
   }
} else {
    echo $komunikat02 = "query run nie działa" . mysql_error();
}
}
function admin_id() {
$admin_id = getuserfield('admin');
if ($admin_id==1) {
return TRUE;
} 
};

//Funkcja sprawdza czy ID należy do użytkownika
//function is_admin() {
//if(isset(getuserfield('admin'))) {
//return TRUE;
//} else {
//return FALSE;

//Funkcjia Okalania
//nazwa pliku może być tablicą

?>

