<a href="/articles/{{ $article->id }}">
    <div class="card-image">
        @include('common.article-image', ['size' => 'large'])
    </div>
    <div class="card-black">
        <span>{{ $title ?? $article->created_at->diffForHumans() }}</span>
        <h4>
            {{ $article->title }}
        </h4>
    </div>
</a>