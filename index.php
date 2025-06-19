
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>IAA Exhibition</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f9ff;
      color: #003366;
    }

    header {
      background-color: #005baa;
      color: white;
      padding: 30px 20px;
      text-align: center;
    }

    nav {
      background-color: #003366;
      overflow: hidden;
    }

    nav ul {
      margin: 0;
      padding: 0;
      list-style-type: none;
      display: flex;
      justify-content: center;
    }

    nav ul li {
      margin: 0 15px;
    }

    nav ul li a {
      display: block;
      color: white;
      text-decoration: none;
      padding: 14px 20px;
      font-weight: bold;
    }

    nav ul li a:hover {
      background-color: #005baa;
      border-radius: 4px;
    }

    .content {
      text-align: center;
      padding: 50px 20px;
    }

    .content img {
      width: 80%;
      max-width: 600px;
animation: moveImage 5s infinite alternate;
    }

    @keyframes moveImage {
      0% { transform: translateY(0); }
      100% { transform: translateY(-15px); }
    }

    .content button {
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #005baa;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .content button:hover {
      background-color: #003f7f;
    }

    footer {
      background-color: #003366;
      color: white;
      text-align: center;
      padding: 15px;
      margin-top: 40px;
    }
  </style>
</head>
<body>

<header>
    <img src="logo (2).jpg" alt="IAA Logo" style="height: 60px; vertical-align: middle; border-radius: 10px;">
  <h1 style="display: inline-block; margin-left: 15px;">IAA EXHIBITION 2025</h1>
  <p>Innovate • Advance • Achieve</p>
</header>

  <nav>
    <ul>
        <li><a href="index.php">Home</a></li>
      <li><a href="users.php">Register</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="about.php">About</a></li>
    </ul>
  </nav>

  <section class="content">
    <h2>Welcome to IAA Technology Exhibition</h2>
    <p>Explore innovations by IAA students and professionals.</p>
    <img src="" alt="Exhibition Image" />
    <br>
    <button onclick="learnMore()">Learn More</button>
  </section>

  <footer>
    <p>© 2025 Institute of Accountancy Arusha | All rights reserved.</p>
  </footer>
<script>
    function learnMore() {
      alert("Thank you for your interest! Visit our booths to learn more.");
    }
  </script>
</body>
</html>