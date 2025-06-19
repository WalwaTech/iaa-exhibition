
<style>
  table {
    width: 80%;
    margin: 40px auto;
    border-collapse: collapse;
    font-family: Arial, sans-serif;
  }

  th, td {
    padding: 12px 15px;
    border: 1px solid #ccc;
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
    background-color: #d0e7ff;
  }

  caption {
    caption-side: top;
    text-align: center;
    padding: 10px;
    font-size: 1.4em;
    font-weight: bold;
    color: #003366;
  }
</style>



        <?php
        
        include 'connect.php';
        $query =" SELECT * FROM title ";
        $result= mysqli_query($link, $query);
        if($result){
            if(mysqli_num_rows($result)>0){
              
                echo "<table border='1'>";
                echo "<tr><th colspan='3px' ><h2>Student Exhibition Titles</h2></th<tr>";
                echo "<tr><th>S/N</th> <th>title </th> <th>message </th></tr>";
                while ($row= mysqli_fetch_array($result)){
                    echo "<tr><td>".$row['ID']."</td> <td>".$row['title']."</td> <td>".$row['message']."</td></tr>";
                }
            }
        }
        ?>
   
