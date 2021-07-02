<?php
 $con= mysqli_connect("127.0.0.1","root","","touch_and_feel");
$id=3;
//$delete_category=$_REQUEST['category'];
$select=mysqli_query($con,"select * from product_test where id='$id'");


while($row=mysqli_fetch_array($select))
{	
	unlink($row['image']);
}
$del="delete from product_test where id='$id'";
$qd=mysqli_query($con,$del);

if($qd)
{
    echo "rechord delete from student";

    //header("location:delete_category_image.php?name=$delete_category");
}
 else {
     echo "not delete";
}

?>