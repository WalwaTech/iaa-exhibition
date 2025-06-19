
<!DOCTYPE html>
<html>
<head>
  <title>Rate a Project</title>
  <link rel="stylesheet" href="style.css">
</head>
<style>
body {
  font-family: Arial, sans-serif;
  background: #eef5fb;
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
input[type="number"],
input[type="datetime-local"],
textarea {
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
    <h2>Project Rating Form</h2>
    <form method="post">
      <label for="visitor_id">Visitor ID:</label>
      <input type="number" id="visitor_id" name="visitor_id" >

      <label for="project_id">Project ID:</label>
      <input type="number" id="project_id" name="project_id" >

      <label for="rating">Rating (1-10):</label>
      <input type="number" id="rating" name="rating" min="1" max="10" >

      <label for="comments">Comments:</label>
      <textarea id="comments" name="comments" rows="4" ></textarea>

      <label for="submitted_at">Submitted Date:</label>
      <input type="date" id="submitted_at" name="submitted_at" >

      <input type="submit" value="Submit Rating" name="send">
    </form>
  </div>
<?php
if(isset($_POST['send'])){
   
    $visitor_id=$_POST['visitor_id'];
    $project_id=$_POST['project_id'];
    $rating=$_POST['rating'];
    $comments=$_POST['comments'];
    $submitted_at=$_POST['submitted_at'];
     include 'connect.php';
   if($visitor_id!="" && $project_id!="" && $rating!="" && $comments!="" && $submitted_at!=""){
       $query= " insert into ratings values('','$visitor_id','$project_id','$rating','$comments','$submitted_at') ";
       $result = mysqli_query($link, $query);
       echo 'submited';
   }
 else {
       echo 'please fill all please';    
   }
   
}
?>
</body>
</html>

