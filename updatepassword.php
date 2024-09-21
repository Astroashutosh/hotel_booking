<!-- Update new password -->
<?php
// Database connection
$conn = new mysqli('localhost', 'root', 'password', 'hoteltbl');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = $_POST['token'];
    $new_password = password_hash($_POST['new_password'], PASSWORD_BCRYPT);

    // Get email associated with the token
    $result = $conn->query("SELECT email FROM password_resets WHERE token='$token'");
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $email = $row['email'];

        // Update password in users table
        $conn->query("UPDATE users SET password='$new_password' WHERE email='$email'");

        // Delete the token from password_resets table
        $conn->query("DELETE FROM password_resets WHERE token='$token'");

        echo "Password has been updated!";
    } else {
        echo "Invalid token!";
    }
}
?>