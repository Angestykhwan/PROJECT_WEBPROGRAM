<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initialscale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/admin.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700
&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />
</head>

<body>

    <body onload="myFunction()"></body>
    <div class="container">
        <div class="content">
            <h2 id="text">Selamat Datang, Admin!</h2>
        </div>
        <div class="sidebar">
            <a href="">Home</a>
            <a href="">Categories</a>
            <a href="">Transaction</a>
        </div>
        <div class="right_content">
            <div class="navbar">
                <img src="assets/logo.png" alt="" />
                <button class="btn">Logout</button>
            </div>
            <div class="content">
                <h2>Selamat Datang, Admin!</h2>
            </div>
        </div>
    </div>
    <script>
        function myFunction() {
            let nama = prompt("Masukkan Nama Anda : ", "Admin");
            let jam = new Date().getHours();
            if (nama != null) {
                if (jam >= 4 && jam <= 10) {
                    document.getElementById("text").innerHTML = `Selamat Pagi 
       ${nama}`;
                } else if (jam >= 11 && jam <= 14) {
                    document.getElementById("text").innerHTML = `Selamat Siang 
       ${nama}`;
                } else if (jam >= 15 && jam <= 18) {
                    document.getElementById("text").innerHTML = `Selamat Sore 
       ${nama}`;
                } else {
                    document.getElementById("text").innerHTML = `Selamat Malam 
       ${nama}`;
                }
            }
        }
    </script>
</body>

</html>