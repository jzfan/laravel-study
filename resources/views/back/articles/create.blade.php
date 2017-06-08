@extends('back.master')

@section('content')
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Create A New <strong>{{ $category }}</strong> Article</div>
  <div class="panel-body">
    <form action="/back/articles" method="POST" enctype="">
        {!! csrf_field() !!}
        <input type="hidden" name='submit'>
        <div class="form-group">
          <label>title</label>
          <input type="text" class="form-control" placeholder="text" name='title' value='{{ old("title") }}'>
        </div>
        <div class="form-group">
          <label>Category</label>
          <input type="text" class="form-control" data-role="tagsinput" name='category' value='{{ old("category", $category) }}'>
          <p class="help-block" id='category-block'>
            Categories Of All: 
            @foreach ($categories as $cate)
                <button class="btn btn-default" type="button">{{ $cate }}</button>
            @endforeach
            </p>
        </div>
        <div class="form-group">
          <label>series</label>
          <input type="text" class="form-control" data-role="tagsinput" name='series' value='{{ old("series") }}'>
          <p class="help-block" id='series-block'>
            Series Recently: 
            @foreach ($series as $serie)
                <button class="btn btn-default" type="button">{{ $serie }}</button>
            @endforeach
            </p>
        </div>
        <div class="form-group">
          <input type="file" class="form-control" name='page_image'>
        </div>
        
        <div class="form-group">
            <label>Content</label>
            <textarea class="form-control js-auto-size" name="content">{{ old("content") }}</textarea>
        </div>
        <button type="submit" class="btn btn-default">Save Draft</button>
        <button type="submit" class="btn btn-default">Publish New</button>

    </form>
    </div>
</div>
@stop

@section('js')
<script>
// var simplemde = new SimpleMDE();
// console.log(simplemde.value());

singleTagInput('category')
singleTagInput('series')
function singleTagInput(name) {
    let single = $('input[name="' + name + '"]')
    single.tagsinput({ maxTags: 1})
    $('#' + name + '-block > button').click( function (e) {
        single.tagsinput('removeAll')
        single.tagsinput('add', $(e.target).text())
    })
}
$('button[type="submit"]').click( function (e) {
    $('input[name="submit"]').val($(e.target).text())
})
</script>
@stop