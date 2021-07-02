<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Category | Complete Security Solon</title>
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

    <!-- ================================================================ Category Page ================================================================== -->
    <section class="container mt-5" style="margin-top: 90px;">
        <!------------------------ Add Product & Category Dropdown --------------------->
        <div class="row mt-5" data-aos="fade-up">
            <div class="col-md-12">
                <div class="d-grid gap-2">
                    <button class="alert alert-success rounded-0" type="button">All Category</button>
                </div>
            </div>
        </div>
        <div class="row mt-3" style="margin-top: 90px;" data-aos="fade-up">
            <div class="col-md-9">
                <div class="input-group mb-3">
                    <select class="form-select border-success bg-light rounded-0" id="inputGroupSelect01">
                        <option selected>Choose Category...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <label class="input-group-text btn btn-success rounded-0 px-4" for="inputGroupSelect01">Apply</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="d-grid gap-2">
                    <button class="btn btn-success rounded-0" type="button" data-bs-toggle="modal" href="#AddModel" role="button">
                        Add New Category
                    </button>
                </div>
            </div>
        </div>

        <div class="table-responsive mt-3" data-aos="fade-up">
            <table class="table table-hover table-border border-light">
                <thead>
                    <tr scope="row">
                        <th scope="col" class="table-success text-success p-2">#</th>
                        <th scope="col" class="table-success text-success p-2">Name</th>
                        <th scope="col" class="table-success text-success p-2">Discription</th>
                        <th scope="col" class="table-success text-success p-2"><span class="float-end">Action</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>CCTV Survailance</td>
                        <td class="overflow-auto">A pixel is the smallest unit value to render something with.</td>
                        <td>
                            <button type="button" class="btn btn-default text-danger btn-right-1">
                                <i class="fas fa-trash-alt icon-size"></i>
                            </button>
                            <button type="button" class="btn btn-default text-success btn-right-1">
                                <i class="fas fa-edit icon-size"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>First Class Security</td>
                        <td>We Provide total customized solutions with World-Class Technology & Quality Products.</td>
                        <td>
                            <button type="button" class="btn btn-default text-danger btn-right-1">
                                <i class="fas fa-trash-alt icon-size"></i>
                            </button>
                            <button type="button" class="btn btn-default text-success btn-right-1">
                                <i class="fas fa-edit icon-size"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Audio Visual Systems</td>
                        <td>Our strength lies in delivering best technology solutions and customer experience.</td>
                        <td>
                            <button type="button" class="btn btn-default text-danger btn-right-1">
                                <i class="fas fa-trash-alt icon-size"></i>
                            </button>
                            <button type="button" class="btn btn-default text-success btn-right-1">
                                <i class="fas fa-edit icon-size"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>


    <!-------- Edit Product Model --------->

    <div class="modal fade bd-example-modal-lg" id="AddModel" aria-labelledby="exampleModalToggleLabel">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-success" id="exampleModalToggleLabel">Add Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <section class="container">
                        <form action="" name="addproduct" class="addimg-form" method="post">
                            <div class="row" style="margin-top: -50px;">

                                <div class="col-md-12 mt-4">
                                    <div class="mb-3">
                                        <input type="text" name="name" class="form-control rounded-0 bg-light total-input-border" id="exampleFormControlInput1" required placeholder="Enter Category Name...">
                                    </div>

                                    <div class="mb-3">
                                        <textarea name="detail" class="form-control rounded-0 bg-light total-input-border" id="exampleFormControlTextarea1" rows="3" required placeholder="Enter Category Detail..."></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row justify-content-center">
                                        <button type="submit" name="btn_submit" class="btn btn-success rounded-0 btn-sm save-btn-success w-50">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>

<?php 
 if (isset($_POST['btn_submit'])){
    $prod_name = $_POST['name'];
    $prod_detail = $_POST['detail'];
    if($prod_name!="" && $prod_detail!=""){

    }

 }
?>


    <!-- =================== Footer ================== -->
    <?php include 'footer.php' ?>
    <!-------------------- End Footer ------------------->

</body>

</html>