<?php

/**
  * line_break.tpl
  *
  * Template for constructing a line break.
  *
  * The following variables are available in this template:
  *
  * array $aAttribs Any extra attributes: an associative array, where
  *                 keys are attribute names, and values (which are
  *                 optional and might be null) should be placed
  *                 in double quotes as attribute values (optional;
  *                 may not be present)
  *
  * @copyright 1999-2013 The SquirrelMail Project Team
  * @license http://opensource.org/licenses/gpl-license.php GNU Public License
  * @version $Id: line_break.tpl 14387 2013-07-26 17:31:02Z jervfors $
  * @package squirrelmail
  * @subpackage templates
  */


// retrieve the template vars
//
extract($t);


echo '<br';
if (isset($aAttribs)) foreach ($aAttribs as $key => $value) {
    echo ' ' . $key . (is_null($value) ? '' : '="' . $value . '"');
}
echo ' />';
