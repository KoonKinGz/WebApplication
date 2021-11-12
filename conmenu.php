<?php 
    $connect = new mysqli('localhost', 'root', '', 'login_db');
	mysqli_query($connect, 'SET CHARACTER SET UTF8');

    if ($connect->connect_error) {
        die("Something wrong.: " . $connect->connect_error);
      }

    $sql = "SELECT * FROM menu";
    $result = $connect->query($sql);
?>