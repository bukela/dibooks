<div class="search-box column is-half">
    <form action="" method="get">
        {{-- {{ csrf_field() }} --}}
        <div class="searchblock panel-block">
            <p class="searchlist control has-icons-left is-pulled-right">
                <input class="input is-small is-primary" name="search" id="search" type="search" placeholder="Pretraga">
                <span class="icon is-small is-left">
                <i class="fa fa-search"></i>
                </span>
            </p>
            {{-- &nbsp;<button class="search-button button is-small is-primary" type="submit">SEARCH</button> --}}
        {{-- <button class="search-button button is-small" type="submit"><a href="{{ route('clients') }}"><i class="fa fa-sync"></i> --}}
            {{-- </a></button> --}}
        </div>
    </form>
</div> 