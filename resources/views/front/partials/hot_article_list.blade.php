<div class="list-group">
  <a class="list-group-item active">
    <h4 class="list-group-item-heading">浏览最多</h4>
  </a>
  @foreach ($hots as $hot)
  <a href="/category/{{ strtolower($hot->category) }}/{{ $hot->id }}" class="list-group-item">
    <p class="list-group-item-text">{{ $hot->title }} <span class="badge pull-right">{{ $hot->view }}</span></p>
  </a>
  @endforeach
</div>