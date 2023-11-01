<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login as Administrator</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
     <section>
     <div class="form">
        <div class="form-container">
             <form action="dashboard.php">
               <p class="welcomeback">WELCOME BACK SIR</p>
                <input type="text" name="username" placeholder="Username" class="textfield">
                <input type="password" name="password" placeholder="Password" class="textfield">
                <div class="remember">
                    <input type="checkbox" name="remember" value="true">
                    <label for="remember">Remember</label>
                </div>
                <input type="submit" value="Masuk" class="login-btn">
            </form>
        </div>
     </div>
     </section>
</body>
</html>