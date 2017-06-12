<div class="list-group hots-list">
  <header class="list-group-item">
    <h3 class="list-group-item-heading lead">浏览排行</h3>
  </header>
  @foreach ($hots as $hot)
  <a href="/category/{{ strtolower($hot->category) }}/{{ $hot->id }}" class="list-group-item">
    <p class="list-group-item-text">{{ $hot->title }} <span class="badge pull-right">{{ $hot->view }}</span></p>
  </a>
  @endforeach
</div>