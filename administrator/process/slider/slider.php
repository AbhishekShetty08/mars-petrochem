<?php
include("../../connection/phpmysqlconnect.php");
include ("../../lib/CRUD_lib.php");
include ("../../lib/miss_lib.php");

// post data

// File processing

$ext_array = array(
	"jpeg",
	"jpg",
	"png"
);
$mime_array = array(
	"image/jpeg",
	"image/jpg",
	"image/png"
);

$location = "../../media/slider/";
$image = new uploader();
echo $_FILES['image']['name'];
if ($image->upload_validate($_FILES['image'], $ext_array, $mime_array) == true){
	$image_name = $image->upload($_FILES['image'], $location);
	
	$column=array('slider');
	$value=array($image_name);
	$insert = new crud($conn, 'slider', $column, $value);
	$insert->insert();
	$move = new alert_redirect();
	$move->moveWithAlert('Slider has been added', '../../pages/slider.php');
	}
	$move = new alert_redirect();
	$move->moveWithAlert('Error in uploading image', '../../pages/slider.php');
?>
