<?php

namespace App\Http\Controllers;

use App\InvoiceItems;
use Illuminate\Http\Request;

class InvoiceItemsController extends Controller
{
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
        return view('addInvoiceItem');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $invoice_item = new InvoiceItem;

        $invoice_item->workbook_id = $request->invoice_id;
        $invoice_item->opis = $request->opis;
        $invoice_item->jedinica_mere = $request->jedinica_mere;
        $invoice_item->kolicina = $request->kolicina;
        $invoice_item->iznos = $request->iznos;
        $invoice_item->vrednost = $request->vrednost;
        $invoice_item->osnovica = $request->osnovica;
        $invoice_item->iznos_pdv = $request->iznos_pdv;
        $pdv = ($request->vrednost / 100)*$request->iznos_pdv;
        $invoice_item->vrednost_sa_pdv = round($request->vrednost + $pdv, 2);
        // dd($workbook_item);
        $invoice_item->save();

        Session::flash('success', 'Item kreiran');
        
        return redirect(route('invoices'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InvoiceItems  $invoiceItems
     * @return \Illuminate\Http\Response
     */
    public function show(InvoiceItems $invoiceItems)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InvoiceItems  $invoiceItems
     * @return \Illuminate\Http\Response
     */
    public function edit(InvoiceItems $invoiceItems)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InvoiceItems  $invoiceItems
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InvoiceItems $invoiceItems)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InvoiceItems  $invoiceItems
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoice_item = InvoiceItems::findOrFail($id);
        $invoice_item->delete();

        Session::flash('success', 'Item Obrisan');
        return redirect(route('invoices'));
    }
}
