<?php

$host='sql.begin1.nazwa.pl';
$dbname='begin1_16';
$port = '3307'; //domyślnie jest to port 3306
$username = 'begin1_16';
$password = 'P_rojekt2015';

try {
    $baza= new PDO('mysql:host='.$host.'; dbname='.$dbname.'; port='.$port,$username, $password);
    //$pdo = new PDO('mysql:host='.$host.'; dbname='.$dbname.';port='.$port, $username, $password );
    
    
    
    
    echo('OK');
    
} catch (Exception $ex) {
    
    echo('Blad'. $ex->getMessage());
}



?>