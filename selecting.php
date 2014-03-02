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
		$dlugosc_posta = 100;
	if ($dlugosc_posta < strlen($post)) {
$koncowka = '... (czytaj dalej)';
}
		
  echo 
'	<div class="large-4 columns">
	<p class="text-right hide-for-medium-down">'
	. $data . '</p>
	<h4>' . $tytul . '</h4>
	<p>' . substr($post,0, $dlugosc_posta) . $koncowka . '</p></div>' ;
    }   
  }
} else { 
    echo mysql_error();
}
?>