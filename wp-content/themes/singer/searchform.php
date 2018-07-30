<form role="search" method="get" class="form-horizontal searchForm" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div class="form-group">
    <div class="col-sm-12">
        <select name="category">
            <option value="0">Phân loại</option>
            <option value="profile_information_profile_country">Quốc gia</option>
            <option value="profile_information_real_name">Tên thật</option>
            <option value="profile_information_profile_birthday">Ngày sinh</option>
        </select>
      <input type="text" name="s" value="<?php echo get_search_query()?>" class="form-control search-autocomplete" autocomplete="off"" id="email" placeholder="Tên bài hát, ca sĩ,...">
      <input type="hidden" value"" class="post_type" />
      <button type="submit" class="btn btn-default">Tìm kiếm</button>
    </div>
  </div>
</form>
