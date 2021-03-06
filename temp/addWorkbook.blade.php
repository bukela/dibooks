@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="columns is-marginless is-centered">
        <div class="column is-12">
            <nav class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="username">DODAJ DELOVODNIK&nbsp;&nbsp;<i class="fa fa-book"></i></span>
                    </p>
                </header>

                <div class="card-content">
    @include('layouts.errors') {{--
    @include('layouts.success') --}}

                    <form action="{{ route('addWorkbook.store') }}" method="post">
                        {{ csrf_field() }}

                        <div class="field">
                            <label class="label">Osnovni Broj</label>
                            <div class="control">
                                <input class="input" name="osnovni_broj" value="{{ old('osnovni_broj') }}" type="text" placeholder="Osnovni Broj">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Predmet</label>
                            <div class="control">
                                <textarea class="textarea" name="predmet" type="text" placeholder="Predmet"></textarea>
                            </div>
                        </div>

                        {{-- workbook items --}}
                        <div class="field is-grouped podbroj">
                            <div class="field">
                                <label class="label"><span class="username">1&nbsp;</span>Podbroj</label>
                                <div class="control">
                                    <input class="input" name="podbroj" type="text" placeholder="Podbroj"></input>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Datum Prijema <i class="fa fa-calendar-alt"></i></label>
                                <div class="control">
                                    <input class="input input-date" name="datum_prijema" type="date" placeholder="Datum Prijema"></input>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Posiljalac</label>
                                <div class="control">
                                    <input class="input" name="posiljalac" value="{{ old('posiljalac') }}" type="text" placeholder="Posiljalac">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Broj</label>
                                <div class="control">
                                    <input class="input" name="broj" value="{{ old('broj') }}" type="text" placeholder="Broj">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Datum <i class="fa fa-calendar-alt"></i></label>
                                <div class="control">
                                    <input class="input input-date" name="datum" type="date" placeholder="Datum"></input>
                                </div>
                            </div>
                        </div>
                        {{-- podbroj 2 --}}
                        <div class="field is-grouped podbroj">
                            <div class="field">
                                <label class="label"><span class="username">2&nbsp;</span>Podbroj</label>
                                <div class="control">
                                    <input class="input" name="podbroj_2" type="text" placeholder="Podbroj"></input>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Datum Prijema <i class="fa fa-calendar-alt"></i></label>
                                <div class="control">
                                    <input class="input input-date" name="datum_prijema_2" type="date" placeholder="Datum Prijema"></input>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Posiljalac</label>
                                <div class="control">
                                    <input class="input" name="posiljalac_2" value="{{ old('posiljalac') }}" type="text" placeholder="Posiljalac">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Broj</label>
                                <div class="control">
                                    <input class="input" name="broj_2" value="{{ old('broj') }}" type="text" placeholder="Broj">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Datum <i class="fa fa-calendar-alt"></i></label>
                                <div class="control">
                                    <input class="input input-date" name="datum_2" type="date" placeholder="Datum"></input>
                                </div>
                            </div>
                        </div>
                        {{-- podbroj 3 --}}
                        <div class="field is-grouped podbroj">
                            <div class="field">
                                <label class="label"><span class="username">3&nbsp;</span>Podbroj</label>
                                <div class="control">
                                    <input class="input" name="podbroj_3" type="text" placeholder="Podbroj"></input>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Datum Prijema <i class="fa fa-calendar-alt"></i></label>
                                <div class="control">
                                    <input class="input input-date" name="datum_prijema_3" type="date" placeholder="Datum Prijema"></input>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Posiljalac</label>
                                <div class="control">
                                    <input class="input" name="posiljalac_3" value="{{ old('posiljalac') }}" type="text" placeholder="Posiljalac">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Broj</label>
                                <div class="control">
                                    <input class="input" name="broj_3" value="{{ old('broj') }}" type="text" placeholder="Broj">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Datum <i class="fa fa-calendar-alt"></i></label>
                                <div class="control">
                                    <input class="input input-date" name="datum_3" type="date" placeholder="Datum"></input>
                                </div>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control has-text-centered">
                                <button class="button is-primary is-outlined" type="submit">Submit</button>
                            </div>
                        </div>
                </div>
                </form>

        </div>
        </nav>
    </div>
</div>
</div>
@endsection