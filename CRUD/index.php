<?php 
 include '../config.php'; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mahasiswa</title>
    <!-- Bootstrap Core CSS -->
</head>
<body>

SETTING MAHASISWA<br>
Anda dapat mengelola data mahasiswa seperti menambah, menyunting dan menghapus data.<br>
FAKULTAS TEKNIK INDUSTRI ITN MALANG.<br>

<hr>
<a href="Form_Tambah.php#point" >TAMBAH DATA</a>
  
<table width ="70%" border="1" cellpadding="0"  cellspacing="0">
 
<tr>
<td style="text-align: center;"  width="5%">NO</td>
<td style="text-align: left;"  width="5%">ID</td>
<td style="text-align: left;"  width="10%">NIM</td>
<td style="text-align: left;"  width="15">NAMA</td>
<td style="text-align: left;"  width="15%">JNS KELAMIN</td>
<td style="text-align: left;"  width="15%">KOTA</td>
<td style="text-align: left;"  width="15%">RP BULANAN</td>
    
    <td style="text-align: center;"  width="25%">AKSI</td>

  </tr>

  <tr>
  <?php

/*
  $query = "SELECT * FROM tb_mahasiswa";
  $query = "SELECT nama, kota FROM tb_mahasiswa";
  $query = "SELECT * FROM tb_mahasiswa where kota='Malang'"";
  $query = "SELECT nama, kota FROM tb_mahasiswa"; 
  $query = "SELECT * FROM tb_mahasiswa";
  $query = "SELECT nama, kota FROM tb_mahasiswa";
  $query = "SELECT * FROM tb_mahasiswa";
  $query = "SELECT nama, kota FROM tb_mahasiswa";
  $query = "SELECT * FROM tb_mahasiswa";
  $query = "SELECT nama, kota FROM tb_mahasiswa";
  
 */   
                        $query = "SELECT * FROM tb_mahasiswa";
                        $action = mysql_query($query);
                        if(mysql_num_rows($action) > 0)
                        {
                            
                            $no = 1;
                            echo '<tbody>';
                           
                            while ($list = mysql_fetch_array($action))
                            {          
                                $T1 = $list['id'];
                                $T2 = $list['nim'];  
                                $T3 = $list['nama'];
                                $T4 = $list['jenis_kelamin'];  
                                $T5 = $list['kota'];
                                $T6 = $list['uang_bulanan'];  
                                
                              
                            echo '<tr class="data" valign="top" style="background-color: white; color: white;">
                            <td style="color: #666666; text-align: center; ">'.$no.'</td>
                            <td style="color: #666666; text-align: left;">'.$T1.'</td>
                            <td style="color: #666666; text-align: left;">'.$T2.'</td>
                            <td style="color: #666666; text-align: left;">'.$T3.'</td>
                            <td style="color: #666666; text-align: left;">'.$T4.'</td>
                            <td style="color: #666666; text-align: left;">'.$T5.'</td>
                            <td style="color: #666666; text-align: left;">'.$T6.'</td>
                            <td style="color: #666666; text-align: center;">
                            <a class="btn btn-info" href="Form_Edit.php?id='.$T1.'#point"> <i class="glyphicon glyphicon-ok"></i> Edit </a> :: 
                            <a class="btn btn-danger remove_fields" href="hapus.php?id='.$T1.'"> <i class="glyphicon glyphicon-trash"></i> Hapus </a>

                            </td></tr>';
                            $no++;
                            }
                            
                        }
                        else
                        {
                            echo '<tr><td colspan="6"><h4>&nbsp;Belum ada data mahasiswa!</h4></td></tr>';
                        }

    
?>
 
</table>   

                
            </div>
        </div>
        
        
<!-- Footer -->
<hr>
<footer>

MATAKULIAH PEMROGRAMAN WEB DAN SISTEM DATABASE<br>
2022
</footer>

 
<?php 
?>
</div>
</body>
</html>