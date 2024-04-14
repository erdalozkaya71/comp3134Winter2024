<?php
session_start();  // Start the session

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $token = $_POST['confirmation'];  // Retrieve the token from POST data

    $message = 'Failure';
    if ($username == 'host' && $password == 'pass' && $token == $_SESSION['confirmation']) {
        $message = 'Success';
    }
    echo "<div id='splash'>$message</div>";
}
?>
<form method="POST">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="hidden" name="confirmation" value="<?php echo $_SESSION['confirmation']; ?>">
    <input type="submit" value="Submit">
</form>
