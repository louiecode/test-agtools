<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index(Request $request) {
        return view('test', [
            'title' => $request->query('title', 'Valor default'),
        ]);
    }
}
