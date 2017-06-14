@extends('front.master')

@section('content')
<div class="col-md-9">
<article class="panel panel-default">
    <div class="panel-header">

    </div>
    <div class="panel-body">
        <h3 class='article-title'>{{ $article->title }}</h3>
        {!! $article->content !!}
    </div>
</article> 
</div>
<div class="col-md-3">
    @include('front.partials.hot_article_list')
    @include('front.partials.search')
</div>
@endsection
