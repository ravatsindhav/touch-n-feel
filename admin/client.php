<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Client | Complete Security Solon</title>
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
    <?php
    require_once "class/Client_Class.php";
    $client_obj = new Client_Class();
    $client_res = $client_obj->getAllclient();
    ?>
    <!-- ================================================================ Category Page ================================================================== -->
    <section class="container mt-5" style="margin-top: 90px;">
        <!------------------------ Add Product & Category Dropdown --------------------->


        <div class="row mt-5">
            <div class="col-md-12">
                <h4 class="alert alert-default text-light text-center p-2 rounded-0" style="background: #3498db;">All Valued Customers</h4>
            </div>
        </div>
        <!------------------------ ALl Category & Add  Category button --------------------->
        <div class="row mt-3" style="margin-top: 90px;">
            <div class="col-md-10">
                <div class="d-grid gap-2">
                    <button class="btn btn-success rounded-0" style="background-color:#D4EDDA;color:green;" type="button">All Clients</button>
                </div>
            </div>
            <div class="col-md-2">
                <div class="d-grid gap-2">
                    <button class="btn btn-success rounded-0" type="button" data-bs-toggle="modal" href="#AddModel" role="button">Add New Client</button>
                </div>
            </div>
        </div>
        <!------------------------ End ALl Category & Add  Category button --------------------->


        <div class="row mt-3">

            <?php
            while ($client_arr = mysqli_fetch_array($client_res)) {
            ?>
                <div class="col-md-6">
                    <div class="card rounded-0 border-0 shadow-sm mb-1" style="background-color: #d7dedd">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-10">
                                    <h4 class="ml-4"> <?php echo $client_arr['name']; ?></h4>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" name="btn_edit_dialog" class="btn btn-default text-success btn-right-1">
                                        <a class="fas fa-edit icon-size text-success" href="edit_client.php?id=0"></a>
                                    </button>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <p><?php echo $client_arr['detail']; ?></p>
                                </div>
                                <div class="col-md-6">
                                    <img src="<?php echo $client_arr['image']; ?>" style="width: 280px; height: 240px;">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            <?php
            }
            ?>



        </div>

        <!-- <div class="row mt-5" data-aos="fade-up">
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
                    <button class="btn btn-success rounded-0" type="button">Add New Category</button>
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
        </div> -->
    </section>

    <!-------- Add Client Model --------->
    <div class="modal fade bd-example-modal-lg" id="AddModel" aria-labelledby="exampleModalToggleLabel">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-success" id="exampleModalToggleLabel">Add Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <section class="container">
                        <form action="" name="addclient" class="addimg-form" method="post" enctype="multipart/form-data">
                            <div class="row" style="margin-top: -50px;">

                                <div class="col-md-12 mt-4">
                                    <div class="mb-3">
                                        <input type="text" name="name" placeholder="Enter Client Name..." class="form-control rounded-0 bg-light total-input-border" id="exampleFormControlInput1" required>
                                    </div>

                                    <div class="mb-2">
                                        <textarea name="detail" placeholder="Enter Client Detail..." class="form-control rounded-0 bg-light total-input-border" id="exampleFormControlTextarea1" rows="2" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class='file file--upload'>
                                        <label for='input-file'>
                                            <i class="fas fa-paperclip fa-2x" style="transform: rotate(-43deg);"></i>
                                            <strong id="uploaded-File">Upload Image...</strong>
                                        </label>
                                        <input name="client_img" id='input-file' accept="image/*" onchange="loadFile(event)" type='file' /><br>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center mt-2">
                                <img id="output" style="width:420px !important;height:250px !important;" class="edit-image-1" />
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
    <!-------- End Add Client Model --------->

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

    <!-- For Add Client -->
    <?php
    if (isset($_POST['btn_submit'])) {

        $client_name = $_POST['name'];
        $client_detail = $_POST['detail'];

        if ($client_name != "" && $client_detail != "") {
            if ($_FILES["client_img"]["error"] == 4) {
    ?>
                <script>
                    alert('please Select Client Image');
                </script>
                <?php
            } else {

                $s = $client_obj->check_client_name($client_name);

                if ($r = mysqli_fetch_array($s)) {
                ?>
                    <script>
                        alert('Client Name is Exist')
                    </script>
                    <?php
                } else {
                    $b = $_FILES["client_img"]["tmp_name"];
                    $client_img = "../img/client/" . time() . "_" . $_FILES["client_img"]["name"];
                    $file_res = move_uploaded_file($b, $client_img);
                    if ($file_res == 1) {
                        $res = $client_obj->add_client($client_name, $client_detail, $client_img);
                        if ($res) {
                            $client_name = "";
                            $client_detail = "";
                            $client_img = null;
                            $b = null;

                    ?>
                            <script>
                                alert('Client Detail Added Successfully');
                            </script>
                        <?php
                            echo "<meta http-equiv='refresh' content='0'>";
                        } else {
                        ?>
                            <script>
                                alert('Failed to Add Client Detail');
                            </script>
                        <?php
                        }
                    } else {
                        ?>
                        <script>
                            alert('Failed to Upload Client Image');
                        </script>
    <?php
                    }
                }
            }
        }
    }
    ?>
    <!-- End Add Client -->



    <!-- =================== Footer ================== -->
    <?php include 'footer.php' ?>
    <!-------------------- End Footer ------------------->

</body>

</html>