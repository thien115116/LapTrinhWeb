<?php
$productname = isset($_POST['productname'])?$_POST['productname']:'';
if($productname == '')
	{
	header('location:vd5.html');
	}
echo "Tên Sản Phẩm Là: $productname <hr>" ;
$type=['image/jpeg','image/png','image/bmp','image/gif'];
if($_FILES['img']['error'] == 0)
{
	$t = $_FILES['img']['type'];
	if(!in_array($t, $type))
	{
		echo "Khong phai file hinh !" ; 
		exit;
	}
	else
	{
	$tenfile=$_FILES['img']['name'];
	echo "File Hình upload là: $tenfile ";
	move_uploaded_file($_FILES['img']['tmp_name'], "img/$tenfile");
	echo "<br> <img src='img/$tenfile' style='width:500px' >";
	}
}
?>