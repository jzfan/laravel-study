@extends('front.master')

@section('content')
<div class="col-md-9">
<div class="panel panel-default">
    <div class="panel-header">
    @include('common.article-image', ['size' => 'large'])
    </div>
    <div class="panel-body">
        <h3 class='article-title'>{{ $article->title }}</h3>
        {!! $article->content !!}
    </div>
</div>
</div>
<div class="col-md-3">
    aaaaa
</div>
@endsection
