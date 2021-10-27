<?php
    if(isset($_POST['login']))
    {
        include('../db.php');

        $email = $_POST['email'];
        //password diganti jadi biar bisa cek enkrip
        $password = $_POST['password'];

        //Query nya diganti jadi cuma ngecek email dan is_verificated == 1 itu
        $query = mysqli_query($con, "SELECT * FROM users WHERE email = '$email' AND is_verified = '1' ") or die(mysqli_error($con));

        if(mysqli_num_rows($query) == 0)
        {
            echo 
            '<script>
            alert("Email tidak ditemukan!"); window.location = "../page/login.php"
            </script>';
        }
        else
        {
            $user = mysqli_fetch_assoc($query);
            if(password_verify($password, $user['password']))
            {
                session_start();

                $_SESSION['isLogin'] = true;
                $_SESSION['user'] = $user;
                echo 
                '<script>
                alert("Berhasil Login"); window.location = "../index.php"
                </script>';
            }
            else
            {
                echo 
                '<script>
                    alert ("Email / Password salah"); window.location = "../page/login.php"
                </script>';
            }
        }
    }
    else
    {
        echo
        '<script>
        window.history.back()
        </script>';
    }


?>