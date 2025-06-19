<!DOCTYPE html>
<html>
<head>
  <title>Visitor Registration</title>
  <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
  font-family: Arial, sans-serif;

  background: #f0f8ff;
  padding: 20px;
}

.form-container {
  width: 400px;
  margin: auto;
  background: #fff;
  padding: 25px;
  border-radius: 10px;
  box-shadow: 0 0 10px #ccc;
}

h2 {
  text-align: center;
  color: #005baa;
}

label {
  display: block;
  margin-top: 10px;
  font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="date"] {
  width: 100%;
  padding: 8px;
  margin-top: 5px;
  border: 1px solid #aaa;
  border-radius: 4px;
}

input[type="submit"] {
  margin-top: 15px;
  width: 100%;
  padding: 10px;
  background: #005baa;
  color: white;
  font-weight: bold;
  border: none;
  border-radius: 5px;
}

input[type="submit"]:hover {
  background: #004080;
}
</style>
<body>

  <div class="form-container">
    <h2>Visitor Registration Form</h2>
    <form  method="post">
      <label for="visitor_name">Full Name:</label>
      <input type="text" id="visitor_name" name="full_name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="phone">Phone Number:</label>
      <input type="text" id="phone" name="phone" required>
      
      <label for="visit_date">Visit Date:</label>
      <input type="date" id="visit_date" name="registered_at" required>

      <input type="submit" value="Register Visitor" name="send">
    </form>
  </div>
<?php
if (isset($_POST['send'])){
    $full_name=$_POST['full_name'];
    $email=$_POST['email'];
    $phone= $_POST['phone'];
    $registered_at=$_POST['registered_at'];
    include 'connect.php';
    
    if ($full_name!="" && $email!="" && $phone!="" && $registered_at){
        $query = "insert into visitors values('','$full_name','$email','$phone','$registered_at')";
        $result = mysqli_query($link, $query);
        echo 'submited';
    }
 else {
       echo 'please fill all field';  
    }
   
    
}
?>
</body>
</html>