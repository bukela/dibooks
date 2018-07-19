<?php

namespace App\Http\Controllers;

use App\Client;
use App\Invoice;
use App\InvoiceItem;
use Illuminate\Http\Request;
use App\Http\Requests\InvoiceRequest;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\InvoiceItemRequest;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $invoices = Invoice::all();
        $invoices = Invoice::orderBy('created_at','desc')->paginate(10);
        return view('invoices', compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();

        return view('addInvoice', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InvoiceRequest $request)
    {

        // Invoice::create($request->all());
        $invoice = new Invoice;
        $invoice_item = new InvoiceItem;

        $invoice->client_id = $request->client_id;
        $invoice->broj_fakture = $request->broj_fakture;
        $invoice->napomena = $request->napomena;
        $invoice->valuta = $request->valuta;
        $invoice->placen_iznos = $request->placen_iznos;

        $invoice->save();

        $invoice_item->invoice_id = Invoice::latest()->first()->id;
        $invoice_item->opis = $request->opis;
        $invoice_item->jedinica_mere = $request->jedinica_mere;
        $invoice_item->kolicina = $request->kolicina;
        $invoice_item->iznos = $request->iznos;
        $invoice_item->vrednost = $request->vrednost;
        $invoice_item->osnovica = $request->osnovica;
        $invoice_item->iznos_pdv = $request->iznos_pdv;
        $pdv = ($request->vrednost / 100)*$request->iznos_pdv;
        $invoice_item->vrednost_sa_pdv = round($request->vrednost + $pdv, 2);

        
        $invoice_item->save();


        Session::flash('success', 'Faktura kreirana');
        
        return redirect(route('addInvoice'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice = Invoice::findOrFail($id);
        return view('invoiceShow', compact('invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invoice = Invoice::findOrFail($id);
        // $invoices = Invoice::all();
        $clients = Client::all();
        return view('invoiceEdit', compact('invoice', 'clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(InvoiceRequest $request, $id)
    {
        $invoice = Invoice::findOrFail($id);
        $invoice_item =  InvoiceItem::where('invoice_id', $id)->first();

        $invoice->client_id = $request->client_id;
        $invoice->broj_fakture = $request->broj_fakture;
        $invoice->valuta = $request->valuta;
        $invoice->placen_iznos = $request->placen_iznos;
        $invoice->napomena = $request->napomena;

        $invoice->save();

        $invoice_item->opis = $request->opis;
        $invoice_item->jedinica_mere = $request->jedinica_mere;
        $invoice_item->kolicina = $request->kolicina;
        $invoice_item->iznos = $request->iznos;
        $invoice_item->vrednost = $request->vrednost;
        $invoice_item->osnovica = $request->osnovica;
        $invoice_item->iznos_pdv = $request->iznos_pdv;
        $pdv = ($request->vrednost / 100)*$request->iznos_pdv;
        $invoice_item->vrednost_sa_pdv = round($request->vrednost + $pdv, 2);
        // $invoice_item->vrednost_sa_pdv = $request->vrednost_sa_pdv;
        
        $invoice_item->save();
        
        Session::flash('info', 'Faktura Izmenjena');
        return redirect(route('invoices'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Invoice::findOrFail($id);
        $client->delete();

        Session::flash('success', 'Faktura Obrisana');
        return redirect(route('invoices'));
    }

    public function getinvoice() {

        $invoice = Invoice::with('invoice_item')->get();

        return $invoice;
    }
}
