<?php
require "koneksi.php";
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM product where id=$id");

$product = [];

while ($row = mysqli_fetch_assoc($result)){
    $product[] = $row;
}

$product = $product[0];


if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $versi = $_POST['versi'];

    $result = mysqli_query($conn, "UPDATE product SET nama = '$nama', jenis ='$jenis', versi = '$versi' WHERE id = '$id' ");

    if ($result) {
        echo "
        <script>
            alert('Data berhasil Diubah!');
            document.location.href = 'dashboard.php'
        </script>";
    } else {
        echo "
        <script>
            alert('Data Gagal Diubah!');
            document.location.href = 'edit.php'
        </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="add-data">
        <div class="add-form-container">
            <h1>Edit Data</h1><br>
            <form action="" method="post">
                <label for="id">ID</label>
                <input type="text" name="id" value="<?php echo $product['id']?>" class="textfield">
                <label for="nama">Product</label>
                <input type="text" name="nama" value="<?php echo $product['nama']?>" class="textfield">
                <label for="jenis">Type</label>
                <input type="text" name="jenis" value="<?php echo $product['jenis']?>" class="textfield">
                <label for="versi">Version</label>
                <input type="text" name="versi" value="<?php echo $product['versi']?>" class="textfield">
                <input type="submit" name="edit" value="Edit Data" class="login-btn">
            </form>
        </div>
    </section>
</body>
</html>