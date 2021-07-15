<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Edit Client | Complete Security Solution</title>
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
    require_once "class/Client_Class.php";
    $client_obj = new Client_Class();

    $client_id;
    if (empty($_GET['id'])) {
        $client_id = null;
    } else {
        $client_id = $_GET['id'];
    }
    $client_res = null;
    if (is_numeric($client_id)) {
        $client_res = $client_obj->get_client($client_id);
    }
    $fetched_client = null;
    if ($client_res != null) {
        $fetched_client = mysqli_fetch_array($client_res);
    }
    ?>

    <!-- ================================================================ Get Product Page ================================================================== -->
    <section class="container mt-5">
        <div class="row mt-5" style="margin-top: 90px;" data-aos="fade-up">
            <div class="col-md-12">
                <div class="d-grid gap-2">
                    <button class="alert alert-success rounded-0" type="button">Edit Client</button>
                </div>
            </div>

        </div>
        <?php
        if ($fetched_client != null) {
        ?>
            <form action="" name="addproduct" class="addimg-form" method="post" enctype="multipart/form-data">
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <input type="text" name="client_name" value="<?php echo $fetched_client['name']; ?>" placeholder="Enter Client Name..." required class="form-control rounded-0 bg-light total-input-border" id="productname">
                        </div>
                        <div class="mb-3">
                            <textarea name="client_detail" rows="3" placeholder="Enter Client Detail..." class="form-control rounded-0 bg-light total-input-border" required id="productdetail"><?php echo $fetched_client['detail']; ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-top: 53px;">
                        <div class='file file--upload'>
                            <label for='input-file'>
                                <i class="fas fa-paperclip fa-2x" style="transform: rotate(-43deg);"></i>
                                <strong id="uploaded-File">Upload Client Image...</strong>
                            </label>
                            <input name="client_img" id='input-file' accept="image/*" onchange="loadFile(event)" type='file' /><br>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img id="showimage" src="<?php echo $fetched_client['image']; ?>" style="width:320px !important;height:220px !important;" class="edit-image-1">
                        <img id="output" style="width:320px !important;height:220px !important;" class="edit-image-1" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row justify-content-center">
                            <button type="submit" name="btn_submit" class="btn btn-success rounded-0 btn-sm save-btn-success">Save</button>
                            <button style="margin-left:30px;" type="button" class="btn btn-danger rounded-0 btn-sm save-btn-success ml-3" data-bs-toggle="modal" href="#DeleteProductModel">Delete Client</button>
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
                        <button class="alert alert-danger rounded-0" type="button">Invalid Client Id</button>
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
                        <p class="text-center text-secondary">Do You Really Want To Delete This Client Detail..?</p>
                        <div class="row mt-3 mb-4">
                            <div class="col-6">
                                <form action="" name="delclient" method="post">
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

        $client_name = $_POST['client_name'];
        $client_detail = $_POST['client_detail'];
        $id = $fetched_client['id'];

        if ($client_detail != "" && $client_detail != "") {
            if ($_FILES["client_img"]["error"] == 4) {
                // alert('please Select File');
                // $b = $_FILES["product_img"]["tmp_name"];
                // $prod_img = "img/product/" . time() . "_" . $_FILES["product_img"]["name"];
                // $file_res = move_uploaded_file($b, $prod_img);
                $res = $client_obj->update_client($id, $client_name, $client_detail);
                if ($res) {
                    $client_name = "";
                    $client_detail = "";
                    $id = "";

    ?>
                    <script>
                        alert('Client Detail Updated Successfully');
                        location.href = 'client.php';
                    </script>
                <?php
                    //header("Location:product.php");
                } else {
                ?>
                    <script>
                        alert('Failded to Update Client Detail');
                    </script>
                    <?php
                }
            } else {
                $img_delete = unlink($fetched_client['image']);
                if ($img_delete) {
                    $b = $_FILES["client_img"]["tmp_name"];
                    $client_img = "../img/client/" . time() . "_" . $_FILES["client_img"]["name"];
                    $file_res = move_uploaded_file($b, $client_img);
                    if ($file_res == 1) {
                        $res = $client_obj->update_client_image($id, $client_name, $client_detail, $client_img);
                        if ($res) {
                            $id = "";
                            $client_name = "";
                            $client_detail = "";
                            $client_img = "";
                    ?>
                            <script>
                                alert('Client Detail Updated Successfully');
                                location.href = 'client.php';
                            </script>
                        <?php
                            // header("Location:./product.php");
                        } else {
                        ?>
                            <script>
                                alert('Failded to Update Client Detail');
                            </script>
                        <?php
                        }
                    } else {
                        ?>
                        <script>
                            alert('Failded to Upload Client Image');
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
        $client_id = $fetched_client['id'];
        $del_res = $client_obj->delete_client($client_id);
        if ($del_res) {
    ?>
            <script>
                alert('Client Deleted Successfully !');
                location.href = 'client.php';
            </script>
        <?php
        } else {
        ?>
            <script>
                alert('Failed Delete Client !');
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