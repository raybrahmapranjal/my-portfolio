<?php 
include '../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("abouts","`abouts_id`='$dataId'");

if ($readEnquiry) {

	$data['company']= $readEnquiry[0]['company'];
	$data['vision']= $readEnquiry[0]['vision'];
	$data['link']= $readEnquiry[0]['link'];
	$data['image']= $readEnquiry[0]['image1'];
	$data['image2']= $readEnquiry[0]['image2'];
	$data['image3']= $readEnquiry[0]['image3'];
	$data['category']= $readEnquiry[0]['category'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>