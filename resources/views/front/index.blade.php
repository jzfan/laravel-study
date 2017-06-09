@extends('front.master')

@section('content')
<h1>World Wild</h1>
@foreach ($articles as $article)
<div class="col-md-4">
<div class="panel panel-default img-card">
<a href="/{{ $article->category }}/{{ $article->id }}">
    <div class="panel-body">
        <img class='img-responsive' src="/img-cache/large/articles/{{ $article->pageImageName() }}" alt="">
    </div>
    <div class="panel-footer">
    	<span class='card-label'>{{ $article->category }}</span>
    	<h4>
    		{{ $article->title }}
    	</h4>
    </div>
</a>
</div>
</div>
@endforeach
@endsection
