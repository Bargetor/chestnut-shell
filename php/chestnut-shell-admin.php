<?php
include_once 'function.php';

$is_update_chestnut_setting = false;


/** 第1步：定义添加菜单选项的函数 */
function chestnut_shell_plugin_menu() {
     add_options_page( 'Chestnut Shell Options', CHESTNUT_SHELL_PLUGIN_NAME, 'manage_options', 'chestnut-shell', 'chestnut_shell_options' );
}

/** 第2步：将函数注册到钩子中 */
add_action('admin_menu', 'chestnut_shell_plugin_menu' );
add_action('publish_post', 'add_chustnut_custom_field_automatically');//发布文章时
add_action('pre_post_update', 'add_chustnut_custom_field_automatically');//保存草稿时

/** 第3步：定义选项被点击时打开的页面 */
function chestnut_shell_options() {
     if ( !current_user_can( 'manage_options' ) )  {
          wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
     }

     update_post_data();

     include_once 'templates/chestnut-shell-admin.php';
}

function update_post_data(){
    if(count($_POST) == 0)return;

    $chestnut_user = $_POST[CHESTNUT_SHELL_SETTING_CHESTNUT_USER];
    $chestnut_password = $_POST[CHESTNUT_SHELL_SETTING_CHESTNUT_PASSWORD];
    $chestnut_wechat_id = $_POST[CHESTNUT_SHELL_SETTING_CHESTNUT_WECHAT_ID];
    $chestnut_wechat_token = $_POST[CHESTNUT_SHELL_SETTING_CHESTNUT_WECHAT_TOKEN];
    $chestnut_wechat_encodingAESKey = $_POST[CHESTNUT_SHELL_SETTING_CHESTNUT_WECHAT_ENCODING_AES_KEY];

    update_chestnut_shell_setting($chestnut_user, $chestnut_password, $chestnut_wechat_id, $chestnut_wechat_token);
    global $is_update_chestnut_setting;
    $is_update_chestnut_setting = true;
}

function init_chestnut_shell_setting(){
    if(!get_option(CHESTNUT_SHELL_SETTING_NAME)){
        add_option(CHESTNUT_SHELL_SETTING_NAME, array(), ' ', 'no');
    }
}

function update_chestnut_shell_setting($chestnut_user, $chestnut_password, $chestnut_wechat_id, $chestnut_wechat_token){
    $setting = array(CHESTNUT_SHELL_SETTING_CHESTNUT_USER => $chestnut_user,
                     CHESTNUT_SHELL_SETTING_CHESTNUT_PASSWORD => $chestnut_password,
                     CHESTNUT_SHELL_SETTING_CHESTNUT_WECHAT_ID => $chestnut_wechat_id,
                     CHESTNUT_SHELL_SETTING_CHESTNUT_WECHAT_TOKEN => $chestnut_wechat_token,);
    delete_option(CHESTNUT_SHELL_SETTING_NAME);
    update_option(CHESTNUT_SHELL_SETTING_NAME, $setting);
}


init_chestnut_shell_setting();

function add_chustnut_custom_field_automatically($post_id){
    global $wpdb;
    if(!wp_is_post_revision($post_id)) {
        //文章副标题
        add_post_meta($post_id, CHESTNUT_POST_META_POST_PIC, '', true);
    }
}




?>
