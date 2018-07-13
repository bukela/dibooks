@extends('layouts.app')

@section('content')
<div class="container">
<div class="has-text-centered"><p class="page-title">ULAZNA FAKTURA br.{{ $incoming->redni_broj }}</p></div>
    <div class="columns is-centered">
            {{-- <div class="column is-four-fifths"> --}}
                    <table class="table is-fullwidth is-bordered">
                        <thead>
                          <tr>
                            <th>Klijent</th>
                            <th>Redni Broj</th>
                            <th>Datum Prijema</th>
                            <th>Datum Fakture</th>
                            <th>Broj Fakture</th>
                            <th>Iznos Fakture</th>
                            <th>Nacin Placanja</th>
                            <th>Datum Placanja</th>
                            <th>Iznos</th>
                            <th>Broj Izvoda</th>
                            <th>Valuta</th>
                            <th>Edit</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="table-client">{{ $incoming->client_id }}</td>
                                <td class="table-client">{{ $incoming->redni_broj }}</td>
                                <td class="table-number">{{ $incoming->datum_prijema }}</td>
                                <td class="table-text">{{ $incoming->datum_fakture }}</td>
                                <td class="table-text">{{ $incoming->broj_fakture }}</td>
                                <td class="table-text">{{ $incoming->iznos_fakture }}</td>
                                <td class="table-text">{{ $incoming->nacin_placanja }}</td>
                                <td class="table-text">{{ $incoming->datum_placanja }}</td>
                                <td class="table-text">{{ $incoming->iznos }}</td>
                                <td class="table-text">{{ $incoming->broj_izvoda }}</td>
                                <td class="table-text">{{ $incoming->valuta }}</td>
                                <td class="table-text"><a href="{{ route('incoming.show',$incoming->id) }}"><i class="fa fa-edit edit-ico"></i></a>&nbsp;<i class="fa fa-trash-alt trash"></i></td>
                            </tr>
                        </tbody>
                    </table>
            {{-- </div> --}}
    </div>
    <button class="button print-window"><i class="fa fa-print"></i></button>
</div>
@endsection