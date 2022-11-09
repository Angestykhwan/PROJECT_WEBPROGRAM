<?php

   include '../config.php';
        
    //Mengambil data postingan
   if (isset($_POST['T1'])){ $T1 = $_POST['T1']; } else {$T1 = '';}
   if (isset($_POST['T2'])){ $T2 = $_POST['T2']; } else {$T2 = '';}
   if (isset($_POST['T3'])){ $T3 = $_POST['T3']; } else {$T3 = '';}
   if (isset($_POST['T4'])){ $T4 = $_POST['T4']; } else {$T4 = '';}
   if (isset($_POST['T5'])){ $T5 = $_POST['T5']; } else {$T5 = '';}
   if (isset($_POST['T6'])){ $T6 = $_POST['T6']; } else {$T6 = '';}


    
        
        //Query penyimpanan
        $query = "UPDATE tb_mahasiswa SET nim = '$T2', nama = '$T3', jenis_kelamin = '$T4', kota = '$T5', uang_bulanan = '$T6'
        WHERE id = '$T1' ";
        $action = mysql_query($query); 
    //   echo  $query;
    header('Location: ../mahasiswa/#point');

?>