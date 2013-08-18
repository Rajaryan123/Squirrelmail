<?php
/**
 * note.tpl
 *
 * Template for displaying notes as needed.
 * 
 * Variables available in this template:
 *      $note   = Sanitized string containing not to be displayed.
 *
 * @copyright 1999-2013 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: note.tpl 14387 2013-07-26 17:31:02Z jervfors $
 * @package squirrelmail
 * @subpackage templates
 */

// Get the variables from the template
extract($t) 
?>
<div class="sqm_noteWrapper">
 <div class="sqm_note">
  <?php echo $note."\n"; ?>
 </div>
</div>
<br />
