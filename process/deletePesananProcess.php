<?php
    if(isset($_GET['Id']))
    {
        include('../db.php');

        $id = $_GET['Id'];

        $query = mysqli_query($con, "DELETE FROM pesanan WHERE id = '$id'") or die(mysqli_error($con));
        
        echo 
            '<script>
                alert("Berhasil Hapus Pesanan"); window.location = "../page/profile.php"
            </script>'; 
    }
?>