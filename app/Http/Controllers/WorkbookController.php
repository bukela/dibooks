<?php

namespace App\Http\Controllers;

use App\Workbook;
use App\WorkbookItem;
use Illuminate\Http\Request;
use App\Http\Requests\WorkbookRequest;
use Illuminate\Support\Facades\Session;

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
        $workbooks = Workbook::all();
        return view('workbooks', compact('workbooks'));
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
    public function store(WorkbookRequest $request)
    {
        $workbook = new Workbook;
        $workbook_item = new WorkbookItem;

        $workbook->osnovni_broj = $request->osnovni_broj;
        $workbook->predmet = $request->predmet;

        $workbook->save();

        $workbook_item->workbook_id = Workbook::latest()->first()->id;
        $workbook_item->broj = $request->broj;
        $workbook_item->posiljalac = $request->posiljalac;
        $workbook_item->podbroj = $request->podbroj;
        $workbook_item->datum_prijema = $request->datum_prijema;
        $workbook_item->datum = $request->datum;

        $workbook_item->save();

        Session::flash('success', 'Delovodnik kreiran');
        
        return redirect(route('addWorkbook'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Workbook  $workbook
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $workbook = Workbook::findOrFail($id);
        return view('workbookShow', compact('workbook'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Workbook  $workbook
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $workbook = Workbook::findOrFail($id);
        return view('workbookEdit', compact('workbook'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Workbook  $workbook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $workbook = Workbook::findOrFail($id);
        $workbook_item = WorkbookItem::where('workbook_id', $id)->first();

        $workbook->osnovni_broj = $request->osnovni_broj;
        $workbook->predmet = $request->predmet;

        $workbook->save();

        $workbook_item->broj = $request->broj;
        $workbook_item->posiljalac = $request->posiljalac;
        $workbook_item->podbroj = $request->podbroj;
        $workbook_item->datum_prijema = date("Y-m-d", strtotime($request->input('datum_prijema')));
        $workbook_item->datum = date("Y-m-d", strtotime($request->input('datum')));
        
        $workbook_item->save();
        
        Session::flash('info', 'Delovodnik Izmenjen');
        return redirect(route('workbooks'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Workbook  $workbook
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $workbook = Workbook::findOrFail($id);
        $workbook->delete();

        Session::flash('success', 'Delovodnik Obrisan');
        return redirect(route('workbooks'));
    }
}
