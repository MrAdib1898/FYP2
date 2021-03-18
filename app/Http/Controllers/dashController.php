<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class dashController extends Controller
{
    function list()
    {
        return User::all();
    }
}
