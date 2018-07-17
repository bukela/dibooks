<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workbook;

class SearchController extends Controller
{
    public function autosearch()

    {

        return view('autosearch');

    }

    public function workbook(Request $request)

    {

        $searchquery = $request->searchquery;

        $data = Workbook::where('predmet','like','%'.$searchquery.'%')->get();


        return response()->json($data);

    }
}
