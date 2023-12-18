<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ListController extends Controller
{
    public function allData(){
        $report = new Report;
        return view('list', ['data' => $report -> orderBy('id') -> get()]);
    }
}
