@extends('front.master')

@section('content')
<div class="col-md-8 well">
<h3 class="lead"><span class="main-color">Laravel</span> {{ $version }} 文档</h3>
<?php $hight = (int)ceil($groups->count()/2) + 1?>
<ol>
    @foreach($groups->chunk($hight) as $chunk)
    <div class="col-md-6">
    @foreach($chunk as $group)
    <li>
        @foreach($group as $entry)
        @if ($loop->first)
        <h3>{{ $entry->category }}</h3>
        @endif
        <p><a href="/docs/{{ $version }}/{{ $entry->id }}">{{ $entry->entry }}</a></p>
        @endforeach
    </li>
    @endforeach
    </div>
    @endforeach
</ol>
</div>
@stop