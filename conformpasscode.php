<!--Display form to set new password  -->
<?php
// Database connection
$conn = new mysqli('localhost', 'root', 'password', 'hoteltbl');

// Get token from URL
if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Check if token exists in the password_resets table
    $result = $conn->query("SELECT * FROM password_resets WHERE token='$token'");
    if ($result->num_rows > 0) {
        // If valid token, show the password reset form
        ?>
        <form action="reset_password.php" method="POST">
            <input type="hidden" name="token" value="<?php echo $token; ?>">
            <input type="password" name="new_password" placeholder="Enter new password" required>
            <button type="submit">Reset Password</button>
        </form>
        <?php
    } else {
        echo "Invalid token!";
    }
}
?>
