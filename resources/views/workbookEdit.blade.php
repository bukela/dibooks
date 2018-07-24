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
                    {{-- {{$workbooks->id}} --}}
                    <div class="card-content">
                            @include('layouts.errors')
                            {{-- @include('layouts.success') --}}
                            
                            <form action="{{ route('workbook.update', $workbooks->id) }}" method="POST">
                                {{-- <input name="_method" type="hidden" value="PUT">
                                 --}}
                                 {{-- {{ method_field('PUT') }} --}}
                                {{ csrf_field() }}
                                {{-- @method('PUT')
                                @csrf --}}

                            <div class="field">
                                <label class="label">Osnovni Broj</label>
                                <div class="control">
                                    <input class="input" name="osnovni_broj" value="{{ $workbooks->osnovni_broj }}" type="text" placeholder="Osnovni Broj">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Predmet</label>
                                <div class="control">
                                        <textarea class="textarea" name="predmet" type="text" placeholder="Predmet">{{ $workbooks->predmet }}</textarea>
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