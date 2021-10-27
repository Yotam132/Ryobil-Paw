<?php
    if(isset($_POST['id']))
    {
        include('../db.php');

        $id = $_POST['id'];
        $pengirim_nama = $_POST['pengirim_nama'];
        $pengirim_alamat = $_POST['pengirim_alamat'];
        $pengirim_nomor = $_POST['pengirim_nomor'];
        $penerima_nama = $_POST['penerima_nama'];
        $penerima_alamat= $_POST['penerima_alamat'];
        $penerima_nomor= $_POST['penerima_nomor'];

        $query = mysqli_query($con, 
        "UPDATE pesanan SET pengirim_nama='$pengirim_nama', pengirim_alamat='$pengirim_alamat', pengirim_nomor='$pengirim_nomor',
         penerima_nama='$penerima_nama', penerima_alamat='$penerima_alamat', penerima_nomor='$penerima_nomor' WHERE id='$id' ") or die(mysqli_error($con));
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
    }
    else
    {
        echo 
        '<script>
        alert("Update gagal"); window.location = "../page/profile.php"
        </script>';
    }
?>