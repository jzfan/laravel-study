<div class="card">
<a href="/category/{{ strtolower($article->category) }}/{{ $article->id }}">
    <div class="card-image">
@include('common.article-image', ['size' => 'medium'])
    </div>
    <div class="card-text">
        <span class='main-color'>{{ $article->category }}</span>
        <h5>
            {{ str_limit($article->title, 40) }}
        </h5>
    </div>
</a>
</div>