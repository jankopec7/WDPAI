<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="/public/css/register.css">
    <title>Register</title>
</head>
<body>
<div class="logo">
    <h1>
        <img src="/public/img/Logo.png"></img>
    </h1>
</div>
<div class="login-form">
    <form class="login" action="register" method="POST">
        <input name="nickname" type="text" placeholder="Nickname">
        <input name="email" type="text" placeholder="Email">
        <input name="password" type="password" placeholder="Password">
        <input name="confirmPassword" type="password" placeholder="Repeat password">
        <button class="button_1" type="submit" id="register">Register</button>
        <a href="/login">Back</a>
        <p style="color: red; font-size: 21px; font-weight: bold">
            <?php
            if(isset($messages)){
                foreach($messages as $message) {
                    echo $message;
                }
            }
            ?>
        </p>
    </form>
</div>
</body>
</html>