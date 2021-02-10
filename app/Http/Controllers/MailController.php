<?php

namespace App\Http\Controllers;

use App\Models\lain;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function basic_email(){
        $data = array('name' => $_GET['name'] , 'datamessage' => $_GET['message']);
        Mail::send(['text' => 'mail'], $data,function ($message) {
            $message->to($_GET['email'],$_GET['name']);
            $message->from('s6135512044@phuket.psu.ac.th', '6135512044');
        });
        echo "Basic Email Sent. Check your inbox.";
        echo "<br>";
        echo "Name : " . $_GET['name'];
        echo "<br>";
        echo "Email : " . $_GET['email'];
        echo "<br>";
        echo "Message : " . $_GET['message'];
    }
}