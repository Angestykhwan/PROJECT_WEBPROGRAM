<?php 
 include '../config.php'; 
   $id = $_GET['id'];
   $query = "SELECT * FROM tb_mahasiswa WHERE id='$id'";
   $action = mysql_query($query);
   if(mysql_num_rows($action) > 0)
   {
    $no = 1;
    while ($list = mysql_fetch_array($action))
     {          
       $T1 = $list['id'];
       $T2 = $list['nim']; 
       $T3 = $list['nama'];
       $T4 = $list['jenis_kelamin']; 
       $T5= $list['kota'];
       $T6= $list['uang_bulanan'];       
       
      }
    } 
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORM EDIT</title>
</head>
<body>

        
EDIT MAHASISWA<br>
Anda dapat mengedit data mahasiswa di form ini.<br>
FAKULTAS TEKNIK INDUSTRI ITN MALANG.<br>
<hr>

<div class="well">
<form enctype="multipart/form-data" method="post" action="edit_data.php">
<h4><p class="glyphicon glyphicon-pencil"></p>
EDIT DATA MAHASISWA</a></h4>

<table width="100%%"  border="0" cellspacing="6">
 <tr>
    <td align="left" valign="top" width="26%">ID </td>
    <td align="left" valign="top" width="4%"><div align="center"><strong>:</strong></div></td>
    <td width="70%">
    <input type="text" name="T1" id="T1" value="<?php echo $T1; ?>" class="form-control" >
    <?php echo $T1; ?>
    </td>
   
  </tr>
  
  <tr>
    <td align="left" valign="top" width="16%">NIM </td>
    <td align="left" valign="top" width="4%"><div align="center"><strong>:</strong></div></td>
    <td width="70%"><input type="text" name="T2" id="T2" value="<?php echo $T2; ?>" class="form-control" >
    </td>
  </tr>
  
  <tr>
    <td align="left" valign="top" width="16%">NAMA</td>
    <td align="left" valign="top" width="4%"><div align="center"><strong>:</strong></div></td>
    <td width="70%">
    <input type="text" name="T3" id="T3" value="<?php echo $T3; ?>" class="form-control" >
    </td>
  </tr>

  <tr>
    <td align="left" valign="top" width="26%">JNS KELAMIN</td>
    <td align="left" valign="top" width="4%"><div align="center"><strong>:</strong></div></td>
    <td width="70%">
    

<select class="form-control" name="T4" id="T4">
	<option value="LAKI">LAKI-LAKI</option>
	<option value="PEREMPUAN">PEREMPUAN</option>

</select>



    </td>
  </tr>
  
  <tr>
    <td align="left" valign="top" width="16%">KOTA</td>
    <td align="left" valign="top" width="4%"><div align="center"><strong>:</strong></div></td>
    <td width="70%">
    <input type="text" name="T5" id="T5" value="<?php echo $T5; ?>" class="form-control" >
    </td>
  </tr>

  <tr>
    <td align="left" valign="top" width="16%">RP BULANAN</td>
    <td align="left" valign="top" width="4%"><div align="center"><strong>:</strong></div></td>
    <td width="70%">
    <input type="text" name="T6" id="T6" value="<?php echo $T6; ?>" class="form-control" >
    </td>
  </tr>
  
  
      <tr>
    <td>&nbsp;</td>
    <td><div align="center"><strong></strong></div></td>
    <td><div align="left"> <h5></h5>
    <button type="submit" class="btn btn-primary">EDIT DATA</button>
   
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