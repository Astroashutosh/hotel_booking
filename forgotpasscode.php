<!-- Generate token and send email -->
<?php
$conn = new mysqli('localhost', 'root', '', 'hoteltbl');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $result = $conn->query("SELECT * FROM signuptbl");
    if ($result->num_rows > 0) {
        $token = bin2hex(random_bytes(50));
        $conn->query("INSERT INTO password_resets (email, token) VALUES ('$email', '$token')");
        $resetLink = "http://yourdomain.com/reset_password.php?token=" . $token;
        mail($email, "Password Reset", "Reset your password: $resetLink", "From: no-reply@yourdomain.com");
        echo "Password reset link sent!";
    } else
    {
      echo "Email not found!";
    } 
}
?>