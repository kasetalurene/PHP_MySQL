<?php

/**
 *file name: yl2.php;
 *autor: Rene Kasetalu;
 *date: 07.03.2020
 *projekt:  http://kasetalurene.ikt.khk.ee/PHP_MySQL/
 */

include('../config_.php'); //andmebaasi paroolid ja ühendus on teises failis

//Väljasta kogu ‘albumid’ sisu ridade kaupa
$paring = 'SELECT * FROM albumid';                //mysql käsk VALI kõik veerud TABELIST albumid
$valjund = mysqli_query($yhendus, $paring);        //mysql käsu saatmine andmebaasile
while ($rida = mysqli_fetch_row($valjund)) {        //vastus andmebaasist
    //var_dump($rida);
    echo 'Album: ' . $rida[1] . ' - ' . $rida[2] . '<br>';
    echo 'Aasta: ' . $rida[3] . '<br>';
    echo 'Žanr: ' . $rida[4] . '<br>';
}
echo '<br><hr><br>';

//Väljasta tabelist ainult artist ja album read, kusjuures sorteeri kasvavalt artisti järgi
$paring2 = 'SELECT artist, album FROM albumid ORDER BY artist';
$valjund = mysqli_query($yhendus, $paring2);
while($rida = mysqli_fetch_assoc($valjund)){
    echo $rida['artist'].' - '.$rida['album'].'<br>';
}
echo '<br><hr><br>';

//Väljasta tabelist ainult artist ja album read, mille aasta on 2010 ja uuemad
$paring3 = 'SELECT artist, album FROM albumid WHERE aasta>2010';
$valjund = mysqli_query($yhendus, $paring3);
while($rida = mysqli_fetch_assoc($valjund)){
    echo $rida['artist'].' - '.$rida['album'];
}
echo '<br><hr><br>';

//Väljasta kui palju erinevaid albumeid on andmebaasis, mis on nende keskmine hind ja koguväärtus (summa)
$paring4 = 'SELECT COUNT(*) AS "albumeid kokku", AVG(hind) AS "keskmine hind", SUM(hind) AS "kogu maksumus" FROM albumid';
$valjund = mysqli_query($yhendus, $paring4);
while($rida = mysqli_fetch_assoc($valjund)){
    printf("keskmine hind: %0.2f eur<br>", $rida['keskmine hind']);
    printf("albumeid kokku: %d tk<br>", $rida['albumeid kokku']);
    printf("maksumus kokku: %0.2f eur<br>", $rida['kogu maksumus']);
}
echo '<br><hr><br>';

//Väljasta kõige vanema albumi nimed
$paring5 = 'SELECT album, aasta, MAX(aasta) AS "Kõige vanem" FROM albumid';
$valjund = mysqli_query($yhendus, $paring5);
while($rida = mysqli_fetch_assoc($valjund)){
    echo 'kõige vanema albumi nimi: '.$rida['aasta'].' - '.$rida['album'];
}
echo '<br><hr><br>';

//Väljasta albumid, mille hind on kogu keskmisest suurem
$paring6 = 'SELECT album FROM albumid WHERE hind > (SELECT AVG(hind) FROM albumid)';
$valjund = mysqli_query($yhendus, $paring6);
while($rida = mysqli_fetch_assoc($valjund)){
    echo 'keskmisest suurem hind: '.$rida['album'];
}
echo '<br><hr><br>';


mysqli_free_result($valjund); //pärinug vabastamine
mysqli_close($yhendus);       //andmebaasi sulgemine

?>
