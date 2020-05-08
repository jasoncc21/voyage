<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function signup(Request $request, $id, $course)
    {
        $data = ['id' => $id, 'course' => $course, 'url' => '<a href="http://goblinlab.org">http://goblinlab.org</a>'];
        return view('signup', $data);
    }

    public function index()
    {
        $data = ['apple', 'lemon', 'banana'];

        return view('index', $data);
    }
}
