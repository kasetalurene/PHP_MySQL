?php include('../config_.php'); ?>
<?php
$paring = "SELECT arved.arve_nr, albumid.artist, albumid.album, kliendid.eesnimi, kliendid.perenimi
			FROM arved
			INNER JOIN albumid ON arved.albumid_id=albumid.id
			INNER JOIN kliendid ON arved.kliendid_id=kliendid.kliendid_id";
$valjund = mysqli_query($yhendus, $paring);
while($rida = mysqli_fetch_assoc($valjund)){
    echo 'Arve number: '.$rida['arve_nr'].'<br>';
    echo 'Albumi nimi: '.$rida['artist'].'-'.$rida['album'].'<br>';
    echo 'Kliendi nimi: '.$rida['eesnimi'].' '.$rida['perenimi'].'<br><br>';
}
mysqli_free_result($valjund);
mysqli_close($yhendus);
?>