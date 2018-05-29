<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $demo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($demo)
    {
        $this->demo = $demo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->from('nguyenthanhhoa.com@gmail.com')
        //         ->view('name')->with('name', "gui thanh cong");

        return $this->from('nguyenthanhhoa.com@gmail.com')
                    ->view('pages.infomation')
                    ->text('pages.success')
                    ->with(
                      [
                            'message' => 'Ban co the kiem tra email',
                      ])
                    ->attach(public_path('/images').'/logo33.png', [
                              'as' => 'logo33.png',
                              'mime' => 'image/jpeg',
                      ]);
                    
    }
}