@extends('layouts.app')

@section('content')
<div class="container">
<div class="has-text-centered"><p class="page-title">FAKTURA br. {{ $invoices->broj_fakture }}</p></div>
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
                                <td class="table-client">{{ $invoices->id }}</td>
                                <td class="table-client">{{ $invoices->client->naziv }}</td>
                                <td class="table-number">{{ $invoices->broj_fakture }}</td>
                                <td class="table-text">{{ $invoices->napomena }}</td>
                                <td class="table-text">{{ $invoices->valuta }}</td>
                                <td class="table-text">{{ $invoices->placen_iznos }}</td>
                                <td class="table-text has-text-centered"><a href="{{ route('invoice.edit', $invoices->id) }}"><i class="fa fa-edit edit-ico"></i></a>&nbsp;&nbsp;<a href="{{ route('invoice.delete',$invoices->id) }}" onclick="return confirm('Brisanje Fakture ?')"><i class="fa fa-trash-alt trash"></i></a></td>
                            </tr>
                        
                        @foreach($invoices->invoice_item as $invo_item)
                        <thead class="workbook-show">
                                <tr>
                                  <th>Opis</th>
                                  <th>Jedinica Mere</th>
                                  <th>Kolicina</th>
                                  <th>Iznos</th>
                                  <th>Vrednost</th>
                                  <th>Osnovica</th>
                                  <th>PDV</th>
                                  <th>Vrednost sa PDV</th>
                                  <th>Edit</th>
                                </tr>
                              </thead>
                              
                                  <tr>
                                      <td class="table-client">{{ $invo_item->opis }}</td>
                                      <td class="table-client">{{ $invo_item->jedinica_mere }}</td>
                                      <td class="table-number">{{ $invo_item->kolicina }}</td>
                                      <td class="table-text">{{ $invo_item->iznos }}</td>
                                      <td class="table-text">{{ $invo_item->vrednost }}</td>
                                      <td class="table-text">{{ $invo_item->osnovica }}</td>
                                      <td class="table-text">{{ $invo_item->iznos_pdv }} %</td>
                                      <td class="table-text">{{ $invo_item->vrednost_sa_pdv }}</td>
                                      <td class="table-text">
                                        <span class="field"><a href="{{ route('invoice_item.edit',$invo_item->id) }}" >&nbsp;&nbsp;<i class="fa fa-edit edit-ico"></i></a></span>&nbsp;
                                        <span class="field"><a href="{{ route('invoice_item.delete',$invo_item->id) }}" onclick="return confirm('Brisanje ?')" ><i class="fa fa-trash-alt trash"></i></a></span>
                                      </td>
                                  </tr>
                                  @endforeach
                              </tbody>
                              
                    </table>
                    
                    
            {{-- </div> --}}
    </div>
    <span class="username"><a href="{{ route('invoice_item.create',$invoices->id) }}" class="witem"><i class="fa fa-plus"></i>&nbsp;Dodaj Item</a></span><br><br>
    <button class="button print-window"><i class="fa fa-print"></i></button>
</div>
@endsection