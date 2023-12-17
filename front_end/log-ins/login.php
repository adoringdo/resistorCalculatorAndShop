<?php
session_start();
include("connections.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
$user_name = $_POST['user_name'];
$password = $_POST['password'];

  if(!empty($user_name) && !empty($password)&& !is_numeric($user_name)){

    //read from database
    $query = "select * from vartotojai where username = '$user_name' limit 1";
    $result = mysqli_query($con, $query);
    mysqli_query($con, $query);
    if($result) {
      if($result && mysqli_num_rows($result) > 0){
        $user_data = mysqli_fetch_assoc($result);
        if($user_data['password'] === $password) {
          
          $_SESSION['user_id'] = $user_data['user_id'];
          header("Location: ../index.php");
          die;
        }
    }
    }
   
    echo "Wrong username or password!";

  }else{
    echo "Please enter valid information!";
  }

}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log in</title>
    <link rel="stylesheet" href="../styles.css" />
  </head>

  <body>
  <nav>
    <div class="logo"><img src="../media/logo_transparent.png" alt=""/></div>
    <a href="../index.php">Pradžia</a>
    <a href="../calculator.php">Skaičiuoklė</a>
    <a href="../store/index.php">Parduotuvė</a>
    <a href="../about.php">Apie Mus</a>
    <a href="../contacts.php">Kontaktai</a>
    <!-- <a href="../store/cart.php" class="cart"><img src="../../media/cart.png" alt=""></a> -->
    <?php if (!empty($user_data['username'])) {
        echo '<a href="">' . $user_data['username'] . '</a>';
    } else {
    } ?>

    <?php if (empty($user_data['username'])) {
        echo '<div class="dropdown"><a class="dropdownA" href="javascript:void(0);" onclick="dropdownMenu()"
        >&#9776;</a>';
    } ?>

    <?php if (!empty($user_data['username'])) {
        echo '<div class="dropdown"><a class="dropdownAhidden" href="javascript:void(0);" onclick="dropdownMenu()"
        >&#9776;</a>';
    } ?>

    <?php if (empty($user_data['username'])) {
        echo '<div class="dropdown-content" id="dropdownClick">
          <a href="log-ins/login.php">Prisijungti</a>
          <a href="log-ins/login.php">Registruotis</a>
        </div>';
    } ?>
  </nav>
    <div class="whole-login-box">
    <div class="login-box">
      <div class="login-value">
      <form method="post" action="">
           <h2>Prisijungimas</h2>
           <div class="input-box">
           <input type="text" name="user_name" id="" required>
              <label for="">Vartotojas</label>
           </div>
           <div class="input-box">
              <input type="password" name="password" id="" required>
              <label for="">Slaptažodis</label>
           </div>
           <input type="submit" value="Prisijungti" class="login-submit"> <br><br>
           <div class="register-option">
           <p>Neturite anketos? <a href="register.php">Užsiregistruokite</a></p>
           </div>
        </form>
      </div>


    </div>
    </div>



    <!-- <div class="loginBox">
        <form method="post" action="">
           <div>Login</div>
           <input type="text" name="user_name" id=""><br><br>
           <input type="password" name="password" id=""> <br><br>
           <input type="submit" value="Prisijungti"> <br><br>
           <a href="register.php">Signup</a><br><br>
        </form>
    </div> -->

  </body>
  </html>