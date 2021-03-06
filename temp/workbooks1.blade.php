@extends('layouts.app')

@section('content')
<div class="container">
        <div class="has-text-centered"><p class="page-title">DELOVODNICI<span class="username">&nbsp;<i class="fa fa-book"></i></span></p></div>
        {{-- @include('layouts.search') --}}
    <div class="columns is-centered">
            <div class="column is-four-fifths">
                    @include('layouts.errors')
                    {{-- @include('layouts.success') --}}
                    <table class="table is-fullwidth is-bordered is-striped">
                        <thead>
                          <tr>
                            <th>Osnovni Broj</th>
                            <th>Predmet</th>
                            <th>Posiljalac</th>
                            <th>Datum Prijema</th>
                            <th>Pregled</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach( $workbooks as $workbook )
                            <tr>
                                <td class="table-client">{{ $workbook->osnovni_broj }}</td>
                                <td class="table-number">{{ $workbook->predmet }}</td>
                                <td class="table-text">{{ $workbook->workbook_item->posiljalac }}</td>
                                <td class="table-text">{{ $workbook->workbook_item->datum_prijema }}</td>
                                <td class="table-text has-text-centered"><a href="{{ route('workbook.show',$workbook->id) }}"><i class="fa fa-eye edit-ico"></i></a></td>
                            </tr>
                            @endforeach
                            {{-- <workbooks></workbooks> --}}
                        </tbody>
                    </table>
                    <div class="columns">
                        <div class="column is-2 is-offset-5">
                            {{ $workbooks->links() }}
                        </div>
                    </div>
            </div>
    </div>
</div>

@endsection