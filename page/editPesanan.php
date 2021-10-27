<?php
    include('../db.php');

    session_start();

    if(isset($_GET['Id']))
    {
        $id = $_GET['Id'];

        $query = mysqli_query($con, 
        "SELECT * FROM pesanan WHERE id='$id'") or die(mysqli_error($Con));

        $data = mysqli_fetch_assoc($query);
    }
    else{
        echo 
            '<script>
            alert("Login Dulu!!"); window.location = "../page/login.php"
            </script>';
    }
?>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../style.css" rel="stylesheet"/>

    <title>Ryobil</title>
</head>
<body>
    <!-- Isikan code untuk Nav disini -->
    <nav class="navbar navbar-expand-lg"  style="background-color:#333333;">
        <div class="container navigationDiv">
            <a class="navbar-brand" href="../index.php" style="font-size:25px;">Ryobil</a>
            <div id="navbarNav">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="perusahaan.php">Perusahaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pemesanan.php">Pemesanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kontak.php">Kontak Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profil</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Pemesanan -->

    <div class="bg mx-auto text-center p-3">
        <h2 style="color:white;"><b>Edit Pesanan</b></h2>
    </div>
    
    <!-- Pemesanan Content -->
        
    <div class="container top-50 start-50 translate-middle mt-5 mb-5" style="padding-bottom:70px;">
    <h2 style="color:#f28f2a;margin-bottom:50px;"><b>Silahkan Edit Data</b></h2>
        <form action="../process/editPesananProcess.php" method="post">
            <div class="row">
                <input type="hidden" class="form-control" value="<?php echo $data['id'];?>" id="id" name="id" >

                <div class="col-xs-6 col-sm-6 col-md-6 mb-4">
                    <label for="exampleInputEmail1" class="form-label">Nama Pengirim</label>
                    <input type="text" class="form-control" value="<?php echo $data['pengirim_nama'];?>" id="pengirim_nama" name="pengirim_nama" required>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6 mb-4">
                    <label for="exampleInputEmail1" class="form-label">Nama Penerima</label>
                    <input type="text" class="form-control" value="<?php echo $data['penerima_nama'];?>" id="penerima_nama" name="penerima_nama" required>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6 mb-4">
                    <label for="exampleInputEmail1" class="form-label">No.Telp Pengirim</label>
                    <input type="tel" pattern="[0-9]{12}" value="<?php echo $data['pengirim_nomor'];?>" class="form-control" id="pengirim_nomor" name="pengirim_nomor" required>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6 mb-4">
                    <label for="exampleInputEmail1" class="form-label">No. Telp Penerima</label>
                    <input type="tel" pattern="[0-9]{12}" value="<?php echo $data['penerima_nomor'];?>" class="form-control" id="penerima_nomor" name="penerima_nomor" required>
                </div>
                                        
                <div class="col-xs-6 col-sm-6 col-md-6 mb-4">
                    <label for="exampleInputEmail1" class="form-label">Alamat Pengirim</label>
                    <input type="text" class="form-control" id="pengirim_alamat" value="<?php echo $data['pengirim_alamat'];?>" name="pengirim_alamat" required>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6 mb-4">
                    <label for="exampleInputEmail1" class="form-label">Alamat Penerima</label>
                    <input type="text" class="form-control" id="penerima_alamat" value="<?php echo $data['penerima_alamat'];?>" name="penerima_alamat" required>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 mt-5 text-center">
                    <button type="submit" class="btn btn-primary" name="editPesan" style="background-color:#f28f2a;">Edit</button>
                </div>
            </div>
        </form>
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
                        <a href="perusahaan.php">Tentang Perusahaan</a>
                        <br><br>
                        <a href="kontak.php">Kontak Kami</a>
                        <br><br>
                        <!-- <a href="...Logoout">Keluar</a> -->
                    </div>
                    <div class="col-md-4 order-md-2">
                        <h3 style="color: #f28f2a;"><a href="../index.php">Ryobil</a></h3>
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