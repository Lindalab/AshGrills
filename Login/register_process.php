<?php
include("../Controllers/customer_controller.php");

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $name = $_POST['name'];
    $Password = $_POST["password"];
    $Password=password_hash($Password,PASSWORD_DEFAULT);
    $Number = $_POST['number'];
    $Businessname = $_POST['business_name'];
    $student_id = $_POST['student_Id'];
    $user_role=2;

    $check=customer_register_ctr($email, $name, $Password, $Number, $Businessname,
     $student_id,$user_role);

    // return $check;

    if($check){
        echo "Record inserted";
        header ('Location:login.php');
        
    }else{
        echo"Insertion Failed";
        
    }


    }


    
   ?> 