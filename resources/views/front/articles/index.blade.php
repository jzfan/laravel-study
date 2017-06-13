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
<div class="col-md-4 card_box">
    <a href="" class="list-group index_list">
      <div class="list-group-item index_list_img">
        @include('common.article-image', ['size' => 'large'])
      </div>
      <div class="list-group-item index_list_content">
        <span>{{ $article->created_at->diffForHumans() }}</span>
        <h4 class="list-group-item-text">{{ $article->title }}</h4>
      </div>
    </a>
</div>
@endforeach
<div class="col-md-12">
    {!! $articles->links() !!}
</div>
</div>
@endsection
