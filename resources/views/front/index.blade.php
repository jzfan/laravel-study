@extends('front.master')

@section('showcase')
@include('front.partials.showcase')
@stop

@section('content')
@includeWhen( !$laravels->isEmpty(), 'front.partials.listOfCategory', ['data' => $laravels, 'header' => 'Laravel Blog', 'link' => '/category/laravel'])
@includeWhen( !$tdds->isEmpty(), 'front.partials.listOfCategory', ['data' => $tdds, 'header' => 'Larvel & TDD', 'link' => '/category/tdd'])
@includeWhen( !$vues->isEmpty(), 'front.partials.listOfCategory', ['data' => $vues, 'header' => 'Laravel & Vue', 'link' => '/category/vue'])
@endsection

