<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylelog.css" type="text/css" />
</head>

<body>
    <div class="first">
        <h1> Registration</h1>
    </div>
    <form method="post" action="register.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <input type="text" name="username" placeholder="username" value="<?php echo $username; ?>">
        </div>

        <div class="input-group">
            <input type="email" name="email" placeholder="email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
            <input type="password" name="password_1" placeholder="password">
        </div>
        <div class="input-group">
            <input type="password" name="password_2" placeholder="confirm password">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Register</button>
        </div>
        <p>
            Have an account? <a href="login.php">Sign in</a>
        </p>
    </form>
</body>

</html>