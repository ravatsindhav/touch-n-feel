<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Edit Category| Complete Security Solon</title>
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

    <!-- Get Product id -->
    <?php
    require_once "class/Category_Class.php";
    $cat_obj = new Category_Class();


    $cat_id;
    if (empty($_GET['id'])) {
        $cat_id = null;
    } else {
        $cat_id = $_GET['id'];
    }
    $cat_res = null;
    $fetched_category = null;
    if (is_numeric($cat_id)) {
        $cat_res = $cat_obj->get_category($cat_id);
    }
    if($cat_res != null) {
        $fetched_category = mysqli_fetch_array($cat_res);
    }
    ?>

    <!-- ================================================================ Get Product Page ================================================================== -->
    <section class="container mt-5">
        <div class="row mt-5" style="margin-top: 90px;" data-aos="fade-up">
            <div class="col-md-12">
                <div class="d-grid gap-2">
                    <button class="alert alert-success rounded-0" type="button">Edit Category</button>
                </div>
            </div>

        </div>
        <?php
        if ($fetched_category) {
        ?>
            <form action="" name="addproduct" class="addimg-form" method="post" enctype="multipart/form-data">
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <input type="text" name="name" value="<?php echo $fetched_category['name']; ?>" placeholder="Enter Category Name..." required class="form-control rounded-0 bg-light total-input-border" id="productname">
                        </div>
                        <div class="mb-3">
                            <textarea name="detail" rows="3" placeholder="Enter Category Description..." class="form-control rounded-0 bg-light total-input-border" required id="productdetail"><?php echo $fetched_category['detail']; ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row justify-content-center">
                            <button type="submit" name="btn_submit" class="btn btn-success rounded-0 btn-sm save-btn-success">Save</button>
                            <!-- <i class="fas fa-trash-alt icon-size" data-bs-toggle="modal" href="#DeleteProductModel" role="button"></i> -->
                            <button style="margin-left:30px;" type="button" class="btn btn-danger rounded-0 btn-sm save-btn-success ml-3" data-bs-toggle="modal" href="#DeleteProductModel">Delete Category</button>
                        </div>
                    </div>
                </div>
            </form>
        <?php
        }
        else{
            ?>
             <div class="row mt-5" style="margin-top: 90px;" data-aos="fade-up">
            <div class="col-md-12">
                <div class="d-grid gap-2">
                    <button class="alert alert-danger rounded-0" type="button">Invalid  Category</button>
                </div>
            </div>

        </div>
            <?php
        }
        ?>
    </section>


    <!-------- Delete Product Model --------->

    <div class="modal fade" id="DeleteProductModel" aria-labelledby="exampleModalToggleLabel2">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <i class="fas fa-exclamation-triangle fa-5x text-center text-danger mt-4"></i>
                        <h2 class="text-center text-secondary mt-4">Are You Sure ?</h2>
                        <p class="text-center text-secondary">Do You Really Want To Delete This Category..?</p>
                        <div class="row mt-3 mb-4">
                            <div class="col-6">
                                <form action="" name="delproduct" method="post">
                                    <button type="submit" name="btn_delete" class="btn btn-danger w-75 float-end" type="button">Delete</button>
                                </form>
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
    <!-------- End Delete Product Model --------->



    <!-- Update Product Binding -->
    <?php
    if (isset($_POST['btn_submit'])) {

        $cat_name = $_POST['name'];
        $cat_detail = $_POST['detail'];

        $cat_id = $fetched_category['id'];

        if ($cat_name != "" && $cat_detail != "") {
            $edit_res = $cat_obj->update_category($cat_id, $cat_name, $cat_detail);
            if ($edit_res) {
                $$cat_name = "";
                $cat_detail = "";
                $cat_id = "";
    ?>
                <script>
                    alert('Category Updated Successfully');
                    location.href = 'category.php';
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert('Failed Updated Category');
                    //location.href = 'category.php';
                </script>
    <?php
                echo "<meta http-equiv='refresh' content='0'>";
            }
        }
    }
    ?>
    <!-- End Update Product Binding -->

    <!-- Update Product Binding -->
    <?php
    if (isset($_POST['btn_delete'])) {
        $cat_id = $fetched_category['id'];
        $check_cat_prod = $cat_obj->check_category_product($cat_id);
        if ($r = mysqli_fetch_array($check_cat_prod)) {
    ?>
            <script>
                alert('Product Exist in This Category !');
            </script>
            <?php
            echo "<meta http-equiv='refresh' content='0'>";
        } else {
            $del_res = $cat_obj->delete_category($cat_id);
            if ($del_res) {
            ?>
                <script>
                    alert('Category Deleted Successfully !');
                    location.href = 'category.php';
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert('Failed Delete Category !');
                    //location.href = 'product.php';
                </script>
    <?php
            }
        }
    }
    ?>



    <!-- =================== Footer ================== -->
    <?php include 'footer.php' ?>
    <!-------------------- End Footer ------------------->

</body>

</html>