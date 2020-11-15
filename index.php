<?php
$isLoggedin = false;
session_start();
if(!(isset($_SESSION["login"]) && $_SESSION["login"] == "OK")){
    header("Location: login.html");
}
else{
    $isLoggedin = true;
    echo $_SESSION['uid'].$_SESSION['utype'];
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="main.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a8a8a17def.js" crossorigin="anonymous"></script>


    <title></title>
</head>

<body>
    <!--nav bar-->
    <nav class="navbar navbar-expand-lg nav-back fixed-top" id="nav">
        <div class="container">
            <a href="#" class="navbar-brand">Medical</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-syringe fa-2x"></i>
            </button>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Hospitals</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">

                        <a href="register/profile.html" class="nav-link">Apointments</a>

                    </li>
                    <li class="nav-item">
                        <?php
                    if($isLoggedin){
                        ?>
                        <a href="logout.php" class="nav-link">Logout</a>
                        <?php
                    }
                    else{
                        ?>
                        <a href="login.html" class="nav-link">Login</a>
                        <?php
                    }
                    ?>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!--End of nav bar-->
    <!--Hero image-->
    <section id="hero" class="d-flex allign-items-center">
        <div class="container text-center position-relative">
            <h1>24/7 Care Is Available</h1>
            <h2 class="text-uppercase">AN online telemedicine service & open for all.</h2>
            <a href="#" class="main-btn">Know Us</a>
            <div class="select-box">
                <div class="options-container">
                    <div class="option">
                        <input type="radio" class="radio" id="anaesthesiology" name="category" />
                        <label for="anaesthesiology">Anaesthesiology</label>
                    </div>
                    <div class="option">
                        <input type="radio" class="radio" id="cancer" name="category" />
                        <label for="cancer">Cancer</label>
                    </div>
                    <div class="option">
                        <input type="radio" class="radio" id="cardio" name="category" />
                        <label for="cardio">Cardio-Vascular Surgery</label>
                    </div>
                    <div class="option">
                        <input type="radio" class="radio" id="dentristy" name="category" />
                        <label for="dentristy">Dentristy</label>
                    </div>
                    <div class="option">
                        <input type="radio" class="radio" id="medicine" name="category" />
                        <label for="medicine">Medicine</label>
                    </div>
                </div>
                <div class="selected">
                    Take Doctor Appointment
                </div>
                <div class="search-box">
                    <input type="text" placeholder="Start Typing..." />
                </div>
            </div>
        </div>
    </section>
    <!--End of hero image-->
    <!--Services-->

    <section id="service" class="services mt-5 mb-3 py-3">
        <div class="container">
            <div class="section-title">
                <h2 class="text-center">Services</h2>
                <p>Here you can find medical support for various diseases from the specialist doctors all over the
                    world.Our motto is to give the best service to the patients.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex allign-items-stretch">
                    <div class="service shadow">
                        <div class="icon">
                            <i class="fas fa-tooth"></i>
                        </div>
                        <a href="doctorlist.php?department=dental">
                            <h4>Dental</h4>
                        </a>
                        <p>Heart disease describes a range of conditions that affect your heart. Diseases under the
                            heart disease umbrella include blood vessel diseases, such as coronary artery disease; heart
                            rhythm problems (arrhythmias); and heart defects
                            you're born with (congenital heart defects), among others.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex allign-items-stretch mt-4 mt-md-0">
                    <div class="service shadow">
                        <div class="icon">
                            <i class="fas fa-lungs"></i>
                        </div>
                        <a href="doctorlist.php?department=liver">
                            <h4>Liver</h4>
                        </a>
                        <p>Heart disease describes a range of conditions that affect your heart. Diseases under the
                            heart disease umbrella include blood vessel diseases, such as coronary artery disease; heart
                            rhythm problems (arrhythmias); and heart defects
                            you're born with (congenital heart defects), among others.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex allign-items-stretch mt-4 mt-lg-0">
                    <div class="service shadow">
                        <div class="icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <a href="doctorlist.php?department=heart">
                            <h4>Heart</h4>
                        </a>
                        <p>Heart disease describes a range of conditions that affect your heart. Diseases under the
                            heart disease umbrella include blood vessel diseases, such as coronary artery disease; heart
                            rhythm problems (arrhythmias); and heart defects
                            you're born with (congenital heart defects), among others.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex allign-items-stretch mt-4">
                    <div class="service shadow">
                        <div class="icon">
                            <i class="fas fa-dna"></i>
                        </div>
                        <a href="doctorlist.php?department=cancer">
                            <h4>Cancer</h4>
                        </a>
                        <p>Heart disease describes a range of conditions that affect your heart. Diseases under the
                            heart disease umbrella include blood vessel diseases, such as coronary artery disease; heart
                            rhythm problems (arrhythmias); and heart defects
                            you're born with (congenital heart defects), among others.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex allign-items-stretch mt-4">
                    <div class="service shadow">
                        <div class="icon">
                            <i class="fas fa-ambulance"></i>
                        </div>
                        <a href="doctorlist.php?department=medicin">
                            <h4>Medicin</h4>
                        </a>
                        <p>Heart disease describes a range of conditions that affect your heart. Diseases under the
                            heart disease umbrella include blood vessel diseases, such as coronary artery disease; heart
                            rhythm problems (arrhythmias); and heart defects
                            you're born with (congenital heart defects), among others.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex allign-items-stretch mt-4">
                    <div class="service shadow">
                        <div class="icon">
                            <i class="fas fa-allergies"></i>
                        </div>
                        <a href="doctorlist.php?department=skin">
                            <h4>Skin</h4>
                        </a>
                        <p>Heart disease describes a range of conditions that affect your heart. Diseases under the
                            heart disease umbrella include blood vessel diseases, such as coronary artery disease; heart
                            rhythm problems (arrhythmias); and heart defects
                            you're born with (congenital heart defects), among others.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="main.js"></script>
</body>











































<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
</body>

</html>