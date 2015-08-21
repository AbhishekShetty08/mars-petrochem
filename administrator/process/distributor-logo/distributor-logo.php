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

$location = "../../media/distributor-logo/";
$image = new uploader();

if ($image->upload_validate($_FILES['files'], $ext_array, $mime_array) == true){
	$image_name = $image->upload($_FILES['files'], $location);
	
	$column=array('logo');
	$value=array($image_name);
	$insert = new crud($conn, 'distributor_logo', $column, $value);
	$insert->insert();
	$move = new alert_redirect();
	$move->moveWithAlert('Logo has been added', '../../pages/distributor-logo.php');
	}
	$move->moveWithAlert('Error in uploading image', '../../pages/distributor-logo.php');
?>