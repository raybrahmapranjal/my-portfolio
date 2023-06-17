<?php 
session_start();
error_reporting(E_ALL);

if (empty($_SESSION['this_user_id'])) {
   $_SESSION['errorLogin'] = "Access Denied!";
   header('location: login');
   exit();
} else {
   include '../classes/Crud.php';
   $crud = new Crud();
   date_default_timezone_set("Asia/Kolkata");
   $today = date("Y-m-d");
   $time = date("H:i:s");
   // $sessionName =  $_SESSION['this_user_name'];
   $userType = $_SESSION['userType'];
   $userID = $_SESSION['this_user_id'];

   $portfolioID = $_GET['id'];
   $ifExists = $crud->Count("abouts","`abouts_id`='$portfolioID'");
   if ($ifExists>0) {
       $crud->Delete("abouts","`abouts_id`='$portfolioID'");
        echo '<script>alert("File Has Been Removed.");</script>';
       echo '<script>window.location.assign("../view-portfolio.php");</script>';
   }
   else{
        echo '<script>alert("File Does Not Exist");</script>';

        echo '<script>window.location.assign("../view-portfolio.php");</script>';
   }
}

?>