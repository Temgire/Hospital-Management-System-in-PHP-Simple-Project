<?php
if (isset($_POST['submit'])) {
    include('connect.php');
    $mail = $_POST['email'];
    $pwd = $_POST['pwd'];
    include('nav.php');



    $sql = "INSERT INTO `user`(`id`, `mail`, `pwd`) VALUES (null,'$mail','$pwd')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['mail'] = $mail;
        echo "<script>
    alert('Account added Successfully');
    </script>";
        header('Location: ./mainPanel.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}