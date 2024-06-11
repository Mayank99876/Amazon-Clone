<?php 
session_start();

include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if (empty($username)) {
        header("Location: index.php?error=Username is required.");
        exit();
    } else if (empty($password)) {
        header("Location: index.php?error=Password is required.");
        exit();
    }

    // Use a prepared statement to prevent SQL injection
    $sql = "SELECT * FROM `users` WHERE `username`=? AND `password`=?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $username, $password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) >0) {
            $row = mysqli_fetch_assoc($result);

            // It's recommended to hash and verify passwords for security
            // You should also store hashed passwords in the database
            // For simplicity, I'm comparing plain text passwords here, but this is not secure
            if ($row['username'] === $username && $row['password'] === $password) {
                echo "Logged In!";
                $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: ../index.php");
                exit();
            } else {
                header("Location: index.php?error=Incorrect username and password");
                exit();
            }
        } else {
            header("Location: index.php?error=Incorrect username and password");
            exit();
        }
    } else {
        header("Location: index.php?error=Database error. Please try again later.");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>
