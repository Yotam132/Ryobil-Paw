<?php
    include('../db.php');
    session_start();

    $user = $_SESSION['user'];
    $id = $user['id'];

    $query = mysqli_query($con, "DELETE FROM users WHERE id = '$id'") or die(mysqli_error($con));
        
    include('../process/logoutProcess.php'); 
    
    echo 
        '<script>
            alert("Berhasil Hapus Akun");
        </script>';
?>