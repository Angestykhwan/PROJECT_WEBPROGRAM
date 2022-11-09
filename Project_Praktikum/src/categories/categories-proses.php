<?php 
if(isset($_POST['tambah'])) {
    $categories = $_POST['categories'];
    $price = $_POST['price'];

    echo
    'Categories : ' . $categories . 
    '<br> Price : ' . $price ; 
}
?>
