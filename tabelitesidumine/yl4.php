<?php include('../config_.php'); ?>
<?php
$paring = "SELECT kliendid.eesnimi, kliendid.perenimi, kliendid.kliendid_id
			FROM kliendid
			JOIN arved ON arved.kliendid_id=kliendid.kliendid_id";
$valjund = mysqli_query($yhendus, $paring);
while($rida = mysqli_fetch_assoc($valjund)){

    echo 'Kilendi nimi: '.$rida['eesnimi'].'-'.$rida['perenimi'].'<br><br>';
}
mysqli_free_result($valjund);
mysqli_close($yhendus);
?>