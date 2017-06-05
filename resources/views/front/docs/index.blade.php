@extends('front.master')

@section('content')
<ul>
    @foreach($groups as $group)
    <li>
        @foreach($group as $entry)
        @if ($loop->first)
        <h3>{{ $entry->category }}</h3>
        @endif
        <p><a href="/docs/{{ $version }}/{{ $entry->slug }}">{{ $entry->entry }}</a></p>
        @endforeach
    </li>
    @endforeach
</ul>
@stop