@extends('layouts.app')

@section('content')
<div class="container">
    {{-- {{dd($invoices)}} --}}
        <div class="columns is- is-marginless is-centered">
            <div class="column is-7">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            <span class="username">IZMENI FAKTURU&nbsp;&nbsp;<i class="fa fa-folder-open"></i></span>
                        </p>
                    </header>

                    <div class="card-content">
                            @include('layouts.errors')
                            {{-- @include('layouts.success') --}}
                            
                            <form action="{{ route('invoice.update' ,$invoice->id) }}" method="post">
                                {{ csrf_field() }}
                            <div class="field">
                            <label class="label">Klijent</label>
                            <div class="select is-small">
                                    <select name="client_id" id="client_id">
                                            @foreach ($clients as $client)
                                                <option value="{{ $client->id }}"
                                                    @if($invoice->client_id == $client->id)
                                                    selected
                                                    @endif
                                            >{{ $client->naziv }}</option>
                                            @endforeach
                                    </select>
                            </div>
                            </div>

                            <div class="field">
                                <label class="label">Broj Fakture</label>
                                <div class="control">
                                    <input class="input" name="broj_fakture" value="{{ $invoice->broj_fakture }}" type="text" placeholder="Broj Fakture">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Valuta</label>
                                <div class="select is-small">
                                        <select name="valuta" id="valuta">
                                            {{-- <option value="RSD">RSD</option>
                                            <option value="EUR">EUR</option>
                                            <option value="USD" value="USD"
                                            {{ $value = "USD" }}
                                            @if($invoice->valuta == $value)
                                            selected
                                            @endif
                                            >USD</option> --}}
                                            <option value="RSD"
                                            {{ $value = "RSD" }}
                                            @if($invoice->valuta == $value)
                                            selected
                                            @endif
                                            >RSD</option>
                                            <option value="EUR"
                                            {{ $value = "EUR" }}
                                            @if($invoice->valuta == $value)
                                            selected
                                            @endif
                                            >EUR</option>
                                            <option value="USD"
                                            {{ $value = "USD" }}
                                            @if($invoice->valuta == $value)
                                            selected
                                            @endif
                                            >USD</option>
                                        </select>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Placen Iznos</label>
                                <div class="control">
                                    <input class="input" name="placen_iznos" value="{{ $invoice->placen_iznos }}" type="text" placeholder="Placen Iznos">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Napomena</label>
                                <div class="control">
                                    <textarea class="textarea" name="napomena" type="text" placeholder="Napomena">{{ $invoice->napomena }}</textarea>
                                </div>
                            </div>
                            {{-- invoice items --}}
                            <div class="field">
                                <label class="label">Opis</label>
                                <div class="control">
                                        <textarea class="textarea" name="opis" type="text" placeholder="Opis">{{ $invoice->invoice_item->opis }}</textarea>
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
                                        <input class="input" name="kolicina" type="text" value="{{ $invoice->invoice_item->kolicina }}" placeholder="Kolicina"></input>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Iznos</label>
                                <div class="control">
                                        <input class="input" name="iznos" type="text" value="{{ $invoice->invoice_item->iznos }}" placeholder="Iznos"></input>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Vrednost</label>
                                <div class="control">
                                        <input class="input" name="vrednost" type="text" value="{{ $invoice->invoice_item->vrednost }}" placeholder="Vrednost"></input>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Osnovica</label>
                                <div class="control">
                                        <input class="input" name="osnovica" type="text" value="{{ $invoice->invoice_item->osnovica }}" placeholder="Osnovica"></input>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Iznos PDV</label>
                                <div class="control">
                                        <input class="input" name="iznos_pdv" type="text" value="{{ $invoice->invoice_item->iznos_pdv }}" placeholder="Iznos PDV"></input>
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
                        <span class="username"><a href="{{ route('invoice_item.create',$invoice->id) }}" class="witem"><i class="fa fa-plus"></i>&nbsp;Dodaj Item</a></span>
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection