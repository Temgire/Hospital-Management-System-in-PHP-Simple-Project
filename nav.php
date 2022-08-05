<?php
error_reporting(0);
session_start();

if (isset($_SESSION['mail'])) {
    $sess_mail = $_SESSION['mail'];
?>

<nav>
        <a href="index.php">
            <h1 class="logo">
                Hospital Management
            </h1>
        </a>
        <div class="links">
            <a href="" class="link">Home</a>
            <a target="_blank" href="https://www.gpawasari.ac.in/" class="link">About</a>
            <a href="./mainPanel.php" class="link">Hello, <?php echo $sess_mail ?></a>
            <a href="./logout.php" class="link">Logout</a>
        </div>
</nav>

<?php
} else {
?>

<nav>
        <a href="index.php">
            <h1 class="logo">
                Hospital Management
            </h1>
        </a>
        <div class="links">
            <a href="" class="link">Home</a>
            <a target="_blank" href="https://www.gpawasari.ac.in/" class="link">About</a>
            <a href="./patientlogin.php" class="link">Login</a>
            <a href="./register.php" class="link">Signup</a>
        </div>
</nav>

<?php
}
?>