<?php
session_start()
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Pakaian</title>

    <!-- Bootsrap --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/form_style.css">
    
</head>
<body>
    <div class="insert_form">
        <div class="container">
            <form action="tambah.php" method="POST" enctype="multipart/form-data">
                <h2>Tambah Pakaian</h2>
                <br>
                <div class="mb-3">
                    <label>Nama Pakaian</label>
                    <input class="form-control" type="text" placeholder="Masukkan nama Pakaian" type="text" name="nama_pakaian">
                </div>
                <div class="mb-3">
                    <label>Harga Pakaian</label>
                <input class="form-control" type="text" placeholder="Masukkan harga pakaian"type="text" type="text" name="harga_pakaian">
                </div>
                <div class="mb-3">
                    <label>Gambar Pakaian</label>
                    <input class="form-control form-control-sm" id="formFileSm" type="file" name="gambar_pakaian">
                </div>
                
                <div class="d-grid gap-3 mb-3">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>

                <div class="back">
                    <a href="index.php">Kembali ke halaman awal</a>
                </div>
                <div class="notif">
                    <?php
                        if(isset($_SESSION["message"])) {
                            echo $_SESSION["message"];
                            unset($_SESSION["message"]);
                        }
                    ?>
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>