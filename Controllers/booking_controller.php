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

    function insertIntoBookedSlot_ctr($book_id, $order_id, $currency, $payment_date){
        $book = new Booking;

        return $book->insertIntoBookedSlot($book_id, $order_id, $currency, $payment_date);
    }

    function updateBookedSlots_ctr($book_id, $order_id, $currency, $payment_date){
        $book = new Booking;

        return $book->updateBookedSlots($book_id, $order_id, $currency, $payment_date);
    } 

    function deleteBookedSlots($booked_slot_id){
        $book = new Booking;

        return $book->deleteBookedSlots($booked_slot_id);
    }

    function getAllBookedSlots(){
        $book = new Booking;

        return $book->getAllBookedSlots();
    }

    function getOneBookingSlot($book_slot_id){
        $book = new Booking;

        return $book->getOneBookingSlot($book_slot_id);
    }


?>