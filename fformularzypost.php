<?php

$match = 'pass123';

if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if (!empty($password)) {
    if ($password==$match) {
        echo 'hasło OK';
    } else {
        echo 'Błędne hasło';
    }
    } else {
        echo 'wprowadź hasło';
    }
}

?>


<?php include('header01.html'); ?>

<div class="row">
    <div class="large-6 columns">
<form action="fformularzypost.php" method="post">
    <p>Hasło:</p><input type="password" name="password"><br>
    <input type="submit" value="submit">
    
</form>
    </div>
</div>
<?php include('footer.html');?>