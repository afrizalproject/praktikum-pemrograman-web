<?php
include_once('../connection.php');
session_start();
$items = $conn->query("SELECT * FROM items");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Sale Page</title>
    <Style>
    body{
        background-color: salmon;
        color: white;
    }
    </Style>
</head>

<body>
    <center>
        <h2>Add new Sale</h2>
        <?php if ($_SESSION['role'] == 'user') : ?>
            <table>
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                    <tr>
                        <td>
                            <label for="item_name">Item Name</label>
                        </td>
                        <td>
                            <select name="item_id" id="">
                            <?php
                            while ($item = mysqli_fetch_array($items)) {
                                echo "<option value='" . $item['id'] . "' >" . $item['name'] ." (stock : ".$item['stock'].")". "</option>";
                            }
                            ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="amount">Sale Amount</label>
                        </td>
                        <td>
                            <input type="number" name="amount" id="" placeholder="Determine the amount">
                        </td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="create">Create</button></td>
                        <td><a href="index.php">Back to Sale list</a></td>
                    </tr>

                </form>
            </table>
    </center>
<?php else : echo '<h2>You cannot access this page!!</h2>';
            echo '<a href="../home.php">Back to home</a>';
            exit;
        endif;
?>
</body>

</html>

<?php

if (isset($_POST['create'])) {

    //create sales
    $itemId = $_POST['item_id'];
    $amount = $_POST['amount'];

    $sql = "INSERT INTO sales(item_id,amount) VALUES('$itemId','$amount')";

    if ($conn->query($sql) == TRUE) {
        echo "<script> alert('sales added successfully')</script>";
        header('location:index.php');
    } else {
        echo "Error : " . $sql . "<br> " . $conn->error;
    }
}
