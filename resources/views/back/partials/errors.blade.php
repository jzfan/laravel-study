<div class="alert alert-danger fade in">
  <button data-dismiss="alert" class="close close-sm" type="button">
      <i class="icon-remove"></i>
  </button>
  <strong>操作失败！</strong> {{ session()->get('errors')->first() }}
</div>