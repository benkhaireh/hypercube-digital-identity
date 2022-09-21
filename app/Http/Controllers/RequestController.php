<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RequestController extends Controller
{

    public function service(Request $request)
    {
        $credentials = \Validator::make($request->all(), [
            'fullname' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'service' => 'required',
        ], [
            'fullname.required' => "fullname",
            'email.required' => "email.required",
            'email.email' => "email.invalid",
            'message.required' => "message",
            'service.required' => "service",
        ]);

        $fullname = ucwords(strtolower($request->fullname));
        $email = strtolower($request->email);
        $subject = "Nouvelle demande de service";
        $message = $request->message;
        $services = "";
        $service = $request->service;
        for ($i=0; $i < count($service); $i++) { 
            if ($i != count($service) - 1) {
                $services .= $service[$i]["name"] . ", ";
            } else {
                $services .= $service[$i]["name"];
            }
        }
        $body = <<<XML
        Le(s) service(s):
            $services
        
        - Client:
            . Nom: $fullname
            . E-mail: $email

        - Description: 
            $message
        XML;

        if ($credentials->passes()) {
            Mail::send([], [], function ($message) use ($email, $subject, $body, $fullname) {
                $message->text($body);
                $message->subject($subject);
                $message->replyTo($email, $fullname);
                $message->from('mohamed.khaireh@hypercube.dj', 'HyperCube - Software Developer');
                $message->to('sales@hypercube.dj', 'HyperCube - Service Commercial');
                $message->priority(3);
            });
            return response()->json(['status' => 'success', 'info' => "form.success.service"]);
        }

        return response()->json(['status' => 'error', 'info' => $credentials->errors()]);
    }

    public function contactus(Request $request)
    {
        $credentials = \Validator::make($request->all(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'subject' => 'required',
            'message' => 'required',
        ], [
            'firstname.required' => "firstname",
            'lastname.required' => "lastname",
            'email.required' => "email.required",
            'email.email' => "email.invalid",
            'phone.required' => "phone.required",
            'phone.numeric' => "phone.invalid",
            'subject.required' => "subject",
            'message.required' => "message",
        ]);

        $firstname = ucwords(strtolower($request->firstname));
        $lastname = ucwords(strtolower($request->lastname));
        $fullname = $firstname . " " . $lastname;
        $email = strtolower($request->email);
        $phone = $request->phone;
        $subject = $request->subject;
        $message = $request->message;

        $body = <<<XML
        - Client:
            . Nom: $fullname
            . E-mail: $email
            . Numéro mobile: $phone

        - Description: 
            $message
        XML;

        if($credentials->passes()) {
            /* Mail::send([], [], function ($message) use ($email, $subject, $body, $fullname) {
                $message->text($body);
                $message->subject($subject);
                $message->replyTo($email, $fullname);
                $message->from('mohamed.khaireh@hypercube.dj', 'HyperCube - Software Developer');
                $message->to('contact@hypercube.dj', 'HyperCube - Service Support');
                $message->priority(3);
            }); */
            return response()->json(['status' => 'success', 'info' => "form.success.contact"]);
        }

        return response()->json(['status' => 'error', 'info' => $credentials->errors()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
