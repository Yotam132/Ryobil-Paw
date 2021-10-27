<?php
   // untuk mengoneksikan dengan database dengan memanggil file db.php
   include('../db.php');

   // tampung nilai yang ada di from ke variabel
   // sesuaikan variabel name yang ada di registerPage.php disetiap input
   session_start();

   $userData = $_SESSION['user'];
   $id = $userData['id'];

   $pengirim_nama = $_POST['pengirim_nama'];
   $pengirim_alamat = $_POST['pengirim_alamat'];
   $pengirim_nomor = $_POST['pengirim_nomor'];
   $penerima_nama = $_POST['penerima_nama'];
   $penerima_alamat= $_POST['penerima_alamat'];
   $penerima_nomor= $_POST['penerima_nomor'];

   // Melakukan insert ke databse dengan query dibawah ini
   $query = mysqli_query($con, "INSERT INTO pesanan (userid, pengirim_nama, pengirim_alamat, pengirim_nomor, penerima_nama, penerima_alamat, penerima_nomor) VALUES('$id', '$pengirim_nama', '$pengirim_alamat', '$pengirim_nomor', '$penerima_nama', '$penerima_alamat', '$penerima_nomor')")
            or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan di-tangani oleh perintah “or die”

   if($query){
      echo
         '<script>
         alert("Berhasil Memesan!"); window.location = "../page/profile.php"
         </script>';
   }else{
      echo
         '<script>
         alert("Gagal memesan!"); window.location = "../page/profile.php"
         </script>';
   }
?>