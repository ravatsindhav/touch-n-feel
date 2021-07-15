<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Products | Complete Security Solon</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Mukta+Vaani:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Finger+Paint&display=swap" rel="stylesheet"> -->
  <!-- <link rel="icon" type="image/x-icon" href="favicon.ico"> -->

  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script> -->


  <!-- Vendor CSS Files -->
  <!-- <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/admin.css" rel="stylesheet">
</head>


</style>


<body>

  <!-- ================== Header ================ -->
  <?php
  include 'header.php';
 
  ?>
  <!------------------ End Header ----------------->


  <section class="container mt-5" style="margin-top: 90px;">
    <!------------------ Product & Category Fetch ----------------->
    <?php
    require_once "class/Product_Class.php";
    $product_obj = new Product_Class();
    $categoryid;
    if (empty($_GET['cat_id'])) {
      $categoryid = 0;
    } else {
      $categoryid = $_GET['cat_id'];
    }

    if (is_numeric($categoryid)) {
      $prod_res = $product_obj->getProductByCategory($categoryid);
    } else {
      $prod_res = $product_obj->getProductByCategory(0);
    }

    ?>

    <!--- --------------- End Product & Category Fetch ----------------->


    <!------------------------ Add Product & Category Dropdown --------------------->
    <div class="row mt-3" style="margin-top: 90px;">
      <div class="col-md-10">
        <div class="d-grid gap-2">
          <button class="btn btn-success rounded-0" style="background-color:#D4EDDA;color:green;" type="button">All Products</button>
        </div>
      </div>
      <div class="col-md-2">
        <div class="d-grid gap-2">
          <button class="btn btn-success rounded-0" type="button"><a style="color:white;" href="add_product.php">Add New Product</a></button>
        </div>
      </div>
    </div>
    <!-- <div class="row mt-3">
      <div class="col-md-12">
        <div class="d-grid gap-2">
          <button class="btn btn-success rounded-0" type="button"><a style="color:white;" href="add_product.php">Add New Product</a></button>
        </div>
      </div>
    </div> -->
    <!---- Add Product & Category Dropdown ----->

    <!-- Product Show -->
    <?php
    while ($product_arr = mysqli_fetch_array($prod_res)) {
    ?>

      <!------------------------ Product Detail & Image --------------------->
      <div class="card border-light" style="background-color: #f5f5f5;">

        <div class="row m-2 p-1 mt-3" style="background-color: #D4EDDA;">
          <div class="col-9">
            <p class="mt-1 text-success item-heading"><?php echo $product_arr['name']; ?></p>
          </div>
          <div class="col-3">
            <!-- <button type="button" class="btn btn-outline-danger btn-right">
              <i class="fas fa-trash-alt icon-size" data-bs-toggle="modal" href="#DeleteProductModel" role="button"></i>
            </button> -->
            <button type="button" class="btn btn-outline-light btn-right">
              <a class="fas fa-edit icon-size text-success"  href="edit_product.php?id=<?php echo $product_arr['id'];?>" role="button"></a>
            </button>
          </div>
        </div>
        <?php
        $dt = $product_arr['detail'];
        $detail = explode('$', $dt)
        ?>
        <div class="row">
          <div class="col-md-6">
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
              <li class="text-muted"> Vandal-resistant and Weather-proof IP66 / IP67 rated housings</li> -->
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="list-decoration list-decoration--gradient">
            <img src="<?php echo $product_arr['image']; ?>" style="width:600px !important;height:320px !important;"  class="image-set-1">
            </ul>
          </div>
        </div>

      </div>
      <!------- Product Detail & Image ------->

    <?php
    }
    ?>



  </section>


  <!-- ================================================================== Model Box ======================================================================== -->


  <!-------- Edit Product Model --------->

  <div class="modal fade bd-example-modal-lg" id="EditProductModel" aria-labelledby="exampleModalToggleLabel">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-success" id="exampleModalToggleLabel">&#9824; Edit Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <!-- ========== Edit Product Page ========== -->
          <section class="container">

            <div class="row" style="margin-top: -50px;">
              <div class="col-md-12">
                <div class="row justify-content-center">
                  <img src="https://edsystemsindia.com/wp-content/uploads/2016/01/cctv1.png" width="550" height="auto">
                  <button type="button" class="btn btn-danger rounded-0 w-50 btn-sm mt-3">Remove Photo</button>
                </div>
              </div>
              <div class="col-md-12 mt-4">
                <div class="mb-3">
                  <input type="text" class="form-control rounded-0 bg-light total-input-border" id="exampleFormControlInput1" placeholder="Enter Product Name...">
                </div>
                <div class="mb-3">
                  <select class="form-select rounded-0 bg-light total-input-border" id="inputGroupSelect01">
                    <option selected>Choose Category...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="mb-3">
                  <textarea class="form-control rounded-0 bg-light total-input-border" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Product Name..."></textarea>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="row justify-content-center">
                  <button type="button" class="btn btn-success rounded-0 btn-sm save-btn-success w-50">Save</button>
                </div>
              </div>
            </div>

          </section>
        </div>
      </div>
    </div>
  </div>



  <!-------- Delete Product Model --------->

  <div class="modal fade" id="DeleteProductModel" aria-labelledby="exampleModalToggleLabel2">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row justify-content-center">
            <i class="fas fa-exclamation-triangle fa-5x text-center text-danger mt-4"></i>
            <h2 class="text-center text-secondary mt-4">Are You Sure ?</h2>
            <p class="text-center text-secondary">Do You Really Want To Delete This Record..?</p>
            <div class="row mt-3 mb-4">
              <div class="col-6">
                <button class="btn btn-danger w-75 float-end" type="button">Delete</button>
              </div>
              <div class="col-6">
                <button class="btn btn-secondary w-75" type="button" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- ===================================================================================================================================================== -->







  <!-- =================== Footer ================== -->
  <?php include 'footer.php' ?>
  <!-------------------- End Footer ------------------->

</body>

</html>
<?php 
//unset($product_obj);
?>