@if(Session::has('success'))
<div class="success-holder">
    <p class="has-text-primary has-text-centered is-size-4">{{ Session::get('success') }}</p>
</div>    
@endif