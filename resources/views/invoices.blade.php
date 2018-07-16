@extends('layouts.app')

@section('content')
<div class="container">
        <div class="has-text-centered"><p class="page-title">FAKTURE<span class="username">&nbsp;<i class="fa fa-folder"></i></span></p></div>
    <div class="columns is-centered">
            <div class="column is-four-fifths">
                    @include('layouts.errors')
                    {{-- @include('layouts.success') --}}
                    <table class="table is-fullwidth is-bordered">
                        <thead>
                          <tr>
                            <th>Klijent</th>
                            <th>Broj Fakture</th>
                            <th>Napomena</th>
                            <th>Pregled</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach( $invoices as $invoice )
                            <tr>
                                <td class="table-client">{{ $invoice->client->naziv }}</td>
                                <td class="table-number">{{ $invoice->broj_fakture }}</td>
                                <td class="table-text">{{ $invoice->napomena }}</td>
                                <td class="table-text has-text-centered"><a href="{{ route('invoice.show',$invoice->id) }}"><i class="fa fa-eye edit-ico"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="columns">
                        <div class="column is-2 is-offset-5">
                            {{ $clients->links() }}
                        </div>
                    </div>
            </div>
    </div>
</div>
@endsection