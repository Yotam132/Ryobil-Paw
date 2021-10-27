<?php

    include('../db.php');
    $username = $_POST['nama'];
    $email = $_POST['email'];        
    $alamat = $_POST['alamat'];        

    $query = mysqli_query($con, 
    "UPDATE users SET username='$username', alamat='$alamat' WHERE email='$email' ") or die(mysqli_error($con));
    if($query)
    {
        echo 
        '<script>
        alert("Update berhasil"); window.location = "../page/profile.php"
        </script>';
    }
    else
    {
        echo 
        '<script>
        alert("Update gagal"); window.location = "../page/profile.php"
        </script>';
    }
?>