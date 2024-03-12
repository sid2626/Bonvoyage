<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle signup logic here
    $username = $_POST['username']; // Assuming you are sending 'username' from Angular
    $password = $_POST['password']; // Assuming you are sending 'password' from Angular

    // Add your registration logic here
    // Example: Insert the user into a database
    // Note: Always use prepared statements to prevent SQL injection
    // Example: $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
    // For simplicity, we'll just echo success
    echo json_encode(['success' => true]);
} else {
    // Redirect to login page if accessed directly without POST request
    header('Location: index.php');
    exit();
}
?>
