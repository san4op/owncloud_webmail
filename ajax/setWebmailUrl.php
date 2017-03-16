<?php
/**
 * ownCloud - webmail
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Alexander Pushkin <san4op@icloud.com>
 * @copyright Alexander Pushkin 2017
 */

OCP\JSON::checkAppEnabled('webmail');
OCP\User::checkAdminUser();
OCP\JSON::callCheck();

$l = \OC::$server->getL10N('webmail');

if (!($_POST['webmail_url'] == '' || strpos($_POST['webmail_url'], 'http://') === 0 || strpos($_POST['webmail_url'], 'https://') === 0 || strncmp($_POST['webmail_url'], '/', 1) === 0)) {
	OC_JSON::error(
		array(
			"data" => array(
				"message" => $l->t('Please enter valid webmail URL!')
			)
		)
	);
	return;
}

if ($_POST['webmail_url'] == '') {
	$appConfig = \OC::$server->getAppConfig();
	$appConfig->deleteKey('webmail', 'url');
} else {
	OCP\Config::setAppValue('webmail', 'url', $_POST['webmail_url']);
}
OC_JSON::success(
	array(
		"data" => array(
			"message" => $l->t("Webmail URL saved!")
		)
	)
);
