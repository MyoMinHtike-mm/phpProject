<?php

namespace Libs\Database;

$conn = mysqli_connect("localhost","root","","ppp");

// Check connection
if (!$conn) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  // exit();
}else{
    echo "connection is ok";
   

$sql = 'SELECT * FROM users';


// $insert = 'INSERT INTO users(name, email, phone, address, password, role_id, created_at) VALUES ("leno", "leno@gmail.com", "38433", "ygn", "ksjfg", 1, NOW())';

$result = mysqli_query($conn, $sql);



// $getdata = mysqli_fetch_all($result);
// $result = $mysqli->query("SELECT * FROM City", MYSQLI_USE_RESULT);
}

$name = "connection test";


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <div>
  

  
  </div>

  
</body>
</html>