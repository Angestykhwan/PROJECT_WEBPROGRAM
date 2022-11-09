<?php 
if(isset($_POST['simpan'])) {
 $nama = $_POST['nama'];
 $jenis = $_POST['jenis'];
 $harga = $_POST['harga'];
 $tanggal = $_POST['tgl'];
 echo
 'Nama : ' . $nama . 
 '<br> Jenis : ' . $jenis .
 '<br> Harga : ' . $harga . 
 '<br> Tanggal : ' . $tanggal;
}
?>
