<?php

$handle = fopen('names.txt', 'w');
fwrite($handle, 'Bartek');

fclose($handle);

?>
