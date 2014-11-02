<?php
    $setting = get_option(CHESTNUT_SHELL_SETTING_NAME);
?>


<div class="wrap">
<h2>栗子壳配置</h2>

<form method="post" action="options-general.php?page=<?php echo CHESTNUT_BASE_FILE_NAME;?>">
<input type="hidden" name="option_page" value="general"><input type="hidden" name="action" value="update"><input type="hidden" id="_wpnonce" name="_wpnonce" value="4106a2da91"><input type="hidden" name="_wp_http_referer" value="/wp-admin/options-general.php">
<table class="form-table">
<tbody><tr>
<th scope="row"><label for="<?php echo CHESTNUT_SHELL_SETTING_CHESTNUT_USER ?>">用户名</label></th>
<td><input name="<?php echo CHESTNUT_SHELL_SETTING_CHESTNUT_USER ?>" type="text" id="<?php echo CHESTNUT_SHELL_SETTING_CHESTNUT_USER ?>" value="<?php echo $setting[CHESTNUT_SHELL_SETTING_CHESTNUT_USER]; ?>" class="regular-text">
<p class="description">填写一个新的用户名，该用户名讲作为您在栗子上的唯一标识。</p>
</td>
</tr>
<tr>
<th scope="row"><label for="<?php echo CHESTNUT_SHELL_SETTING_CHESTNUT_PASSWORD ?>">栗子密码</label></th>
<td><input name="<?php echo CHESTNUT_SHELL_SETTING_CHESTNUT_PASSWORD ?>" type="text" id="<?php echo CHESTNUT_SHELL_SETTING_CHESTNUT_PASSWORD ?>" value="<?php echo $setting[CHESTNUT_SHELL_SETTING_CHESTNUT_PASSWORD]; ?>" class="regular-text code">
<p class="description">该密码只作为登录栗子的密码，请勿填写微信公众帐号密码</p>
</td>
</tr>
<tr>
<th scope="row"><label for="<?php echo CHESTNUT_SHELL_SETTING_CHESTNUT_WECHAT_ID ?>">微信公众帐号原生ID</label></th>
<td><input name="<?php echo CHESTNUT_SHELL_SETTING_CHESTNUT_WECHAT_ID ?>" type="text" id="<?php echo CHESTNUT_SHELL_SETTING_CHESTNUT_WECHAT_ID ?>" value="<?php echo $setting[CHESTNUT_SHELL_SETTING_CHESTNUT_WECHAT_ID]; ?>" class="regular-text">
<p class="description">这是微信用于唯一标识公众帐号的表示，可在微信公众平台查看。</p></td>
</tr>
<tr>
<th scope="row"><label for="<?php echo CHESTNUT_SHELL_SETTING_CHESTNUT_WECHAT_TOKEN ?>">微信Token</label></th>
<td><input name="<?php echo CHESTNUT_SHELL_SETTING_CHESTNUT_WECHAT_TOKEN ?>" type="text" id="<?php echo CHESTNUT_SHELL_SETTING_CHESTNUT_WECHAT_TOKEN ?>" value="<?php echo $setting[CHESTNUT_SHELL_SETTING_CHESTNUT_WECHAT_TOKEN]; ?>" class="regular-text code"></td>
</tr>
<tr>
<th scope="row"><label for="<?php echo CHESTNUT_SHELL_SETTING_CHESTNUT_WECHAT_ENCODING_AES_KEY ?>">EncodingAESKey</label></th>
<td><input name="<?php echo CHESTNUT_SHELL_SETTING_CHESTNUT_WECHAT_ENCODING_AES_KEY ?>" type="text" id="<?php echo CHESTNUT_SHELL_SETTING_CHESTNUT_WECHAT_ENCODING_AES_KEY ?>" value="<?php echo $setting[CHESTNUT_SHELL_SETTING_CHESTNUT_WECHAT_ENCODING_AES_KEY] ?>" class="regular-text code">
<p class="description">如果您想在微信公众平台设置了EncodingAESKey（消息加密密钥），请填写该项</p></td>
</tr>


<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="保存更改"></p></form>

</div>
