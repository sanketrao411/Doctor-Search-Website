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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="doctorInfo.css">
</head>

<body>
    <div class="main">
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                <a href="./index.html"
                    class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <span class="fs-4 fw-bold">Sanketrao <span class="healthcare">HealthCare</span> </span>
                </a>
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
                    <a href="./login.php" class="fw-semibold btn btn-outline-success">
                        <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
                    </a>
                </ul>
            </header>
        </div>


    </div>

    <section>
        <div class="container my-5">
            <!-- First Doctor Card -->
            <div class="card mb-4">
                <div class="row no-gutters">
                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                        <img src="./Assets/m1.jpg" class="card-img rounded-circle" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Dr. Sanketrao Shinde</h5>
                            <p class="card-text">14 years of Experience<br>MBBS, MD - General Physician <br>Pune</p>
                            <p class="card-text"><small class="text-muted">4.6 ★ | 4241 Patient Stories</small></p>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                        <div>
                            <p class="text-center mb-1">Consultation Fee</p>
                            <p class="text-center mb-2">₹ 299/-</p>
                            <a href="#" class="btn btn-outline-success btn-block">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Second Doctor Card -->
            <div class="card mb-4">
                <div class="row no-gutters">
                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                        <img src="./Assets/m2.png" class="card-img rounded-circle"
                            alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Dr. Shivam Yadav</h5>
                            <p class="card-text">9 years of Experience<br>MBBS, MD - Psychiatry <br>Pune</p>
                            <p class="card-text"><small class="text-muted">4.8 ★ | 4241 Patient Stories</small></p>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                        <div>
                            <p class="text-center mb-1">Consultation Fee</p>
                            <p class="text-center mb-2">₹ 499/-</p>
                            <a href="#" class="btn btn-outline-success btn-block">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Third Doctor Card -->
            <div class="card mb-4">
                <div class="row no-gutters">
                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                        <img src="./Assets/m3.jpg" class="card-img rounded-circle" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Dr. Rahul Saini</h5>
                            <p class="card-text">16 years of Experience<br>MBBS, MD - General Medicine, DNB - Neurology <br>Mumbai</p>
                            <p class="card-text"><small class="text-muted">4.3 ★ | 4241 Patient Stories</small></p>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                        <div>
                            <p class="text-center mb-1">Consultation Fee</p>
                            <p class="text-center mb-2">₹ 499/-</p>
                            <a href="#" class="btn btn-outline-success btn-block">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Doctor 2 -->
            <div class="card mb-4">
                <div class="row no-gutters">
                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                        <img src="./Assets/w1.jpg" class="card-img rounded-circle" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Dr. Priya Mehta</h5>
                            <p class="card-text">10 years of Experience<br>MBBS, MD - Cardiology <br>Delhi</p>
                            <p class="card-text"><small class="text-muted">4.7 ★ | 3500 Patient Stories </small></p>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                        <div>
                            <p class="text-center mb-1">Consultation Fee</p>
                            <p class="text-center mb-2">₹ 599/-</p>
                            <a href="#" class="btn btn-outline-success btn-block">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Doctor 3 -->
            <div class="card mb-4">
                <div class="row no-gutters">
                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                        <img src="./Assets/m4.jpg" class="card-img rounded-circle" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Dr. Anil Sharma</h5>
                            <p class="card-text">12 years of Experience<br>MBBS, MD - Orthopedics <br>Kolkata</p>
                            <p class="card-text"><small class="text-muted">4.5 ★ | 2890 Patient Stories</small></p>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                        <div>
                            <p class="text-center mb-1">Consultation Fee</p>
                            <p class="text-center mb-2">₹ 699/-</p>
                            <a href="#" class="btn btn-outline-success btn-block">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Doctor 4 -->
            <div class="card mb-4">
                <div class="row no-gutters">
                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                        <img src="./Assets/w3.webp" class="card-img rounded-circle" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Dr. Suman Rao</h5>
                            <p class="card-text">8 years of Experience<br>MBBS, MD - Pediatrics <br>Chennai</p>
                            <p class="card-text"><small class="text-muted">4.6 ★ | 3100 Patient Stories</small></p>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                        <div>
                            <p class="text-center mb-1">Consultation Fee</p>
                            <p class="text-center mb-2">₹ 399/-</p>
                            <a href="#" class="btn btn-outline-success btn-block">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Doctor 5 -->
            <div class="card mb-4">
                <div class="row no-gutters">
                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                        <img src="./Assets/m5.webp" class="card-img rounded-circle" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Dr. Rakesh Gupta</h5>
                            <p class="card-text">15 years of Experience<br>MBBS, MD - Gastroenterology <br>Bengluru</p>
                            <p class="card-text"><small class="text-muted">4.4 ★ | 3700 Patient Stories</small></p>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                        <div>
                            <p class="text-center mb-1">Consultation Fee</p>
                            <p class="text-center mb-2">₹ 450/-</p>
                            <a href="#" class="btn btn-outline-success btn-block">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Doctor 6 -->
            <div class="card mb-4">
                <div class="row no-gutters">
                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                        <img src="./Assets/w4.jpg" class="card-img rounded-circle" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Dr. Shalini Verma</h5>
                            <p class="card-text">11 years of Experience<br>MBBS, MD - Dermatology<br>Mumbai</p>
                            <p class="card-text"><small class="text-muted">4.8 ★ | 4400 Patient Stories</small></p>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                        <div>
                            <p class="text-center mb-1">Consultation Fee</p>
                            <p class="text-center mb-2">₹ 520/-</p>
                            <a href="#" class="btn btn-outline-success btn-block">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Doctor 7 -->
            <div class="card mb-4">
                <div class="row no-gutters">
                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                        <img src="./Assets/m6.jpg" class="card-img rounded-circle" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Dr. Naveen Kumar</h5>
                            <p class="card-text">9 years of Experience<br>MBBS, MD - Psychiatry <br>Pune</p>
                            <p class="card-text"><small class="text-muted">4.7 ★ | 3000 Patient Stories</small></p>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                        <div>
                            <p class="text-center mb-1">Consultation Fee</p>
                            <p class="text-center mb-2">₹ 499/-</p>
                            <a href="#" class="btn btn-outline-success btn-block">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="row no-gutters">
                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                        <img src="./Assets/m7.webp" class="card-img rounded-circle" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Dr. Datta Bharade</h5>
                            <p class="card-text">9 years of Experience<br>MBBS, MD - Psychiatry <br>Aurangbad</p>
                            <p class="card-text"><small class="text-muted">4.7 ★ | 3000 Patient Stories</small></p>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                        <div>
                            <p class="text-center mb-1">Consultation Fee</p>
                            <p class="text-center mb-2">₹ 499/-</p>
                            <a href="#" class="btn btn-outline-success btn-block">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="footer" class="footer">
    <div class="footer-container">
        <footer class="py-5 pb-0">
          <div class="row">
            <div class="col-md-5 offset-md-1 mb-3">
              <form>
                <h5 class="customerReview">About Us</h5>
                <p>Phone : +91 9762527917</p>
                <p>Email : <a href="#">sankeraoshinde411@gmail.com</a></p>
                <p>Address : Pune , India 412207</p>
                <p>Write to Us</p>
                <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                  <label for="newsletter1" class="visually-hidden">Email address</label>
                  <input id="newsletter1" type="text" class="form-control addFocus" placeholder="Write a message...">
                  <button class="btn btn-outline-success" type="button">Send</button>
                </div>
              </form>
            </div>
          </div>
      
          <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top mb-0">
            <p class="copyright">© 2024 Sanketrao HealthCare, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex me-3">
              <li class="ms-3"><a class="link-body-emphasis" href="https://www.instagram.com/sanketrao_411/?hl=en"><img src="./Assets/instagram.svg" alt="instagram" width="24" height="24"></a></li>
              <li class="ms-3"><a class="link-body-emphasis" href="https://www.linkedin.com/in/sanket-shinde-abbb0524b/"><img src="./Assets/linkedin.svg" alt="instagram" width="24" height="24"></a></li>
              <li class="ms-3"><a class="link-body-emphasis" href="https://x.com/sanketrao_411"><img src="./Assets/twitter-x.svg" alt="instagram" width="24" height="24"></a></li>
              <li class="ms-3"><a class="link-body-emphasis" href="https://github.com/sanketrao411"><img src="./Assets/github.svg" alt="instagram" width="24" height="24"></a></li>
            </ul>
          </div>
        </footer>
      </div>
   </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>