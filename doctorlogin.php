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

    <form action="docback.php" class="form" method="post">
        <h1>Doctor Login</h1>
        <input type="password" name="pwd" placeholder="Enter your Password" id="pwd" required>
        <input name="submit" type="submit" value="Login" id="sub">
    </form> 
    
<footer>
          &copy; Hospital Management
      </footer>
</body>
</html>