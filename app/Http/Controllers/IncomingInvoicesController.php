<?php

namespace App\Http\Controllers;

use App\IncomingInvoices;
use Illuminate\Http\Request;

class IncomingInvoicesController extends Controller
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
     * @param  \App\IncomingInvoices  $incomingInvoices
     * @return \Illuminate\Http\Response
     */
    public function show(IncomingInvoices $incomingInvoices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\IncomingInvoices  $incomingInvoices
     * @return \Illuminate\Http\Response
     */
    public function edit(IncomingInvoices $incomingInvoices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\IncomingInvoices  $incomingInvoices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IncomingInvoices $incomingInvoices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\IncomingInvoices  $incomingInvoices
     * @return \Illuminate\Http\Response
     */
    public function destroy(IncomingInvoices $incomingInvoices)
    {
        //
    }
}
