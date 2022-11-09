<?php 
 include '../config.php'; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORM TAMBAH</title>
</head>
<body>

        
ISI MAHASISWA<br>
Anda dapat menyimpan data mahasiswa di form ini.<br>
FAKULTAS TEKNIK INDUSTRI ITN MALANG.<br>
<hr>

<div class="well">
<form enctype="multipart/form-data" method="post" action="simpan_data.php">
<h4><p class="glyphicon glyphicon-pencil"></p>
ISI DATA MAHASISWA</a></h4>

<table width="100%%"  border="0" cellspacing="6">
 <tr>
    <td align="left" valign="top" width="26%">ID </td>
    <td align="left" valign="top" width="4%"><div align="center"><strong>:</strong></div></td>
    <td width="70%">
   <?Php
   $sql = "SELECT count(*) as jumlah FROM tb_mahasiswa";
   $query = mysql_query($sql);
   $result = mysql_fetch_array($query);
   echo $result['jumlah']+1;
   ?>
    </td>
   
  </tr>
  
  <tr>
    <td align="left" valign="top" width="16%">NIM </td>
    <td align="left" valign="top" width="4%"><div align="center"><strong>:</strong></div></td>
    <td width="70%"><input type="text" name="T1" id="T1" class="form-control" placeholder=""></td>
  </tr>
  
  <tr>
    <td align="left" valign="top" width="16%">NAMA</td>
    <td align="left" valign="top" width="4%"><div align="center"><strong>:</strong></div></td>
    <td width="70%"><input type="text" name="T2" id="T2" class="form-control" placeholder=""></td>
  </tr>

  <tr>
    <td align="left" valign="top" width="26%">JNS KELAMIN</td>
    <td align="left" valign="top" width="4%"><div align="center"><strong>:</strong></div></td>
    <td width="70%">
    

<select class="form-control" name="T3" id="T3">
	<option value="LAKI-LAKI">LAKI-LAKI</option>
	<option value="PEREMPUAN">PEREMPUAN</option>

</select>



    </td>
  </tr>
  
  <tr>
    <td align="left" valign="top" width="16%">KOTA</td>
    <td align="left" valign="top" width="4%"><div align="center"><strong>:</strong></div></td>
    <td width="70%"><input type="text" name="T4" id="T4" class="form-control" placeholder=""></td>
  </tr>

  <tr>
    <td align="left" valign="top" width="16%">RP BULANAN</td>
    <td align="left" valign="top" width="4%"><div align="center"><strong>:</strong></div></td>
    <td width="70%"><input type="text" name="T5" id="T5" class="form-control" placeholder=""></td>
  </tr>
  
  
      <tr>
    <td>&nbsp;</td>
    <td><div align="center"><strong></strong></div></td>
    <td><div align="left"> <h5></h5>
    <button type="submit" class="btn btn-primary">SIMPAN DATA</button>
   
    </td>
    
   
  
  </tr>
</table>
</form>
</div>
                
</div>
</div>
        
        
<!-- Footer -->
<!-- Footer -->

<footer>

MATAKULIAH PEMROGRAMAN WEB DAN SISTEM DATABASE<br>
2022
</footer>
 
<?php 
?>
</div>
</body>
</html>