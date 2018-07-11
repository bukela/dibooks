<?php

namespace App\Http\Controllers;

use App\Workbook;
use Illuminate\Http\Request;

class WorkbookController extends Controller
{
    public function __construct() {

        $this -> middleware('auth');
        
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('addWorkbook');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Workbook  $workbook
     * @return \Illuminate\Http\Response
     */
    public function show(Workbook $workbook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Workbook  $workbook
     * @return \Illuminate\Http\Response
     */
    public function edit(Workbook $workbook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Workbook  $workbook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workbook $workbook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Workbook  $workbook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workbook $workbook)
    {
        //
    }
}
