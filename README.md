# Amazon Clone with Login/Logout and Account Creation

This project is an Amazon clone with basic functionalities such as user login, logout, and account creation. It is built using PHP and MySQL and runs on Apache server on port 81 with MySQL on port 3308.

## Table of Contents

- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Database Setup](#database-setup)
- [Project Structure](#project-structure)
- [Contributing](#contributing)

## Prerequisites

- Apache server running on port 81
- MySQL server running on port 3308
- PHP installed on your server
- phpMyAdmin to manage MySQL databases

## Installation

1. **Clone the Repository:**

    ```bash
    git clone https://github.com/your-username/amazon-clone.git
    cd amazon-clone
    ```

2. **Configure Apache and MySQL:**

   Ensure your Apache server is configured to run on port 81 and MySQL on port 3308. Modify the configuration files accordingly.

3. **Start Apache and MySQL Servers:**

    Start your Apache and MySQL servers. You can use XAMPP or any other server management tool that supports custom ports.

## Database Setup

1. **Create the Database:**

   Open phpMyAdmin and create a new database named `login_db`.

2. **Create Tables:**

   Execute the following SQL commands in phpMyAdmin to create the required tables:

    ```sql
    CREATE TABLE `users` (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `username` VARCHAR(50) NOT NULL,
        `password` VARCHAR(255) NOT NULL
    );

    CREATE TABLE `customers` (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `username` VARCHAR(50) NOT NULL,
        `password` VARCHAR(255) NOT NULL
    );
    ```

## Project Structure

```
amazon-clone/
├── db_conn.php
├── index.php
├── login.php
├── logout.php
├── register.php
├── styles.css
├── images/
├── favicon_io (3)/
└── README.md
```

- **db_conn.php:** Contains database connection settings.
- **index.php:** The main page after login.
- **login.php:** Handles user login.
- **logout.php:** Handles user logout.
- **register.php:** Handles new account creation.
- **styles.css:** Contains styles for the project.
- **images/:** Contains image assets.
- **favicon_io (3)/:** Contains favicon files.

## Usage

1. **Accessing the Project:**

   Open your browser and navigate to `http://localhost:81/amazon-clone`.

2. **Login:**

   Use the login form to authenticate. Ensure you have added a user to the `users` table.

3. **Register:**

   Use the registration form to create a new account. The details will be stored in the `customers` table.


## Contributing

Contributions are welcome! Please open an issue or submit a pull request with your changes.

