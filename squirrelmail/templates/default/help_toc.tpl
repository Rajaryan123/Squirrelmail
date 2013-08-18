<?php
/**
 * help_toc.tpl
 *
 * Help Table of Contents template
 * 
 * The following variables are available in this template:
 *      $toc        - array containing table of contents.  Each element is an
 *                    array representing a chapter with the following fields:
 *          $el['Chapter']  - integer chapter Number
 *          $el['Title']    - string title of the chapter
 *          $el['Summary']  - string description of the chapter
 *
 * @copyright 1999-2013 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: help_toc.tpl 14387 2013-07-26 17:31:02Z jervfors $
 * @package squirrelmail
 * @subpackage templates
 */

/** add required includes **/

/** extract template variables **/
extract($t);

/** Begin template **/
?>
<div id="help">
<table cellspacing="0" class="table1">
 <tr>
  <td class="header1">
   <?php echo _("Help"); ?>
  </td>
 </tr>
 <tr>
  <td class="header3">
   <?php echo _("Table of Contents"); ?>
  </td>
 </tr>
 <tr>
  <td class="help">
   <ol>
    <?php
        foreach ($toc as $chapter) {
            ?>
    <li>
     <a href="../src/help.php?chapter=<?php echo $chapter['Chapter']; ?>"><?php echo $chapter['Title']; ?></a>
     <ul><?php echo $chapter['Summary']; ?></ul>
    </li>
            <?php
        } 
    ?>
   </ol>
  </td>
 </tr>
</table>
</div>