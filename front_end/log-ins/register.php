<?php
session_start();
  include("connections.php");
  include("functions.php");

  if($_SERVER['REQUEST_METHOD'] == "POST"){
  $user_name = $_POST['user_name'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $vardas = $_POST['vardas'];
  $pavarde = $_POST['pavarde'];
  $miestas = $_POST['miestas'];
  $adresas = $_POST['adresas'];
  function function_alert($message) {
      
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}
    if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && 
    !empty($email) && !empty($vardas) && !empty($pavarde) && !empty($miestas)
    && !empty($adresas)){

      //save to database
      $query = "SELECT * FROM vartotojai WHERE username = '$user_name' OR email = '$email'";
      $result = mysqli_query($con, $query);
      if (mysqli_num_rows($result) > 0) {
        // User already exists, handle the situation accordingly
        
        function_alert("Toks vartotojas jau egzistuoja!");
        // You can redirect to an error page or display a message to the user
      }
      else {
        // User does not exist, proceed with saving to the database
        $user_id = random_num(rand(6, 8));
        $query = "INSERT INTO vartotojai (user_id, username, password, email, vardas, pavarde, miestas, adresas)
                  VALUES ('$user_id','$user_name','$password','$email','$vardas','$pavarde','$miestas','$adresas')";
        mysqli_query($con, $query);
        header("Location: login.php");
        $user_id = '';
        die;
    }


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
    <title>Sign up</title>
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
  <div class="whole-register-box">
    <div class="register-box">
      <div class="register-value">
      <form method="post" action="">
           <h2>Registracija</h2>        
           <div class="input-box">
           <input type="text" name="user_name" id="" required>
              <label for="">Vartotojas</label>
           </div>
           <div class="input-box">
           <input type="text" name="email" id="" required>
              <label for="">El. paštas</label>
           </div>
           <div class="input-box">
              <input type="password" name="password" id="" required>
              <label for="">Slaptažodis</label>
           </div>
           <div class="input-box">
              <input type="text" name="vardas" id="" required>
              <label for="">Vardas</label>
           </div>
           <div class="input-box">
              <input type="text" name="pavarde" id="" required>
              <label for="">Pavardė</label>
           </div>
           <div class="input-box">
              <input type="text" name="miestas" id="" required>
              <label for="">Miestas</label>
           </div>
           <div class="input-box">
           <input type="text" name="adresas" id="" required>
              <label for="">Adresas</label>
           </div>
           <input type="submit" value="Registruotis" class="login-submit"> <br><br>
           <div class="register-option">
           <p>Turite anketą? <a href="login.php">Prisijunkite</a></p>
           </div>
        </form>
      </div>


    </div>
    </div>



  </body>
  </html>