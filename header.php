<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- <title>Touch And Feel Electro System | Complete Security Solon</title> -->
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
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

<body>

    <?php
    //fetch Category name
    include('admin/class/Category_Class.php');
    $category_obj = new Category_Class();
    $res = $category_obj->getAllcategory();
    ?>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="index.php">
                <p class="header-text">Touch & Feel Electro System</p>
            </a>

            <nav id="navbar" class="navbar">
                <?php
                if (basename($_SERVER['PHP_SELF']) == 'index.php') {
                ?>
                    <!-- For Index Page -->
                    <ul>
                        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                        <li><a class="nav-link scrollto" href="#about">About Us</a></li>
                        <li><a class="nav-link scrollto" href="#ourvalue">Our Value</a></li>
                        <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                        <li><a class="nav-link scrollto" href="solution.php">Solution</a></li>

                        <li class="dropdown"><a href="#"><span>Products</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                            <li><a href="products.php?cat_id=0">All Products</a></li>
                                <?php
                                while ($category_arr = mysqli_fetch_array($res)) {
                                ?>
                                    <li><a href="products.php?cat_id=<?php echo $category_arr['id']; ?>"><?php echo $category_arr['name']; ?></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </li>
                        <li><a class="nav-link scrollto" href="client.php">Clients</a></li>
                        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    </ul>
                    <!-- End For Index Page -->
                <?php
                } else {
                ?>
                    <!-- For other Page -->
                    <ul>
                        <li><a class="nav-link scrollto" href="index.php">Home</a></li>
                        <?php
                        if (basename($_SERVER['PHP_SELF']) == 'aboutus.php') {
                        ?>
                            <!-- for aboutus page -->
                            <li class="dropdown active"><a class="active" href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a class="nav-link scrollto" href="#overview">Company Overview</a></li>
                                    <li><a class="nav-link scrollto" href="#approach">Our Approach</a></li>
                                </ul>
                            </li>
                            <!-- End for aboutus page -->
                        <?php } else {
                        ?>
                            <!-- for other page -->
                            <li><a class="nav-link scrollto" href="aboutus.php">About Us</a></li>
                        <?php } ?>

                        <li><a class="nav-link scrollto" href="index.php">Our Value</a></li>
                        <li><a class="nav-link scrollto " href="index.php">Portfolio</a></li>


                        <?php
                        if (basename($_SERVER['PHP_SELF']) == 'solution.php') {
                        ?>

                            <li><a class="nav-link active" href="solution.php">Solution</a></li>
                        <?php } else {
                        ?>
                            <li><a class="nav-link scrollto" href="solution.php">Solution</a></li>
                        <?php
                        } ?>

                        <?php
                        if (basename($_SERVER['PHP_SELF']) == 'products.php') {
                        ?>

                            <li class="dropdown"><a class="active" href=""><span>Products</span> <i class="bi bi-chevron-down"></i></a>
                            <?php } else {
                            ?>
                            <li class="dropdown"><a href="#"><span>Products</span> <i class="bi bi-chevron-down"></i></a>
                            <?php
                        } ?>
                            <ul>

                                <li><a href="products.php?cat_id=0">All Products</a></li>
                                <?php
                                while ($category_arr = mysqli_fetch_array($res)) {
                                ?>
                                    <li><a href="products.php?cat_id=<?php echo $category_arr['id']; ?>"><?php echo $category_arr['name']; ?></a></li>
                                <?php
                                }
                                ?>

                                <!-- <li><a href="#">Drop Down 3</a></li>
                                <li><a href="#">Drop Down 4</a></li> -->
                            </ul>
                            </li>

                            <?php
                            if (basename($_SERVER['PHP_SELF']) == 'client.php') {
                            ?>

                                <li><a class="nav-link scrollto active" href="client.php">Clients</a></li>
                            <?php } else {
                            ?>
                                <li><a class="nav-link scrollto" href="client.php">Clients</a></li>
                            <?php
                            } ?>

                            <?php
                            if (basename($_SERVER['PHP_SELF']) == 'contact.php') {
                            ?>

                                <li><a class="nav-link active" href="contact.php">Contact</a></li>
                            <?php } else {
                            ?>
                                <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
                            <?php
                            } ?>


                    </ul>

                <?php
                }

                ?>

                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>

    <!-- End Header -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>