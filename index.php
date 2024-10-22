<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>

<body>
  <div class="main">
    <input type="checkbox" id="chk" aria-hidden="true">

    <div class="signup">
        <label for=""> Selamat Datang </label>
        <h2> Yuk kita mulai dengan tekan Login</h2>
    </div>

    <div class="login">
      <form action="./login.php" method="post">
        <label for="chk" aria-hidden="true">Login</label>
        <input type="email" name="email" id="email" placeholder="Email">
        <input type="password" name="password" id="password" placeholder="password">
        <button type="submit"> Login </button>
    </form>
    </div>
  </div>

  <?php
        if(isset($_POST['email']) || isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

             echo $email;
        }
    ?>

</body>



</html>