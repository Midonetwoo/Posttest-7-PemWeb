<?php
require "koneksi.php";

if (isset($_POST["tambah"])) {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $jenis = $_POST["jenis"];
    $versi = $_POST["versi"];
    $date = date("Y-m-d"); 

    $img = $_FILES["picture"]["name"];
    $explode = explode('.', $img);
    $ekstensi = strtolower(end($explode));
    $newpicture = "$date.$nama.$ekstensi";
    $tmp = $_FILES ["picture"]["tmp_name"];

    if (move_uploaded_file($tmp, 'Aset/foto_product/'. $newpicture)) {
       $result = mysqli_query($conn, "INSERT INTO product (id, picture, nama, jenis, versi)
           VALUES ('$id', '$newpicture', '$nama', '$jenis', '$versi')");

       if ($result) {
           echo "
           <script>
           alert('data berhasil ditambahkan !');
           document.location.href = 'dashboard.php'
           </script>";        
       }else {
           echo "
           <script>
           alert('data berhasil ditambahkan !');
           document.location.href = 'tambah.php'
           </script>";
       }
   }else {
       echo "Gambar Tidak terUpload";
   }
}
//     $result = mysqli_query($conn, "insert into product 
//         (id, nama, jenis, versi) 
//         values ('$id', '$nama', '$jenis', '$versi')");

//     if ($result) {
//         echo "
//                 <script>
//                 alert('Data Berhasil Ditambahkan!');
//                 document.location.href = 'dashboard.php';
//                 </script>
//             ";
//     } else {
//         echo "
//             <script>
//             alert('Data Gagal Ditambahkan!');
//             document.location.href = 'tambah.php';
//             </script>
//         ";
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
     <section>
          <p>Add Data</p>
          <form action="" method="post" class="formtambah" enctype = "multipart/form-data">
                <label for="id">ID : </label>
                <input type="text" name="id" id=""> <br>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id=""> <br>
                <label for="jenis">Type : </label>
                <input type="text" name="jenis" id=""> <br>
                <label for="versi">Version : </label>
                <input type="text" name="versi" id=""><br>
                <label for="picture">Gambar</label>
                <input type="file" name="picture" id=""> <br>
               
               <button type="submit" name="tambah">Add</button>
          </form>
          <a class="kembali" href="dashboard.php">Kembali ke dashbaord</a>
     </section>
</body>

</html>