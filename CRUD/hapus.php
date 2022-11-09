<?php
include '../config.php';
        $username=$_SESSION['username'];
        if (isset($_GET['id'])) {$id = $_GET['id'];} else {$id=0;}  
        $id= trim(preg_replace('/[^0-9]/','',$id)); 
        
        
        $query = "DELETE FROM tb_mahasiswa WHERE id = '$id'";
        mysql_query($query);

        header('Location: ../mahasiswa/#point');
        echo $query;

ob_flush();     
?>