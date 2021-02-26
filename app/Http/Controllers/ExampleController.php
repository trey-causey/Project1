<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function showIndexPage() {
        return view('example.index');
    }
}
