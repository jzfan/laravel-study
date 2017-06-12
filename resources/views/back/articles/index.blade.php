@extends('back.master')

@section('content')

<div class="panel panel-default">
	<!-- Default panel contents -->
	<div class="panel-heading">Panel heading <a href="/back/category/{{ $category }}/create">Create +</a></div>
	<div class="panel-body">
		<table class="table table-striped pannel-body">
			<thead>
				<tr>
					<th>ID</th>
					<th>title</th>
					<th>series</th>
					<th>page_image</th>
					<th>published_at</th>
					<th>view</th>
					<th>action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($articles as $article)
				<tr>
					<td>{{ $article->id }}</td>
					<td><a href="/category/{{ strtolower($article->category) }}/{{ $article->id }}" target="_blank">{{ $article->title }}</a></td>
					<td>{{ $article->series }}</td>
					<td>
						@if ($article->page_image)
						<img src="/img-cache/small/articles/{{ $article->pageImageName() }}" alt="">
						@endif
					</td>
					<td>{{ $article->published_at ? $article->published_at->format('Y-m-d') : '' }}</td>
					<td>{{ $article->view }}</td>
					<td>
						<a class="btn btn-default" href="/back/category/{{ strtolower($article->category) }}/{{ $article->id }}/edit" role="button">Edit</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!! $articles->links() !!}
	</div>
</div>
@stop