<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title> All Products | Touch & Feel Electro System</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <style>
        body {
            background-color: #f5f5f5 !important;
        }

        .product-img {
            width: 100%;
            height: 300px;
        }

        .fa-icon-custom {
            margin-top: 4px;
            color: #2E5379 !important;
            font-size: 13px !important;
        }

        .list-decoration {
            padding-left: 0px;
            list-style: none;
            line-height: 1.3;
        }

        .list-decoration--gradient li {
            margin-top: 10px;
            padding-left: 1em;
            color: #000;
            font-weight: 400;
            background-image: radial-gradient(#c62828 .160em, transparent .160em);
            background-size: .5em .5em;
            background-position: 0 .4em;
            background-repeat: no-repeat;
        }

        .image-set-1 {
            width: 100%;
            height: auto;
            background-size: cover;
            vertical-align: center;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <?php include 'header.php' ?>
    <!-- End Header -->



    <main id="main">
        <!-- ======= About Us Section ======= -->
        
        <section id="product" class="about">
            <div class="container" style="margin-top: 43px;">
                <div class="section-title" data-aos="fade-up">
                    <h2 class="d-none d-md-block">Products</h2>
                    <h2 class="d-sm-none" style="font-size:22px;">Company Overview</h2>
                </div>

                <div class="row content">
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                            <p>
                               <?php 
                               include('class/test.php');
                               $add = new DBClass();
                               
                               $s=$add->getData();

                               while($r=mysqli_fetch_array($s))
                                       {
                                        echo $r['email'];
                                       }
                                ?> 
                            </p>
                        </div>
                    </div> 
            </div>
        </section>
       

        <!-- Container Start -->
        <div class="container" style="margin-top:155px;">
            <div class="section-title" data-aos="fade-up">
                <h2 class="d-none d-md-block">Products</h2>
                <h2 class="d-sm-none" style="font-size:22px;">Company Overview</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                    <div class="card">
                        <img src="https://wallpapercave.com/wp/wp3264044.jpg" class="card-img-top product-img" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                    <div class="card">
                        <img src="https://i.pinimg.com/564x/4f/6d/05/4f6d052bb1b26150115888ea06d4c106.jpg" class="card-img-top product-img" alt="...">
                        <div class="card-body">
                            <div class="row">
                                <ul>
                                    <li style="list-style: none;">
                                        <i class="fa fa-location-arrow fa-icon-custom"></i>
                                        <span style="font-size: 14pt;color:black;"> CCTV Video Surveillance</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row mt-5 mb-5">
                <div class="col-md-12">
                    <h4 class="alert alert-default text-light text-center p-2 rounded-0 ml-3" style="background: #3498db;">Partial List of our Valued Customers</h4>
                </div>
                <div class="col-md-12">
                    <div class="card p-3 rounded-0 border-0 bg-white" data-aos="fade-up">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-decoration list-decoration--gradient">
                                    <li class="text-muted"> IP CCTV Dome cameras are mainly used for indoor applications.</li>
                                    <li class="text-muted"> High definition (HD) resolutions like 2 / 3 / 4/ 5 / 8 / 12 and higher Megapixels</li>
                                    <li class="text-muted"> Advance high compression technology like H.265, H.265+, H.264, H.264+, etc.</li>
                                    <li class="text-muted"> IR Night vision capability</li>
                                    <li class="text-muted"> Fixed and Motorized zoom lens</li>
                                    <li class="text-muted"> Vandal-resistant and Weather-proof IP66 / IP67 rated housings</li>
                                    <li class="text-muted"> Advance features like WDR, 3D DNR, BLC, AGC, AWB, etc.</li>
                                    <li class="text-muted"> 12V DC and PoE supported</li>
                                    <li class="text-muted"> Optional built-in audio capability</li>
                                    <li class="text-muted"> Optional built-in SD card storage</li>
                                    <li class="text-muted"> Optional built-in Wi-fi</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <img src="https://edsystemsindia.com/wp-content/uploads/2016/01/cctv1.png" class="image-set-1">
                                <ul class="list-decoration list-decoration--gradient">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            








        </div>
        <!-- End Container  -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include 'footer.php' ?>
    <!-- End Footer -->


</body>

</html>