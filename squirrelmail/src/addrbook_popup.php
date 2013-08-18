<?php

/**
 * addrbook_popup.php
 *
 * Frameset for the JavaScript version of the address book.
 *
 * @copyright 1999-2013 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: addrbook_popup.php 14387 2013-07-26 17:31:02Z jervfors $
 * @package squirrelmail
 * @subpackage addressbook
 */

/** This is the addrbook_popup page */
define('PAGE_NAME', 'addrbook_popup');

/**
 * Include the SquirrelMail initialization file.
 */
include('../include/init.php');

displayHtmlHeader($org_title .': '. _("Addresses"), '', false, true);

$oTemplate->display('addressbook_popup.tpl');


