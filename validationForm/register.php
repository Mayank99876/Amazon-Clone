<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'login_db';
$port = "3308";

$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME,$port);

if (mysqli_connect_error()) {
    exit('Error connecting to the database: ' . mysqli_connect_error());
}

if (isset($_POST['username'], $_POST['password'], $_POST['email'])) {
    if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
        exit('Empty field(s)');
    }
} else {
    exit('Values empty.');
}

if ($stmt = $conn->prepare('SELECT id, password FROM customers WHERE username = ?')) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "Username already exists. Try Again!";
    } else {
        if ($stmt = $conn->prepare('INSERT INTO customers (username, password, email) VALUES (?, ?, ?)')) {
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
            $stmt->execute();
            echo 'Successfully registered';
        } else {
            echo 'Error Occurred.';
        }
    }

    $stmt->close();
} else {
    echo 'Error Occurred.';
}

$conn->close();
?>
