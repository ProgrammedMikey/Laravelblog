<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class AdminController extends Controller{

    public function getIndex(){

        return view('admin.index');

    }

}
