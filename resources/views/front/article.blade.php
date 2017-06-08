@extends('front.master')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        {{ $article->title }}
        @foreach ($article->tags as $tag)
            <span class='label-info'>{{ $tag->name }}</span>
        @endforeach
    </div>

    <div class="panel-body">
        {{ $article->content }}
    </div>
</div>
@endsection
