<html>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <head>
        <body>
            <div class="login-card">
                <img src="image/logo.jpg" alt="">
                <h1>Login</h1><br>
              <form action="" method="POST">
                <input type="text" name="user" placeholder="Username">
                <input type="password" name="pass" placeholder="Password">
                <input type="submit" name="login" class="login login-submit" value="login">
              </form>
                
              
            </div>

            <?php
              if(isset($_POST["login"])){
                if($_POST["user"] === "iky" && $_POST["pass"] === "14"
                || $_POST["user"] === "bombom" && $_POST["pass"] === "336"){
                  header("location: home.php");
              }else{
                echo"
                    <script>
                    alert('user atau password salah')                   
                    </script>";
              }
            }

              ?>
            
            <!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->
        </body>
    </head>
</html>