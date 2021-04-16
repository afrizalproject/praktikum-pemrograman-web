<?php
include_once('../connection.php');
session_start();

$sql = "SELECT sales.id,items.name,amount  FROM sales,items WHERE sales.item_id = items.id" ;

if ($conn->query($sql)) {
    $purchases = $conn->query($sql);
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
    <title>Sales Index</title>
    <link rel="stylesheet" href="../style.css">
    <Style>
    body{
        background-color: salmon;
        color: white;
    }
    </Style>
</head>

<body>
    <?php
    if ($_SESSION['role'] == 'user') :
    ?>
    <a href="../auth/logout.php" class="btn-red" style="position: absolute; top: 10px; right: 10px;">Logout</a>
        <center>
            <h2>Sales Index</h2>
            <a href="../home.php" class="btn-green" style="margin-bottom: 10px; float: left;">Back to Home</a>
            <a href="create.php" class="btn-blue" style="margin-bottom: 10px; float: right;">Add Sales</a>
            <table>
                <thead>
                    <tr>
                        <th>ID Purchase</th>
                        <th>Item Name</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($purchases) > 0) {
                        while ($purchase = mysqli_fetch_array($purchases)) {
                    ?>
                            <tr>
                                <td><?php echo $purchase['id'] ?></td>
                                <td><?php echo $purchase['name'] ?></td>
                                <td><?php echo $purchase['amount'] ?></td>
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