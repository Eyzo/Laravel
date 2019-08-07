@if(Session::has('success'))
<div class="alert alert-success" style="display: block;width: 100%">
        <p>{{ Session::get('success') }}</p>
</div>
@endif