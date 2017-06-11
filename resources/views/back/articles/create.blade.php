@extends('back.master')

@section('content')
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Create A New <strong>{{ $category }}</strong> Article</div>
  <div class="panel-body">
    <form action="/back/articles" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <input type="hidden" name='category' value='{{ $category }}'>
        <input type="hidden" name='submit'>
        <div class="form-group">
          <label>title</label>
          <input type="text" class="form-control" placeholder="text" name='title' value='{{ old("title") }}'>
        </div>
        <div class="form-group">
          <label>Tag</label>
          <input type="text" class="form-control" data-role="tagsinput" name='tag' value='{{ old("tag") }}'>
          <p class="help-block" id='tag-block'>
            Tags Of All: 
            @foreach ($tags as $tag)
                <button class="btn btn-default btn-sm" type="button">{{ $tag->name }}</button>
            @endforeach
            </p>
        </div>
        <div class="form-group">
          <label>Series</label>
          <input type="text" class="form-control" data-role="tagsinput" name='series' value='{{ old("series") }}'>
          <p class="help-block" id='series-block'>
            Series Recently: 
            @foreach ($series as $serie)
                <button class="btn btn-default btn-sm" type="button">{{ $serie }}</button>
            @endforeach
            </p>
        </div>
        <div class="form-group">
          <label>Page Image</label>
          <input type="file" class="form-control" name='page_image'>
        </div>
        
        <div class="form-group">
            <label>Content</label>
            <textarea class="form-control" name="content">{{ old("content") }}</textarea>
        </div>
        <button type="submit" class="btn btn-default">Save Draft</button>
        <button type="submit" class="btn btn-default">Publish New</button>

    </form>
    </div>
</div>
@stop

@section('js')
@include('back.partials.article-form-js')
@stop