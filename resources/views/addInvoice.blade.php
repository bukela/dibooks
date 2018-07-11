@extends('layouts.app')

@section('content')
<div class="container">
        <div class="columns is- is-marginless is-centered">
            <div class="column is-7">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            <span class="username">DODAJ FAKTURU&nbsp;&nbsp;<i class="fa fa-book"></i></span>
                        </p>
                    </header>

                    <div class="card-content">
                            @include('layouts.errors')
                            @include('layouts.success')
                            
                            <form action="{{ route('addInvoice.store') }}" method="post">
                                {{ csrf_field() }}
                            <div class="field">
                            <label class="label">Klijent</label>
                            <div class="select is-small">
                                    <select name="client_id" id="client_id">
                                            @foreach ($clients as $client)
                                                <option value="" selected disabled hidden>Izaberi klijenta</option>
                                                <option value="{{ $client->id }}">{{ $client->naziv }}</option>
                                            @endforeach
                                    </select>
                            </div>
                            </div>

                            <div class="field">
                                <label class="label">Broj Fakture</label>
                                <div class="control">
                                    <input class="input" name="broj_fakture" value="{{ old('broj_fakture') }}" type="text" placeholder="Adresa">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Valuta</label>
                                <div class="select is-small">
                                        <select name="valuta" id="valuta">
                                            <option value="RSD">RSD</option>
                                            <option value="EUR">EUR</option>
                                            <option value="USD">USD</option>
                                        </select>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Placen Iznos</label>
                                <div class="control">
                                    <input class="input" name="placen_iznos" value="{{ old('placen_iznos') }}" type="text" placeholder="Placen Iznos">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Napomena</label>
                                <div class="control">
                                        <textarea class="textarea" name="napomena" type="text" placeholder="Napomena"></textarea>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control has-text-centered">
                                    <button class="button is-primary is-outlined" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                            
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection