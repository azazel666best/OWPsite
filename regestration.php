<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>LOGOTIP</title>
    <link rel="stylesheet" href="style/regestration-autorisation.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="container">
    <div class="text-container">
        <p><strong>Regestration</strong></p>
    </div>
    <a href="autorisation.php"><img src="imag/log-in.png">
        <p>Log in</p></a>
</div>
<form action="save_user.php" method="POST">
    <input type="text" name="login" placeholder="Login">
    <input type="text" name="password" placeholder="Password">
    <input type="text" name="confirm" placeholder="Confirm password">
    <button type="submit">Register</button>
</form>
</body>
</html>