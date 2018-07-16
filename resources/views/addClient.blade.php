@extends('layouts.app')

@section('content')
<div class="container">
        <div class="columns is- is-marginless is-centered">
            <div class="column is-7">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            <span class="username">DODAJ KLIJENTA&nbsp;&nbsp;<i class="fa fa-user"></i></span>
                        </p>
                    </header>

                    <div class="card-content">
                            {{-- @include('layouts.errors')
                            @include('layouts.success') --}}
                            
                            <form action="{{ route('addClient.store') }}" method="post">
                                {{ csrf_field() }}
                            <div class="field">
                            <label class="label">Naziv</label>
                                <div class="control">
                                    <input class="input" name="naziv" type="text" placeholder="Naziv">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Adresa</label>
                                <div class="control">
                                    <input class="input" name="adresa" type="text" placeholder="Adresa">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Mesto</label>
                                <div class="control">
                                    <input class="input" name="mesto" type="text" placeholder="Mesto">
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">PIB</label>
                                <div class="control">
                                    <input class="input" name="pib" type="text" placeholder="PIB">
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">JMBG</label>
                                <div class="control">
                                    <input class="input" name="jmbg" type="text" placeholder="JMBG">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Tekuci Racun</label>
                                <div class="control">
                                    <input class="input" name="tekuci_racun" type="text" placeholder="Tekuci Racun">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Telefon</label>
                                <div class="control">
                                    <input class="input" name="telefon" type="text" placeholder="Telefon">
                                </div>
                            </div>
                                  
                            <div class="field">
                                <label class="label">Email</label>
                                <div class="control">
                                    <input class="input" name="email" type="email" placeholder="Email">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Osoba za Kontakt</label>
                                <div class="control">
                                    <input class="input" name="osoba_za_kontakt" type="text" placeholder="Email">
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