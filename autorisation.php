<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>LOGOTIP</title>
    <link rel="stylesheet" href="style/regestration-autorisation.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="log-in-container">
    <p><strong>Log in</strong></p>
    <p>
        If you don't have an account, <a href="regestration.php">register</a>
    </p>
</div>
<form action="check_user.php" method="POST">
    <input type="text" name="login" placeholder="Login">
    <input type="text" name="password" placeholder="Password">
    <button type="submit">Log in</button>
</form>

</body>
</html>