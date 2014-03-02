<?php

if (isset($_GET['dzien'])&&isset($_GET['data'])) {
    $dzien = $_GET['dzien'];
    $data = $_GET['data']; 

    if(!empty($dzien)&&!empty($data)) {
        echo 'OK!';
    } else {
        echo 'wypełnij pola';
    }
    
    
}

?>

<?php 
include('header01.html'); 
?>

<div class="row">
    <div class="large-6 columns">

<form action="funkcjeformularzy.php" method="GET">
    Dzien:  <br> <input type="text" name="dzien"<br>
    Data:   <br> <input type="text" name="data"<br><br>
    <input type="submit" value="Submit">
    
</form>
        </div>    
    </div>
<?php 
include('footer.html');
?>