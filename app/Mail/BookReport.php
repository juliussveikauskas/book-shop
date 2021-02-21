<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class BookReport extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public $book;

    public $comment;


    public function __construct($user, $book, $comment)
    {
        $this->book = $book;
        $this->user = $user;
        $this->comment = $comment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from($this->user->email)
            ->subject(trans('Book report'))
            ->view('emails.book-report');
    }
}
