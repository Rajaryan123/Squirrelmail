<?php

/**
 * Language.class.php
 *
 * Copyright (c) 2002 The SquirrelMail Project Team
 * Licensed under the GNU GPL. For full terms see the file COPYING.
 *
 * This contains functions needed to handle mime messages.
 *
 * $Id: Language.inc 5026 2003-06-12 21:23:55Z stekkel $
 */

class Language {
    function Language($name) {
       $this->name = $name;
       $this->properties = array();
    }
}

?>
