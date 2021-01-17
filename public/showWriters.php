<!DOCTYPE html>
<html>
<head>
<link href="table.css" rel="stylesheet" type="text/css"/>
<title>Members List</title>
</head>

<body>
<table>
<th>AUTHOR ID</th>
<th>AUTHOR NAME</th>
<th>BOOK TITLE</th>
<th>ISBN</th>

  <?php
$host = "localhost:3307";
$user = "root";
$password = "root";
$dbName = "library";
$conn = mysqli_connect($host, $user, $password,$dbName);

$query = "SELECT author.auth_id, author.name, book.title, book.isbn
FROM author join writes
ON writes.auth_id = author.auth_id /* Select the same IDs */
join book ON book.isbn = writes.isbn /* To get the book title */
ORDER BY book.title;";
$result= mysqli_query($conn,$query);
if($result){
  while($row =mysqli_fetch_assoc($result)){
    echo "<tr><td>" . $row['auth_id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['title'] . "</td><td>" . $row['isbn'] . "</td></tr>";
  }
}
?>
</body>
</html>
