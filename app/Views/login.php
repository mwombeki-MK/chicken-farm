<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
    <?php 
        if (session()->has('msg_error')) {

            echo "<h2 style='color:red'>" . session('msg_error') . "</h2>";
        }
    ?>
    <form action="<?= base_url('user_login') ?>" method="post">
        <label for="">Username</label>
        <input type="text" name="username" placeholder="Enter username" value="<?= esc(old('username')) ?>"> <br>
        <label for="">Password</label>
        <input type="password" name="password" placeholder="Enter password" value="<?= esc(old('password')) ?>">
        <input type="submit" value="Login">
    </form>
</body>
</html>