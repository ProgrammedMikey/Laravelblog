<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class ContactMessageController extends Controller
{

    public function getContactIndex(){

        return view('frontend.other.contact');

    }


}