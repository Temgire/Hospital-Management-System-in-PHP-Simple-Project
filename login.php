<?php
if (isset($_POST['submit'])) {

    session_start();


    $mail = $_POST['email'];
    $pass = $_POST['pwd'];
    include('connect.php');
    $password = $pass;

    $sql =  "SELECT * FROM user WHERE mail='$mail'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['mail'] === $mail && $row['pwd'] === $password) {
            $_SESSION['mail'] = $mail;
            header('Location: ./mainPanel.php');
        } else {
            header('Location: ./patientlogin.php?error=Incorrect Password or Mail');
            exit();
        }
    } else {
        header('Location: ./patientlogin.php?error=Mail is not Registred');
        exit();
    }
} else {
    // header('Location: ./cont.php');
    echo "Not posible dude";
}