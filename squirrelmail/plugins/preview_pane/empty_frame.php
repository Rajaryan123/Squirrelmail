<?php

/**
 * SquirrelMail Preview Pane Plugin
 *
 * @copyright 1999-2013 The SquirrelMail Project Team
 * @author Paul Lesniewski <paul@squirrelmail.org>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: empty_frame.php 14387 2013-07-26 17:31:02Z jervfors $
 * @package plugins
 * @subpackage preview_pane
 */


include_once('../../include/init.php');

global $org_title;
displayHtmlHeader($org_title, '', FALSE, FALSE);

$oTemplate->display('plugins/preview_pane/empty_frame.tpl');
$oTemplate->display('footer.tpl');


