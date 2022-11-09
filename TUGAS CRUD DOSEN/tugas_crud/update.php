<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if the contact id exists, for example update.php?id=1 will get the contact with the id of 1
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
        $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
        $no_telp = isset($_POST['no_telp']) ? $_POST['no_telp'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        
        // Update the record
        $stmt = $pdo->prepare('UPDATE dosen SET id = ?, nama = ?, alamat = ?, no_telp = ?, email = ? WHERE id = ?');
        $stmt->execute([$id, $nama, $alamat, $no_telp, $email, $_GET['id']]);
        $msg = 'Update Data Succesfully!';
    }
    // Get the contact from the contacts table
    $stmt = $pdo->prepare('SELECT * FROM dosen WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that ID!');
    }
} else {
    exit('No ID specified!');
}
?>

<?=template_header('Read')?>

<div class="content update">
	<h2>Update<?=$contact['id']?></h2>
    <form action="update.php?id=<?=$contact['id']?>" method="post">
        <label for="id">ID</label>
        <label for="nama">Nama</label>
        <input type="text" name="id" value="<?=$contact['id']?>" id="id">
        <input type="text" name="nama" value="<?=$contact['nama']?>" id="nama">
        <label for="alamat">Alamat</label>
        <label for="no_telp">No. Telp</label>
        <input type="text" name="alamat" value="<?=$contact['alamat']?>" id="alamat">
        <input type="text" name="no_telp" value="<?=$contact['no_telp']?>" id="no_telp">
        <label for="email">Email</label>
        <input type="text" name="email" value="<?=$contact['email']?>" id="title">
        <input type="submit" value="Update">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>