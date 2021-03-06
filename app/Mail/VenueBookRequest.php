<?php

namespace App\Mail;

use App\Venue;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class VenueBookRequest extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The user instance.
     *
     * @var Venue
     */
    protected $username;

    /**
     * The venue instance.
     *
     * @var Venue
     */
    protected $venue;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Venue $venue, String $username)
    {
        $this->venue = $venue;
        $this->username = $username;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Zapytanie zostało wysłane!')
            ->markdown('emails.venue-book-request')
            ->with([
                'name' => $this->username,
                'venue_name' => $this->venue->name,
            ]);
    }
}
