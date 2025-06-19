<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>IAA Login</title>
  <link rel="stylesheet" href="style.css"/>
</head>
<style>
    

* {
  box-sizing: border-box;
  margin: 0;
padding: 0;
}

body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

.container {
  display: flex;
  height: 100vh;
}

.login-form {
  flex: 1;
  background-color: #ffffff;
  padding: 50px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.logo {
  width: 100px;
  margin-bottom: 20px;
}

.login-form h2 {
  margin-bottom: 20px;
  color: #003366;
}

.login-form form {
  width: 100%;
  max-width: 300px;
}

.login-form input {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border-radius: 4px;
  border: 1px solid #ccc;
}

.login-form a {
  font-size: 14px;
  color: #005baa;
  display: block;
  margin-bottom: 20px;
  text-align: right;
}

.login-form button {
  width: 100%;
  padding: 10px;
  background-color: #003366;
  color: white;
  font-weight: bold;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.login-form .note {
  margin-top: 20px;
  font-size: 12px;
  color: gray;
}

.image-section {
  flex: 1;
  overflow: hidden;
}

.image-section img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

</style>
<body>
  <div class="container">
    <div class="login-form">
        <img src="logo (2).jpg" alt="IAA Logo" class="logo"/>
      <h2>Login to your account</h2>
      
      <form method="post">
          <input type="text" name="username" placeholder="bit-01-0036-2023" required/>
          <input type="password" name="password" placeholder="Password" required/>
        <a href="#">Forgot Password?</a>
        <button type="submit" name="send">Log in</button>
      </form>
      <p class="note">Cookies must be enabled in your browser</p>
    </div>
    <div class="image-section">
        <img src="pg.jpg" alt="Graduation" />
    </div>
  </div>

  
 
<?php
        
if(isset($_POST['send'])){
    include 'connect.php';
    $username= mysqli_real_escape_string($link, $_POST['username']);
    $password= mysqli_real_escape_string($link, $_POST['password']);
    if($username!="" &&  $password!=""){
        $query="SELECT * FROM user WHERE username='$username'   AND password='$password'";
                  $result= mysqli_query($link, $query);
        
        if($result){
            // check if the user exits
            if (mysqli_num_rows($result)==1){
                // register session variable
                $_SESSION['username']=$username;
                $_SESSION['password']=$password;
                // check who logged in 
                $row = mysqli_fetch_array($result);
                if($row['role']=="student"){
                    header("location: student.php");
                  
            }
            elseif ($row['role']=="admin") {
                header("location:admin.php");
        }elseif ($row['role']=="lecturer") {
            header("location:lecturer.php");
                } else {
                    header("location: student.php");
                }
        
 
        } else {
            echo "wrong username or password";  
        }

         
    } else {
        echo mysqli_errno($link); 
    }
    
 
}
 else {
    echo 'please fill field'; 
}
}
        
?>

</body>
</html>

