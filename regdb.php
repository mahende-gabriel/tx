<?php
if (isset($_POST['register'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    // Perform email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
    } else if ($password !== $confirmPassword) {
        echo "Passwords do not match.";
    } else {
        // Database connection
        $conn = new mysqli('localhost', 'root', '', 'registration');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if the email already exists
        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            echo "Email already exists. Please use a different email.";
            header('location: Registration.html');
        } else {
            // Insert user data into the database
            $insertQuery = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";
            if ($conn->query($insertQuery) === TRUE) {
                echo "Registration successful!";
                header('location: login.html');
            } else {
                echo "Error: " . $insertQuery . "<br>" . $conn->error;
            }
        }

        $conn->close();
    }
}
?>
