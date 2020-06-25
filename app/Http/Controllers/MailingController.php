<?php

namespace App\Http\Controllers;

use App\Mailing;
use Validator;
use Illuminate\Http\Request;

class MailingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required | max:20',
            'email' => 'required | email',
            'subject' => 'required',
            'message' => 'nullable | min:20'
        ]);


        if ($validator->fails()) {
            // ('failed','Email Not Sent')
            $error_messages = $validator->messages();

            // return \json_encode($error_messages);
            return \redirect('/#contact')->with('errors', $error_messages);
        } else {

            $mailing = new Mailing();

            $mailing->name = $request->input('name');
            $mailing->email = $request->input('email');
            $mailing->subject = $request->input('subject');
            $mailing->message = $request->input('message');

            // $mailing->save();

            return \redirect('/#contact')->with('success', 'Email Sent');
        }

        // $mailing->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mailing  $mailing
     * @return \Illuminate\Http\Response
     */
    public function show(Mailing $mailing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mailing  $mailing
     * @return \Illuminate\Http\Response
     */
    public function edit(Mailing $mailing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mailing  $mailing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mailing $mailing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mailing  $mailing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mailing $mailing)
    {
        //
    }
}
