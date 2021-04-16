<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    
    <Style>
    body{
        background-color: salmon;
        color: white;
    }
    </Style>
</head>

<body>
    <?php
    if (isset($_SESSION['username'])) {
        echo '<h2>Selamat Datang ' . $_SESSION['name'] . ' Pada hari ' . date('l') . ', ' . date('d-m-Y') . ' Akses anda adalah ' . $_SESSION['role'] . '</h2>';
        if ($_SESSION['role'] == 'admin') {
            echo '<a href="item/index.php" class="btn-green" >Item Menu</a>';
            echo '<a href="purchase/index.php" class="btn-blue" style="margin:20px;">Purchase Menu</a>';
        } else if ($_SESSION['role'] == 'user') {
            echo '<a href="sales/index.php" class="btn-green" style="margin-right:20px;">Sales Menu</a>';
        }
    ?>
        <a href="auth/logout.php" class="btn-red" onclick="return confirm('Are you sure')"> Logout</a>
    <?php
    } else {
        echo '<h2>Tolong login dulu</h2>';
        echo '<a href="auth/login.php" class="btn-blue">Login</a>';
    }
    ?>
</body>

</html>