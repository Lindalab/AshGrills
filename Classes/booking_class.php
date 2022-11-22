<?php 
    require_once("../Settings/db_class.php");

    class Booking extends db_connection{

        function create_booking($appointment_id, $s_id, $customer_id, $optional_name, $optional_email){
            $sql = "INSERT INTO `book`(`appointment_id`, `s_id`, `customer_id`, `optional_name`, `optional_email`) VALUES ('$appointment_id','$s_id','$customer_id','$optional_name','$optional_email')";

            return $this->db_query($sql);
        }

        function update_booking($book_id, $appointment_id, $s_id, $customer_id, $optional_name, $optional_email){
            $sql = "UPDATE `book` SET `appointment_id`='$appointment_id',`s_id`='$s_id',`customer_id`='$customer_id',`optional_name`='$optional_name',`optional_email`='$optional_email' WHERE `book_id`='$book_id'";

            return $this->db_query($sql);
        }

        function delete_booking($book_id){
            $sql = "DELETE FROM `book` WHERE book_id = '$book_id' ";

            return $this->db_query($sql);
        }

        function getOneBooking($book_id){
            $sql = "SELECT * FROM `book` WHERE book_id = '$book_id' ";
            return $this->db_fetch_one($sql);
        }

        function getAllBooking(){
            $sql = "SELECT * FROM `book` ";
            return $this->db_fetch_all($sql);
        }

        function insertIntoBookedSlot($customer_id,$invoice_no, $currency, $bookedslot_status){
            $sql ="INSERT INTO `booked_slots`(`customer_id`, `invoice_no`, `bookedslot_status`) VALUES ('$customer_id','$invoice_no', '$currency', '$bookedslot_status')";

            return $this->db_query($sql);
        }

        function updateBookedSlots($booked_slot_id, $customer_id, $invoice_no, $bookedslot_status){
            $sql = "UPDATE `booked_slots` SET `customer_id`='$customer_id',`invoice_no`='$invoice_no',`bookedslot_status`='$bookedslot_status' WHERE `booked_slot_id`='$booked_slot_id'";

            return $this->db_query($sql);
        }

        function deleteBookedSlots($booked_slot_id){
            $sql = "DELETE FROM `booked_slots` WHERE `booked_slot_id`='$booked_slot_id'";

            return $this->db_query($sql);
        }


        function getAllBookedSlots(){
            $sql = "SELECT * FROM `booked_slots`";

            return $this->db_fetch_all($sql);
        }

        function getOneBookingSlot($booked_slot_id){
            $sql = "SELECT * FROM `booked_slots` WHERE `booked_slot_id`='$booked_slot_id' ";

            return $this->db_fetch_one($sql);
        }

    }

?>