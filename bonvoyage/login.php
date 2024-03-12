<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle login logic here
    $username = $_POST['username']; // Assuming you are sending 'username' from Angular
    $password = $_POST['password']; // Assuming you are sending 'password' from Angular

    // Add your authentication logic here
    // Example: Check the credentials against a database
    if ($username === 'your_valid_username' && $password === 'your_valid_password') {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['error' => 'Invalid username or password']);
    }
} else {
    // Redirect to login page if accessed directly without POST request
    header('Location: index.php');
    exit();
}
?>
