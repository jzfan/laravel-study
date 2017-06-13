<span>{{ $title ?? $article->created_at->diffForHumans() }}</span>
<h4 class="list-group-item-text">
    <a href="/articles/{{ $article->id }}">
        {{ $article->title }}
    </a>
</h4>