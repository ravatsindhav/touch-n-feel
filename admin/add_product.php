<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Add Products | Complete Security Solon</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../img/core-img/logo.png" rel="icon">
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
        <form action="" name="addproduct" class="addimg-form" method="post" enctype="multipart/form-data">
            <div class="row mt-3">

                <div class="col-md-8">
                    <div class="mb-3">
                        <input type="text" required class="form-control rounded-0 bg-light total-input-border" id="productname" name="product_name" placeholder="Enter Product Name...">
                    </div>
                    <div class="mb-3">
                        <select class="form-select rounded-0 bg-light total-input-border" required id="productcategory" name="product_category">
                            <?php
                            $cat_res = $category_obj->getAllcategory();
                            while ($category_arr = mysqli_fetch_array($cat_res)) {
                                ?>
                                <option value="<?php echo $category_arr['id'];?>"><?php echo $category_arr['name'];?></option>
                                <?php
                            }
                            ?>
                            
                        </select>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control rounded-0 bg-light total-input-border" required id="productdetail" name="product_detail" rows="3" placeholder="Enter Product Description..."></textarea>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row justify-content-center">
                        <div class='file file--upload'>
                            <label for='input-file'>
                                <i class="fas fa-paperclip fa-2x" style="transform: rotate(-43deg);"></i>
                                <strong id="uploaded-File">Upload Product Image...</strong>
                            </label>
                            <input id='input-file' accept="image/*" name="product_img" type='file' />
                            <!-- <div id="file-upload-filename"></div> -->
                        </div>
                    </div>
                    <!-- <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                        <label class="custom-control-label" for="customCheck">Check this custom checkbox</label>
                    </div> -->
                </div>

            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="row justify-content-center">
                        <button type="submit" name="btn_submit" class="btn btn-success rounded-0 btn-sm save-btn-success">Save</button>
                    </div>
                </div>
            </div>
        </form>

    </section>
    <!-- for File Upload Name Script -->
    <script>
        var input = document.getElementById('input-file');
        var infoArea = document.getElementById('uploaded-File');

        input.addEventListener('change', showFileName);

        function showFileName(event) {

            // the change event gives us the input it occurred in 
            var input = event.srcElement;

            // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
            var fileName = input.files[0].name;

            // use fileName however fits your app best, i.e. add it into a div
            infoArea.textContent = 'File Name: ' + fileName;
        }
    </script>
    <?php
    if (isset($_POST['btn_submit'])) {

        $prod_name = $_POST['product_name'];
        $prod_detail = $_POST['product_detail'];
        $prod_category = $_POST['product_category'];

        if ($prod_name != "" && $prod_detail != "" && $prod_category != "") {
            if ($_FILES["product_img"]["error"] == 4) {
    ?>
                <script>
                    alert('please Select Product Image');
                </script>
                <?php
            } else {

                require_once "class/Product_Class.php";
                $product_obj = new Product_Class();

                $s = $product_obj->check_product_name($prod_name);

                if ($r = mysqli_fetch_array($s)) {
                ?>
                    <script>
                        alert('Product is Exist')
                    </script>
                    <?php
                } else {
                    $b = $_FILES["product_img"]["tmp_name"];
                    $prod_img = "../img/product/" . time() . "_" . $_FILES["product_img"]["name"];
                    $file_res = move_uploaded_file($b, $prod_img);
                    if ($file_res == 1) {
                        $res = $product_obj->add_product($prod_name, $prod_detail, $prod_category, $prod_img);
                        if ($res) {
                            $prod_name = "";
                            $prod_detail = "";
                            $prod_category = "";
                            $prod_img = null;
                            $b = null;

                    ?>
                            <script>
                                alert('Product Successfully Added');
                            </script>
                        <?php
                        echo "<meta http-equiv='refresh' content='0'>";
                        } else {
                        ?>
                            <script>
                                alert('Failed to Add Product');
                            </script>
                        <?php
                        }
                    } else {
                        ?>
                        <script>
                            alert('Failed to Upload Image');
                        </script>
    <?php
                    }
                }
            }
        }
    }
    ?>

    <!-- =================== Footer ================== -->
    <?php include 'footer.php' ?>
    <!-------------------- End Footer ------------------->

</body>

</html>
<?php 
//unset($product_obj);
?>