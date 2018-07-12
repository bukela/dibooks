@extends('layouts.app')

@section('content')
<div class="container">
        <div class="columns is- is-marginless is-centered">
            <div class="column is-7">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            <span class="username">ULAZNE FAKTURE&nbsp;&nbsp;<i class="fa fa-arrow-down"></i>&nbsp;<i class="fa fa-folder-open"></i></span>
                        </p>
                    </header>

                    <div class="card-content">
                            @include('layouts.errors')
                            @include('layouts.success')
                            
                            <form action="{{ route('addIncomingInvoice.store') }}" method="post">
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
                                <label class="label">Redni Broj</label>
                                <div class="control">
                                    <input class="input" name="redni_broj" value="{{ old('redni_broj') }}" type="text" placeholder="Redni broj">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Datum Prijema <i class="fa fa-calendar-alt"></i></label>
                                <div class="control">
                                    <input class="input input-date" name="datum_prijema" type="date" placeholder="Datum Prijema">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Datum Fakture <i class="fa fa-calendar-alt"></i></label>
                                <div class="control">
                                    <input class="input input-date" name="datum_fakture" type="date" placeholder="Datum Fakture">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Broj Fakture</label>
                                <div class="control">
                                    <input class="input" name="broj_fakture" value="{{ old('broj_fakture') }}" type="text" placeholder="Broj Fakture">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Iznos Fakture</label>
                                <div class="control">
                                    <input class="input" name="iznos_fakture" value="{{ old('iznos_fakture') }}" type="text" placeholder="Iznos Fakture">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Nacin Placanja</label>
                                <div class="select is-small">
                                        <select name="nacin_placanja" id="nacin_placanja">
                                            <option value="Gotovina">Gotovina</option>
                                            <option value="Virman">Virman</option>
                                            <option value="Kartica">Kartica</option>
                                        </select>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Datum Placanja <i class="fa fa-calendar-alt"></i></label>
                                <div class="control">
                                    <input class="input input-date" name="datum_placanja" type="date" placeholder="Datum Placanja">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Iznos</label>
                                <div class="control">
                                    <input class="input" name="iznos" type="text" placeholder="Iznos">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Broj Izvoda</label>
                                <div class="control">
                                    <input class="input" name="broj_izvoda" type="text" placeholder="Broj Izvoda">
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