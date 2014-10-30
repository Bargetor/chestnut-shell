<?php
include_once 'function.php';


/** 第1步：定义添加菜单选项的函数 */
function chestnut_shell_plugin_menu() {
     add_options_page( 'Chestnut Shell Options', CHESTNUT_SHELL_PLUGIN_NAME, 'manage_options', 'chestnut-shell', 'chestnut_shell_options' );
}

/** 第2步：将函数注册到钩子中 */
add_action( 'admin_menu', 'chestnut_shell_plugin_menu' );

/** 第3步：定义选项被点击时打开的页面 */
function chestnut_shell_options() {
     if ( !current_user_can( 'manage_options' ) )  {
          wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
     }
     $template_name = CHESTNUT_SHELL_PLUGIN_PATH . TEMPLATE_PATH . 'chestnut-shell-admin.html';
     $params = array(CHESTNUT_SHELL_SETTING_CHESTNUT_USER => 'bargetor_public@sina.com');
     echo read_html_file($template_name, $params);
}

function init_chestnut_shell_setting(){
    if(!get_option(CHESTNUT_SHELL_SETTING_NAME)){
        add_option(CHESTNUT_SHELL_SETTING_NAME, array(), ' ', 'no');
    }
}


init_chestnut_shell_setting();


?>
