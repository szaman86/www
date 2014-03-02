
<?php
require 'header.html';
require 'core.inc.php';
require 'baza02.php';
if (!loggedin()) {
if ( //Wypełnianie formularza
        isset($_POST['name'])&&
        isset($_POST['pass'])&&
        isset($_POST['pass2'])&&
        isset($_POST['imie'])&&
        isset($_POST['nazwisko'])
        )   {
    $username = $_POST['name'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];
	$pass_hash=md5($pass);
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
   if (!empty($username)&&!empty($pass)&&!empty($pass2)&&!empty($imie)&&!empty($nazwisko)) // Walidacja obecności danych w zmiennych
   {
       if (strlen($username)>30||strlen($imie)>30||strlen($nazwisko)>30) //Walidacja długości pól formularzy
	   {
	   $komunikat = "Co Ty Kurwa wpiusujesz za bzudury!!!";
	   } else {
	   if ($pass==$pass2) { //Czy hasło pasuje do potwierdzenia
       $query = "SELECT `user_name` FROM `user_base` WHERE `user_name`='$username'";
       $query_run = mysql_query($query);
	   $query_result = mysql_num_rows($query_run);
	   if ($query_result==1) { //Walidacja duplikacja
	   $komunikat = "Dubel";
	   } else { //działania dla niedubla
	   $query = "INSERT INTO `user_base` (`user_name` , `Password` , `imie` , `nazwisko`)
VALUES ('".mysql_real_escape_string($username)."', '".mysql_real_escape_string($pass_hash)."', '".mysql_real_escape_string($imie)."', '".mysql_real_escape_string($nazwisko)."')";
	   if ($query_run = mysql_query($query)) {
	   header('Location: index02.php');
	   } else {
	   $komunikat = "Query INsert Błąd!" .  mysql_error() . "!!!<br>" . $query;
	   };	
	   };
        } else {
		$komunikat = "Hasła nie pasują" . $query;
		} } } else {
    $komunikat = "<p> wszystkie pola są wymagane </p>";
        }
    }
 ?>
<form action='rejestracja.php' method='POST'>
 <div class="row">
     <div class="large-12 columns"> 
   <label>
       <input type="text" name="name" placeholder="Nazwa użytkownika" maxlength="100" value="<?php if (!empty($username)) {echo $username;}?>"/>
</label>
</div>
</div>
<div class="row">
<div class="large-4 columns ">
<label>
<input type="password" name="pass"  placeholder="Hasło" />
</label>
</div>
<div class="large-4 columns left">
<label>
<input type="password" name="pass2" placeholder="Potwierdź hasło"  />
</label>
</div>

</div>
    <div class="row">
        <div class="large-4 columns">
            <input type="text" name="imie" placeholder="Wpisz imię" maxlength="30" value="<?php if (!empty($imie)) {echo $imie;}?>"/>
        </div>
     <div class="large-4 columns left">
         <input type="text" name="nazwisko" placeholder="Wpisz nazwisko" maxlength="30" value="<?php if (!empty($nazwisko)) {echo $nazwisko;}?>"/>
        </div>
        </div>
    <div class="row">
<div class="large-4 columns">
<div class="panel">
<?php if (!empty($komunikat)) {echo $komunikat; }?>
</div>
</div>
</div>

    <div class="row">
        <div class="large-12 columns">
<input type="submit" value="register">   
        </div>
    </div>
</form>

<?php } else if (loggedin())  {
    // Juz zalgowamny
    echo "<p>Jesteś już zalogowoany</p>";
}
include 'footer.html';
?>