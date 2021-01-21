<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;

class StoreController extends Controller
{
    public function index() {
        $test = Store::all()->pluck('total_count');
        $capacity = Store::all()->pluck('capacity');

        return view('welcome')->with('totals', $test, );
    }
    
}
