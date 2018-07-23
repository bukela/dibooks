@extends('layouts.app')

@section('content')
<div class="container">
        <div class="columns is- is-marginless is-centered">
            <div class="column is-7">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            <span class="username">DODAJ FAKTURA ITEM&nbsp;&nbsp;<i class="fa fa-plus"></i>&nbsp;<i class="fa fa-folder-open"></i></span>
                        </p>
                    </header>

                    <div class="card-content">
                            @include('layouts.errors')
                            {{-- @include('layouts.success') --}}
                            
                            <form action="{{ route('invoice_item.store') }}" method="post">
                                {{ csrf_field() }}

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

                            <div class="field hide-me">
                                <div class="control has-text-centered">
                                    <input class="input" name="invoice_id" value="{{ basename(request()->path()) }}" type="text"></input>
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