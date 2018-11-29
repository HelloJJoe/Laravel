<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Contact::orderBy('created_at', 'desc')->get();
        $sub_comments = Contact::where('parent_id', '>', 0)->orderBy('created_at', 'desc')->get();
        if(Auth::check()){
            $user = Auth::user();
        }
        else{
            $user = '';
        }
        return view('contact',compact('comments','sub_comments','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Contact::create([ 'user' => $request['name'], 
                'comment' => $request['message'], 
                'parent_id' => (int)$request['parent_id']
            ]);
           
        return redirect('contact');
    }
 

}