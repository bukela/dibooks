@extends('layouts.app')

@section('content')
<div class="container">
<div class="has-text-centered"><p class="page-title">FAKTURA br. {{ $invoice->broj_fakture }}</p></div>
    <div class="columns is-centered">
            {{-- <div class="column is-four-fifths"> --}}
                    <table class="table is-fullwidth is-bordered">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Klijent</th>
                            <th>Broj Fakture</th>
                            <th>Napomena</th>
                            <th>Valuta</th>
                            <th>Placen Iznos</th>
                            <th>Edit</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="table-client">{{ $invoice->id }}</td>
                                <td class="table-client">{{ $invoice->client->naziv }}</td>
                                <td class="table-number">{{ $invoice->broj_fakture }}</td>
                                <td class="table-text">{{ $invoice->napomena }}</td>
                                <td class="table-text">{{ $invoice->valuta }}</td>
                                <td class="table-text">{{ $invoice->placen_iznos }}</td>
                                <td class="table-text has-text-centered"><a href="{{ route('invoice.edit', $invoice->id) }}"><i class="fa fa-edit edit-ico"></i></a><a href="{{ route('invoice.delete',$invoice->id)  }}"><i class="fa fa-trash-alt trash"></i></a></td>
                            </tr>
                        </tbody>
                        
                        <thead>
                                <tr>
                                  <th>Opis</th>
                                  <th>Jedinica Mere</th>
                                  <th>Kolicina</th>
                                  <th>Iznos</th>
                                  <th>Vrednost</th>
                                  <th>Osnovica</th>
                                  <th>PDV</th>
                                  <th>Vrednost sa PDV</th>
                                </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td class="table-client">{{ $invoice->invoice_item->opis }}</td>
                                      <td class="table-client">{{ $invoice->invoice_item->jedinica_mere }}</td>
                                      <td class="table-number">{{ $invoice->invoice_item->kolicina }}</td>
                                      <td class="table-text">{{ $invoice->invoice_item->iznos }}</td>
                                      <td class="table-text">{{ $invoice->invoice_item->vrednost }}</td>
                                      <td class="table-text">{{ $invoice->invoice_item->osnovica }}</td>
                                      <td class="table-text">{{ $invoice->invoice_item->iznos_pdv }} %</td>
                                      <td class="table-text">{{ $invoice->invoice_item->vrednost_sa_pdv }}</td>
                                  </tr>
                              </tbody>
                    </table>

                    
            {{-- </div> --}}
    </div>
    <button class="button print-window"><i class="fa fa-print"></i></button>
</div>
@endsection