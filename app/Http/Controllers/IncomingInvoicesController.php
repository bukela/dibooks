<?php

namespace App\Http\Controllers;

use App\Client;
use App\IncomingInvoice;
use App\IncomingInvoices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\IncomingInvoiceRequest;
use App\Http\Requests\IncomingInvoiceEditRequest;

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
        $incoinvoices = IncomingInvoice::all();
        return view('incominginvoices', compact('incoinvoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        
        return view('addIncomingInvoice', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IncomingInvoiceRequest $request)
    {
        IncomingInvoice::create($request->all());

        Session::flash('success', 'Ulazna faktura kreirana');
        
        return redirect(route('addIncomingInvoice'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\IncomingInvoices  $incomingInvoices
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $incoming = IncomingInvoice::findOrFail($id);
        return view('incomingShow', compact('incoming'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\IncomingInvoices  $incomingInvoices
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $incoming = IncomingInvoice::findOrFail($id);
        $clients = Client::all();
        return view('incomingEdit', compact('incoming', 'clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\IncomingInvoices  $incomingInvoices
     * @return \Illuminate\Http\Response
     */
    public function update(IncomingInvoiceEditRequest $request, $id)
    {
        // IncomingInvoice::findOrFail($id)->update($request->all());
        $incoming = IncomingInvoice::findOrFail($id);

        $incoming->client_id = $request->input('client_id');
        $incoming->datum_prijema = date("Y-m-d", strtotime($request->input('datum_prijema')));
        $incoming->datum_fakture = date("Y-m-d", strtotime($request->input('datum_fakture')));
        $incoming->broj_fakture = $request->input('broj_fakture');
        $incoming->iznos_fakture = $request->input('iznos_fakture');
        $incoming->nacin_placanja = $request->input('nacin_placanja');
        $incoming->datum_placanja = date("Y-m-d", strtotime($request->input('datum_placanja')));
        $incoming->iznos = $request->input('iznos');
        $incoming->broj_izvoda = $request->input('broj_izvoda');
        $incoming->valuta = $request->input('valuta');
        $incoming->save();
        
        Session::flash('info', 'Ulazna Faktura Izmenjena');
        return redirect(route('incominginvoices'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\IncomingInvoices  $incomingInvoices
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = IncomingInvoice::findOrFail($id);
        $client->delete();

        Session::flash('success', 'Ulazna Faktura Obrisana');
        return redirect(route('incominginvoices'));
    }
}
