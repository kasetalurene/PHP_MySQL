<?php
//***protseduuriline***//
//sinu andmed
$db_server = 'localhost';
$db_andmebaas = 'kasetalu_muusikapood';
$db_kasutaja = 'kasetalu_muusika';
$db_salasona = 'kasetalumuusika';
//ühendus andmebaasiga
$yhendus = mysqli_connect($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);
//ühenduse kontroll
if(!$yhendus){
    die('Ei saa ühendust andmebaasiga');
}

?>
