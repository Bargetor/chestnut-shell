<?php
/*
Plugin Name: chestnut shell
Plugin URI: http://chestnut.bargetor.com
Description: chestnut 微信平台 wordpress 插件
Version: 1.0.0
Author: bargetor
Author URI: http://www.bargetor.com

Copyright 2014  bargetor  (email : bargetor@gmail.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
define('CHESTNUT_SHELL_PLUGIN_PATH', plugin_dir_path(__FILE__));

define('CHESTNUT_SHELL_PLUGIN_NAME', 'chestnut shell');

define('CHESTNUT_SHELL_SETTING_NAME', 'chestnut_shell_setting');
define('CHESTNUT_SHELL_SETTING_CHESTNUT_URL', 'chestnut_url');
define('CHESTNUT_SHELL_SETTING_CHESTNUT_USER', 'chestnut_user');
define('CHESTNUT_SHELL_SETTING_CHESTNUT_PASSWORD', 'chestnut_password');
define('TEMPLATE_PATH', 'templates/');

define('CHESTNUT_REQUEST_URL', 'http://127.0.0.1:8000/api');


include_once 'php/chestnut-shell-admin.php';
include_once 'php/chestnut-requester.php';
?>
