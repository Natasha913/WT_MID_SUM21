<?php
include 'db_config.php';

$query = "insert into users value (NULL,'Natasha','Natasha12','1234')";
echo execute($query);


$query = "select * form users";
$result = get($query);

echo "<table border = '1'>";
     echo"<tr>
            <th>ID</th><th>Name</th><th>Username</th>
            </tr>";

foreach($result as $row){
    echo "<tr>";
          echo"<td>".$row["id"]."</td>";
          echo"<td>".$row["name"]."</td>";
          echo"<td>".$row["username"]."</td>";
    echo "</tr>";      
}    
echo "</table>";

//include 'footer.php';
?>
