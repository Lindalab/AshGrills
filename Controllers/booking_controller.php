<?php 
    require_once("../Classes/booking_class.php");

    function create_booking_ctr($appointment_id, $s_id, $customer_id, $optional_name, $optional_email){
        $book = new Booking;

        return $book->create_booking($appointment_id, $s_id, $customer_id, $optional_name, $optional_email);
        
    }

    function update_booking_ctr($book_id, $appointment_id, $s_id, $customer_id, $optional_name, $optional_email)
    {
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

    function insertIntoBookedSlot_ctr($customer_id,$invoice_no, $currency, $bookedslot_status){
        $book = new Booking;

        return $book->insertIntoBookedSlot($customer_id,$invoice_no, $currency, $bookedslot_status);
    }

    function updateBookedSlots_ctr($booked_slot_id, $customer_id, $invoice_no, $bookedslot_status){
        $book = new Booking;

        return $book->updateBookedSlots($booked_slot_id, $customer_id, $invoice_no, $bookedslot_status);
    } 

    function deleteBookedSlots_ctr($booked_slot_id){
        $book = new Booking;

        return $book->deleteBookedSlots($booked_slot_id);
    }

    function getAllBookedSlots_ctr(){
        $book = new Booking;

        return $book->getAllBookedSlots();
    }

    function getOneBookingSlot_ctr($booked_slot_id){
        $book = new Booking;

        return $book->getOneBookingSlot($booked_slot_id);
    }


?>