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
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/admin.css" rel="stylesheet">
</head>


</style>


<body>

    <!-- ================== Header ================ -->
    <?php include 'header.php' ?>
    <!------------------ End Header ----------------->

    <!-- ================================================================ Add Product Page ================================================================== -->
    <section class="container mt-5">
        <div class="row mt-5" style="margin-top: 90px;" data-aos="fade-up">
            <div class="col-md-12">
                <div class="d-grid gap-2">
                    <button class="alert alert-success rounded-0" type="button">Add New Product</button>
                </div>
            </div>
        </div>
        <div class="row mt-3">

            <div class="col-md-8">
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
                    <input type="text" class="form-control rounded-0 bg-light total-input-border" id="exampleFormControlInput1" placeholder="Enter Product Name...">
                </div>
            </div>

            <div class="col-md-4">
                <div class="row justify-content-center">
                    <div class='file file--upload'>
                        <label for='input-file'>
                            <i class="fas fa-paperclip fa-2x" style="transform: rotate(-43deg);"></i><strong>Upload Image...</strong>
                        </label>
                        <input id='input-file' type='file' />
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="row justify-content-center">
                    <button type="button" class="btn btn-success rounded-0 btn-sm save-btn-success">Save</button>
                </div>
            </div>
        </div>

    </section>






    <!-- =================== Footer ================== -->
    <?php include 'footer.php' ?>
    <!-------------------- End Footer ------------------->

</body>

</html>