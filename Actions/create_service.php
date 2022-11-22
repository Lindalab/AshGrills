<?php
    require_once("../Controllers/service_controller.php");


    $service_name = $_GET['service_name'];
    $cat_id = $_GET['cat_id'];
    $time = $_GET['time'];
    $price = $_GET['price'];

    $user_file_name = $_FILES['user_image']['name'];
    $target_dir = "../images/service/";
    $full_dir = $target_dir.$user_file_name;
    $image = "../images/service/".$user_file_name;
        
    $move = move_uploaded_file($_FILES["user_image"]['tmp_name'], $full_dir);

    if($move){
        $created = createService_ctr($service_name, $cat_id, $time, $price, $service_image);
        if($created){
            echo "<script>alert('Service Created Successfully')</script>";
            header("location: ../View/index.php");
        }else{
            echo "<script>alert('Failed')</script>";
        }
    }else{
        echo "<script>alert('Failed Upload With Image')</script>";
    }
 

?>