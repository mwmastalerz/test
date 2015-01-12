<?php


function connect()
{
$host='sql.begin1.nazwa.pl:3307';
$dbname='begin1_16';
$port = '3307'; //domyślnie jest to port 3306
$username = 'begin1_16';
$password = 'P_rojekt2015';



// czenie i wybranie bazy
	 
  $connetion = mysql_connect ($host,$dbname,$password) or die('Bład połaczenia '. mysql_error());
  $connetion2 = mysql_select_db($dbname) or die ('Bład połaczenia do bazy '. mysql_error());


	  //mysql_query=("SET NAMES 'utf8'") or die ('Nie mog?_ ustali?_ po__?_czenia w UTF-8');
	  
	  // GS ustawienie polaczenia php <--> mysql na utf-8
	  //$charset = mysql_query("SET NAMES 'utf8'") or die ("Nie mog_ ustanowi_ po__czenia w UTF-8"); 
}

function zapytanie_tablica($query)
{
connect();
$result = mysql_query($query) or die ('Zapytanie zako_czone niepowodzeniem ('.$query.'): ' . mysql_error());
return mysql_fetch_array($result, MYSQL_ASSOC);
$result = mysql_query('select * from customer') or die ('Bład zapytania '. mysql_error());
}

function zapytanie_wiersz($query)
{
connect();
$result = mysql_query($query) or die ('Zapytanie zako_czone niepowodzeniem ('.$query.'): ' . mysql_error());
return $result;
}

function zapytanie_wiersz_panel($query)
{
connect_panel();
$result = mysql_query($query) or die ('Zapytanie zako_czone niepowodzeniem ('.$query.'): ' . mysql_error());
return $result;
mysql_close();
}

connect();

//wczytaj stałe z bazy danych

 /*
   $sql = 'SELECT * FROM customer';
            $result = mysql_query($sql) or die("Wystąpił błąd 'MESSAHE NO.'.".$sql);
        if (mysql_num_rows($result))
        {    
           $row = mysql_fetch_array($result);
 
           $tresc.='<p>Data zamówienia<br/> '.$row['saledate'].' </p>';
           // odbiorca faktury
           $tresc.='<p><b>Odbiorca</b><br/>
           Nazwa firmy<br/> '.$row['purchasername'].' <br/>
           NIP<br/>'.$row['purchasernip'].'<br/>
           Adres<br/>'.$row['purchaseraddress'].'</p>
           ';
           $idinvoice=$row['idinvoice'];
        } 
*/



?>