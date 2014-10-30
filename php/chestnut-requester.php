<?php
add_action('save_post', 'chestnut_shell_save_post_to_chestnut');//保存文章时

function chestnut_shell_save_post_to_chestnut($post_id){
    http_query_get(CHESTNUT_REQUEST_URL, array('postId' => $post_id));
}
?>
