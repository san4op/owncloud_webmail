/**
 * ownCloud - webmail
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Alexander Pushkin <san4op@icloud.com>
 * @copyright Alexander Pushkin 2017
 */

$(document).ready(function(){

	// Initialize events
	$('#save_webmail_site').click(function(event) {
		event.preventDefault();

		var post = $('#webmail').serialize();
		OC.msg.startSaving('#webmail .msg');
		$.post( OC.filePath('webmail','ajax','setWebmailUrl.php') , post, function(data) {
			OC.msg.finishedSaving('#webmail .msg', data);
		});
	});

});
