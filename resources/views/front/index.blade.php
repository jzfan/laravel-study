@extends('front.master')

@section('content')
<br>
<br>
@includeWhen( !$laravels->isEmpty(), 'front.partials.listOfCategory', ['data' => $laravels, 'title' => 'Laravel Blog', 'link' => '/category/laravel'])
<hr>
@includeWhen( !$tdds->isEmpty(), 'front.partials.listOfCategory', ['data' => $tdds, 'title' => 'Larvel & TDD', 'link' => '/category/tdd'])
<hr>
@includeWhen( !$vues->isEmpty(), 'front.partials.listOfCategory', ['data' => $vues, 'title' => 'Laravel & Vue', 'link' => '/category/vue'])
@endsection

@section('js')
<script>
    $('pre').attr('style', 'background: #c5c5c5')
</script>
@stop
