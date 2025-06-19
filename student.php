
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Student Dashboard - IAA Exhibition</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #eaf2f8;
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
      box-shadow: 0 1px 4px rgba(0,0,0,0.1);
    }

    input, textarea, select {
      width: 100%;
      padding: 10px;
      margin-top: 8px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    button {
      margin-top: 10px;
      padding: 10px 20px;
      background-color: #005baa;
color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #003f7f;
    }

    .success {
      color: green;
      font-weight: bold;
    }
  </style>
</head>
<body>

<header>
  <h1>Student Dashboard - IAA Exhibition 2025</h1>
</header>

<nav>
  <a href="#">Submit Title</a>
  <a href="#">My Exhibitions</a>
  <a href="#">Feedback</a>
  <a href="logout.php">Logout</a>
</nav>

<div class="container">

  <!-- Submit Title -->
  <div class="card">
    <h2>Submit Exhibition Title</h2>
    <form method="post" onsubmit="submitTitle(event)" >
      <label>Project Title:</label>
      <input type="text" name="title" >

      <label>Description:</label>
      <textarea name="message" ></textarea>

      <button type="submit" name="send">Submit</button>
      <p id="msg" class="success"></p>
    </form>
  </div>

  <!-- View Status -->
  <div class="card">
    <h2>My Exhibition Titles</h2>
    <ul>
      <li>AI Attendance System – <strong>Status: Approved</strong></li>
      <li>Stock Tracker – <strong>Status: Pending</strong></li>
    </ul>
  </div>

  <!-- Feedback -->
  <div class="card">
    <h2>Feedback</h2>
    <p><strong>AI Attendance:</strong> Excellent presentation and real-life application.</p>
<p><strong>Stock Tracker:</strong> Please add a feature for real-time charts.</p>
  </div>
</div>


<?php
if(isset($_POST['send'])){
    include 'connect.php';
    $title=$_POST['title'];
    $message=$_POST['message'];
    if($title!="" && $message!=""){
        $query="insert into title values('','$title','$message')";
        $result= mysqli_query($link, $query);
    }
 else {
        echo 'please fill all please';
    }
}
?>
</body>
</html>

