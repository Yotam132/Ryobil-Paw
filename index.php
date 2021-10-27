<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href=".\style.css" rel="stylesheet"/>
    <title>Ryobil</title>
</head>
<body>
    <!-- Isikan code untuk Nav disini -->
    <nav class="navbar navbar-expand-lg"  style="background-color:#333333;">
        <div class="container navigationDiv">
            <a class="navbar-brand" href="index.php" style="font-size:25px;">Ryobil</a>
            <div id="navbarNav">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./page/perusahaan.php">Perusahaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./page/pemesanan.php">Pemesanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./page/kontak.php">Kontak Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./page/profile.php">Profil</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Homepage -->

    <div class="bg">
        <div class="container min-vh-100 d-flex align-items-center ">
            <div id="carouselExampleIndicators" class="carousel slide d-flex align-items-center mx-auto" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block" width="800px" height="500px" src="https://www.j-express.id/assets/img/article/stock-photo-smiling-delivery-man-393771925.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" width="500px" height="500px" style="margin:0px 150px 0px;" src="https://assets.grab.com/wp-content/uploads/sites/9/2020/07/20162232/ICON-2.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" width="800px" height="500px" src="https://webicdn.com/sdirmember/19/18591/produk/5hp3p.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Kembali</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Berikutnya</span>
                </a>
            </div>

        </div>
    </div>

    <!-- Deskripsi -->
    <div class="container mt-5" style="width:100%; height:100%; padding-bottom:200px;">
        <div class="row">
            <div class="col-md-4 order-md-2">
                <img width="300px" height="200px" src="https://mediakonsumen.com/files/2017/03/iilustrasi-paket-kurir-kargo-kiriman.jpg" alt="">

            </div>
            <div class="col-md-8 order-md-1">
                <h2 style="color:#f28f2a;"><b>Antar barang anda sekarang!</b></h2>
                <br>
                <p>Dengan 
                <span style="color: #f28f2a;">Ryobil</span>, 
                barang anda akan sampai dengan utuh!</p>
                <p style="text-align:justify;">Terpercaya, Tercepat, Termurah, dan belum pernah ditemui di berbagai jasa lainnya. 
                    Biaya yang terjangkau memungkinkan anda untuk mengirim lebih banyak paket sekaligus dengan jasa kami,
                    pastinya dengan waktu pengiriman yang tidak terduga.
                </p>
            </div>
        </div>
    </div>

    <div class="bg">
        <div class="container pt-4 pb-5">
            <h2 style="color:#ffffff;"><b>Cara Pesan</b></h2>
            <div class="row text-white text-center mt-5">
                <div class="col-md-4 my-3">
                    <div class="orderNumbDiv m-auto pt-3">01</div>
                    <h3 class="title text-white my-3"><b>Daftar</b></h4>
                    <p>Silahkan Bergabung Bersama Kami</p>
                </div>
                <div class="col-md-4 my-3">
                    <div class="orderNumbDiv m-auto pt-3">02</div>
                    <h3 class="title text-white my-3"><b>Pemesanan</b></h4>
                    <p>Masukan Data-Data Barang Yang Akan Anda Kirim Pada Menu Pemesanan</p>
                </div>
                <div class="col-md-4 my-3">
                    <div class="orderNumbDiv m-auto pt-3">03</div>
                    <h3 class="title text-white my-3"><b>Barang Siap Dikirim!</b></h4>
                    <p>Kepuasaan Anda Merupakan Kebahagiaan Bagi Kami. Terima Kasih Sudah Mempercayai Kami.</p>
                </div>
            </div>
        </div>
    </div>



    <!-- CardView -->
    <div class="container mt-5" style="padding-bottom:80px;">
        <h2 class="mb-4" style="color:#f28f2a;"><b>Testimoni</b></h2>
        <table class="align-items-center mx-auto">
            <td>
                <div class="cardDiv">
                    <div class="card" style="width: 18rem;margin:0px;">
                        <img src="https://www.murrieta.k12.ca.us/cms/lib/CA01000508/Centricity/Domain/2208/McClure%20Mr.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #f28f2a;">Ryan Christopher</h5>
                            <p class="card-text">Belum pernah sih kirim paket secepet ini, yang paling penting sih murahh bangett</p>
                        </div>
                    </div>
                </div>
            </td>
            <td>
                <div class="cardDiv">
                    <div class="card" style="width: 18rem;margin:0px;">
                        <img src="https://www.murrieta.k12.ca.us/cms/lib/CA01000508/Centricity/Domain/2160/Ryan%20Mr.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #f28f2a;">Billy Aryon</h5>
                            <p class="card-text">Sudah puluhan kali order disini ngga bosen-bosen sihh, semakin mantap aja nih</p>
                        </div>
                    </div>
                </div>
            </td>
            <td>
                <div class="cardDiv">
                    <div class="card" style="width: 18rem;margin:0px;">
                        <img src="https://www.murrieta.k12.ca.us/cms/lib/CA01000508/Centricity/Domain/2199/Welch%20Russ.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #f28f2a;">Yotam Niki</h5>
                            <p class="card-text">Sebelum pakai ini, barang yang aku kirimkan selalu rusak dan berkondisi tidak bagus</p>
                        </div>
                    </div>
                </div>
            </td>
        </table>
    </div>

    <!-- Footer -->
    <div class="footerDiv">
        <div class="container">
            <div class="row pt-5">
                    <div class="col-md-3 order-md-1 mt-3" style="padding-left:0px;width:200px;">
                    <img src="https://assets.grab.com/wp-content/uploads/sites/9/2020/07/20162232/ICON-2.png" alt="Logo" width="200px" height="200px">
                    </div>
                    <div class="col-md-3 order-md-3" style="margin-left:80px;">
                        <br>
                        <a href="./page/perusahaan.php">Tentang Perusahaan</a>
                        <br><br>
                        <a href="./page/kontak.php">Kontak Kami</a>
                        <br><br>
                    </div>
                    <div class="col-md-4 order-md-2">
                        <h3 style="color: #f28f2a;"><a href="index.php">Ryobil</a></h3>
                        <br>
                        <p style="font-size:15px;text-align:justify;">Mengantar barang anda dengan selamat dan biaya yang terjangkau. Pelayanan cepat dan tanggap yang tidak akan mengecewakan anda</p>
                        <br>
                        <p style="font-size:15px;text-align:justify;">Sejak 2021</p>
                    </div>
                </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>