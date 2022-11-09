<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
    $no_telp = isset($_POST['no_telp']) ? $_POST['no_telp'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO dosen VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$id, $nama, $alamat, $no_telp, $email]);
    // Output message
    $msg = 'Create Data Succesfully!';
}
?>

<?=template_header('Create')?>

<div class="content update">
	<h2>Tambah Data</h2>
    <form action="create.php" method="post">
        <label for="id">ID</label>
        <label for="nama">Nama</label>
        <input type="text" name="id" id="id">
        <input type="text" name="nama" id="nama">
        <label for="alamat">Alamat</label>
        <label for="no_telp">No. Telp</label>
        <input type="text" name="alamat" id="alamat">
        <input type="text" name="no_telp" id="no_telp">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>