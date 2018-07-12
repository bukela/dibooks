<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        {{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css"> --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    </head>
    <body>
        <div id="app">
            <nav class="navbar has-shadow">
                <div class="container">
                    <div class="navbar-brand">
                        <a href="{{ url('/') }}" class="navbar-item app-title">{{ config('app.name', 'Laravel') }}</a>

                        <div class="navbar-burger burger" data-target="navMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <div class="navbar-menu" id="navMenu">
                        <div class="navbar-start">
                            @if (Auth::user())
                            <a class="navbar-item " href="{{ route('addClient') }}">DODAJ KLIJENTA</a>
                            <a class="navbar-item " href="{{ route('addInvoice') }}">DODAJ FAKTURU</a>
                            <a class="navbar-item " href="{{ route('addIncomingInvoice') }}">ULAZNE FAKTURE</a>
                            <a class="navbar-item " href="{{ route('addWorkbook') }}">DELOVODNIK</a>
                            <div class="navbar-item has-dropdown is-hoverable">
                                    <a class="navbar-link">PREGLED</a>

                                    <div class="navbar-dropdown">
                                        <a class="navbar-item" href="{{ route('clients') }}">
                                            KLIJENTI
                                        </a>
                                    
                                        <a class="navbar-item" href="{{ route('invoices') }}">
                                            FAKTURE
                                        </a>
                                    
                                        <a class="navbar-item" href="{{ route('incominginvoices') }}">
                                            ULAZNE FAKTURE
                                        </a>
                                    
                                        <a class="navbar-item" href="{{ route('workbooks') }}">
                                            DELOVODNICI
                                        </a>
                                    </div>
                            </div>
                            @endif
                        </div>

                        <div class="navbar-end">
                            @if (Auth::guest())
                                <a class="navbar-item " href="{{ route('login') }}">Login</a>
                                <a class="navbar-item " href="{{ route('register') }}">Register</a>
                            @else
                                <div class="navbar-item has-dropdown is-hoverable">
                                    <a class="navbar-link" href="#">{{ Auth::user()->name }}</a>

                                    <div class="navbar-dropdown">
                                        <a class="navbar-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </nav>
            @yield('content')
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        {{-- <script src="
            https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
			integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
			crossorigin="anonymous
        "></script>
        <script>
        $(function() {
          $( "#datepicker,#datepicker2,#datepicker3" ).datepicker();
        });
        </script>
         <script type="text/javascript">
            $(function() {
                $( "#datepicker,#datepicker2,#datepicker3" ).datepicker( "option", "dateFormat", 'yy-mm-dd');
            });
        </script> --}}
        
    </body>
</html>
