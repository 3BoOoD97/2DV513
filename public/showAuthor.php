<!DOCTYPE html>
<html>
<head>
<link href="table.css" rel="stylesheet" type="text/css"/>
<title>Author List</title>
</head>

<body>

<table>
<th>ID</th>
<th>NAME</th>
<th>PHONE</th>
<th>Email</th>

  <?php
$host = "localhost:3307";
$user = "root";
$password = "root";
$dbName = "library";
$conn = mysqli_connect($host, $user, $password,$dbName);

$query = "SELECT * FROM author";
$result= mysqli_query($conn,$query);
if($result){
  while($row =mysqli_fetch_assoc($result)){
    echo "<tr><td>" . $row['auth_id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['phone'] . "</td><td>" . $row['email'] . "</td></tr>";
  }
}
?>
</body>
</html>
