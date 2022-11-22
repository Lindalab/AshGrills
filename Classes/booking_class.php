<?php 
    require_once("../Settings/db_class.php");

    class Booking extends db_connection{

        function create_booking($appointment_id, $s_id, $customer_id, $optional_name, $optional_email){
            $sql = "";

            return $this->db_query($sql);
        }

        function update_booking($book_id, $appointment_id, $s_id, $customer_id, $optional_name, $optional_email){
            $sql = "";

            return $this->db_query($sql);
        }

        function delete_booking($book_id){
            $sql = "";

            return $this->db_query($sql);
        }

        function getOneBooking($book_id){
            $sql = " ";
            return $this->db_fetch_one($sql);
        }

        function getAllBooking(){
            $sql = " ";
            return $this->db_fetch_all($sql);
        }

        function insertIntoBookedSlot($book_id, $order_id, $currency, $payment_date){
            $sql = "";

            return $this->db_query($sql);
        }

        function updateBookedSlots($book_id, $order_id, $currency, $payment_date){
            $sql = "";

            return $this->db_query($sql);
        }

        function deleteBookedSlots($booked_slot_id){
            $sql = "";

            return $this->db_query($sql);
        }


        function getAllBookedSlots(){
            $sql = "";

            return $this->db_fetch_all($sql);
        }

        function getOneBookingSlot($book_slot_id){
            $sql = "";

            return $this->db_fetch_one($sql);
        }

    }

?>