<!DOCTYPE html>
<html>
<head>
<title>Add Book</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css"/>

</head>
<body>

<form action= "book.php" method = "post" >
  <input type="text" placeholder="Book Title" name="title"><br><br>
  <input type="text" placeholder="ISBN" name="isbn"><br><br>
  <input placeholder="Release Date" type="text" onfocus="(this.type='date')" id="date" name="release_date"><br><br>
  <input type="submit"   name="send"></a>
</form>

<a href="showBooks.php"  class="button button1">Books List</a>

<?php
$host = "localhost:3307";
$user = "root";
$password = "root";
$dbName = "library";
$conn = mysqli_connect($host, $user, $password,$dbName);

$Title = $_POST['title'];
$Isbn = $_POST['isbn'];
$Release_date = $_POST['release_date'];
$Send = $_POST['send'];

  if($Send){
$query = "INSERT INTO book(isbn,title,release_date)VALUE('$Isbn','$Title','$Release_date')";
$result = mysqli_query($conn,$query);
}
?>
</body>
</html>