<?php
session_start();  // Start the session
$_SESSION['confirmation'] = bin2hex(random_bytes(32));  
?>
<!DOCTYPE html>
<html>
<head>
    <title>Secure Form</title>
</head>
<body>
    <form method="POST" action="csfr_action.php">
        Username: <input type="text" name="username" /><br />
        Password: <input type="password" name="password" /><br />
        <input type="hidden" name="confirmation" value="<?php echo htmlspecialchars($_SESSION['confirmation']); ?>" />
        <input type="submit" value="Submit" />
    </form>
</body>
</html>

