<?php
/**
 * read_xmailer.tpl
 *
 * Template for setting the Mailer option
 * 
 * The following variables are available in this template:
 *      $xmailer - Mailer as set on the message
 *
 * @copyright 1999-2013 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: read_xmailer.tpl 14387 2013-07-26 17:31:02Z jervfors $
 * @package squirrelmail
 * @subpackage templates
 */

/** add required includes **/

/** extract template variables **/
extract($t);

/** Begin template **/
echo $xmailer;
?>