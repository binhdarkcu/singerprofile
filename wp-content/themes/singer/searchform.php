<form role="search" method="get" class="form-horizontal searchForm" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div class="form-group">
    <div class="col-sm-12">
      <input type="text" autocomplete="off" value="<?php echo get_search_query(); ?>" class="form-control" id="email" placeholder="Tên bài hát, ca sĩ,...">
      <button type="submit" class="btn btn-default">Tìm kiếm</button>
    </div>
  </div>
</form>
