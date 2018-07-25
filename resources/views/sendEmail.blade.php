@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="columns is- is-marginless is-centered">
            <div class="column is-7">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            Dashboard
                        </p>
                    </header>

                    <div class="card-content">
                    <a href="{{ route('sendEmail') }}" class="button is-primary is-outlined">Send Email</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection