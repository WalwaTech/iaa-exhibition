
<!DOCTYPE html>
<html>
<head>
  <title>Project Submission</title>
  <link rel="stylesheet" href="style.css">
  <style>
     

body {
  font-family: Arial, sans-serif;
  background: #f2f9ff;
  padding: 20px;
}

.form-container {
width: 450px;
  margin: auto;
  background: #ffffff;
  padding: 25px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

h2 {
  text-align: center;
  color: #005baa;
}

label {
  display: block;
  margin-top: 12px;
  font-weight: bold;
}

input[type="number"],
input[type="text"],
textarea {
  width: 100%;
  padding: 8px;
  margin-top: 6px;
  border-radius: 4px;
  border: 1px solid #ccc;
}

input[type="submit"] {
  margin-top: 20px;
  width: 100%;
  padding: 10px;
  background: #005baa;
  color: white;
  border: none;
  border-radius: 5px;
  font-weight: bold;
}

input[type="submit"]:hover {
  background: #003f7f;
}
 
      
  </style>
</head>
<body>

  <div class="form-container">
    <h2>Project Submission Form</h2>
    <form  method="post">
      <label for="project_title">Project Title:</label>
      <input type="text" id="project_title" name="title" >
      <label for="user_id">user_id:</label>
      <input type="number" id="presenter_name" name="user_id" >
      <label for="category">Category:</label>
      <input type="text" id="category" name="category" >
      <label for="description">Description:</label>
      <textarea id="description" name="description" rows="4" ></textarea>
      <label for="date">date</label>
      <input type="datetime-local" id="date" name="created_at">
      <input type="submit" value="Submit Project" name="send">
    </form>
  </div>
<?php
if (isset($_POST['send'])){
    $title=$_POST['title'];
    $user_id=$_POST['user_id'];
    $category=$_POST['category'];
    $description=$_POST['description'];
    $created_at=$_POST['created_at'];
    include 'connect.php';
    if ($title!="" && $user_id!="" && $category!="" && $description!="" && $created_at!=""){
        $query = " insert into projects values('','$title','$user_id','$category','$description','$created_at')";
        $result = mysqli_query($link, $query);
        echo 'submited';
    }
 else {
        echo 'please fill all fields';    
    }
}
?>
</body>
</html>

