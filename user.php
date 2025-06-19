<!DOCTYPE html>
<html>
<head>
    <title>User Registration Form</title>
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(to right, #005baa, #ffffff);
        padding: 30px;
    }
    h2 {
        color: #003366;
    }
    form {
        background: #f2f2f2;
        padding: 20px;
        border-radius: 10px;
        width: 400px;
        margin: auto;
    }
    input, select {
        width: 100%;
        padding: 10px;
        margin-top: 8px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
    input[type="submit"] {
        background-color: #005baa;
        color: white;
        font-weight: bold;
        cursor: pointer;
        border: none;
    }
    input[type="submit"]:hover {
        background-color: #003f7f;
    }
    #message {
        text-align: center;
        color: green;
        font-weight: bold;
        margin-top: 15px;
    }
</style>


<body>
    <h2>User Registration</h2>
    <form action="" method="post">
        Full Name: <input type="text" name="full_name" ><br><br>
        Email: <input type="email" name="email" ><br><br>
        Password: <input type="password" name="password" ><br><br>
        Role:
        <select name="role" >
            <option value="student">Student</option>
            <option value="teacher">Teacher</option>
            <option value="admin">Admin</option>
        </select><br><br>
        Phone: <input type="text" name="phone"><br><br>
        date: <input type="datetime-local" name="created_at"> <br> <br>
        <input type="submit" name="send" value="Register">
    </form>
<?php
if(isset($_POST['send'])){
    include 'connect.php';
    $full_name=$_POST['full_name'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $role= $_POST['role'];
    $phone=$_POST['phone'];
    $created_at=$_POST['created_at'];
    if($full_name!="" && $email!="" && $password!="" && $role!="" && $phone!="" && $created_at!=""){
        $query="INSERT INTO users VALUES ('','$full_name','$email',sha1('$password'),'$role','$phone','$created_at')";
        $result= mysqli_query($link, $query);
        echo 'Registered';
    }
 else {
        echo ' please fill all field';    
    }
    
}

?>
</body>
</html>


