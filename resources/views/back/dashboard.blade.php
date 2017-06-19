@extends('back.master')

@section('content')
<div class="col-md-4 col-sm-6">
    <div class="well">
        <span>Users:</span>
        <h4>{{ $users_count }}</h4>
    </div>
</div>
<div class="col-md-4 col-sm-6">
    <div class="well">
        <span>Articles:</span>
        <h4>{{ $articles_count }}</h4>
    </div>
</div>
<div class="col-md-4 col-sm-6">
    <div class="well">
        <span>Views</span>
        <h4>{{ $views }}</h4>
    </div>
</div>
@stop