
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    padding: 20px;
  }

  table {
    width: 90%;
    margin: auto;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }

  th, td {
    padding: 12px 15px;
    border: 1px solid #ddd;
    text-align: left;
  }

  th {
    background-color: #005baa;
    color: white;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  tr:hover {
    background-color: #e9f1ff;
  }

  a {
    color: red;
    font-weight: bold;
    text-decoration: none;
  }

  a:hover {
    text-decoration: underline;
  }
</style>

<?php
include 'connect.php';
$query="SELECT * FROM USER ";
$result = mysqli_query($link, $query);
if($result){
    if(mysqli_num_rows($result)>0){
        echo "<table border='1'>";
        echo "<tr><th> S/N</th> <th> username</th> <th>password</th> <th>role</th> <th> delete</th></tr>";
        while ($row= mysqli_fetch_array($result)){
            echo "<tr><td>".$row['ID']."</td> <td>".$row['username']."</td> <td>".$row['password']."</td>"
                    . "<td>".$row['role']."</td>"
                    . " <td><a href='delete.php?ID=".$row['ID']."' onclick=\"return "
                    . "confirm('Are you sure you want to delete this record');\"> remove</a></td></tr>";
        }
    }
}
?>
