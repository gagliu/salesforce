<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class PageController extends Controller
{   
    /* 
    * Show contact information
    * Contact Id is sent and the Contact is retrieved with default fields
    */
    public function contact(Contact $contact)
    {
        return view('contact', compact('contact'));
    }
}
