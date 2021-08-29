@if(count($errors->all()) > 0 )
    <ul class="list-group p-3">
        @foreach($errors->all() as $error)
            <li class="list-group-item list-group-item-danger">{{ $error }}</li>
        @endforeach
    </ul>
@endif
