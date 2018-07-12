@extends('layouts.app')

@section('content')
<div class="container">
        <div class="columns is- is-marginless is-centered">
            <div class="column is-7">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            <span class="username">DODAJ FAKTURU&nbsp;&nbsp;<i class="fa fa-folder-open"></i></span>
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
                            {{-- invoice items --}}
                            <div class="field">
                                <label class="label">Opis</label>
                                <div class="control">
                                        <textarea class="textarea" name="opis" type="text" placeholder="Opis"></textarea>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Jedinica Mere</label>
                                <div class="select is-small">
                                        <select name="jedinica_mere" id="jedinica_mere">
                                            <option value="usluga">Usluga</option>
                                            <option value="komad">Komad</option>
                                        </select>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Kolicina</label>
                                <div class="control">
                                        <input class="input" name="kolicina" type="text" placeholder="Kolicina"></input>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Iznos</label>
                                <div class="control">
                                        <input class="input" name="iznos" type="text" placeholder="Iznos"></input>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Vrednost</label>
                                <div class="control">
                                        <input class="input" name="vrednost" type="text" placeholder="Vrednost"></input>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Osnovica</label>
                                <div class="control">
                                        <input class="input" name="osnovica" type="text" placeholder="Osnovica"></input>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Iznos PDV</label>
                                <div class="control">
                                        <input class="input" name="iznos_pdv" type="text" placeholder="Iznos PDV"></input>
                                </div>
                            </div>

                            {{-- <div class="field">
                                <label class="label">Vrednost sa PDV</label>
                                <div class="control">
                                        <textarea class="input" name="vrednost_sa_pdv" type="text" placeholder="Vrednost sa PDV"></textarea>
                                </div>
                            </div> --}}

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