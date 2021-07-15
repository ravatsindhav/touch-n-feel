<?php
session_start();
if (isset($_SESSION['email'])) {
?>

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Confirm OTP | Complete Security Solution</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <!-- Vendor CSS Files -->
        <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <link href="assets/css/admin.css" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">


    </head>

    <style type="text/css">
        body {
            background: linear-gradient(-35deg, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.75)), url('https://cdn.hipwallpaper.com/i/52/98/jOBTIU.jpg');
            background-size: 100% 100%;
            height: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            padding: 30px;
        }



        .card-size {
            width: 450px !important;
            height: auto;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.9);
        }

        .card-top {
            margin-top: 170px;
        }

        .font-1 {
            font-family: 'Quicksand', sans-serif;
        }


        h1 {
            position: relative;
            padding: 0;
            margin: 0;
            font-weight: 400;
            font-size: 35px;
            color: #283593;
            -webkit-transition: all 0.4s ease 0s;
            -o-transition: all 0.4s ease 0s;
            transition: all 0.4s ease 0s;
        }

        .one h1 {
            text-align: center;
            padding-bottom: 5px;
        }

        .one h1:before {
            width: 50px;
            height: 6px;
            display: block;
            content: "";
            position: absolute;
            bottom: 3px;
            left: 47%;
            margin-left: -10px;
            background-color: #b80000;
        }

        .one h1:after {
            width: 150px;
            height: 1px;
            display: block;
            content: "";
            position: relative;
            margin-top: 15px;
            left: 45%;
            margin-left: -50px;
            background-color: #b80000;
        }

        .input-active {
            border-radius: 0px !important;
            border: 0.5px solid #5c6bc0;
        }

        .input-active:focus {
            border: 0.5px solid #283593;
            border-radius: 0px !important;
            box-shadow: 0.5px 0.5px 7px #283593;
            outline: 0;
        }

        .spacing {
            margin-top: 30px !important;
            margin-left: 20px;
            margin-right: 20px;
        }

        .form-spacing {
            margin-top: -20px;
        }

        input[type="text"],
        input[type="password"] {
            font-family: 'Quicksand', sans-serif;
            color: #283593;

        }

        .form-control::placeholder {
            color: #283593;
            opacity: 1;
            font-family: 'Quicksand', sans-serif;
        }

        .form-control:-ms-input-placeholder {
            color: #283593;
            font-family: 'Quicksand', sans-serif;
        }

        .form-control::-ms-input-placeholder {
            color: #283593;
            font-family: 'Quicksand', sans-serif;
        }

        /*---editable---*/
        .btn-login {
            font-weight: 500;
            background: #283593;
            border-radius: 0;
            margin-top: 40px;
            margin-bottom: 30px;
            padding: 5px;
            color: #fff;
            font-family: 'Quicksand', sans-serif;
        }

        .btn-login:focus {
            box-shadow: 1px 1px 10px #b39ddb;
        }

        .btn-login:hover {
            color: #fff;
        }


        /* X-Small devices (portrait phones, less than 576px) */
        @media screen and (max-width: 400px) {
            .card-size {
                width: 350px !important;
                margin-top: 150px !important;
            }

            .spacing {
                margin-top: 20px;
            }
        }

        /* X-Small devices (portrait phones, less than 576px) */
        @media screen and (max-width: 576px) {
            .card-size {
                width: 500px !important;
                margin-top: 20% !important;
            }
        }

        /* Small devices (landscape phones, less than 768px) */
        @media screen and (max-width: 768px) {
            .card-size {
                width: 600px !important;
                margin-top: 20% !important;
            }

            .spacing {
                margin-top: 20px !important;
            }

            .btn-login {
                margin-top: 40px;
                margin-bottom: 20px;
            }
        }

        /* Medium devices (tablets, less than 992px) */
        @media screen and (min-width: 992px) and (max-width: 1050px) {
            .card-size {
                width: 800px !important;
                margin-top: 30% !important;
            }

            .spacing {
                margin-top: 60px !important;
                margin-left: 60px;
                margin-right: 40px;
            }

            .btn-login {
                margin-top: 70px;
                margin-bottom: 60px;
            }
        }

        /* X-Large devices (large desktops, less than 1400px) */
        @media screen and (max-width: 1400px) {
            .card-size {
                width: 800px;
                margin-top: 13%;
            }
        }
    </style>


    <body>


        <div class="row justify-content-center">
            <div class="card card-size border-0 card-top">
                <div class="one mt-5 mb-4">
                    <h1>Enter OTP</h1>
                    <p class="text-center mt-3 font-1" style="color: #303f9f;">Please enter your OTP You Received in Your Email Address !</p>
                </div>

                <form action="" method="post" role="form" class="form-spacing">
                    <div class="form-group spacing">
                        <input type="number" name="otp" class="form-control input-active mr-5" id="name" placeholder="Enter OTP..." required>
                        <!-- <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" required> -->
                    </div>
                    <!-- <div class="form-group spacing">
                    <input type="password" class="form-control input-active mr-5" name="email" id="email" placeholder="Enter Your Password..." required>
                </div> -->
                    <div class="row justify-content-center">
                        <button type="submit" name="btn_submit" class="btn btn-default mx-auto w-50 btn-login">Confirm Otp</button>
                    </div>
                </form>

            </div>
        </div>

        <?php
        if (isset($_POST['btn_submit'])) {
            $otp = $_POST['otp'];

            require_once "class/User_Class.php";
            $user_obj = new User_Class();
            if ($otp != null) {
                $s = $user_obj->get_user($_SESSION['email']);
                if ($r = mysqli_fetch_array($s)) {
                    $fetchOtpLength = strlen($r['otp']);
                    if ($r['otp'] == $otp && $fetchOtpLength = 6) {
                        // $otp=0;
                        // $otp=rand(11111,99999);
                        $_SESSION['otp'] = $r['otp'];
        ?>
                        <script>
                            alert('Otp Verified Successfully');
                            location.href = 'change_password.php';
                        </script>
                    <?php
                        // $add_otp=$user_obj->update_otp($email,$otp);
                        // $fetch = mysqli_fetch_array($add_otp);
                        // if ($fetch) {
                        //     $mail_res=$send_otp_mail_obj->send_otp($fetch['email'],$fetch['otp']);
                        //     if($mail==1){
                        //         echo "Otp Sended To Your Email Id !";
                        //     }
                        //     else{
                        //         echo "Failed to Send Otp please Try After Some Time !";
                        //     }
                        // }
                    } else {
                    ?>
                        <script>
                            alert('Please enter valid OTP !');
                        </script>
        <?php
                    }
                }
            }
        }
        ?>


        <!-- Vendor JS Files -->
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/purecounter/purecounter.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>


    </body>

<?php
} else {
    header("Location:index.php");
}
?>