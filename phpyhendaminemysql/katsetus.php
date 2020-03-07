<?php
include('../config_.php'); //andmebaasi paroolid ja ühendus on teises failis
$paring = 'SELECT * FROM albumid';
$valjund = mysqli_query($yhendus, $paring);
while($rida = mysqli_fetch_array($valjund)){
    echo '<strong>Album: '.$rida[1].' - '.$rida[2].'</strong><br>';
    echo 'Aasta: '.$rida[3].'<br>';
    echo 'Žanr: '.$rida[4].'<br><br>';
}
mysqli_free_result($valjund);
mysqli_close($yhendus);
?>
