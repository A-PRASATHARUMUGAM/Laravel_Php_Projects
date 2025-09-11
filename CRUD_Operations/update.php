<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php

    require "db.php";

    if (!isset($_GET['id']) || empty($_GET['id'])) {
        die("Error: No ID provided.");
    }
    $id = intval($_GET['id']);


    if (isset($_POST["update"])) {
        $name  = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);

        $sql = "UPDATE users SET name='$name' , email= '$email' WHERE id=$id";


        if (mysqli_query($conn, $sql)) {
            header("Location: read.php");
            exit();
        } else {
            die("Error" . mysqli_error($conn));
        }
    }

    $sql = "SELECT *FROM users WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        die("Error: Record not found.");
    }

    ?>


    <form method="POST">
        Name: <input type="text" name="name" placeholder="Enter the name  "
            value="<?php echo htmlspecialchars($row['name']); ?>"
            required><br><br>

        Email: <input type="email" name="email" placeholder="Enter the email "
            value="<?php echo htmlspecialchars($row['email']); ?>"
            required><br><br>
        <button type="submit" name="update">Update</button>
    </form>
</body>

</html>

