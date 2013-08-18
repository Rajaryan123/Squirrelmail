<?php

/**
  * label.tpl
  *
  * Template for constructing a label tag.
  *
  * The following variables are available in this template:
  *      + $for      - the ID to which the label applies (optional; may not be present)
  *      + $text     - text (or other code) that goes inside the label
  *      + $aAttribs - Any extra attributes: an associative array, where 
  *                    keys are attribute names, and values (which are 
  *                    optional and might be null) should be placed
  *                    in double quotes as attribute values (optional; 
  *                    may not be present)
  *
  * @copyright 1999-2013 The SquirrelMail Project Team
  * @license http://opensource.org/licenses/gpl-license.php GNU Public License
  * @version $Id: label.tpl 14387 2013-07-26 17:31:02Z jervfors $
  * @package squirrelmail
  * @subpackage templates
  */


// retrieve the template vars
//
extract($t);


echo '<label';
if (!empty($for)) echo ' for="' . $for . '"';
foreach ($aAttribs as $key => $value) {
    echo ' ' . $key . (is_null($value) ? '' : '="' . $value . '"');
}
echo '>' . $text . '</label>';


