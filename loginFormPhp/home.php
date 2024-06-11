<?php 
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['username'])){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <style>
            body {
            font-family: 'Arial, sans-serif';
            background-color: #5f5f5f;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .logout-container {
            background-color: #dedee3;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        .login-container h1{
            font-weight: bold;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .logout-container a{
            text-decoration: none;
            background-color: #3498db;
            color: #fff;
            width: 100%;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .logout-container a:hover{
            background-color: #2980b9;
        }
        </style>
    </head>
    <body>
        <div class="logout-container">
        <h1>Hello, <?php echo $_SESSION['username']; ?></h1>
        <a href="logout.php">Logout</a>
        </div>
    </body>
    </html>
    <?php
}
else{
    header("Location: index.php");
    exit();
}

?>

