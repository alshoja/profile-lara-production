<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

}
