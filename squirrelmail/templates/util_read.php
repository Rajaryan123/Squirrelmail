<?php
/**
 * util_read.php
 *
 * Utility file containing functions related to reading messages
 * 
 * @copyright 1999-2013 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: util_read.php 14387 2013-07-26 17:31:02Z jervfors $
 * @package squirrelmail
 * @subpackage templates
 */

/**
 * Return a string representing the priority of a message
 */
function priorityStr($p) {
    return sm_encode_html_special_chars(getPriorityStr($p));
}

?>