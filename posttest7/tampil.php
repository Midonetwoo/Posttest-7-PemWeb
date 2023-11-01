<?php
$nama_depan = $_POST['nama_depan'];
$nama_belakang = $_POST['nama_belakang'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone_number = $_POST['phone_number'];
if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) {
     $targetDir = "uploads/";
     $targetFile = $targetDir . basename($_FILES["photo"]["name"]);
     $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
     $validExtensions = array("jpg", "jpeg", "png", "gif");
     if (in_array($imageFileType, $validExtensions)) {
          if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
               $imageMessage = "File uploaded successfully";
          } else {
               $imageMessage = "Error";
          }
     } else {
          $imageMessage = "file must jpg, jpeg, png, dan gif.";
     }
} else {
     $imageMessage = "Please select a file to upload";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login - Connect</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
     <header class="gambarheader">
     <img id = "header" src="Aset/header.png" alt="#">
     </header>
     <nav>
          <img id = "logo" src="Aset/connect - tulisan.png" alt="#">
          <div class="items">
               <table>
                    <a href="index.php">Home</a>
                    <a href="about us.php">About Us</a>
                    <a href="index.php">Product</a>
                    <a href="#footer">Contact Us</a>
               </table>     
          </div>
          <div class="mode" >
               <img id="theme" src="Aset/darkmode.png" alt="#">
          </div>
     </nav>
     <section class="sectiontampil">
          <div class="pp">
          <img src="<?= $targetFile ?>" alt="Insert profile Picture">
          </div>
          <div class="isi">
               <p>NAMA LENGKAP: <?= $nama_depan." ".$nama_belakang;?></p>
               <p>USERNAME: <?= $username;?></p>
               <p>EMAIL: <?= $email;?></p>
               <p>PASSWORD: <?= $password;?></p>
               <p>PHONE NUMBER: <?= $phone_number;?></p>
          </div>
     </section>
     <footer id="footer">
          <div  class="logo">
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
               <a id="linkcomingsoon" href=""><img id = "instagram" src="Aset/instagram.png" alt=""></a>
               <a id="linkcomingsoon2"><img id = "linkedin"src="Aset/Linkedin.png" alt=""></a>
               <a id="linkcomingsoon3"><img src= "Aset/tiktok.png" alt=""></a>
               <a id="linkcomingsoon4"><img id = "gmail" src="Aset/gmail.png" alt=""></a>
          </div>
          <div class="copyright">
               <p>©2023 connect | connect is a trademark of ga.worskspace</p>
          </div>
     </footer>
     <script src="login.js"></script>
</body>
</html>