<?php

namespace App\Http\Controllers;

use App\WorkbookItem;
use App\Workbook_item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WorkbookItemController extends Controller
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
        //
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
     * @param  \App\Workbook_item  $workbook_item
     * @return \Illuminate\Http\Response
     */
    public function show(Workbook_item $workbook_item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Workbook_item  $workbook_item
     * @return \Illuminate\Http\Response
     */
    public function edit(Workbook_item $workbook_item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Workbook_item  $workbook_item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workbook_item $workbook_item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Workbook_item  $workbook_item
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $workbook_item = WorkbookItem::findOrFail($id);
        $workbook_item->delete();

        Session::flash('success', 'Item Obrisan');
        return redirect()->back();
    }
}
