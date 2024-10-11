<?php

include "db.php";

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
}

$query = "SELECT * FROM barang_hilang";
$statement = $conn->query($query);

$list_barang_hilang = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Barang Hilang</title>
</head>

<body>
    <form action="auth.php" method="post">
        <button name="logout">logout</button>
    </form>
    <table border="1">
        <thead>
            <th>no</th>
            <th>nama barang</th>
        </thead>

        <tbody>
            <!-- buka foreach -->
            <?php foreach ($list_barang_hilang as $barang_hilang) {  ?>
                <tr>
                    <td><?php echo $barang_hilang["id"]  ?></td>
                    <td><?php echo $barang_hilang["nama"]  ?></td>
                </tr>
            <?php } ?>
            <!-- tutup foreach -->
        </tbody>
    </table>
</body>

</html>