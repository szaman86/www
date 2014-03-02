	<?php 

	
if (isset($_POST['name'])&&isset($_POST['pass'])) {
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	$pass_hash = md5($pass);
	$query = "SELECT  `user_name` ,  `Password` , `id`, `imie`, `nazwisko`
FROM  `user_base` 
WHERE  `Password` =  '".  mysql_real_escape_string($pass_hash)."' &&  `user_name` =  '". mysql_real_escape_string($name) ."'";
	
	
if ($query_run = mysql_query($query)) {
	$query_num = mysql_num_rows($query_run);
	if ($query_num==0) {
	$komunikat = "<p>Wypełnij poprawnie pola logoawania</p><p>Nie jesteś zarejestrowany? <br><a href=\"rejestracja.php\">Zarejestruj się!</a></p>";
	} else if ($query_num==1) {
	$user_id = mysql_result($query_run, 0, 'id');
	$_SESSION['user_id']=$user_id;
        $imie = getuserfield('imie');
                $_SESSION['imie'] = $imie;
        $nazwisko = getuserfield('nazwisko');
                $_SESSION['nazwisko'] = $nazwisko;
        header('Location: '.$http_referer);
	$komunikat = //"Id sesji " . $_SESSION['user_id']. 
                //"<br> Wprowadzony numer id " . $user_id . 
                //"<br> Wartość funkcji loggedin: " . loggedin() . "<br>" .
                //"<p> Jesteś zalogowany </p>
                //<p><a href=logout.php>Logout</a></p>
                "<p>Nazywasz się " .  $imie . " " . $nazwisko . "</p>";
                //"<p> HTTP Referer: ". $_SERVER['HTTP_REFERER']
	}
	} else { 
	$komunikat = "bład01" . $query_run . mysql_error();
	}
	} else {
	$komunikat = '<p class="hide-for-medium-down">Nie jesteś zarejestrowany?</p><p class="small"> <a href="rejestracja.php">Zarejestruj się!</a></p>';
	}

	

?>
	    <div class="small-3 medium-3 columns right">
        <div class="row">
            
<form action=<?php echo $current_file; ?> method="POST">
<fieldset>
    <legend>Logowanie</legend>
<label>
<input type="text" name="name" placeholder="Użytkownik"/>
</label>
        <label>
<input type="password" name="pass" placeholder="Hasło" />
</label>
        </div>
        <div class="row">      
<input type="submit" value="login" class="button tiny right">
        </div>
		</fieldset>
        <div class="row">
            <div class="small-12 columns">
            <?php echo $komunikat?>
            </div>
        </div>
    </div>

</form>


