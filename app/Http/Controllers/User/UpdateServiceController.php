<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UpdateServiceController extends Controller
{
    public function getService()
    {
        return view('user.update-service');
    }
}
