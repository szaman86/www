<?php
$name = $_FILES['file']['name'];
echo $size = $_FILES['file']['size'] .'<br>';
$max_size = 2013694;
echo $type = $_FILES['file']['type'] .'<br>';


$tmp_name = $_FILES['file']['tmp_name'];
//$error = $_FILES['file']['error'];

if (isset($name)) {
    if(!empty($name)) {
        //echo 'OK';
        $location = 'uploads/';
        
        if (move_uploaded_file($tmp_name, $location.$name)) {
            echo 'Załadowane';
        }
        
    } else {
        echo 'Błąd';        
    }
}


?>
<?php include('header01.html'); ?>
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file"><br><br>
    <input type="submit" name="submit">
      
</form>
<?php include('footer.html'); ?>