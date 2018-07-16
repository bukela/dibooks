@extends('layouts.app')

@section('content')
<div class="container">
        <div class="columns is-marginless is-centered">
            <div class="column is-7">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            <span class="username">IZMENI DELOVODNIK&nbsp;&nbsp;<i class="fa fa-book"></i></span>
                        </p>
                    </header>

                    <div class="card-content">
                            @include('layouts.errors')
                            {{-- @include('layouts.success') --}}
                            
                            <form action="{{ route('workbook.update', $workbook->id) }}" method="post">
                                {{ csrf_field() }}

                            <div class="field">
                                <label class="label">Osnovni Broj</label>
                                <div class="control">
                                    <input class="input" name="osnovni_broj" value="{{ $workbook->osnovni_broj }}" type="text" placeholder="Osnovni Broj">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Predmet</label>
                                <div class="control">
                                        <textarea class="textarea" name="predmet" type="text" placeholder="Predmet">{{ $workbook->predmet }}</textarea>
                                </div>
                            </div>

                            {{-- workbook items --}}
                            <div class="field">
                                <label class="label">Broj</label>
                                <div class="control">
                                    <input class="input" name="broj" value="{{ $workbook->workbook_item->broj }}" type="text" placeholder="Broj">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Posiljalac</label>
                                <div class="control">
                                    <input class="input" name="posiljalac" value="{{ $workbook->workbook_item->posiljalac }}" type="text" placeholder="Posiljalac">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Podbroj</label>
                                <div class="control">
                                    <input class="input" name="podbroj" type="text" value="{{ $workbook->workbook_item->podbroj }}" placeholder="Podbroj"></input>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Datum Prijema <i class="fa fa-calendar-alt"></i></label>
                                <div class="control">
                                    <input class="input input-date" name="datum_prijema" type="date-local" value="{{ $workbook->workbook_item->datum_prijema }}" placeholder="Datum Prijema"></input>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Datum <i class="fa fa-calendar-alt"></i></label>
                                <div class="control">
                                    <input class="input input-date" name="datum" type="date-local" value="{{ $workbook->workbook_item->datum }}" placeholder="Datum"></input>
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