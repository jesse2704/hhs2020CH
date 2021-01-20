<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;

class StoreController extends Controller
{
    public function index() {
        return view('welcome')->with('totals', Store::all()->pluck('total_count'));
    }
    
}
