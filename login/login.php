<?php 
if( isset($_POST["submit"]) ) {
   if($_POST["username"] == "M.Zufar Sabiq" && $_POST["password"] == "medono") {
    header("Location: admin.php");
    exit;
   } else {
    $error = true;
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>Login SA</h1>

    <?php if( isset($error) ) : ?>
        <p style="color: red; font-style: italic;" text-decoration>username/password salah</p>
    <?php endif; ?>
  <ul>
    <form action="" method="post">
        <li>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Username</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <button type="submit" name="submit">Login</button>
        </li>
    </form>
  </ul>
</body>
</html>