@extends('front.master')

@section('content')
<ul>
@foreach($entries as $entry)
<li>
	
<span>{{ $entry->entry }}</span>
<span>{{ $entry->title }}</span>
</li>
@endforeach
</ul>
@stop