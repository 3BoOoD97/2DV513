<!DOCTYPE html>
<html>
<head>
<link href="table.css" rel="stylesheet" type="text/css"/>
<title>Borrower List</title>
</head>

<body>
<table>
<th>ID</th>
<th>NAME</th>
<th>BOOK TITLE</th>
<th>ISBN</th>
<th>BORROWE DATE</th>
<th>DUE DATE</th>

  <?php
$host = "localhost:3307";
$user = "root";
$password = "root";
$dbName = "library";
$conn = mysqli_connect($host, $user, $password,$dbName);

$query = "SELECT member.mem_id, member.name, book.title,borrow.isbnn, borrow.borrow_date, borrow.due_date
FROM member join borrow 
ON borrow.mem_id = member.mem_id /* Select the same IDs */
join book ON book.isbn= borrow.isbnn /* To get the book title */
order by member.mem_id";
$result= mysqli_query($conn,$query);
if($result){
  while($row =mysqli_fetch_assoc($result)){
    echo "<tr><td>" . $row['mem_id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['title'] . "</td><td>" . $row['isbnn'] . "</td><td> ". $row['borrow_date'] . "</td><td>". $row['due_date'] . "</td></tr>" ;
  }
}
?>
</body>
</html>
