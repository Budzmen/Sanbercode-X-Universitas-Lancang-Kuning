<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function table()
    {
        return view('page.table');
    }

    public function dataTable()
    {
        return view('page.dataTable');
    }
}