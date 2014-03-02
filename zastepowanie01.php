<?php

$offset = 0; 

if (isset($_POST['text'])&&isset($_POST['searchfor'])&&isset($_POST['replacewith'])) {
   $text = $_POST['text'];
   $search = $_POST['searchfor'];
   $replace = $_POST['replacewith'];        

    if(!empty($text)&&!empty($search)&&!empty($replace)) {

        while($strpos = strpos($text,$search ,$offset)) {
            
        }
       
        
    } else {
    echo 'uzupelnij formularz gamoniu!';
    }
}
    
    ?>



<form action="zastepowanie01.php" method="POST">
    <textarea name="text" rows="6" cols="30"></textarea> <br><br>
    <p>Search for:</p>
    <input type="text" name="searchfor"> <br><br>
    <p>Replace with:</p>
    <input type="text" name="replacewith"> <br><br>
    <input type="submit" value="Find and Replace">
</form>