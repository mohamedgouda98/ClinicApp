<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\BookingInterface;
use App\Models\Booking;
use App\Models\Patient;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    protected  $BookingInterface;

    public function __construct(BookingInterface $bookingInterface)
    {
         $this->BookingInterface=$bookingInterface;
    }
    public function reOrder( Patient $patient){
        return  $this->BookingInterface->reOrder();
    }
}
