<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $message = 'Failure';
    if ($username == 'host' && $password == 'pass') {
        $message = 'Success';
    }
    echo "<div id='splash'>$message</div>";
}
?>
<form method="POST">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Submit">
</form>

