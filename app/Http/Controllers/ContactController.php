<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services =Service::all();
        return view('pages.contact')->with([
            'services'=>$services
        ]);
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


            $validation=Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            'email' => 'required|email',
            'subject' => 'required||string|min:3',
            'comments' => 'required|string|min:15'
        ]);
        if($validation->fails()){
            return Redirect::back()->withErrors($validation)->withInput();
        }else {
            Contact::create([
                'name' => filter_var(strip_tags(htmlentities($request->name)), FILTER_SANITIZE_STRING),
                'email' => filter_var(strip_tags(htmlentities($request->email)), FILTER_SANITIZE_STRING),
                'subject' => filter_var(strip_tags(htmlentities($request->subject)), FILTER_SANITIZE_STRING),
                'description' => filter_var(strip_tags(htmlentities($request->comments)), FILTER_SANITIZE_STRING),
            ]);
            return back()->with('success_message', 'Merci, Nous avons reçu votre message et nous prendrons contact avec vous sous peu.');
        }
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
