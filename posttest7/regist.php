<?php
require 'koneksi.php';

if (isset($_POST['regis'])) {
     $username = $_POST['username'];
     $password = $_POST['password'];
     $cpassword = $_POST['cpassword'];

     $result = mysqli_query($conn, 'SELECT * FROM user WHERE username = "$username"');

     if (mysqli_fetch_assoc($result)) {
          echo "
                <script>
                    alert('Username telah digunakan!');
                    document.location.href = 'regis.php';
                </script>
            ";
     } else {
          // 92
          if ($password === $cpassword) {
               $password = password_hash($password, PASSWORD_DEFAULT);

               $result = mysqli_query($conn, "INSERT INTO user VALUES ('', '$username', '$password')");
               if (mysqli_affected_rows($conn) > 0) {
                    echo "
                        <script>
                            alert('Registrasi Berhasil!');
                            document.location.href = 'login.php';
                        </script>
                    ";
               } else {
                    echo "
                        <script>
                            alert('Registrasi Gagal!');
                            document.location.href = 'regis.php';
                        </script>
                    ";
               }
          } else {
               echo "
                    <script>
                        alert('Konfirmasi Password tidak sesuai!');
                        document.location.href = 'regis.php';
                    </script>
                ";
          }
     }
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
          <p class="SignUp" id="SignUp">Sign Up</p>
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

               <label for="cpassword"></label><br>
               <input type="password" name="cpassword" id="cpassword" placeholder="confirm password" require autocomplete="off">

               <!-- <label for="phone_number"></label><br>
               <input type="number" name="phone_number" id="phone_number" placeholder="phone number" require autocomplete="off"><br> -->

               <!-- <div class="tambahfoto">
                    <label for="photo" class="photo" id="photo" enctype="multipart/form-data">add profile picture: </label><br>
                    <input type="file" name="photo" id="photo" accept="uploads/*"><br>
               </div> -->
               <button type="submit" name="regis">Sign Up</button>
          </form>
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