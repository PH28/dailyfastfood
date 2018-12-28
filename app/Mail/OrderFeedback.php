<?php

namespace Food\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class OrderFeedback extends Mailable
{
    use Queueable, SerializesModels;
    public $data_user;
    public $data_detail;
    public $data_product;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data_user,$data_detail,$data_product)
    {
        $this->data_user = $data_user;
        $this->data_detail = $data_detail;
        $this->data_product=$data_product;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('admin.emails.feedback',compact('data_user','data_detail','data_product'))->subject('đây là mail tu food');
    }
}
