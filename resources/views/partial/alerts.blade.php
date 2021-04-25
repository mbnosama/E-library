@if(session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4>{{session('message')}}</h4>
    </div>
@endif



@if(count($errors)>0)
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Error</strong>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
