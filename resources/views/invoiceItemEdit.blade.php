@extends('layouts.app')

@section('content')
<div class="container">
    {{-- {{dd($invoices)}} --}}
        <div class="columns is- is-marginless is-centered">
            <div class="column is-7">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            <span class="username">IZMENI FAKTURU ITEM&nbsp;&nbsp;<i class="fa fa-folder-open"></i></span>
                        </p>
                    </header>

                    <div class="card-content">
                            @include('layouts.errors')
                            {{-- @include('layouts.success') --}}
                            
                            <form action="{{ route('invoice_item.update' ,$invoices->id) }}" method="post">
                                {{ csrf_field() }}

                        
                            <div class="field">
                                <label class="label">Opis</label>
                                <div class="control">
                                        <textarea class="textarea" name="opis" type="text" placeholder="Opis">{{ $invoices->opis }}</textarea>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Jedinica Mere</label>
                                <div class="select is-small">
                                        <select name="jedinica_mere" id="jedinica_mere">
                                            <option value="usluga"
                                            {{ $value = "usluga" }}
                                            @if($invoices->jedinica_mere == $value)
                                            selected
                                            @endif
                                            >Usluga</option>

                                            <option value="komad"
                                            {{ $value = "komad" }}
                                            @if($invoices->jedinica_mere == $value)
                                            selected
                                            @endif
                                            >Komad</option>
                                        </select>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Kolicina</label>
                                <div class="control">
                                        <input class="input" name="kolicina" type="text" value="{{ $invoices->kolicina }}" placeholder="Kolicina"></input>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Iznos</label>
                                <div class="control">
                                        <input class="input" name="iznos" type="text" value="{{ $invoices->iznos }}" placeholder="Iznos"></input>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Vrednost</label>
                                <div class="control">
                                        <input class="input" name="vrednost" type="text" value="{{ $invoices->vrednost }}" placeholder="Vrednost"></input>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Osnovica</label>
                                <div class="control">
                                        <input class="input" name="osnovica" type="text" value="{{ $invoices->osnovica }}" placeholder="Osnovica"></input>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Iznos PDV</label>
                                <div class="control">
                                        <input class="input" name="iznos_pdv" type="text" value="{{ $invoices->iznos_pdv }}" placeholder="Iznos PDV"></input>
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