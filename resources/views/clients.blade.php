@extends('layouts.app')

@section('content')
<div class="container">
        <div class="has-text-centered"><p class="page-title">KLIJENTI<span class="username">&nbsp;<i class="fa fa-user"></i></span></p></div>
    <div class="columns is-centered">
            <div class="column is-four-fifths">
                    <table class="table is-fullwidth is-bordered">
                        <thead>
                          <tr>
                            <th>Naziv</th>
                            <th>Adresa</th>
                            <th>Mesto</th>
                            <th>Tekuci Racun</th>
                            <th>Email</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach( $clients as $client )
                            <tr>
                                <td class="table-client">{{ $client->naziv }}</td>
                                <td class="table-number">{{ $client->adresa }}</td>
                                <td class="table-text">{{ $client->mesto }}</td>
                                <td class="table-text">{{ $client->tekuci_racun }}</td>
                                <td class="table-text">{{ $client->email }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
    </div>
</div>
@endsection