@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns is-centered">
            <div class="column is-four-fifths">
                    <table class="table is-fullwidth is-bordered">
                        <thead>
                          <tr>
                            <th>Klijent</th>
                            <th>Broj Fakture</th>
                            <th>Napomena</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach( $invoices as $invoice )
                            <tr>
                                <td class="table-client">{{ $invoice->client_id }}</td>
                                <td class="table-number">{{ $invoice->broj_fakture }}</td>
                                <td class="table-text">{{ $invoice->napomena }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
    </div>
</div>
@endsection