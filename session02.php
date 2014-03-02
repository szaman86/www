<?php

session_start();

if (isset($_SESSION['name'])&& isset($_SESSION['age'])) {
    echo 'log in as ' . $_SESSION['name'] . ' masz ' . $_SESSION['age'] . 'lat';
} else
{
    echo 'please log in';
}
?>