<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management</title>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="table.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>
<body>
    <?php
      include 'nav.php';
      include('connect.php');
    ?>
<h1 class="app">Your Appointments</h1>
<table id="customers">
  <tr>
    <th>Date</th>
    <th>Time</th>
    <th>Patient's Name</th>
    <th>Symptoms</th>
  </tr>
<?php

$records = mysqli_query($conn, "select * from appointment where `user`='$sess_mail'"); // fetch data from database

while ($data = mysqli_fetch_array($records)) {
    $date = $data['date'];
    $time = $data['time'];
    $pat = $data['pat'];
    $sym = $data['sym'];

?>

<tr>
    <td><?php echo $date ?></td>
    <td><?php echo $time ?></td>
    <td><?php echo $pat ?></td>
    <td><?php echo $sym ?></td>

  </tr>
<?php
}
?>
</table>

<a class="a" href="./addAppointment.php">
    <button>
        Add Appointment
    </button>
</a>


<footer>
          &copy; Hospital Management
      </footer>
</body>
</html>