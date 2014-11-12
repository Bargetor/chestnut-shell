<?php
    $setting = get_option(CHESTNUT_SHELL_SETTING_NAME);
    global $is_update_chestnut_setting;
?>


<div class="wrap">
<h2>栗子壳配置</h2>
<div id="setting-error-settings_updated" class="updated settings-error" <?php if(!$is_update_chestnut_setting)echo "style='display:none;'"; ?>>
<p><strong>设置已保存。</strong></p></div>


<form method="post" action="options-general.php?page=<?php echo CHESTNUT_BASE_FILE_NAME;?>">

<table class="form-table">
<tbody><tr>
<th scope="row"><label for="<?php echo CHESTNUT_SHELL_SETTING_CHESTNUT_USER ?>">微信公众帐号</label></th>
<td><input name="<?php echo CHESTNUT_SHELL_SETTING_CHESTNUT_USER ?>" type="text" id="<?php echo CHESTNUT_SHELL_SETTING_CHESTNUT_USER ?>" value="<?php echo $setting[CHESTNUT_SHELL_SETTING_CHESTNUT_USER]; ?>" class="regular-text">
<p class="description">填写您的微信公众帐号，该帐号也是您在栗子上的唯一标识。</p>
</td>
</tr>

<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="保存更改"></p></form>

</div>
