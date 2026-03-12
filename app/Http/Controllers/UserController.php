<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getall(){
        $userData= user::all();
        return view('all_Users',compact('userData'));
    }
}
