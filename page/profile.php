<?php
    include('../db.php');

    session_start();

    if(isset($_SESSION['isLogin']))
    {
        $userData = $_SESSION['user'];
        $id = $userData['id'];

        $query = mysqli_query($con, 
        "SELECT * FROM users WHERE id='$id'") or die(mysqli_error($Con));

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

    <!-- Profile -->

    <div class="bg mx-auto text-center p-3">
        <h2 style="color:white;"><b>PROFILE</b></h2>
    </div>
    
    <!-- Profile Content -->
        
    <div class="container mt-5 mb-5">
        <table class="mx-auto">
            <tr>
                <th width="210px" height="50px">Nama</th>
                <td><?php echo $data['username']?></td>
            </tr>
            <tr>
                <th width="210px" height="50px">Email</th>
                <td><?php echo $data['email']?></td>
            </tr>
            <tr>
                <th width="210px" height="50px">Alamat</th>
                <td><?php echo $data['alamat']?></td>
            </tr>

            <tr>

            </tr>
                <td colspan="2" height="40px" style="padding-bottom:15px;padding-top:30px;">
                    <a class="btn btn-primary" href="edit.php" style="background-color:#00e479;width:100%;">Edit Profil</a>
                </td>
            <tr>
                <td>
                    <a class="btn btn-primary" href="../process/logoutProcess.php" style="background-color:#f28f2a;width:100%;">Keluar</a>
                </td>

                <td>
                    <a class="btn btn-danger" href="../process/deleteAkunProcess.php" style="width:100%;" <?php echo 'onClick="return confirm(\'Yakin ingin menghapus akun?\')"'; ?> >Hapus Akun</a>
                </td>
            </tr>
        </table>
        
    </div>

    <div class="container mt-3 mb-5">
        <h2 style="color:#f28f2a;"><b>Pesanan Anda</b></h2>
        <br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pengirim</th>
                    <th>Alamat Pengirim</th>
                    <th>No.Telp Pengirim</th>
                    <th>Nama Penerima</th>
                    <th>Alamat Penerima</th>
                    <th>No.Telp Penerima</th>
                    <th>Action</th>
                </tr> 
            </thead>
            <tbody>
                <?php
                    include('../db.php');

                    $query = mysqli_query($con, "SELECT * FROM pesanan WHERE userId = '$id' ") or die(mysqli_error($con));
                    
                    if(mysqli_num_rows($query) == 0)
                    {
                        echo '<tr> <td colspan="8"> Tidak ada data </td></tr>';
                    }
                    else
                    {
                        $No = 1 ;
                        while($data = mysqli_fetch_assoc($query))
                        {
                            echo'
                                <tr>
                                    <th class="text-center">'.$No.'</th>
                                    <td>'.$data['pengirim_nama'].'</td>
                                    <td>'.$data['pengirim_alamat'].'</td>
                                    <td>'.$data['pengirim_nomor'].'</td>
                                    <td>'.$data['penerima_nama'].'</td>
                                    <td>'.$data['penerima_alamat'].'</td>
                                    <td>'.$data['penerima_nomor'].'</td>
                                    <td class="text-center" style="align:center;align-item:center;">
                                        <a href="editPesanan.php?Id='.$data['id'].'"><i style="color:green;" class="fa fa-edit"></i></a>
                                        <a href="../process/deletePesananProcess.php?Id='.$data['id'].'" onClick="return confirm(\'Yakin?\')">
                                            <i style="color:red;" class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            ';
                            $No++;
                        }
                    }
                ?>
            </tbody>
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