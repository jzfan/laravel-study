@extends('back.master')

@section('content')
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Panel heading</div>
  <div class="panel-body">
	<form action="/back/docs/{{ $doc->id }}" method="POST">
		{!! method_field('PUT') !!}
		{!! csrf_field() !!}
		<div class="form-group">
		  <label>Version</label>
		  <input type="text" class="form-control" placeholder="text" name='version' value='{{ old("version", $doc->version) }}'>
		</div>
		<div class="form-group">
		  <label>Category</label>
		  <input type="text" class="form-control" placeholder="category" name='category' value='{{ old("category", $doc->category) }}'>
		</div>
		<div class="form-group">
		  <label>Entry</label>
		  <input type="text" class="form-control" placeholder="entry" name='entry' value='{{ old("entry", $doc->entry) }}'>
		</div>
		<div class="form-group">
			<label>Content</label>
			<textarea class="form-control js-auto-size" name="content">{{ old("content", $doc->content) }}</textarea>
		</div>
		<button type="submit" class="btn btn-default">Submit</button>

	</form>
	</div>
</div>
@stop

@section('js')

<script>
  $('textarea.js-auto-size').textareaAutoSize();
</script>
@stop