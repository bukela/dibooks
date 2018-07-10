<?php

namespace App\Http\Controllers;

use App\OutgoingInvoices;
use Illuminate\Http\Request;

class OutgoingInvoicesController extends Controller
{
    public function __construct() {
        
        $this->middleware('auth');
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
     * @param  \App\OutgoingInvoices  $outgoingInvoices
     * @return \Illuminate\Http\Response
     */
    public function show(OutgoingInvoices $outgoingInvoices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OutgoingInvoices  $outgoingInvoices
     * @return \Illuminate\Http\Response
     */
    public function edit(OutgoingInvoices $outgoingInvoices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OutgoingInvoices  $outgoingInvoices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OutgoingInvoices $outgoingInvoices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OutgoingInvoices  $outgoingInvoices
     * @return \Illuminate\Http\Response
     */
    public function destroy(OutgoingInvoices $outgoingInvoices)
    {
        //
    }
}
