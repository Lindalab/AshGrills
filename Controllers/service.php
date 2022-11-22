<?php
//connect to the user account class
include("../Classes/service.php");

//sanitize data




//--INSERT--//

function insert_service_ctr($s_id,$service,$time,$price,$image)
{
    $insertservice= new service_class();

    return $insertservice->insert_service_cls($s_id,$service,$time,$price,$image);
}

function select_snacks_ctr()
{
    $selectservice= new service_class();

    return $selectservice->select_snacks_cls();
}


function update_service_ctr($s_id,$service,$time,$price,$service_image)
{
    $updateservice= new service_class();

    return $updateservice->update_service_cls($s_id,$service,$time,$price,$service_image);
}

function  delete_service_ctr($s_id)
{
    $selectservice= new service_class();

    return $selectservice-> delete_service_cls($s_id);
}








?>