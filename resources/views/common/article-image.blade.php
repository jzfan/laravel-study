@if ($article->page_image)
<img class='img-responsive' src="/img-cache/{{ $size }}/articles/{{ $article->pageImageName() }}" alt="">
@elseif($code = $article->pageCode())
<div class='editor-header'>
<span>aaaaaaa</span>
	<i class="fa fa-user"></i>
</div>
<pre><code>
    {!! $code !!}
</code></pre>
@else
<img class='img-responsive' src="/img-cache/{{ $size }}/articles/{{ $article->defaultImage() }}" alt="">
@endif
<style type="text/css">
	.editor-header {
		position: absolute;
		top: 10%;
	}
</style>