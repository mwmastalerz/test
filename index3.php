<?php


function connect ()
{
$host='sql.begin1.nazwa.pl:3307';
$dbname='begin1_16';
$port = '3307'; //domyślnie jest to port 3306
$username = 'begin1_16';
$password = 'P_rojekt2015';    
    
$connetion = mysql_connect ($host,$dbname,$password) or die('Bład połaczenia '. mysql_error());
$connetion2 = mysql_select_db($dbname) or die ('Bład połaczenia do bazy '. mysql_error());
}


connect();
$result = mysql_query('select * from customer') or die ('Bład zapytania '. mysql_error());



if (mysql_num_rows($result))
{
 
    
 $row= mysql_fetch_array($result);
 echo $row[opis];
 
}


echo ("Połączono");
mysql_close($connetion)


?>