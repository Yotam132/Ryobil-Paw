<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="../style.css" rel="stylesheet"/>
    <title>Ryobil</title>
</head>
<body>
    <!-- Navigation -->
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

    <!-- Register -->
    <div class="container min-vh-100 mt-5 d-flex align-items-center justify-content-center mb-5">
        <div class="card text-dark bg-light ma-5 shadow" style="min-width:25rem;">
            <div class="card-header fw-bold">Register</div>
                <div class="card-body">
                    <form action="../process/registerProcess.php" method="post">
                        <div class="mb-3">
                            <label for="validationDefault01" class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Email@gmail.com" id="email" name="email" required>
							<div class="invalid-feedback">
                                Silahkan isi!
							</div>
                        </div>

                        <div class="mb-3">
                            <label for="validationDefault01" class="form-label">Username</label>
                            <input type="text" class="form-control" placeholder="Nama User" id="nama" name="nama" required>
							<div class="invalid-feedback">
                                Silahkan isi!
							</div>
                        </div>

                        <div class="mb-3">
                            <label for="validationDefault01" class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                            <div class="invalid-feedback">
                                Silahkan isi!
							</div>
                        </div>

                        <div class="mb-3">
                            <label for="validationDefault01" class="form-label">Alamat</label>
                            <input type="text" class="form-control" placeholder="Alamat" id="alamat" name="alamat" required>
							<div class="invalid-feedback">
                                Silahkan isi!
							</div>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary" name="register" style="background-color:#f28f2a;">Register</button>
                        </div>
                        
                    </form>

                    <p class="mt-2 mb-0">Sudah punya akun? <a href="../page/login.php" class="text-primary" >Login Disini!</a></p>
                </div>
            </div>
        </div>
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

</body>
</html>