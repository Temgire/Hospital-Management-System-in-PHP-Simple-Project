<?php
if (isset($_POST['submit'])) {
    $pwd = $_POST['pwd'];

    if ($pwd === 'Shikamaru') {
        header('Location: ./viewAppointments.php');
    } else {
        echo "<script> alert('Incorrect Password..!!'); </script>";
    }
}

?>