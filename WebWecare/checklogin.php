<?php 
    session_start();
    include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        $decrypt = password_verify($password,$row['password']);
        if($row['username'] == $username && $row['password'] == $decrypt){
            $_SESSION['login'] = 'online';
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            if($row['role'] == 'Member'){
                header("location: indexlogin.php");
            }else{
                header("location: lihatlaporanadmin.php");
            }
        }else{
            header("location: login.php");
        }
    }else{
        header("location: login.php");
    }

?>