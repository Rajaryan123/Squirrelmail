<?php

/**
 * ContentType.class.php
 *
 * This file contains functions needed to handle content type headers 
 * (rfc2045) in mime messages.
 *
 * @copyright 2003-2013 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: ContentType.class.php 14387 2013-07-26 17:31:02Z jervfors $
 * @package squirrelmail
 * @subpackage mime
 * @since 1.3.2
 */

/**
 * Class that handles content-type headers
 * Class was named content_type in 1.3.0 and 1.3.1. It is used internally
 * by rfc822header class.
 * @package squirrelmail
 * @subpackage mime
 * @since 1.3.2
 */
class ContentType {
    /**
     * Media type
     * @var string
     */
    var $type0 = 'text';
    /**
     * Media subtype
     * @var string
     */
    var $type1 = 'plain';
    /**
     * Auxiliary header information
     * prepared with parseContentType() function in rfc822header class.
     * @var array
     */
    var $properties = '';

    /**
     * Constructor function.
     * Prepared type0 and type1 properties
     * @param string $type content type string without auxiliary information
     */
    function ContentType($type) {
        $type = strtolower($type);
        $pos = strpos($type, '/');
        if ($pos > 0) {
            $this->type0 = substr($type, 0, $pos);
            $this->type1 = substr($type, $pos+1);
        } else {
            $this->type0 = $type;
        }
        $this->properties = array();
    }
}
