<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Worker;

class HotelController extends Controller{
    public function index() {
        $workers = Worker::all();

        // dd($workers);

        return view('pages.home', compact('workers'));
    }

    public function Employee($workerid) {
        $worker = Worker::find($workerid);

        return view('pages.employee', compact('worker'));
    }

    public function create() {

        return view('pages.create');
    }

    public function store(Request $request) {

        dd($request -> all());
    }
}
