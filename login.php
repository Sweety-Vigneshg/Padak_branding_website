<!-- login.php -->
<?php
if ($_POST) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if (Auth::login($email, $password)) {
        header('Location: dashboard.php');
        exit;
    } else {
        $error = "Invalid email or password";
    }
}
?>

<!-- Login Form with Tailwind CSS -->