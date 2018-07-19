@extends('layouts.app')

@section('content')
<div class="container">
<div class="has-text-centered"><p class="page-title">KLIJENT: {{ $client->naziv }}</p></div>
    <div class="columns is-centered">
            {{-- <div class="column is-four-fifths"> --}}
                    <table class="table is-fullwidth is-bordered">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Naziv</th>
                            <th>Adresa</th>
                            <th>Mesto</th>
                            <th>PIB</th>
                            <th>JMBG</th>
                            <th>Tekuci Racun</th>
                            <th>Telefon</th>
                            <th>Email</th>
                            <th>Osoba za Kontakt</th>
                            <th>Napomena</th>
                            <th>Edit</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="table-client">{{ $client->id }}</td>
                                <td class="table-client">{{ $client->naziv }}</td>
                                <td class="table-number">{{ $client->adresa }}</td>
                                <td class="table-text">{{ $client->mesto }}</td>
                                <td class="table-text">{{ $client->pib }}</td>
                                <td class="table-text">{{ $client->jmbg }}</td>
                                <td class="table-text">{{ $client->tekuci_racun }}</td>
                                <td class="table-text">{{ $client->telefon }}</td>
                                <td class="table-text">{{ $client->email }}</td>
                                <td class="table-text">{{ $client->osoba_za_kontakt }}</td>
                                <td class="table-text">{{ $client->napomena }}</td>
                                <td class="table-text has-text-centered"><a href="{{ route('client.edit',$client->id) }}"><i class="fa fa-edit edit-ico"></i></a><a href="{{ route('client.delete',$client->id) }}" onclick="return confirm('Brisanje Klijenta ?')"><i class="fa fa-trash-alt trash"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
            {{-- </div> --}}
    </div>
    <button class="button print-window"><i class="fa fa-print"></i></button>
</div>
@endsection