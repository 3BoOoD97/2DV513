<!DOCTYPE html>
<html>
<head>
<title>Wrote By</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<form action= "write.php" method = "post">
<input type="text" placeholder="Author ID" name="auth_id"><br><br>
<input type="text" placeholder="ISBN" name="isbn"><br><br>
  <input type="submit"  name="send"></a>
</form>

<a href="showWriters.php"  class="button button1">Writers List</a>

<?php
$host = "localhost:3307";
$user = "root";
$password = "root";
$dbName = "library";
$conn = mysqli_connect($host, $user, $password,$dbName);

$AuthID = $_POST['auth_id'];
$Isbn = $_POST['isbn'];
$Send = $_POST['send'];

  if($Send){
    $query = "INSERT INTO writes(auth_id,isbn)VALUE('$AuthID','$Isbn')";
    $result = mysqli_query($conn,$query);
}
?>
</body>
</html>