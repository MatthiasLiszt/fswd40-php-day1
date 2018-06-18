<html>
<body>
<?php
  
  $servername = "localhost";
  $username="root";
  $pw="";
  $dbname="cr09_matthias_liszt_carrental";
  $connect = mysqli_connect($servername,$username,$pw,$dbname); // opens database

  $sql="SELECT userId, name, surname,birthday FROM user";
  $result = mysqli_query($connect, $sql);

  if (!$connect) {
    die("connection failed: " . mysqli_connect_error());
  }
  echo "connected to database";

  if($connect){

   echo "<table><th>userId</th><th>name</th><th>surname</th><th>birthday</th>";
   if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["userId"]."</td><td>".$row["name"]."</td><td>".$row["surname"]."</td><td>".$row["birthday"]."</td></tr>";
    }
    echo "</table>";
   } 
  }

  mysqli_close($connect); //closes database

?>

</body>
</html> 