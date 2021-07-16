<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Edit Category | Complete Security Solon</title>
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
    require_once "class/Product_Class.php";
    $prod_obj = new Product_Class();

    $product_id;
    if (empty($_GET['id'])) {
        $product_id = null;
    } else {
        $product_id = $_GET['id'];
    }
    $prod_res = null;
    if (is_numeric($product_id)) {
        $prod_res = $prod_obj->get_product($product_id);
    }
    $fetched_product = null;
    if ($prod_res != null) {

        $fetched_product = mysqli_fetch_array($prod_res);
    }
    ?>

    <!-- ================================================================ Get Product Page ================================================================== -->
    <section class="container mt-5">
        <div class="row mt-5" style="margin-top: 90px;" data-aos="fade-up">
            <div class="col-md-12">
                <div class="d-grid gap-2">
                    <button class="alert alert-success rounded-0" type="button">Edit Product</button>
                </div>
            </div>

        </div>
        <?php
        if ($fetched_product != null) {
        ?>
            <form action="" name="addproduct" class="addimg-form" method="post" enctype="multipart/form-data">
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <input type="text" name="product_name" value="<?php echo $fetched_product['name']; ?>" placeholder="Enter Product Name..." required class="form-control rounded-0 bg-light total-input-border" id="productname">
                        </div>
                        <div class="mb-3">
                            <select class="form-select rounded-0 bg-light total-input-border" required id="productcategory" name="product_category">
                                <?php
                                $cat_res = $category_obj->getAllcategory();
                                while ($category_arr = mysqli_fetch_array($cat_res)) {
                                    if ($category_arr['id'] == $fetched_product['category_id']) {
                                ?>
                                        <option value="<?php echo $category_arr['id']; ?>" selected><?php echo $category_arr['name']; ?></option>
                                    <?php
                                    } else {
                                    ?>
                                        <option value="<?php echo $category_arr['id']; ?>"><?php echo $category_arr['name']; ?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <textarea name="product_detail" rows="3" placeholder="Enter Product Description..." class="form-control rounded-0 bg-light total-input-border" required id="productdetail"><?php echo $fetched_product['detail']; ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-top: 53px;">
                        <div class='file file--upload'>
                            <label for='input-file'>
                                <i class="fas fa-paperclip fa-2x" style="transform: rotate(-43deg);"></i>
                                <strong id="uploaded-File">Upload Product Image...</strong>
                            </label>
                            <input id='input-file' accept="image/*" onchange="loadFile(event)" name="product_img" type='file' /><br>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img id="showimage" src="<?php echo $fetched_product['image']; ?>" style="width:620px !important;height:250px !important;" class="edit-image-1">
                        <img id="output" style="width:620px !important;height:250px !important;" class="edit-image-1" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row justify-content-center">
                            <button type="submit" name="btn_submit" class="btn btn-success rounded-0 btn-sm save-btn-success">Save</button>
                            <button style="margin-left:30px;" type="button" class="btn btn-danger rounded-0 btn-sm save-btn-success ml-3" data-bs-toggle="modal" href="#DeleteProductModel">Delete Product</button>
                        </div>
                    </div>
                </div>
            </form>
        <?php
        } else {
        ?>
            <div class="row mt-5" style="margin-top: 90px;" data-aos="fade-up">
                <div class="col-md-12">
                    <div class="d-grid gap-2">
                        <button class="alert alert-danger rounded-0" type="button">Invalid Product Id</button>
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
                        <p class="text-center text-secondary">Do You Really Want To Delete This Product..?</p>
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


    <!-- for File Upload Name Script -->
    <script>
        var input = document.getElementById('input-file');
        var infoArea = document.getElementById('uploaded-File');
        var showimage = document.getElementById('showimage');
        var image = document.getElementById('output');
        image.style.display = "none";

        input.addEventListener('change', showFileName);

        function showFileName(event) {

            // the change event gives us the input it occurred in 
            var input = event.srcElement;

            // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
            var fileName = input.files[0].name;

            // use fileName however fits your app best, i.e. add it into a div
            infoArea.textContent = 'File Name: ' + fileName;
            showimage.style.display = "none";
        }
        var loadFile = function(event) {
            var showimage = document.getElementById('showimage');
            var image = document.getElementById('output');
            image.style.display = "block";
            image.src = URL.createObjectURL(event.target.files[0]);
            showimage.style.display = "none";
        };
    </script>

    <!-- Update Product Binding -->
    <?php
    if (isset($_POST['btn_submit'])) {

        $prod_name = $_POST['product_name'];
        $prod_detail = $_POST['product_detail'];
        $prod_category = $_POST['product_category'];
        $prod_id = $fetched_product['id'];

        if ($prod_name != "" && $prod_detail != "" && $prod_category != "") {
            if ($_FILES["product_img"]["error"] == 4) {
                // alert('please Select File');
                // $b = $_FILES["product_img"]["tmp_name"];
                // $prod_img = "img/product/" . time() . "_" . $_FILES["product_img"]["name"];
                // $file_res = move_uploaded_file($b, $prod_img);
                $res = $prod_obj->update_product($prod_id, $prod_name, $prod_detail, $prod_category);
                if ($res) {
                    $prod_name = "";
                    $prod_detail = "";
                    $prod_category = "";
                    $prod_id = "";

    ?>
                    <script>
                        alert('Product Updated Successfully');
                        location.href = 'product.php';
                    </script>
                <?php
                    //header("Location:product.php");
                } else {
                ?>
                    <script>
                        alert('Failded to Update Product');
                    </script>
                    <?php
                }
            } else {
                $img_delete = unlink($fetched_product['image']);
                if ($img_delete) {
                    $b = $_FILES["product_img"]["tmp_name"];
                    $prod_img = "../img/product/" . time() . "_" . $_FILES["product_img"]["name"];
                    $file_res = move_uploaded_file($b, $prod_img);
                    if ($file_res == 1) {
                        $res = $prod_obj->update_product_image($prod_id, $prod_name, $prod_detail, $prod_category, $prod_img);
                        if ($res) {
                            $prod_name = "";
                            $prod_detail = "";
                            $prod_category = "";
                            $prod_id = "";
                    ?>
                            <script>
                                alert('Product Updated Successfully');
                                location.href = 'product.php';
                            </script>
                        <?php
                            // header("Location:./product.php");
                        } else {
                        ?>
                            <script>
                                alert('Failded to Update Product');
                            </script>
                        <?php
                        }
                    } else {
                        ?>
                        <script>
                            alert('Failded to Upload Product Image');
                        </script>
    <?php

                    }
                }
            }
        }
    }
    ?>
    <!-- End Update Product Binding -->

    <!-- Update Product Binding -->
    <?php
    if (isset($_POST['btn_delete'])) {
        $prod_id = $fetched_product['id'];
        $del_res = $prod_obj->delete_product($prod_id);
        if ($del_res) {
    ?>
            <script>
                alert('Product Deleted Successfully !');
                location.href = 'product.php';
            </script>
        <?php
        } else {
        ?>
            <script>
                alert('Failed Delete Product !');
                //location.href = 'product.php';
            </script>
    <?php
        }
    }
    ?>



    <!-- =================== Footer ================== -->
    <?php include 'footer.php' ?>
    <!-------------------- End Footer ------------------->

</body>

</html>