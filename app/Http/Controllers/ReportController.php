<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    public function report(Request $req){
        $validation = $req->validate([
            'number' => 'required|min:5|max:50',
            'description' => 'required|min:5|max:50'
        ]);

        $report = new Report();
        $report->number = $req->input('number');
        $report->description = $req->input('description');
        $report->status = 'Новое';


        $report->save();

    }
}