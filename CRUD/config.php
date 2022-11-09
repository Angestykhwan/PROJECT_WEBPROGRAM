<?php
    $host  = 'localhost';
    $user  = 'root';
    $pass  = '';
    $dbnm  = 'web_data_db';
    
    $conn = mysql_connect($host,$user,$pass) OR die('Tidak bisa koneksi database');
    if ($conn) {
		mysql_select_db($dbnm) OR die('database tidak ada');
	}
	
?>



