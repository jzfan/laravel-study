@extends('back.master')

@section('content')

<div class="panel panel-default">
	<!-- Default panel contents -->
	<div class="panel-heading">Panel heading</div>
	<div class="panel-body">
		<table class="table table-striped pannel-body">
			<thead>
				<tr>
					<th>ID</th>
					<th>version</th>
					<th>category</th>
					<th>entry</th>
					<th>created_at</th>
					<th>action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($doc as $entry)
				<tr>
					<td>{{ $entry->id }}</td>
					<td>{{ $entry->version }}</td>
					<td>{{ $entry->category }}</td>
					<td><a href="/docs/{{ $entry->version }}/{{ $entry->id }}" target="_blank">{{ $entry->entry }}</a></td>
					<td>{{ $entry->created_at->format('Y-m-d') }}</td>
					<td>
						<a class="btn btn-default" href="/back/docs/{{ $entry->id }}/edit" role="button">Edit</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!! $doc->links() !!}
	</div>
</div>
@stop