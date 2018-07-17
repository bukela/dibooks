@extends('layouts.app') 
@section('content')
<div class="container">
{{-- {{ Request::path() }} --}}
    <div class="has-text-centered">
        <p class="page-title">KLIJENTI<span class="username">&nbsp;<i class="fa fa-user"></i></span></p>
    </div>
    @include('layouts.search')
    <div class="columns is-centered">
        <div class="column is-four-fifths">
    @include('layouts.errors') {{--
    @include('layouts.success') --}}
            <table class="table is-fullwidth is-bordered is-striped">
                <thead>
                    <tr>
                        <th>Naziv</th>
                        <th>Adresa</th>
                        <th>Mesto</th>
                        <th>Tekuci Racun</th>
                        <th>Email</th>
                        <th>Pregled</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach( $clients as $client )
                    <tr>
                        <td class="table-client">{{ $client->naziv }}</td>
                        <td class="table-number">{{ $client->adresa }}</td>
                        <td class="table-text">{{ $client->mesto }}</td>
                        <td class="table-text">{{ $client->tekuci_racun }}</td>
                        <td class="table-text">{{ $client->email }}</td>
                        <td class="table-text has-text-centered"><a href="{{ route('client.show',$client->id) }}"><i class="fa fa-eye edit-ico"></i></a></td>
                    </tr>
                    @endforeach --}}
                </tbody>
            </table>
            <div class="columns">
                <div class="column is-2 is-offset-5">
                    {{ $clients->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@section('scripts')
<script>
    $(document).ready(function(){
    
     search_data();
    
     function search_data(query = '')
     {
      $.ajax({
       url:"{{ route('live_search.clients') }}",
       method:'GET',
       data:{query:query},
       dataType:'json',
       success:function(data)
       {
        $('tbody').html(data.table_data);
        $('#total_records').text(data.total_data);
       }
      })
     }
    
     $(document).on('keyup', '#search', function(){
      var query = $(this).val();
      search_data(query);
     });
    });
</script>
@endsection
@endsection