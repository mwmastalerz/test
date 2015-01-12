<?php

$host='sql.begin1.nazwa.pl';
$dbname='begin1_16';
$port = '3307'; //domyślnie jest to port 3306
$username = 'begin1_16';
$password = 'P_rojekt2015';


try{
    $pdo = new PDO('mysql:host='.$host.'; dbname='.$dbname.';port='.$port, $username, $password );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "OK" ;//. $e->getMessage();
    
    $stmt = $pdo->query('SELECT * FROM customer');
      echo '<ul>';
      foreach($stmt as $row)
      {
          echo '<li>'.$row['nazwa'].': '.$row['opis'].'</li>';
      }
      $stmt->closeCursor();
      echo '</ul>';
    
    
}
catch(PDOException $e)
{
    echo "Polaczenie nie zostało utworzone" . $e->getMessage();
}

?>


