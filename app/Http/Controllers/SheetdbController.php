<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SheetDB\SheetDB;

class SheetdbController extends Controller
{
    //
    public function get()
    {
        $sheetdb = new SheetDB('stsqhlxrysiq7');
        $datas=$sheetdb->get();
        return view('sheetdb',compact('datas'));
    }
}
