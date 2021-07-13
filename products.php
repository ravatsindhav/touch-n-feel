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
        <!-- ======= Product Section ======= -->
        <!-- Container Start -->
        <div class="container" style="margin-top:155px;">
            <div class="section-title">
                <h2 class="d-none d-md-block">Products</h2>
                <h2 class="d-sm-none" style="font-size:22px;">Products</h2>
            </div>

            <?php
            include('admin/class/Product_Class.php');
            $product_obj = new Product_Class();
            $categoryid;
            if (empty($_GET['cat_id'])) {
                $categoryid = 0;
            } else {
                $categoryid = $_GET['cat_id'];
            }
            $prod_res = null;
            if (is_numeric($categoryid)) {
                $prod_res = $product_obj->getProductByCategory($categoryid);
            } else {
                $prod_res = $product_obj->getProductByCategory(0);
            }
            if ($prod_res != null) {

                while ($product_arr = mysqli_fetch_array($prod_res)) {
            ?>
                    <!-- Product View -->
                    <div class="card p-3 rounded-0 border-0 bg-white">
                        <div class="row mt-1">
                            <div class="col-md-12">
                                <h4 class="alert alert-default text-light text-center p-2 rounded-0 ml-3" style="background: #3498db;"><?php echo $product_arr['name']; ?></h4>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            $dt = $product_arr['detail'];
                            $detail = explode('$', $dt)
                            ?>
                            <div class="col-md-6 col-sm-12">
                                <ul class="list-decoration list-decoration--gradient">
                                    <?php
                                    foreach ($detail as $item) {
                                    ?>
                                        <li class="text-muted"><?php echo "$item"; ?></li>
                                    <?php
                                    }
                                    ?>

                                    <!-- <li class="text-muted"> High definition (HD) resolutions like 2 / 3 / 4/ 5 / 8 / 12 and higher Megapixels</li>
                                        <li class="text-muted"> Advance high compression technology like H.265, H.265+, H.264, H.264+, etc.</li>
                                        <li class="text-muted"> IR Night vision capability</li>
                                        <li class="text-muted"> Fixed and Motorized zoom lens</li>
                                        <li class="text-muted"> Vandal-resistant and Weather-proof IP66 / IP67 rated housings</li>
                                        <li class="text-muted"> Advance features like WDR, 3D DNR, BLC, AGC, AWB, etc.</li>
                                        <li class="text-muted"> 12V DC and PoE supported</li>
                                        <li class="text-muted"> Optional built-in audio capability</li>
                                        <li class="text-muted"> Optional built-in SD card storage</li>
                                        <li class="text-muted"> Optional built-in Wi-fi</li> -->
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <img src="<?php echo substr($product_arr['image'],3);?>" style="width:620px !important;height:320px !important;" class="image-set-1">
                                <ul class="list-decoration list-decoration--gradient">
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Product View -->

            <?php
                }
            }

            ?>


        </div>
        <!-- End Container  -->
    </main>
    <!-- End #main -->
    <br />
    <br />
    <!-- ======= Footer ======= -->
    <?php include 'footer.php' ?>
    <!-- End Footer -->


</body>

</html>