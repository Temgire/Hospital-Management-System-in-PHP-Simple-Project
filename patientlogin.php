<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management</title>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>
<body>
    <?php
      include 'nav.php';
    ?>

    <form action="login.php" class="form" method="post">
        <h1>Login</h1>
        
        <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
        <input type="email" name="email" placeholder="Enter your Email" id="email" required>
        <input type="password" name="pwd" placeholder="Enter your Password" id="pwd" required>
        <input type="submit" name="submit" value="Login" id="sub">
        <div class="txt">New User? <a href="./register.php">Create Account.</a></div>
    </form> 
    
<footer>
          &copy; Hospital Management
      </footer>
</body>
</html>