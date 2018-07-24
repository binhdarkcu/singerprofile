$(document).ready(function(){
    var baseurl = '<?php echo get_bloginfo("url"); ?>';
    console.log(globalObject)
    $('[data-name="product_authors"] label, [data-name="product_singer"] label').append('<a target="_blank" style="float:right" href="'+globalObject.newpostUrl+'"><input type="button" value="Thêm profile"/></a>')
    $('[data-name="profiles_product"] label').append('<a target="_blank" style="float:right" href="'+globalObject.newpostProduct+'"><input type="button" value="Thêm sản phẩm"/></a>')
})
