<div class="list-group search_box">
<header class="list-group-item">
  <h4 class="list-group-item-heading">搜索 & Tags</h4>
	<form class="" action="/search">
	<div class="input-group">
      <input type="text" class="form-control" placeholder="Search for..." name="q">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
      </span>
    </div>
    </form>
</header>

<div class="list-group-item tags_box">
	@foreach ($tags as $tag)
	<?php $rand = rand(2, 5); ?>
		<a href="/tags/{{ $tag->id }}">
			<h{{ $rand }} style='font-weight: {{ (int) ceil($rand/2 + 1)*100 }}!important'>
				{{ $tag->name }}
			</h{{ $rand }}>
		</a>
	@endforeach
</div>
</div>