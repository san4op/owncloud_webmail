<?php
$webmail_url = \OCP\Config::getAppValue('webmail', 'url', '');
?>
<form id="webmail">
	<div class="section">
		<h2><?php p($l->t('Webmail'));?></h2>
		<p>
			<label for="webmail_url"><?php p($l->t("Webmail URL")); ?></label>
			<input type="text" id="webmail_url" name="webmail_url" value="<?php p($webmail_url); ?>" placeholder="<?php p($l->t("Webmail URL")); ?>" style="width:250px" />
		</p>
		<p>
			<input type="button" id="save_webmail_site" value="<?php p($l->t("Save")); ?>" />
			<span class="msg"></span>
		</p>
	</div>
</form>
