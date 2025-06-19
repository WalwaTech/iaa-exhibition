
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> login form </title>
        <style>
  
body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-image: url('reg.jpeg');
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

form {
  background: #ffffff;
  
  padding: 30px 40px;
  border-radius: 10px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.2);
  width: 350px;
}

h2 {
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}

label {
  display: block;
  margin: 12px 0 5px;
  color: #444;
  font-size: 15px;
}

input, select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 6px;
  font-size: 14px;
  box-sizing: border-box;
}

button {
  margin-top: 20px;
  width: 100%;
  padding: 10px;
  background-color: #0066cc;
  color: white;
  font-size: 16px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  transition: background 0.3s;
}

button:hover {
  background-color: #004c99;
}
        </style>
        
        
    </head>
     <form method="post">
         <label for="username"> username</label> <br>
         <input type="text" name="username" id="username"> <br>
              <label for="username">password </label> <br>
              <input type="password" name="password" id="password"> <br> 
              <label for="role"> role</label>
              <input type="text" name="role" id="role"> 
            <button type="submit" name="send"> register </button> 
        </form>
    <body>
        <?php
if(isset($_POST['send'])){
    include 'connect.php';
$username=$_POST['username'];
$password=$_POST['password'];
$role=$_POST['role'];
if($username!="" && $password!="" && $role!=""){
    $query= "insert into user values('','$username','$password','$role')";
    $result = mysqli_query($link, $query);
    echo 'data sucessefully';
}
 else {
    echo 'please fill all field'; 
}
}
        ?>
    </body>
</html>