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
    <?php
    //for Category class
    $cat_obj = new Category_Class();
    $all_category = $cat_obj->getAllcategory();
    ?>


    <!-- ================================================================ Category Page ================================================================== -->
    <section class="container mt-5" style="margin-top: 90px;">
        <!------------------------ ALl Category & Add  Category button --------------------->
        <div class="row mt-3" style="margin-top: 90px;">
            <div class="col-md-10">
                <div class="d-grid gap-2">
                    <button class="btn btn-success rounded-0" style="background-color:#D4EDDA;color:green;" type="button">All Categories</button>
                </div>
            </div>
            <div class="col-md-2">
                <div class="d-grid gap-2">
                    <button class="btn btn-success rounded-0" type="button" data-bs-toggle="modal" href="#AddModel" role="button">Add New Category</button>
                </div>
            </div>
        </div>
        <!------------------------ End ALl Category & Add  Category button --------------------->

        <!-- Show All Categories -->
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

                    <?php
                    while ($category_array = mysqli_fetch_array($all_category)) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $category_array['id']; ?></th>
                            <td><?php echo $category_array['name']; ?></td>
                            <td class="overflow-auto"><?php echo $category_array['detail']; ?></td>
                            <td>
                                <!-- Edit Button -->
                                <form action="" name="editcategory_dialog" class="addimg-form" method="post">
                                    <input type="hidden" name="edit_id_dialog" value="<?php echo $category_array['id']; ?>">
                                    <button type="submit" name="btn_edit_dialog"  class="btn btn-default text-success btn-right-1">
                                        <a class="fas fa-edit icon-size text-success" href="edit_category.php?id=<?php echo $category_array['id'];?>"></a>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
        <!-- eND Show All Categories -->
    </section>


    <!-------- Add Product Model --------->
    <div class="modal fade bd-example-modal-lg" id="AddModel" aria-labelledby="exampleModalToggleLabel">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-success" id="exampleModalToggleLabel">Add Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <section class="container">
                        <form action="" name="addcategory" class="addimg-form" method="post">
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
    <!-------- End Add Product Model --------->





    <!-------- Add Product Binding --------->
    <?php
    if (isset($_POST['btn_submit'])) {
        $cat_name = $_POST['name'];
        $cate_detail = $_POST['detail'];
        if ($cat_name != "" && $cate_detail != "") {

            $check = $cat_obj->check_category_name($cat_name);

            if ($check_cat = mysqli_fetch_array($check)) {
    ?>
                <script>
                    alert('Category Name is Exist')
                </script>
                <?php
            } else {
                $add_res = $cat_obj->add_category($cat_name, $cate_detail);
                if ($add_res) {
                ?>
                    <script>
                        alert('Category Successfully Added');
                    </script>
                <?php
                  echo "<meta http-equiv='refresh' content='0'>";
                } else {
                ?>
                    <script>
                        alert('Failed to Add Category');
                    </script>
    <?php
                }
            }
        }
    }
    ?>
    <!-------- End Add Product Binding --------->

    <!-- =================== Footer ================== -->
    <?php include 'footer.php' ?>
    <!-------------------- End Footer ------------------->
</body>

</html>