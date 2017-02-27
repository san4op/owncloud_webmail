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

OCP\JSON::checkAppEnabled('webmail');
OCP\User::checkAdminUser();

OCP\Util::addscript('webmail', 'admin');

$tmpl = new OCP\Template('webmail', 'settings');
return $tmpl->fetchPage();
