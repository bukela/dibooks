@extends('layouts.app')

@section('content')
<div class="container">
<div class="has-text-centered"><p class="page-title">DELOVODNIK br. {{ $workbooks->osnovni_broj }}</p></div>
    <div class="columns is-centered">
            {{-- <div class="column is-four-fifths"> --}}
                    <table class="table is-fullwidth is-bordered">
                        <thead>
                          <tr>
                            <th>Osnovni Broj</th>
                            <th>Predmet</th>
                            <th>Edit</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td class="table-client">{{ $workbooks->osnovni_broj }}</td>
                                <td class="table-client">{{ $workbooks->predmet }}</td>
                                <td class="table-text has-text-centered"><a href="{{ route('workbook.edit',$workbooks->id) }}"><i class="fa fa-edit edit-ico"></i></a>&nbsp;&nbsp;<a href="{{ route('workbook.delete',$workbooks->id)  }}" onclick="return confirm('Brisanje Delovodnika ?')" ><i class="fa fa-trash-alt trash"></i></a></td>
                                @foreach($workbooks->workbook_item as $workbook)
                                <thead class="workbook-show">
                                    <th>Broj</th>
                                    <th>Posiljalac</th>
                                    <th>Podbroj</th>
                                    <th>Datum Prijema</th>
                                    <th>Datum</th>
                                    <th>Edit</th>
                                    
                                </thead>
                                
                                <tr>
                                <td class="table-number">{{ $workbook->broj }}</td>
                                <td class="table-text">{{ $workbook->posiljalac }}</td>
                                <td class="table-text">{{ $workbook->podbroj }}</td>
                                <td class="table-text">{{ $workbook->datum_prijema }}</td>
                                <td class="table-text">{{ $workbook->datum }}</td>
                                <td class="table-text has-text-centered">
                                    <span class="field"><a href="{{ route('workbook_item.edit',$workbook->id) }}" ><i class="fa fa-edit edit-ico"></i></a></span>&nbsp;
                                    <span class="field"><a href="{{ route('workbook_item.delete',$workbook->id) }}" onclick="return confirm('Brisanje ?')" ><i class="fa fa-trash-alt trash"></i></a></span>
                                </td>
                                
                                </tr>
                                @endforeach
                            </tr>
                            
                        </tbody>
                    </table>
            {{-- </div> --}}
    </div>
    <span class="username"><a href="{{ route('workbook_item.create',$workbooks->id) }}" class="witem"><i class="fa fa-plus"></i>&nbsp;Dodaj Item</a></span><br><br>
    <button class="button print-window"><i class="fa fa-print"></i></button>
</div>

@endsection