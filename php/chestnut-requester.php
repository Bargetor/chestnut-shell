<?php

chestnut_shell_add_save_post_action();

function chestnut_shell_save_post_to_chestnut($post_id){
    if (wp_is_post_revision($post_id))
        return false;
    // 取消挂载该函数，防止无限循环
    chestnut_shell_remove_save_post_action();

    $post = build_wp_post_to_array(get_post($post_id));
    $chestnut_url = CHESTNUT_REQUEST_URL;

    $setting = get_option(CHESTNUT_SHELL_SETTING_NAME);
    $post_pic = get_chestnut_shell_post_pic($post_id);
    //$setting[CHESTNUT_POST_META_POST_PIC] = $post_pic;

    $post[CHESTNUT_POST_META_POST_PIC] = $post_pic;

    $params = http_build_query($setting);
    $url = $chestnut_url . '?' . $params;
    http_query_post($url, $post);

    // 重新挂载该函数
    chestnut_shell_add_save_post_action();


}

function chestnut_shell_add_save_post_action(){
    add_action('save_post', 'chestnut_shell_save_post_to_chestnut');//保存文章时
}

function chestnut_shell_remove_save_post_action(){
    remove_action('save_post', 'chestnut_shell_save_post_to_chestnut');
}

function get_chestnut_shell_post_pic($post_id){
    return get_post_meta($post_id, CHESTNUT_POST_META_POST_PIC, true);
}

function build_wp_post_to_array($post){
    if($post == null)return;
    $result = array();
    foreach($post as $key => $value){
        $result[$key] = $value;
    }
    return $result;
}

?>
