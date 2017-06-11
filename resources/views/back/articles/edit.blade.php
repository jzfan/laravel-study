@extends('back.master')

@section('content')
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Panel heading</div>
  <div class="panel-body">
	<form action="/back/articles/{{ $article->id }}" method="POST">
		{!! method_field('PUT') !!}
		{!! csrf_field() !!}
		<input type="hidden" name='submit'>
		<div class="form-group">
		  <label>title</label>
		  <input type="text" class="form-control" placeholder="text" name='title' value='{{ old("title", $article->title) }}'>
		</div>
		<div class="form-group">
		  <label>Tag</label>
		  <input type="text" class="form-control" data-role="tagsinput" name='tag' value='{{ old("tag", $article->getTagsInputString()) }}'>
		  <p class="help-block" id='tag-block'>
		    Tags Of All: 
		    @foreach ($tags as $tag)
		        <button class="btn btn-default btn-sm" type="button">{{ $tag->name }}</button>
		    @endforeach
		    </p>
		</div>
		<div class="form-group">
		  <label>Category</label>
		  <input type="text" class="form-control" data-role="tagsinput" name='category' value='{{ old("category", $article->category) }}'>
		  <p class="help-block" id='category-block'>
		  	Categories Of All: 
		  	@foreach ($categories as $cate)
		  		<button class="btn btn-default" type="button">{{ $cate }}</button>
		  	@endforeach
		  	</p>
		</div>
		<div class="form-group">
		  <label>series</label>
		  <input type="text" class="form-control" data-role="tagsinput" name='series' value='{{ old("series", $article->series) }}'>
		  <p class="help-block" id='series-block'>
		  	Series Recently: 
		  	@foreach ($series as $serie)
		  		<button class="btn btn-default" type="button">{{ $serie }}</button>
		  	@endforeach
		  	</p>
		</div>
		<div class="form-group">
			<label>Content</label>
			<textarea class="form-control" name="content">{{ old("content", $article->content) }}</textarea>
		</div>
		<button type="submit" class="btn btn-default">Update Draft</button>
		<button type="submit" class="btn btn-default">Publish</button>

	</form>
	</div>
</div>
@stop

@section('js')

@include('back.partials.article-form-js')
<script>
tagsInputWithBotton('category')
</script>
@stop