<?php

/**
  * table_data.tpl
  *
  * Template for constructing an opening table data tag.
  *
  * The following variables are available in this template:
  * array  $attributes  The table attributes
  *
  * @copyright 1999-2013 The SquirrelMail Project Team
  * @license http://opensource.org/licenses/gpl-license.php GNU Public License
  * @version $Id: table_data.tpl 14387 2013-07-26 17:31:02Z jervfors $
  * @package squirrelmail
  * @subpackage templates
  */


// retrieve the template vars
//
extract($t);


echo '<td';

foreach ($attributes as $key => $value) {
    echo ' ' . $key . (is_null($value) ? '' : '="' . $value . '"');
}

echo ">\n";

