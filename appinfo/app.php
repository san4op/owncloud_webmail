<?php
/**
 * ownCloud - webmail
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Alexander Pushkin <pushkinas@admsov.ru>
 * @copyright Alexander Pushkin 2017
 */

OCP\App::registerAdmin('webmail', 'settings');

$webmail_url = \OCP\Config::getAppValue('webmail', 'url', '');

if ($webmail_url != '') {
	\OC::$server->getNavigationManager()->add(function () {
		$urlGenerator = \OC::$server->getURLGenerator();
		$l = \OC::$server->getL10N('webmail');
		return [
			'id' => 'webmail',
			'order' => 10,
			'href' => $urlGenerator->linkToRoute('webmail'),
			'icon' => $urlGenerator->imagePath('webmail', 'mail.svg'),
			'name' => $l->t('Webmail'),
		];
	});
}
