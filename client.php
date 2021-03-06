<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Valued Customers | Touch & Feel Electro System</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="img/core-img/logo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous"> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mukta+Vaani:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Finger+Paint&display=swap" rel="stylesheet">
    <!-- <link rel="icon" type="image/x-icon" href="favicon.ico"> -->

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body style=" background-color: #f5f5f5!important;">

    <!-- ======= Header ======= -->
    <?php include 'header.php' ?>

    <!-- End Header -->

    <?php
    require_once "admin/class/Client_Class.php";
    $client_obj = new Client_Class();
    $client_res = $client_obj->getAllclient();
    ?>


    <main id="main">
        <div class="container" style="margin-top:120px;">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="alert alert-default text-light text-center p-2 rounded-0" style="background: #3498db;">Partial List of our Valued Customers</h4>
                </div>
            </div>


            <div class="row">
                <?php
                while ($client_arr = mysqli_fetch_array($client_res)) {
                ?>
                    <div class="col-md-3">
                        <div class="card rounded-0 border-0 shadow-sm mb-4">
                            <div class="row justify-content-center">
                                <img src="<?php echo substr($client_arr['image'], 3); ?>" style="width: 280px !important; height: 240px !important;">
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- <div class="col-md-3">
                    <div class="card rounded-0 border-0 shadow-sm  mb-4">
                        <div class="row justify-content-center p-0">
                            <img src="https://edsystemsindia.com/wp-content/uploads/2018/12/New-Project-91-1-200x200.png" style="width: 280px; height: 240px;">
                        </div>
                    </div>
                </div> -->

            </div>

        </div>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include 'footer.php' ?>
    <!-- End Footer -->


</body>

</html>