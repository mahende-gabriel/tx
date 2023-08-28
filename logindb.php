<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'registration');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the email and password match in the users table
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($query);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        if ($password === $row['password']) {
            echo "Login successful!";
            header('location: content.html');
        } else {
            echo "Incorrect password.";
            header('location: login.html');
        }
    } else {
        echo "Email not found.";
        header('location: Registration.html');
    }

    $conn->close();
}
?>



