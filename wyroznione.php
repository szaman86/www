<?php
    require 'baza02.php';
$query = "SELECT * 
FROM  `posty` 
WHERE  `ID` <=3";

if ($query_run = mysql_query($query)) {
  if (mysql_num_rows($query_run)==NULL) {
      echo 'Nie znaleziono';
  } else {
    while($query_row =  mysql_fetch_assoc($query_run)) {
        $post = $query_row['post'];
        $kat = $query_row['kat'];
		$tytul = $query_row['tytul'];
		$data = $query_row['data'];
		$poz1= strpos($post, "<p>");
		$poz2= strpos($post, "</p>");
		$dlugosc = $poz2 - $poz1;
		$akapit= substr($post, $poz1, $dlugosc+4); 
		$dlugosc_posta = 150;
	if ($dlugosc_posta < strlen($post)) {
$koncowka = '... (czytaj dalej)';
}
		
  echo
'	<div class="small-4 columns">
	<h4>' . $tytul . '</h4>' . $akapit . $koncowka . '</div>' ;
    }   
  }
} else { 
    echo mysql_error();
}
?>