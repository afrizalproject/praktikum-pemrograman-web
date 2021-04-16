<?php
include_once('../connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <Style>
    body{
        background-color: salmon;
        color: white;
    }
    </Style>
</head>
<body>
    <center>
        <h2>Register Page</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <table>
                <tr>
                    <td>
                        <label for="username">Username</label>
                    </td>
                    <td>
                        :
                        <input type="text" name="username" placeholder="Username here" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Password</label>
                    </td>
                    <td>
                        :
                        <input type="password" name="password" id="" placeholder="Password here" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="name">Full Name</label>
                    </td>
                    <td>
                        :
                        <input type="text" name="name" id="" placeholder="Enter your Full Name" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="role">Role</label>
                    </td>
                    <td>
                    :
                        <select name="role" id="">
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="submit">Register</button>
                    </td>
                    <td>
                        <a href="login.php" style="float: right;">or Login?</a>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $role = $_POST['role'];

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "INSERT INTO users(username,password,name,role) VALUES('$username','$password','$name','$role')";

    if ($conn->query($sql) == TRUE) {
        echo "<script> alert('user created successfully')</script>";
    }else{
        echo "Error : ".$sql."<br> ".$conn->error;
    }
}