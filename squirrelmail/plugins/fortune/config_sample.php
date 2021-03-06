<?php

/**
 * Sample Fortune plugin configuration file
 *
 * Configuration defaults to /usr/games/fortune with short quotes
 *
 * @copyright 2004-2013 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: config_sample.php 14387 2013-07-26 17:31:02Z jervfors $
 * @package plugins
 * @subpackage fortune
 */

/**
 * Command that is used to display fortune cookies
 * @global string $fortune_command
 * @since 1.5.2
 */
$fortune_command = '/usr/games/fortune -s';
