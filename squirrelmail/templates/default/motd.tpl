<?php
/**
 * motd.tpl
 *
 * Tempalte for display Message of the day
 * 
 * Variables available in this template:
 *      $motd - string containing the MOTD to be displayed
 *
 * @copyright 1999-2013 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: motd.tpl 14387 2013-07-26 17:31:02Z jervfors $
 * @package squirrelmail
 * @subpackage templates
 */
 
// Get variables from template
extract($t);
?>
<!-- Begin MOTD -->
<div class="sqm_motdWrapper">
 <table class="sqm_motd" cellspacing="3">
  <tr>
   <td>
    <?php echo $motd; 
          if (!empty($plugin_output['motd_inside'])) 
             echo $plugin_output['motd_inside']; 
    ?>
   </td>
  </tr>
 </table>
</div>
<!-- End MOTD -->
