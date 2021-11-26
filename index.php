<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Toko Penjualan Pakaian</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <div class="hero_area">
    <!--- Header -->
    <header class="header_section">
        <div class="header_top">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a href="#" class="navbar-brand"><span>Toko Pakaian</span></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collpase navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Produk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tentang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Hubungi Kami</a>
                            </li>
                    </ul>
                </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- Slider Section -->
    <section class="slider_section">
       <div class="container">
            <div class="row">
                <div class="detail-box">
                    <div class="slider">
                        <h1>Selamat Datang di Toko Kami</h1>
                        <p>Toko kami menjual berbagai macam jenis pakaian. Mulai dari baju hingga celana yang pastinya dengan kualitas terbaik dan cocok untuk segala usia, mulai dari muda hingga tua. Semuanya Ada!</p> 
                        <a href="#">Belanja Sekarang</a>
                    </div>
                </div> 
            </div>
        </div>
    </section>
    


    <!-- Product Section -->
<section class="product">
    <div class="container">
    <div class="heading_container2">
        <h2>Produk Kami</h2>
    </div>
    <div class="row my-3">
        <div class="col-md">
            <div class="button">
                <a href="insert.php"><button class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Tambah Pakaian</button></a>
            </div>
        </div>
    </div>
    <div class="row"></div>  
        <?php
            include './koneksi.php';
            $getProduct = $conn->query("SELECT * FROM pakaian");
            
            while($fetchProduct = $getProduct->fetch_assoc()){
        ?>
        <table style="display:inline-table">
            <tr>
                <td><img class="image" src="<?=$fetchProduct["gambar_pakaian"]?>" alt="gambar_pakaian"></td>
            </tr>
            <tr>
                <td>
                    <strong><?=$fetchProduct["nama_pakaian"]?></strong>
                </td>
            </tr>
            <tr>
                <td>
                    <?=$fetchProduct["harga_pakaian"]?><br>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="update.php?id_pakaian=<?=$fetchProduct["id_pakaian"]?>"><button class="btn btn-warning">Perbarui</button></a>
                    <a href="delete.php?id_pakaian=<?=$fetchProduct["id_pakaian"]?>"><button class="btn btn-danger">Hapus</button></a>
                </td>
            </tr>
        </table>
        <?php
            }
        ?>
        
</section>
    
           

<!-- About Section -->
<section class="about_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 ml-auto">
                <div class="detail-box pr-md-3">
                    <div class="heading_container">
                    <h2>Pakaian Kualitas Terbaik</h2> 
                    </div>
                        <p>Karena pakaian-pakaian kami sebelum dikirim ke konsumen telah melalui proses Quality Control yang cukup ketat. Mulai dari pengecekan kondisi produk pada saat pengambilan produk, pengecekan produk pada saat sebelum dikemas dan pengecekan produk setelah produk dikemas. </p>
                        <a href="#">Baca Selengkapnya</a>  
                    </div>
                </div>
            <div class="col-md-6 px-0">
                <div class="img-box">
                     <img src="img/about_image.jpg" alt="">
                </div>    
            </div>   
        </div>
    </div>
</section>

<!-- Service Section -->
<section class="services_section layout_padding">
    <div class="container">
        <div class="heading_container3 heading_center">
            <h2>Layanan</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
               <div class="box">
                   <div class="img-box">
                        <img src="img/s1.png" alt="">
                   </div>
                   <div class="detail-box">
                       <h5>Pengiriman Yang Cepat</h5>
                        <p>Cepatnya pengiriman adalah prioritas utama kami</p>
                    </div>
               </div> 
            </div> 
            <div class="col-md-4">
               <div class="box">
                   <div class="img-box">
                        <img src="img/s2.png" alt="">
                   </div>
                   <div class="detail-box">
                       <h5>Stok Selalu Tersedia</h5>
                        <p>Untuk Urusan Stok, kami selalu tersedia setiap saat</p>
                    </div>
               </div> 
            </div> 
            <div class="col-md-4">
               <div class="box">
                   <div class="img-box">
                        <img src="img/s3.png" alt="">
                   </div>
                   <div class="detail-box">
                       <h5>Kualitas Pasti Terjamin</h5>
                        <p>Setiap produk yang kami jual telah melalui proses Quality Control dulu</p>
                    </div>
               </div> 
            </div> 
        </div>
    </div>
</section>



<!--- Footer Section --->
<section class="info_section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="info_contact">
                    <h5><a href="#" class="navbar-brand"><span>Toko Online</span></a></h5>
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> Jl. DI Panjaitan No.128, Karangreja, Purwokerto Kulon, Kec. Purwokerto Sel., Kabupaten Banyumas, Jawa Tengah 53141</p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i> +6281 2521 2170</p>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> tokoonline@gmail.com</i></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info_info">
                    <h5>Informasi</h5>
                    <p>Toko kami menjual berbagai macam jenis pakaian. Mulai dari baju hingga celana yang pastinya dengan kualitas terbaik dan cocok untuk segala usia, mulai dari muda hingga tua. Semuanya Ada!</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="info_links">
                    <h5>Navigasi</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Produk</a></li>
                        <li><a href="#">Tentang</a></li>
                        <li><a href="#">Hubungi Kami</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                <div class="info_form">
                    <form action="">
                        <input type="email" placeholder="Masukkan email anda">
                        <button>Langganan</button>
                    </form>

                    <div class="social_box">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<footer class="footer_section">
    <p>&copy; 2021 All Rights Reserved By <a href="#">Kelompok 1 - XI RPL 5</a></p>
</footer>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>