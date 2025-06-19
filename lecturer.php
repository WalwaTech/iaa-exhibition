
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Lecturer Dashboard - IAA Exhibition</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #eef4fb;
    }

    header {
      background-color: #003366;
      color: white;
      padding: 20px;
      text-align: center;
    }

    nav {
      background-color: #005baa;
      padding: 15px;
      display: flex;
      justify-content: space-around;
    }

    nav a {
      color: white;
      text-decoration: none;
      font-weight: bold;
    }

    nav a:hover {
      text-decoration: underline;
    }

    .container {
      padding: 20px;
    }

    .card {
      background: white;
      padding: 20px;
      border-radius: 8px;
      margin-bottom: 20px;
      box-shadow: 0 1px 5px rgba(0,0,0,0.1);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }

    th, td {
      padding: 10px;
      border: 1px solid #ccc;
    }

    input[type="text"], textarea {
      width: 100%;
      padding: 8px;
      margin-top: 6px;
border-radius: 4px;
      border: 1px solid #ccc;
    }

    button {
      margin-top: 10px;
      padding: 8px 16px;
      background-color: #005baa;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #003f7f;
    }

    .success {
      color: green;
    }
  </style>
</head>
<body>

<header>
  <h1>Lecturer Dashboard - IAA Exhibition</h1>
</header>

<nav>
    <a href="studen.php">View Student Exhibitions</a>
    <a href="lecturer.php">Evaluate Projects</a>
  <a href="logout.php">Logout</a>
</nav>

<div class="container">

  <!-- View Student Exhibitions -->
  <div class="card">
        
      <form method="post">
      <label>Student Name:</label>
      <input type="text" name="student_name" required>

      <label>Project Title:</label>
      <input type="text" name="project_title" required>

      <label>Comments:</label>
      <textarea required name="comments"></textarea>

      <label>Rating (1 to 5):</label>
      <input type="text" name="rating" required>

      <button type="submit" name="send">Submit Evaluation</button>
      <p id="evalMsg" class="success"></p>
    </form>
  </div>

  <!-- Track Progress -->
  <div class="card">
    <h2>Track Student Progress</h2>
    <ul>
      <li>Anna Paul – Progress: 80%</li>
      <li>John Kim – Progress: 60%</li>
    </ul>
  </div>

</div>

<?php
if(isset($_POST['send'])){
    $student_name=$_POST['student_name'];
    $project_title=$_POST['project_title'];
    $comments = $_POST['comments'];
    $rating=$_POST['rating'];
    include 'connect.php';
    
    $query= "insert into project values('','$student_name','$project_title','$comments','$rating')";
    $result = mysqli_query($link, $query);
}
?>

</body>
</html>

