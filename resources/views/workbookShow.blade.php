@extends('layouts.app')

@section('content')
<div class="container">
<div class="has-text-centered"><p class="page-title">DELOVODNIK br. {{ $workbook->osnovni_broj }}</p></div>
    <div class="columns is-centered">
            {{-- <div class="column is-four-fifths"> --}}
                    <table class="table is-fullwidth is-bordered">
                        <thead>
                          <tr>
                            <th>Osnovni Broj</th>
                            <th>Predmet</th>
                            <th>Broj</th>
                            <th>Posiljalac</th>
                            <th>Podbroj</th>
                            <th>Datum Prijema</th>
                            <th>Datum</th>
                            <th>Edit</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="table-client">{{ $workbook->osnovni_broj }}</td>
                                <td class="table-client">{{ $workbook->predmet }}</td>
                                <td class="table-number">{{ $workbook->workbook_item->broj }}</td>
                                <td class="table-text">{{ $workbook->workbook_item->posiljalac }}</td>
                                <td class="table-text">{{ $workbook->workbook_item->podbroj }}</td>
                                <td class="table-text">{{ $workbook->workbook_item->datum_prijema }}</td>
                                <td class="table-text">{{ $workbook->workbook_item->datum }}</td>
                                <td class="table-text has-text-centered"><a href="{{ route('workbook.edit',$workbook->id) }}"><i class="fa fa-edit edit-ico"></i></a>&nbsp;&nbsp;<a href="{{ route('workbook.delete',$workbook->id)  }}" onclick="return confirm('Brisanje Delovodnika ?')" ><i class="fa fa-trash-alt trash"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
            {{-- </div> --}}
    </div>
    <button class="button print-window"><i class="fa fa-print"></i></button>
</div>

@endsection