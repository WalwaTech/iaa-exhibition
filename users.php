
<!DOCTYPE html>
<html>
<head>
  <title>User Registration</title>
  <style>
    body {
      font-family: Arial;
      background: #f0f8ff;
      padding: 30px;
    }
    form {
      background: white;
      padding: 25px;
      border-radius: 8px;
      width: 400px;
      margin: auto;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    input, select {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    input[type="submit"] {
      background: #005baa;
      color: white;
      border: none;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background: #004080;
    }
  </style>
</head>
<body>

<h2 style="text-align:center;">Register User</h2>

<form method="POST">
  Full Name: <input type="text" name="full_name" required>
Email: <input type="email" name="email" required>
  Password: <input type="password" name="password" required>
  Role:
  <select name="role" required>
    <option value="student">Student</option>
    <option value="lecturer">Lecturer</option>
    <option value="admin">Admin</option>
  </select>
  Phone: <input type="text" name="phone" required>
  created_at: <input type="datetime-local" name="created_at"> 
  <input type="submit" value="Register" name="send">
</form>

</body>
</html>



<?php
if (isset($_POST['send']) ){  

$full_name = $_POST['full_name'];
$email =$_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];
$phone =$_POST['phone'];
$created_at=$_POST['created_at'];
include 'connect.php';

$query = "INSERT INTO users values('','$full_name','$email','$password','$role','$phone','$created_at') ";
  $result = mysqli_query($link,$query);
    echo "User registered successfully!";
}
?>

