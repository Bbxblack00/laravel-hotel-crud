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

    public function edit($workerid) {

        $worker = Worker::findOrFail($workerid);


        return view('pages.edit', compact('worker'));
    }

    public function update(Request $request, $workerid) {

        $validate = $request -> validate([
            'firstname' => 'max:128',
            'lastname' => 'max:128',
            'role' => 'max:5|min:1|numeric',
            'rol' => 'nullable|max:90000|min:15000|numeric'
        ]);

        $worker = Worker::findOrFail($workerid);

        $worker = update($validate)

        return redirect() -> route('home');
    }

    public function store(Request $request) {

        $validate = $request -> validate([
            'firstname' => 'max:128',
            'lastname' => 'max:128',
            'role' => 'max:5|min:1|numeric',
            'rol' => 'nullable|max:90000|min:15000|numeric'
        ]);

        // dd($request -> all());

        $worker = Worker::create($validate);
        return redirect() -> route('employee', $worker -> id);
    }

    public function destroy($workerid) {

        $worker = Worker::findOrFail($workerid);

        $worker -> delete();

        return reirect() -> route('home');
    }
}
