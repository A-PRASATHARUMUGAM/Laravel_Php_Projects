<?php
require 'db.php';

$sql = "SELECT * FROM users ORDER BY id";
$result = mysqli_query($conn, $sql);


echo "<h2> User List </h2>";

echo "<table border='1' cellpadding='10'> 
<tr><th>ID</th><th>Name</th><th>Email</th><th>Action</th></tr>";


while ($row = mysqli_fetch_assoc($result)) {


    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>
                <a href='update.php? id={$row['id']}'>Edit</a> |
                <a href='delete.php? id={$row['id']}'>Delete</a>
            </td>
          </tr>";
}
?>


<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1> <a href="create.php"><button>Back</button></a> </h1>
</body>

</html>