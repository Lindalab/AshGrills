<?php 
    require_once("../Controllers/booking_controller.php");

    $appointment_id = $_GET['appointment_id']; 
    $s_id = $_GET['s_id'];
    $customer_id = $_GET['customer_id']; $optional_name = $_GET['optional_name']; $optional_email = $_GET['optional_email'];
    
  
    $result = create_booking($appointment_id, $s_id, $customer_id, $optional_name, $optional_email);

    if($result){
        echo "success";
    }else{
        echo "failed";
    }
    
?>