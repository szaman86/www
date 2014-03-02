<?php
if (loggedin()) {
if (admin_id()) {
if (isset($_POST['tytul'])&&isset($_POST['kategoria'])&&isset($_POST['post'])) {
    if(!empty($_POST['tytul'])&&!empty($_POST['kategoria'])&&!empty($_POST['post'])) {
    //formularz wypełniony
    $tytul= $_POST['tytul'];
    $kategoria = $_POST['kategoria'];
    $post = $_POST['post'];
    
$query04 = "INSERT INTO  `posty` (
`post` ,
`kat` ,
`tytul`
)
VALUES ('" .mysql_real_escape_string($post). "','" .mysql_real_escape_string($kategoria) ."',  '".mysql_real_escape_string($tytul)."'
)";

if ($query_run = mysql_query($query04)) {
   echo "Post Dodany!";
   header('Location: index02.php');
} else { 	
    echo mysql_error();
}
} 
} else {


?>

<div class="small-8 columns">
    <form action="index02.php" method="POST">
   <div class="row">
<div class="small-6 columns">
<input type='text' name='tytul' placeholder="Tytuł"/>
</div>        
    <div class="small-5 columns">
<select name="kategoria">
<?php
$query = "SELECT DISTINCT kat FROM  `posty`";
if ($query_run = mysql_query($query)) {
if (mysql_num_rows($query_run)==NULL) {
echo "Błąd przy liscie kategorii";
} else {
 while($query_row =  mysql_fetch_assoc($query_run)) {
 $kat = $query_row['kat'];
 echo '<option value="' . $kat.  '">'. $kat. '</option>' ;
 }
}
} else { 
    echo mysql_error();
	}
?>
 </select>
    </div>
	<div class="small-1 column">
	Jedyna
	</div>
   </div>
    <div class="row">
        <div class="large-12 columns">
            <textarea id="wysoki" name="post" placeholder="Wpisz tu swój post"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="small-1 column right"> 
        <input type="submit" value="dodaj">
        </div>
    </div>
        <div class="row">
            <div class="small-4 columns panel">
                Błędy
                <?php 
                echo $_SERVER['REQUEST_METHOD'].  " ".  $_SERVER['kategoria'];
                
                ?>
            </div>
            
        </div>
</div>
</form>
<?php 
}
}
}
?>

