<?php
include_once('../connection.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Item Page</title>
    <Style>
    body{
        background-color: salmon;
        color: white;
    }
    </Style>
</head>

<body>
    <center>
        <h2>Create new Item</h2>
        <?php if ($_SESSION['role'] == 'admin') : ?>
            <table>
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                    <tr>
                        <td>
                            <label for="item_name">Item Name</label>
                        </td>
                        <td>
                            <input type="text" name="item_name" placeholder="Write the item name here">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="stock">Stock</label>
                        </td>
                        <td>
                            <input type="number" name="stock" id="" placeholder="Determine the amount">
                        </td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="create">Create</button></td>
                        <td><a href="index.php">Back to Item list</a></td>
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


    $itemName = $_POST['item_name'];
    $stock = $_POST['stock'];

    $query = "SELECT * FROM items WHERE name = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $itemName);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();
    $updatedStock = $result['stock'] + $stock;

    $sql = '';
    if ($result) {
        $sql = "UPDATE items SET stock = '$updatedStock' WHERE name = '$itemName' ";

    }else{
        $sql = "INSERT INTO items(name,stock) VALUES('$itemName','$stock')";
    }    

    if ($conn->query($sql) == TRUE) {
        echo "<script> alert('item created successfully')</script>";
        header('location:index.php');
    } else {
        echo "Error : " . $sql . "<br> " . $conn->error;
    }
}
