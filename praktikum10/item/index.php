<?php
include_once('../connection.php');
session_start();

$sql = "SELECT * FROM items";

if ($conn->query($sql)) {
    $items = $conn->query($sql);
} else {
    echo ("Error description: " . $conn->error);
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Index</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php
    if ($_SESSION['role'] == 'admin') :
    ?>
        <center>
        <a href="../auth/logout.php" class="btn-red" style="position: absolute; top: 10px; right: 10px;">Logout</a>
            <h2>Item Index</h2>
            <a href="../home.php" class="btn-green" style="margin-bottom: 10px; float: left;">Back to Home</a>
            <a href="create.php" class="btn-blue" style="margin-bottom: 10px; float: right;">Create Item</a>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Item Name</th>
                        <th>Stock</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($items) > 0) {
                        while ($item = mysqli_fetch_array($items)) {
                    ?>
                            <tr>
                                <td><?php echo $item['id'] ?></td>
                                <td><?php echo $item['name'] ?></td>
                                <td><?php echo $item['stock'] ?></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </center>
    <?php
    else :
        echo '<h2>You cannot access this page!!</h2>';
        echo '<a href="../home.php">Back to home</a>';
        exit;
    endif
    ?>
</body>

</html>