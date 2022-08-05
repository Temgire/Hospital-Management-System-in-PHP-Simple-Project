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

    <form action="added.php" class="form" method="post">
        <h1>Add Appointment</h1>
        
      
        <input type="text" name="pat" placeholder="Enter your Name" id="email" required>
        <textarea name="sym" id="sym" placeholder="Enter the Symptoms" cols="30" rows="10" required></textarea>
        <div>
        Enter Date
        <input type="date" name="date" placeholder="Enter Date" id="pwd" required>
        </div>
        <div>
        Enter Time
        <input type="time" name="time" placeholder="Enter Time" id="pwd" required>
        </div>
        <input type="submit" name="submit" value="Add" id="sub">
        
    </form> 
    
<footer>
          &copy; Hospital Management
      </footer>
</body>
</html>