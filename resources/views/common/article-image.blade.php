@if ($article->page_image)
<img class='img-responsive' src="/img-cache/{{ $size }}/articles/{{ $article->pageImageName() }}" alt="">
@elseif($code = $article->pageCode())
<div class='editor-header'>
<i class="fa fa-circle" style="color: red"></i>
<i class="fa fa-circle" style="color: yellow"></i>
<i class="fa fa-circle" style="color: green"></i>
</div>
<pre><code>
    {!! $code !!}
</code></pre>
@else
<img class='img-responsive' src="/img-cache/{{ $size }}/articles/{{ $article->defaultImage() }}" alt="">
@endif