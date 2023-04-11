<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
    //
    public function index()
    {
        return ZoneResource::collection(Zone::all());
    }
}
