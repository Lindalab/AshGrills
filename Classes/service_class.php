<?php 
    require_once("../Settings/db_class.php");


    class service extends db_connection{

        function createService($service_name, $cat_id, $time, $price, $service_image){
            $sql = "";
            return $this->db_query($sql);
        }

        function getAllService(){
            $sql = "";
            return $this->db_fetch_all($sql);
        }

        function getOneService($s_id){
            $sql = "";
            return $this->db_fetch_one($sql);
        }

        function updateService($s_id, $service_name, $cat_id, $time, $price){
            $sql = "";
            return $this->db_query($sql);
        }

        function deleteService($s_id){
            $sql = "";
            return $this->db_query($sql);
        }
    }


?>