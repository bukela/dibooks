@extends('layouts.app')

@section('content')
<div class="container">
        <div class="has-text-centered"><p class="page-title">ULAZNE FAKTURE<span class="username">&nbsp;<i class="fa fa-arrow-down"></i>&nbsp;<i class="fa fa-folder"></i></span></p></div>
    <div class="columns is-centered">
            <div class="column is-four-fifths">
                    <table class="table is-fullwidth is-bordered">
                        <thead>
                          <tr>
                            <th>Klijent</th>
                            <th>Broj Fakture</th>
                            <th>Redni Broj</th>
                            <th>Datum Prijema</th>
                            <th>Datum Fakture</th>
                            <th>Iznos</th>
                            <th>Valuta</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach( $incoinvoices as $inco )
                            <tr>
                                <td class="table-client">{{ $inco->client_id }}</td>
                                <td class="table-number">{{ $inco->broj_fakture }}</td>
                                <td class="table-text">{{ $inco->redni_broj }}</td>
                                <td class="table-text">{{ $inco->datum_prijema }}</td>
                                <td class="table-text">{{ $inco->datum_fakture }}</td>
                                <td class="table-text">{{ $inco->iznos }}</td>
                                <td class="table-text">{{ $inco->valuta }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
    </div>
</div>
@endsection