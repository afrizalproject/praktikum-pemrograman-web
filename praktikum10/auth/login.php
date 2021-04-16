<?php
include_once('../connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <Style>
    body{
        background-color: salmon;
        color: white;
    }
    </Style>
</head>

<body>
    <center>
    <h2>Login Page</h2>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <table>
                <tr>
                    <td>
                        <label for="username"> Username</label>
                    </td>
                    <td>
                        <input type="text" name="username" id="" placeholder="Username">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password"> Password</label>
                    </td>
                    <td>
                        <input type="password" name="password" id="" placeholder="Password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="login">Login</button>
                    </td>
                    <td>
                        <a href="register.php">Dont Have Account?</a>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>
<?php

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    //to prevent from mysqli injection  
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";

    $query = $conn->query($sql);
    if (mysqli_num_rows($query) == 1) {
        $data = $query->fetch_array();
        session_start();
        $_SESSION['username'] =$data['username'];
        $_SESSION['name'] =$data['name'];
        $_SESSION['role'] =$data['role'];
        header('location:../home.php');

    }
    else{
        echo "<script>alert('Password atau Username salah')</script>";        
    }
}
?>