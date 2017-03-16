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
OCP\User::checkLoggedIn();

$webmail_url = \OCP\Config::getAppValue('webmail', 'url', '');

if ($webmail_url != '') {
	header('HTTP/1.1 303 See Other');
	header("Location: $webmail_url");
} else {
	\OC_Util::redirectToDefaultPage();
}
