<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::where('arrival_time', '>', Carbon::now())->orderBy('departure_time', 'asc')->get();

        return view('home', compact("trains"));
    }
}
