/**
 * decrypt_error.js
 *
 * Some client-side form-checks. Trivial stuff.
 *
 * @author Konstantin Riabitsev <icon at duke.edu>
 * @copyright 2001-2013 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: decrypt_error.js 14387 2013-07-26 17:31:02Z jervfors $
 */

function AYS(){
  if (document.forms[0].delete_words.checked && document.forms[0].old_key.value){
    alert (ui_candel);
    return false;
  }
  
  if (!document.forms[0].delete_words.checked && !document.forms[0].old_key.value){
    alert(ui_choice);
    return false;
  }
  if (document.forms[0].delete_words.checked)
    return confirm(ui_willdel);
  return true;
}