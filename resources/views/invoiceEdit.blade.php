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
                            
                            <form action="{{ route('invoice.update' ,$invoices->id) }}" method="post">
                                {{ csrf_field() }}
                            <div class="field">
                            <label class="label">Klijent</label>
                            <div class="select is-small">
                                    <select name="client_id" id="client_id">
                                            @foreach ($clients as $client)
                                                <option value="{{ $client->id }}"
                                                    @if($invoices->client_id == $client->id)
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
                                    <input class="input" name="broj_fakture" value="{{ $invoices->broj_fakture }}" type="text" placeholder="Broj Fakture">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Valuta</label>
                                <div class="select is-small">
                                        <select name="valuta" id="valuta">
                                            <option value="RSD"
                                            {{ $value = "RSD" }}
                                            @if($invoices->valuta == $value)
                                            selected
                                            @endif
                                            >RSD</option>
                                            <option value="EUR"
                                            {{ $value = "EUR" }}
                                            @if($invoices->valuta == $value)
                                            selected
                                            @endif
                                            >EUR</option>
                                            <option value="USD"
                                            {{ $value = "USD" }}
                                            @if($invoices->valuta == $value)
                                            selected
                                            @endif
                                            >USD</option>
                                        </select>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Placen Iznos</label>
                                <div class="control">
                                    <input class="input" name="placen_iznos" value="{{ $invoices->placen_iznos }}" type="text" placeholder="Placen Iznos">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Napomena</label>
                                <div class="control">
                                    <textarea class="textarea" name="napomena" type="text" placeholder="Napomena">{{ $invoices->napomena }}</textarea>
                                </div>
                            </div>
                            {{-- invoice items --}}
                        {{-- @foreach($invoices->invoice_item as $invo_item)
                        <div class="username">Faktura Item {{ $loop->iteration }}
                        
                            <span class="field"><a href="{{ route('invoice_item.edit',$invo_item->id) }}" >&nbsp;&nbsp;<i class="fa fa-edit edit-ico"></i></a></span>&nbsp;
                            <span class="field"><a href="{{ route('invoice_item.delete',$invo_item->id) }}" onclick="return confirm('Brisanje ?')" ><i class="fa fa-trash-alt trash"></i></a></span>
                        
                        </div>
                            <div class="field">
                                <label class="label">Opis</label>
                                <div class="control">
                                        <textarea class="textarea" name="opis" type="text" placeholder="Opis">{{ $invo_item->opis }}</textarea>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Jedinica Mere</label>
                                <div class="select is-small">
                                        <select name="jedinica_mere" id="jedinica_mere">
                                            <option value="usluga"
                                            {{ $value = "usluga" }}
                                            @if($invo_item->jedinica_mere == $value)
                                            selected
                                            @endif
                                            >Usluga</option>

                                            <option value="komad"
                                            {{ $value = "komad" }}
                                            @if($invo_item->jedinica_mere == $value)
                                            selected
                                            @endif
                                            >Komad</option>
                                            
                                        </select>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Kolicina</label>
                                <div class="control">
                                        <input class="input" name="kolicina" type="text" value="{{ $invo_item->kolicina }}" placeholder="Kolicina"></input>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Iznos</label>
                                <div class="control">
                                        <input class="input" name="iznos" type="text" value="{{ $invo_item->iznos }}" placeholder="Iznos"></input>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Vrednost</label>
                                <div class="control">
                                        <input class="input" name="vrednost" type="text" value="{{ $invo_item->vrednost }}" placeholder="Vrednost"></input>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Osnovica</label>
                                <div class="control">
                                        <input class="input" name="osnovica" type="text" value="{{ $invo_item->osnovica }}" placeholder="Osnovica"></input>
                                </div>
                            </div>
                            <div class="field item-border">
                                <label class="label">Iznos PDV</label>
                                <div class="control">
                                        <input class="input" name="iznos_pdv" type="text" value="{{ $invo_item->iznos_pdv }}" placeholder="Iznos PDV"></input>
                                </div>
                            </div>
                            @endforeach --}}
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