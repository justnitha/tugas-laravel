<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class parameters extends Controller
{
    public function param($username,) {
        return view('Profil',['username'=>$username]);
    }
}
?>;
