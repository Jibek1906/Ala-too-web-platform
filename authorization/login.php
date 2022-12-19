<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Log in</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylelog.css" type="text/css" />
</head>

<body>
    <h1>Log in</h1>

    <form method="post" action="login.php">
        <?php include('errors.php'); ?>

        <div class="input-group">
            <input type="text" name="email" placeholder="email">
        </div>

        <div class="input-group">
            <input type="password" name="password" placeholder="password">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login_user">Login</button>
        </div>
        <p><strong>
                Not yet a member? <a href="register.php">Sign up</a>
            </strong></p>
    </form>
</body>

</html>