<?php
    $host = "localhost";
    $user = "ryobilxy_database";
    $pass = "ryobilpaw1213";
    $name = "ryobilxy_database";

    $con = mysqli_connect($host, $user, $pass, $name);

    if(mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL : " . mysqli_connect_error();
    }
?>