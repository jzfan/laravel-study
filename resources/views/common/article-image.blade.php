        @if ($article->page_image)
        <img class='img-responsive' src="/img-cache/{{ $size }}/articles/{{ $article->pageImageName() }}" alt="">
        @elseif($code = $article->pageCode())
        <pre><code>
            {!! $code !!}
        </code></pre>
        @else
        <img class='img-responsive' src="/img-cache/{{ $size }}/articles/{{ $article->defaultImage() }}" alt="">
        @endif