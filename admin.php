
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Dashboard - IAA Exhibition</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #f0f4f8;
    }

    header {
      background-color: #003366;
      color: white;
      padding: 20px;
      text-align: center;
    }

    .sidebar {
      width: 220px;
      background-color: #005baa;
      height: 100vh;
      position: fixed;
      top: 70px;
      left: 0;
      padding-top: 30px;
      color: white;
    }

    .sidebar a {
      display: block;
      color: white;
      padding: 15px;
      text-decoration: none;
      font-weight: bold;
    }

    .sidebar a:hover {
      background-color: #003f7f;
    }

    .main {
      margin-left: 240px;
      padding: 20px;
    }

    .card {
      background: white;
      padding: 20px;
      border-radius: 8px;
      margin-bottom: 20px;
      box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
    }

    h2 {
      color: #003366;
    }

    .icon {
      font-size: 24px;

margin-right: 10px;
    }
  </style>
</head>
<body>

  <header>
    <h1>IAA Exhibition Admin Dashboard</h1>
  </header>

 <div class="sidebar">
     <a href="users.php"><span class="icon">👥</span> Register New Users</a>
     <a href="selt.php"><span class="icon">🛠</span> Manage Users</a>
     <a href="studen.php"><span class="icon">📄</span> View Exhibition Titles</a>
     <a href="lectur.php"><span class="icon">💬</span> Evaluate Projects</a>
  <a href="logout.php"><span class="icon">🚪</span> Logout</a>
</div>

  <div class="main">
    <div class="card">
      <h2>Welcome, Admin!</h2>
      <p>Use the left menu to manage users, view exhibition content, and respond to feedback.</p>
    </div>

    <div class="card">
      <h2>Quick Tips</h2>
      <ul>
        <li>Keep user data updated.</li>
        <li>Review feedback regularly.</li>
        <li>Approve project titles submitted by students.</li>
      </ul>
    </div>
  </div>

</body>
</html>
