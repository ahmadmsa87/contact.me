<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use Validator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use Illuminate\Support\Facades\Mail;
use Session;

/**
 * Description of Contact
 *
 * @author AHMAD
 */
class ContactController extends Controller {

    //class construction
    public function __construct() {
        // construction here
    }

    /**
     * Show the contact page.
     *
     * @return \Illuminate\Http\Response
     */
    public function Index() {

        //  Initiate contact view 
        return view('contact');
    }

    /**
     * Manipulate send contact message
     *
     * @return \Illuminate\Http\Response
     */
    public function ContactUs(Request $request) {
        // Put all input data into an array
        $form_data = (array) $request->all();
        // validate Input data
        $validator = Validator::make($form_data, [
                    'name' => 'required|max:254',
                    'email' => 'required|max:254',
                    'subject' => 'max:254',
                    'message' => 'required|max:5000',
                    'g-recaptcha-response' => 'required|captcha',
                        ]
        );
        // declare message variable 
        $message = null;
        // check if there are errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        } else {
            // make instance of model contact, add data to the object then save on database
            $Contact = new Contact;
            $Contact->name = $request['name'];
            $Contact->email = $request['email'];
            $Contact->subject = $request['subject'];
            $Contact->message = $request['message'];
            $Contact->save();
            $to_name = "Support";
            $to_email = "ahmadmsa87@gmail.com";
            $mail = $this->SendMail($Contact->email, $Contact->name, $to_email, $to_name, $Contact->subject, $Contact->message);

            if ($mail) {
                $message[0] = "Message has sent successfully! ";
            } else {
                return redirect()->back()->withErrors($mail_send)->withInput($request->all());
            }
        }
        $message = $message[0];

        //set message in session then redirect to the home
        session(["message" => $message]);
        return redirect('/');
    }

    public function SendMail($fromEmail, $FromName, $to_email, $to_name, $subject, $body) {
        $mail_send = Mail::send('email.template', ['body' => $body], function($message) use($to_email, $to_name, $subject, $fromEmail, $FromName) {
                    $message->subject($subject);
                    $message->from($fromEmail, $FromName);
                    $message->to(strtolower($to_email), $to_name);
                });
        if (is_int($mail_send) && $mail_send > 0) {
            return true;
        } else {
            return false;
        }
    }

}
