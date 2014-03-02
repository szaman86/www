<?php

echo '<p>timestamp</p>';
echo $time = time();

setcookie('username', 'Bartek', time()+10);

echo 'ustawiłeś ciastko';
?>