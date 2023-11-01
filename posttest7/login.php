<?php
session_start();
require 'koneksi.php';

if (isset($_POST['login'])) {
     $username = $_POST['username'];
     $password = $_POST['password'];

     $result = mysqli_query($conn, "SELECT * FROM `user` WHERE `username` = '$username'");

     if (mysqli_num_rows($result) === 1) {
          $row = mysqli_fetch_assoc($result);

          var_dump($row);
          if (password_verify($password, $row['password'])) {
               $_SESSION['login'] = true;
               $_SESSION['username'] = $row['username'];
               header('Location: dashboard.php');
               exit;
          }
     }
     $error = true;
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
               </table>
          </div>
          <div class="mode">
               <img id="theme" src="Aset/darkmode.png" alt="#">
          </div>
     </nav>
     <section>
          <p class="SignUp" id="SignUp">Log In</p>
          <div class="password_salah">
               <?php
               if (isset($error)) {
                    echo "<p style='color: red;'> Your username or password is incorrect! </p>";
               } else {
                    echo "<p style='color: red; display:none;'> Your username or password is incorrect! </p>";
               }
               ?>
          </div>
          <form action="" method="post" enctype="multipart/form-data">
               <!-- <div class="namalengkap">
                    <label for="nama_depan"></label> <br>
                    <input type="text" name="nama_depan" id="nama_depan" placeholder="first name" require autocomplete="off">
                    
                    <label for="nama_belakang"></label> <br>
                    <input type="text" name="nama_belakang" id="nama_belakang" placeholder="last name" require autocomplete="off">
               </div> -->

               <label for="username"></label> <br>
               <input type="text" name="username" id="username" placeholder="username" require autocomplete="off">

               <!-- <label for="email"></label><br>
               <input type="email" name="email" id="email" placeholder="email" require autocomplete="off"> -->

               <label for="password"></label><br>
               <input type="password" name="password" id="password" placeholder="password" require autocomplete="off">

               <!-- <label for="phone_number"></label><br>
               <input type="number" name="phone_number" id="phone_number" placeholder="phone number" require autocomplete="off"><br> -->

               <!-- <div class="tambahfoto">
                    <label for="photo" class="aphoto" id="photo" enctype="multipart/form-data">add profile picture: </label><br>
                    <input type="file" name="photo" id="photo" accept="uploads/*"><br>
               </div> -->
               <div class="loginsignup">
                    <button type="submit" name="login">Log In</button>
               </div>
          </form>
          <p class="regis-text">Don't have an account yet?</p>
          <a class="regis-btn" href="regist.php"> Sign Up</a>
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