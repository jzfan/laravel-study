@extends('front.master')

@section('content')
@foreach ($articles as $article)

<div class="panel panel-default">
    <div class="panel-heading"><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></div>

    <div class="panel-body">
        {{ $article->content }}
    </div>
</div>
@endforeach
@endsection
