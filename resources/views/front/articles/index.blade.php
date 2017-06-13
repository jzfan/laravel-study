@extends('front.master')

@section('showcase')
<div class="showcase">
    <div class="container text-center">
        <h2>{{ $title }}</h2>
        <br>
        <p class="tags_box">
        @foreach ($tags as $tag)
            <a href="/tags/{{ $tag->id }}" class="btn btn-default">
                {{ $tag->name }}
            </a>
        @endforeach
        </p>
    </div>
</div>
@stop

@section('content')
<div class="row">
@foreach ($articles as $article)
<div class="col-md-4 col-sm-6">
    <div class="card-white">
        @include('front.partials.card')
    </div>
</div>
@endforeach
<div class="col-md-12">
    {!! $articles->links() !!}
</div>
</div>
@endsection
