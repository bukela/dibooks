@extends('layouts.app')

@section('content')
<div class="container">
        <div class="has-text-centered"><p class="page-title">ULAZNE FAKTURE<span class="username">&nbsp;<i class="fa fa-arrow-down"></i>&nbsp;<i class="fa fa-folder"></i></span></p></div>
    <div class="columns is-centered">
            <div class="column is-four-fifths">
                    {{-- @include('layouts.errors')
                    @include('layouts.success') --}}
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
                            <th>Pregled</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach( $incoinvoices as $incoming )
                            <tr>
                                <td class="table-client">{{ $incoming->client->naziv }}</td>
                                <td class="table-number">{{ $incoming->broj_fakture }}</td>
                                <td class="table-text">{{ $incoming->redni_broj }}</td>
                                <td class="table-text">{{ $incoming->datum_prijema }}</td>
                                <td class="table-text">{{ $incoming->datum_fakture }}</td>
                                <td class="table-text">{{ $incoming->iznos }}</td>
                                <td class="table-text">{{ $incoming->valuta }}</td>
                                <td class="table-text has-text-centered"><a href="{{ route('incoming.show',$incoming->id) }}"><i class="fa fa-eye edit-ico"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
    </div>
</div>
@endsection