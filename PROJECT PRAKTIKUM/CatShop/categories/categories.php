<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initialscale=1.0" />
    <title>Categories</title>
    <link rel="stylesheet" href="../css/admin.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700
&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <a href="../admin.html">Home</a>
            <a href="categories.html">Categories</a>
            <a href="../transaction/transaction.html">Transaction</a>
        </div>
        <div class="right_content">
            <div class="navbar">
                <img src="../assets/logo.png" alt="" />
                <button class="btn">
                    <a href="../logout.html">Logout</a>
                </button>
            </div>
            <div class="content">
                <h3>Categories</h3>
                <button type="button" class="btn btn-tambah">
                    <a href="categories-entry.html">Tambah Data</a>
                </button>
                <table class="table-data">
                    <thead>
                        <tr>
                            <th style="width: 30%">Photo</th>
                            <th>Categories</th>
                            <th style="width: 20%">Price</th>
                            <th style="width: 30%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="../assets/thumbnail/anggora.png" alt="" /></td>
                            <td>Anggora</td>
                            <td>450000</td>
                            <td><a href="">Edit</a> | <a href="">Hapus</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>