<?php
$uzytkownik = "j0ny";
$haslo = "maslo123";
$login_u = $_GET['login'];
$haslo_u = $_GET['haslo'];

if($login_u=== $uzytkownik and $haslo_u===$haslo){
    echo "zalogowano";
};
?>