<?php 
    require_once("../Settings/db_class.php");

    class Appointment extends db_connection{


        function createAppointment($appointment_date, $appointment_day, $appoint_time){
            $sql = "";

            return $this->db_query($sql);
        }

        function deleteAppointment($appointment_id){
            $sql = "";

            return $this->db_query($sql);
        }

        function updateAppointment($appointment_date, $appointment_day, $appoint_time){
            $sql = "";

            return $this->db_query($sql);
        }

        function getAllAppointment(){
            $sql = "";

            return $this->db_fetch_all($sql);
        }

        function getOneAppointment($s_id){
            $sql = "";

            return $this->db_fetch_one($sql);
        }
    }

?>