@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="columns is-marginless is-centered">
        <div class="column is-12">
            <nav class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="username">IZMENI DELOVODNIK ITEM&nbsp;&nbsp;<i class="fa fa-edit"></i>&nbsp;<i class="fa fa-book"></i></span>
                    </p>
                </header>

                <div class="card-content">
    @include('layouts.errors') {{--
    @include('layouts.success') --}}

                    <form action="{{ route('workbook_item.update',$workbook_item->id) }}" method="post">
                        {{ csrf_field() }}

                        <div class="field hide-me">
                            <div class="control has-text-centered">
                                <input class="input" name="workbook_id" value="{{ $workbook_item->workbook_id }}" type="text"></input>
                            </div>
                        </div>

                        <div class="field is-grouped podbroj">
                            <div class="field">
                                <label class="label">Podbroj</label>
                                <div class="control">
                                <input class="input" name="podbroj" value="{{ $workbook_item->podbroj }}" type="text" placeholder="Podbroj"></input>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Datum Prijema <i class="fa fa-calendar-alt"></i></label>
                                <div class="control">
                                    <input class="input input-date" name="datum_prijema" value="{{ $workbook_item->datum_prijema }}" type="date-local" placeholder="Datum Prijema"></input>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Posiljalac</label>
                                <div class="control">
                                    <input class="input" name="posiljalac" value="{{ $workbook_item->posiljalac }}" type="text" placeholder="Posiljalac">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Broj</label>
                                <div class="control">
                                    <input class="input" name="broj" value="{{ $workbook_item->broj }}" type="text" placeholder="Broj">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Datum <i class="fa fa-calendar-alt"></i></label>
                                <div class="control">
                                    <input class="input input-date" name="datum" value="{{ $workbook_item->datum }}" type="date-local" placeholder="Datum"></input>
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