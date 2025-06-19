
        <?php
       include 'connect.php';
       $query =" select * from project";
       $result = mysqli_query($link, $query);
       if($result){
           if(mysqli_num_rows($result)>0){
               
           
           echo "<table border='1'>";
           echo "<tr> <th>SN</th> <th>student_name</th>"
           . " <th>project_title </th> <th> comments</th>"
           . " <th> rating</th></tr>";
           while ($row= mysqli_fetch_array($result)){
               echo "<tr> <td>".$row['SN']."</td><td>".$row['student_name']."</td><td>".$row['project_title']."</td>"
                       . "<td>".$row['comments']."</td><td> ".$row['rating']."</td>"
               . "<tr>";
           }
           }
       }
        
        ?>
  
