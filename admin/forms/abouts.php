<?php 
session_start();
if (empty($_SESSION['this_user_id'])) {
   $_SESSION['errorLogin'] = "Access Denied!";
   header('location: login.php');
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
}

if(isset($_POST['submit'])){

    extract($_POST);

    if (empty($_FILES["image1"]["name"]) || empty($_FILES["image2"]["name"]) || empty($_FILES["image3"]["name"])) {
    // At least one of the images is empty
    // Handle the error here
 

        
            $data = [
                       'category' => $category,
                       'company' => $company,
                       'vision' => $vision,
                       'link' => $link,
                       'date_posted' => $today,
                    ];
                    echo "Link value: " . $link . "<br>";
       
            $create = $crud->Create($data,"abouts");


            if($create) {
                $_SESSION['message']= '<script>alert("Data Uploaded!");</script>';
                // echo $create;
                echo '<script>window.location.assign("../view-portfolio.php");</script>';
            } 
             else {
            
       
            $_SESSION['message']= '<script>alert("Data not Added!");</script>';
            echo '<script>window.location.assign("../view-portfolio.php");</script>';
        }
    }
    else {
            $target_dir = "../images/index/";
            $uploadOk = 1;

            for ($i = 1; $i <= 3; $i++) {
                $target_file = $target_dir . md5(time()) . basename($_FILES["image{$i}"]["name"]);
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                $check = getimagesize($_FILES["image{$i}"]["tmp_name"]);

                if ($check === false) {
                    $uploadOk = 0;
                    break;
                }

                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                    $uploadOk = 0;
                    break;
                }

                if (move_uploaded_file($_FILES["image{$i}"]["tmp_name"], $target_file)) {
                    // File uploaded successfully
                     $data["image{$i}"] = $target_file;
                } else {
                    // Error uploading file
                    $uploadOk = 0;
                    break;
                }
            }

                if ($uploadOk) {
                    $data['category'] = $category;
                    $data['company'] = $company;
                    $data['vision'] = $vision;
                    $data['link'] = $link;
                    $data['date_posted'] = $today;
                    $create = $crud->Create($data,"abouts");
                    if($create) {
                        $_SESSION['message']= '<script>alert("Post Uploaded with Image");</script>';
                        echo "<script>window.location.assign('../view-portfolio.php');</script>";
                    }
                }
}
}
?>
