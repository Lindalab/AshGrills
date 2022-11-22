<?php

/**
 * This class hanldes all the database functions 
 */
require("../Settings/db_class.php");

class service_class  extends db_connection{
    // Insert
    public function insert_service_cls($s_id,$service,$time,$price,$service_image)
    {
        $mysql= "INSERT INTO `service`(`s_id`, `service`, `time`, `price`,`service_image`) VALUES ('$s_id','$service','$time','$price','$service_image')";
        return $this->db_query($mysql);
    }
    // select
   public function select_snacks_cls(){    
            $mysql ="SELECT * FROM `service`";
            
            return $this->db_fetch_all($mysql);
        }

    //update
    public function update_service_cls($s_id,$service,$time,$price,$service_image){
        $mysql = "UPDATE `service` SET `service`='$service',`time`='$time',`price`='$price',`service_image`='$service_image' WHERE `s_id`='$s_id'";
        return $this->db_query($mysql);
    }

    ///delete
    public function delete_service_cls($s_id){
       $mysql = "DELETE FROM `service` WHERE `s_id`='$s_id'"; 
       return $this->db_query($mysql);
    } 

}
?>