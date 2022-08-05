<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management</title>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>
<body>
    <?php
      include 'nav.php';
    ?>
    
    <main>
        <img src="./img/hospital.jpg" width="1200" alt="">
        <h1 class="main-head">
            Mission Of Our Hospital:
        </h1>
        <blockquote class="mission">
            To inspire hope and contribute to health and well-being by providing the best care to every patient through integrated clinical practice, education and research
        </blockquote>
    </main>

    <section>
        <div class="main-title">Important Links</div>
        <ul class="links">
          <a href="./patientlogin.php">
            <li>
              <img src="./img/patient.png" alt="login" width="50" />
              Patient Login
            </li>
          </a>
          <a href="./doctorlogin.php">
            <li>
              <img
                src="./img/doctor.png"
                alt="login"
                width="50"
              />
              Doctor Login
            </li>
          </a>
        </ul>
      </section>

      <footer>
          &copy; Hospital Management
      </footer>
</body>
</html>