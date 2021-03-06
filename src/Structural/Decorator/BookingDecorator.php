<?php declare(strict_types = 1);

namespace DesignPatterns\Structural\Decorator;

abstract class BookingDecorator implements Booking
{
    protected $booking;

    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }
}