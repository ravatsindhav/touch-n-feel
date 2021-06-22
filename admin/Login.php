  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style type="text/css">
    body {
        background: linear-gradient(-35deg, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.75)), url('https://cdn.hipwallpaper.com/i/52/98/jOBTIU.jpg');
        height: 100%;
        padding: 60px;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        overflow: hidden;
    }

    /*---editable---*/
    .card-size {
        width: 450px!important;
        height: auto;
        background-color: rgba(255, 255, 255, 0.8);
        margin-top: 10%;
        vertical-align: center;
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
        color: #512da8;
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
        border: 0.5px solid #b39ddb;
    }

    .input-active:focus {
        border: 0.5px solid #512da8;
        border-radius: 0px !important;
        box-shadow: 0.5px 0.5px 7px #b39ddb;
        outline: 0;
    }

    .spacing {
        margin-top: 20px;
        margin: 20px;
    }

    .form-control::placeholder {
        color: #9575cd;
        opacity: 1;
    }

    .form-control:-ms-input-placeholder {
        color: #9575cd;
    }

    .form-control::-ms-input-placeholder {
        color: #9575cd;
    }

    /*---editable---*/
    .btn-login {
        font-weight: 500;
        background: #7e57c2;
        border-radius: 0;
        margin-top: 50px;
        margin-bottom: 30px;
        padding: 5px;
        color: #fff;
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
            width: 500px;
            margin-top: 20%;
        }
    }
    
    /* X-Small devices (portrait phones, less than 576px) */
    @media screen and (max-width: 576px) {
        .card-size {
            width: 400px;
            margin-top: 20%;
        }
    }

    /* Small devices (landscape phones, less than 768px) */
    @media screen and (max-width: 768px) {
        .card-size {
            width: 600px;
            margin-top: 26%;
        }
    }

    /* Medium devices (tablets, less than 992px) */
    @media screen and (max-width: 992px) {
        .card-size {
            width: 500px;
            margin-top: 21% !important;
        }
    }

    /* X-Large devices (large desktops, less than 1400px) */
    @media screen and (max-width: 1400px) {
        .card-size {
            width: 500px;
            margin-top: 13%;
        }
    }
</style>

<body>


    <div class="row justify-content-center">
        <div class="card card-size border-0 rounded-0">
            <div class="one mt-5 mb-4">
                <h1>Log In</h1>
                <p class="text-center mt-3" style="color: #9575cd;">Please enter your login and password !</p>
            </div>

            <form action="" method="post" role="form">
                <div class="form-group spacing">
                    <input type="text" name="name" class="form-control input-active mr-5" id="name" placeholder="Enter Your Username..." required>
                </div>
                <div class="form-group spacing">
                    <input type="password" class="form-control input-active mr-5" name="email" id="email" placeholder="Enter Your Password..." required>
                </div>
                <div class="row justify-content-center">
                    <button type="button" class="btn btn-default mx-auto w-50 btn-login">Log in</button>
                </div>
            </form>

        </div>
    </div>




</body>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>