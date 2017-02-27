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

$this->create('webmail', '/')
	->actionInclude('webmail/index.php');
$this->create('save_webmail_site', 'ajax/setWebmailUrl.php')
	->actionInclude('webmail/ajax/setWebmailUrl.php');
