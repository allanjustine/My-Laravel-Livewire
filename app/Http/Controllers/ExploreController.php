<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function index() {
        return view('pages.explore');
    }
    public function edit($id) {
        return view('pages.edit', compact('id'));
    }
}
