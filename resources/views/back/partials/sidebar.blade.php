
<div data-spy="affix" data-offset-top="60" data-offset-bottom="200" class="panel panel-default">
<br>
<ul>
  <li><a href="/back/docs">文档</a></li>
  <li>文章
  <ul style="margin-left: -20px">
    @foreach ($categories as $category)
  	<li><a href="/back/category/{{ strtolower($category) }}">{{ $category }}</a></li>
    @endforeach
  </ul>
  </li>
</ul>
</div>