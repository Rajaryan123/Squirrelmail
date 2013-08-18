<?php

/**
 * SquirrelMail Test Plugin
 * @copyright 2006-2013 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: test.php 14387 2013-07-26 17:31:02Z jervfors $
 * @package plugins
 * @subpackage test
 */


include_once('../../include/init.php');

global $oTemplate, $color;

displayPageHeader($color, '');

$oTemplate->display('plugins/test/test_menu.tpl');
$oTemplate->display('footer.tpl');

