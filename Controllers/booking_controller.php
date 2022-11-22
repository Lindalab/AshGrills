<?php 
    require_once("../Classes/booking_class.php");

    function create_booking($appointment_id, $s_id, $customer_id, $optional_name, $optional_email){
        $book = new Booking;

        return $book->create_booking($appointment_id, $s_id, $customer_id, $optional_name, $optional_email);
        
    }

    function update_booking($book_id, $appointment_id, $s_id, $customer_id, $optional_name, $optional_email){
        $book = new Booking;

        return $book->update_booking($book_id, $appointment_id, $s_id, $customer_id, $optional_name, $optional_email);
    }

    function delete_booking_ctr($book_id){
        $book = new Booking;

        return $book->delete_booking($book_id);
    }

    function get0neBooking_ctr($book_id){
        $book = new Booking;

        return $book->getOneBooking($book_id);
    }

    function getAllBooking_ctr(){
        $book = new Booking;

        return $book->getAllBooking();
    }


?>