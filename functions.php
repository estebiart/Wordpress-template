<?php
function obtener_urL_img($post)
{
    if(has_post_thumbnail($post['id'])){
        $imgArray = wp_get_attachment_image_src(get_post_thumbnail_id($post['id']), 'full');
        $imgUrl = $imgArray[0]; 
        return  $imgUrl;

    }else{
        return false;
    }
  
}

function insert_url_api(){
    register_rest_field('post',
                        'featured_image', 
                        array ('get_callback' => 'obtener_url_img_destacada'));
  
}
add_action('rest_api_init','insert_url_api');
?>