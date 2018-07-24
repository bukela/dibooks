<?php

namespace App\Http\Controllers;

use App\Workbook;
use App\WorkbookItem;
use Illuminate\Support\Facades\Input;
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
        return view('addWorkbookItem');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $workbook_item = new WorkbookItem;

        $workbook_item->workbook_id = $request->workbook_id;
        $workbook_item->broj = $request->broj;
        $workbook_item->posiljalac = $request->posiljalac;
        $workbook_item->podbroj = $request->podbroj;
        $workbook_item->datum_prijema = $request->datum_prijema;
        $workbook_item->datum = $request->datum;
        // dd($workbook_item);
        $workbook_item->save();

        Session::flash('success', 'Item kreiran');
        
        // return redirect(route('workbooks'));
        // $url = redirect()->getUrlGenerator()->previous();
        $url = '/delovodnik/izmeni/'.$request->workbook_id;
        return redirect($url);
       
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
    public function edit($id)
    {
        $workbook_item = WorkbookItem::findOrFail($id);
        return view('workbookItemEdit', compact('workbook_item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Workbook_item  $workbook_item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $workbook_item = WorkbookItem::findOrFail($id);
            $workbook_item->workbook_id = $request->workbook_id;
            $workbook_item->datum_prijema = date("Y-m-d", strtotime($request->input('datum_prijema')));
            $workbook_item->datum = date("Y-m-d", strtotime($request->input('datum')));
            $workbook_item->broj = $request->broj;
            $workbook_item->posiljalac = $request->posiljalac;
            $workbook_item->podbroj = $request->podbroj;
           
            
            $workbook_item->save();

            Session::flash('info', 'Delovodnik Item Izmenjen');
            // return redirect()->back();
            $url = '/delovodnik/izmeni/'.$request->workbook_id;
            return redirect($url);
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
        
        // return redirect(route('workbooks'));
        return redirect()->back();
    }
}
