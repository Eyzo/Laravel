@if($errors->any())
<div class="alert alert-danger" style="display: block;width: 100%;">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
</div>
@endif