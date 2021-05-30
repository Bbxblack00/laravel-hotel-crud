<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Worker;

class HotelController extends Controller
{
    public function index() {
        $workers = Worker::all();

        // dd($workers);

        return view('pages.home', compact('workers'));
    }
}
