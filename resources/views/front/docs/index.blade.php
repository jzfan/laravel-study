@extends('front.master')

@section('content')
<ul>
    @foreach($groups as $group)
    <li>
    @foreach($group as $entry)
        @if ($loop->first)
        <h3>{{ $entry->category }}</h3>
       @endif
        <h5>{{ $entry->entry }}</h5>

    @endforeach
    </li>
    @endforeach
</ul>
@stop