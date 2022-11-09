<?php
        include '../config.php';
        
        $T1 = $_POST['T1'];
        $T2 = $_POST['T2'];
        $T3 = $_POST['T3'];
        $T4 = $_POST['T4'];
        $T5 = $_POST['T5'];
        
        
        //Query penyimpanan
        $query = "INSERT into tb_mahasiswa (nim,nama, jenis_kelamin, kota, uang_bulanan ) VALUES ('$T1', '$T2','$T3','$T4','$T5')";
        $action = mysql_query($query);  

//echo $query; echo '<BR>';
     
 header('Location: ../mahasiswa/#point');

ob_flush();
?>