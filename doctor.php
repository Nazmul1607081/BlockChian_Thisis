<?php
session_start();
if(($_SESSION["utype"])  == "doctors"){
    header("Location: index.php");
}
$_SESSION['did']=$_GET['did'];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="bookappointment.css">
    <link rel="stylesheet" href="doctor.css">


    <title>Appointment</title>
</head>

<body>

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
    <script src="bootstrap-datepicker.js"></script>

    <script>
    $(function() {
        $("#dat").datepicker({
            autoclose: true,
            todayHighlight: true
        }).datepicker('update', new Date());
    });
    </script>

    <div class="inner-layer">
        <div class="container">
            <div class="row no-margin">
                <div class="col-sm-7">
                    <div class="content">
                        <h1>Book Your Slot Now and Save Your Time</h1>
                        <p>Online appointment scheduling systems are not only time-saving agents but income-generating
                            assistants too, that provide
                            operational convenience and promote relations built with your patients.</p>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-data">
                        <div class="form-head">
                            <h2>Book Appointment</h2>
                        </div>
                        <div class="form-body">
                            <form action='apointment.php' method='POST'>
                                <div class="row form-row">
                                    <input type="text" name='mobile_number' placeholder="Enter Mobile Number"
                                        class="form-control">
                                </div>

                                <div class="row form-row">
                                    <input type="text" name="condition" placeholder="Condition" class="form-control">
                                </div>
                                <div class="row form-row">
                                    <input type="text" name="temparature" placeholder="Body Temparature"
                                        class="form-control">
                                </div>
                                <div class="row form-row">
                                    <input type="text" name="pressure" placeholder="Blood Pressure"
                                        class="form-control">
                                </div>
                                <h6>Address Details</h6>
                                <div class="row form-row">
                                    <div class="col-sm-6">
                                        <input type="text" name="area" placeholder="Enter Area" class="form-control">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="city" placeholder="Enter City" class="form-control">
                                    </div>
                                </div>

                                <div class="row form-row">
                                    <div class="col-sm-6">
                                        <input type="text" name="division" placeholder="Enter Division"
                                            class="form-control">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="postal" placeholder="Postal Code" class="form-control">
                                    </div>
                                </div>

                                <div class="row form-row">
                                    <button type='submit' class="btn btn-success btn-appointment">
                                        Book Appointment
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>