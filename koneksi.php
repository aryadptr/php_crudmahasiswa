<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "db_mahasiswa";

    $koneksi = mysqli_connect($server, $user, $password, $database) OR DIE("Can't Connect to Database");