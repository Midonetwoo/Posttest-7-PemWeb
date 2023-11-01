<?php
require 'koneksi.php';

session_start();

if (!isset($_SESSION['login'])) {
     header('Location: login.php');
     exit;
}

$result = mysqli_query($conn, "SELECT * FROM product");

$product = [];

while ($row = mysqli_fetch_assoc($result)) {
     $product[] = $row;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login as Administrator</title>
     <link rel="stylesheet" href="style.css">
</head>

<body>
     <header class="gambarheader">
          <img id="header" src="Aset/header.png" alt="#">
     </header>
     <nav>
          <img id="logo" src="Aset/connect - tulisan.png" alt="#">
          <div class="items">
               <table>
                    <a href="index.php">Home</a>
                    <a href="about us.php">About Us</a>
                    <a href="index.php">Product</a>
                    <a href="#footer">Contact Us</a>
                    <a href="logout.php">Log Out</a>
               </table>
          </div>
     </nav>
     <section class="section_dashboard">
          <div class="dashboard_atas">
               <h1>Dashboard</h1>
               <div class="tanggal">
                    <p><?php date_default_timezone_set("Asia/Makassar");
                         echo date("l, d-m-y  |  h:i:s a") ?></p>
               </div>
               <a href="tambah.php"><button class="add-btn">Add Product</button></a>
               <br>
          </div>
          <table class="tabel_dashboard">
               <thead>
                    <tr>
                         <th>###</th>
                         <th>ID</th>
                         <th>Picture</th>
                         <th>product</th>
                         <th>Type</th>
                         <th>Version</th>
                         <th>Action</th>
                    </tr>
               </thead>
               <tbody>
                    <?php $i = 1;
                    foreach ($product as $pro) : ?>
                         <tr>
                              <td><?php echo $i ?></td>
                              <td><?php echo $pro["id"] ?></td>
                              <td><img src="Aset/foto_product/<?= $pro["picture"] ?>" alt="Product" width="100px" height="100px"></td>
                              <td><?php echo $pro["nama"] ?></td>
                              <td><?php echo $pro["jenis"] ?></td>
                              <td><?php echo $pro["versi"] ?></td>
                              <td class="action">
                                   <a href="edit.php?id=<?php echo $pro["id"] ?>"><button class="edit-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white">
                                                  <path d="M200-200h56l345-345-56-56-345 345v56Zm572-403L602-771l56-56q23-23 56.5-23t56.5 23l56 56q23 23 24 55.5T829-660l-57 57Zm-58 59L290-120H120v-170l424-424 170 170Zm-141-29-28-28 56 56-28-28Z" />
                                             </svg></button></a>
                                   <a href="hapus.php?id=<?php echo $pro["id"] ?>"><button name="hapus" class="delete-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white">
                                                  <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                             </svg></button></a>
                              </td>
                         </tr>
                    <?php $i++;
                    endforeach; ?>
               </tbody>
          </table>
     </section>
     <footer id="footer">
          <div class="logo">
               <img id="logo2" src="Aset/connect - tulisan.png" alt="Connect">
          </div>
          <div class="contactus">
               <div class="atas">
                    <p>Contact Us</p>
               </div>
               <div class="bawah">
                    <p>If you're interested in talking more about how connect can help you, don't hesitate to contact us. We're ready to answer your questions and start a conversation about the IoT solution that's right for you.</p>
               </div>
          </div>
          <div class="sosmed">
               <a id="linkcomingsoon" href=""><img id="instagram" src="Aset/instagram.png" alt=""></a>
               <a id="linkcomingsoon2"><img id="linkedin" src="Aset/Linkedin.png" alt=""></a>
               <a id="linkcomingsoon3"><img src="Aset/tiktok.png" alt=""></a>
               <a id="linkcomingsoon4"><img id="gmail" src="Aset/gmail.png" alt=""></a>
          </div>
          <div class="copyright">
               <p>©2023 connect | connect is a trademark of ga.worskspace</p>
          </div>
     </footer>
     <script src="login.js"></script>
</body>

</html>