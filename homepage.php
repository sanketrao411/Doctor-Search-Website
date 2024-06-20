<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanketrao HealthCare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
              <a href="./index.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <span class="fs-4 fw-bold">Sanketrao <span class="healthcare">HealthCare</span> </span>
              </a>
              <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
                <a href="./login.php" class="fw-semibold btn btn-outline-success"><?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?></a>
              </ul>
            </header>
          </div>

          <div class="container col-xxl-10 px-5 py-5 pt-0">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5 pt-0">
              <div class="col-10 col-sm-8 col-lg-6">
                <img src="./Assets/maindoctors.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
              </div>
              <div class="col-lg-6 mt-0">
                <p class="welcome mb-4">WELCOME TO SANKETRAO HEALTHCARE 👋</p>
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-4">Simplified healthcare for all, anytime, anywhere</h1>
                <p class="lead mb-4">Sanketrao HealthCare physicians go beyond symptoms to treat the root cause of your illness and provide long-term healing.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="#doctorSelect"><button type="button" class="btn btn-outline-success btn-lg px-4 ">Schedule Your Appointment</button></a>
                </div>
              </div>
            </div>
          </div>
    </div>

    <section id="doctorSelect">
        <div class="container my-5">
            <h2 class="text-center mb-4 selectDoctor">Select a Doctor</h2>
            <div class="row">
              <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="./doctorInfo.php">
                <div class="doctor-card">
                  <img src="./Assets/general-physician.svg" height="100" alt="General Practitioner">
                  <h5>General Physician</h5>
                </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="./doctorInfo.php">
                <div class="doctor-card">
                  <img src="./Assets/child-infant.svg" alt="Pediatrician">
                  <h5>Pediatrician</h5>
                </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="./doctorInfo.php">
                <div class="doctor-card">
                  <img src="./Assets/cardiac.svg" alt="Cardiologist">
                  <h5>Cardiologist</h5>
                </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="./doctorInfo.php">
                <div class="doctor-card">
                  <img src="./Assets/skin-probs.svg" alt="Dermatologist">
                  <h5>Dermatologist</h5>
                </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="./doctorInfo.php">
                <div class="doctor-card">
                  <img src="./Assets/neurology.svg" alt="Neurologist">
                  <h5>Neurologist</h5>
                </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="./doctorInfo.php">
                <div class="doctor-card">
                  <img src="./Assets/ortho.svg" alt="Orthopedist">
                  <h5>Orthopedist</h5>
                </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="./doctorInfo.php">
                <div class="doctor-card">
                  <img src="./Assets/psycologial-councelling.svg" alt="Psychiatrist">
                  <h5>Psychiatrist</h5>
                </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="./doctorInfo.php">
                <div class="doctor-card">
                  <img src="./Assets/ent.svg" alt="Surgeon">
                  <h5>Ear, Nose, Throat</h5>
                </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="./doctorInfo.php">
                <div class="doctor-card">
                  <img src="./Assets/dentistry.svg" alt="Dentist">
                  <h5>Dentist</h5>
                </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="./doctorInfo.php">
                <div class="doctor-card">
                  <img src="./Assets/opthamology.svg" alt="Ophthalmologist">
                  <h5>Ophthalmologist</h5>
                </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="./doctorInfo.php">
                <div class="doctor-card">
                  <img src="./Assets/women-issues.svg" alt="Gynecologist">
                  <h5>Gynecologist</h5>
                </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="./doctorInfo.php">
                <div class="doctor-card">
                  <img src="./Assets/sex-probs.svg" alt="ENT Specialist">
                  <h5>Sexologist</h5>
                </div>
                </a>
              </div>
            </div>
          </div>
    </section>

   <section class="review">
    <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom customerReview">Customer Review</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
          <div class="col d-flex align-items-start">
            <div>
              <h3 class="fs-2 text-body-emphasis">Sanket Shinde</h3>
              <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                ⭐⭐⭐⭐⭐
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <div>
              <h3 class="fs-2 text-body-emphasis">Shivam Yadav</h3>
              <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
              ⭐⭐⭐⭐
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <div>
              <h3 class="fs-2 text-body-emphasis">Datta Bharade</h3>
              <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
              ⭐⭐⭐⭐⭐
            </div>
          </div>
        </div>
      </div>
    
   </section>

   <section class="footer">
    <div class="footer-container">
        <footer class="py-5 pb-0">
          <div class="row">
            <div class="col-md-5 offset-md-1 mb-3">
              <form>
                <h5 class="customerReview">Subscribe to our newsletter</h5>
                <p>Monthly digest of what's new and exciting from us.</p>
                <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                  <label for="newsletter1" class="visually-hidden">Email address</label>
                  <input id="newsletter1" type="text" class="form-control addFocus" placeholder="Email address">
                  <button class="btn btn-outline-success" type="button">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
      
          <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top mb-0">
            <p class="copyright">© 2024 Sanketrao HealthCare, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex me-3">
              <li class="ms-3"><a class="link-body-emphasis" href="#"><img src="./Assets/instagram.svg" alt="instagram" width="24" height="24"></a></li>
              <li class="ms-3"><a class="link-body-emphasis" href="#"><img src="./Assets/linkedin.svg" alt="instagram" width="24" height="24"></a></li>
              <li class="ms-3"><a class="link-body-emphasis" href="#"><img src="./Assets/twitter-x.svg" alt="instagram" width="24" height="24"></a></li>
              <li class="ms-3"><a class="link-body-emphasis" href="#"><img src="./Assets/icons8-gmail.svg" alt="instagram" width="24" height="24"></a></li>
            </ul>
          </div>
        </footer>
      </div>
   </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>