<?php
if (isset($_POST['submit'])) {
    include('connect.php');
    $pnat = $_POST['pat'];
    $sym = $_POST['sym'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    include('nav.php');



    $sql = "INSERT INTO `appointment`(`id`, `pat`, `sym`,`date`,`time`,`user`) VALUES (null,'$pnat','$sym','$date','$time','$sess_mail')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
    alert('Appointment added Successfully');
    </script>";
        header('Location: ./mainPanel.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}