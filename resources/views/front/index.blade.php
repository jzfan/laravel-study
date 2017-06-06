@extends('front.master')

@section('content')
@foreach ($articles as $article)
        
            <div class="panel panel-default">
                <div class="panel-heading">{{ $article->title }}</div>

                <div class="panel-body">
                    {{ $article->content }}
                </div>
            </div>
@endforeach
@endsection
