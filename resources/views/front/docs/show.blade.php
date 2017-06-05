@extends('front.master')

@section('content')
<article>
    <h3><small>Laravel {{ $entry->version }} {{ $entry->category }}</small> {{ $entry->entry }}</h3>
    <p>
        {!! $entry->content !!}
    </p>
</article>
@stop

@section('sidebar')
<ul class="list-group">
@foreach($entry->anchors as $index => $text)
            <li class="list-group-item">
    @if (! preg_match('/^\d{1,3}、/', $text))
    &nbsp;&nbsp;&nbsp;&nbsp;
    @endif
            <a href="#{{ $index }}">
    {{ $text }}</a>
</li>
@endforeach
</ul>
@stop