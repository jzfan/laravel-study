@extends('front.master')

@section('content')
<article class="col-md-9 well">
    <h3><small>Laravel {{ $entry->version }} {{ $entry->category }}</small> {{ $entry->entry }}</h3>
    <p>
        {!! $entry->content !!}
    </p>
</article>
<div class="col-md-3">
    
<nav class="hidden-print hidden-xs hidden-sm affix" role="navigation">
<ul class="nav">
@foreach($entry->anchors as $index => $text)
            <li>
    <a @if (! preg_match('/^\d{1,3}、/', $text)) style="text-indent: 20px" @endif href="#{{ $index }}">{{ $text }}</a>
</li>
@endforeach
</ul>
</nav>
</div>
@stop