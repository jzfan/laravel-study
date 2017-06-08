@extends('back.master')

@section('content')
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Panel heading</div>
  <div class="panel-body">
	<form action="/back/articles/{{ $article->id }}" method="POST">
		{!! method_field('PUT') !!}
		{!! csrf_field() !!}
		<div class="form-group">
		  <label>title</label>
		  <input type="text" class="form-control" placeholder="text" name='title' value='{{ old("title", $article->title) }}'>
		</div>
		<div class="form-group">
		  <label>Category</label>
		  <input type="text" class="form-control" data-role="tagsinput" placeholder="category" name='category' value='{{ old("category", $article->category) }}'>
		  <p class="help-block">
		  	Categories: 
		  	@foreach ($categories as $cate)
		  		<button class="btn btn-default" type="button">{{ $cate }}</button>
		  	@endforeach
		  	</p>
		</div>
		<div class="form-group">
		  <label>series</label>
		  <input type="text" class="form-control" data-role="tagsinput" placeholder="series" name='series' value='{{ old("series", $article->series) }}'>
		</div>
		<div class="form-group">
			<label>Content</label>
			<textarea class="form-control js-auto-size" name="content">{{ old("content", $article->content) }}</textarea>
		</div>
		<button type="submit" class="btn btn-default">Submit</button>

	</form>
	</div>
</div>
@stop

@section('js')
<script>
var simplemde = new SimpleMDE();
console.log(simplemde.value());
$('input[name="category"]').tagsinput({
  maxTags: 1
});
</script>
@stop