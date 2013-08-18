<?php

/**
  * SquirrelMail Test Plugin
  * @copyright 2006-2013 The SquirrelMail Project Team
  * @license http://opensource.org/licenses/gpl-license.php GNU Public License
  * @version $Id: functions.php 14387 2013-07-26 17:31:02Z jervfors $
  * @package plugins
  * @subpackage test
  */

/**
  * Add link to menu at top of content pane
  *
  * @return void
  *
  */
function test_menuline_do() {

    global $oTemplate, $nbsp;
    $output = makeInternalLink('plugins/test/test.php', 'Test', 'right')
            . $nbsp . $nbsp;
    return array('menuline' => $output);

}


