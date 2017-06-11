<div class="row">
<div class="col-md-12">
    <h3 class="main-color title">{{ $title }}<a class="more pull-right" href="{{ $link }}">查看更多</a></h3>
</div>
@foreach ($data as $article)
<div class="col-md-4 col-sm-6">
@include('front.partials.card', ['article' => $article])
</div>
@endforeach
</div>