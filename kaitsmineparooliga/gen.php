<?php

$parool = 'test';
$sool = 'eiolevajagenereeridaenam';
$kryp = crypt($parool, $sool);
echo $kryp;