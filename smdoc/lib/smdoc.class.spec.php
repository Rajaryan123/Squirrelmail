<?php
/*
 * Copyright (c) 2003-2004 The SquirrelMail Project Team
 * Licensed under the GNU GPL. For full terms see the file COPYING.
 *
 * This file is an addition/modification to the 
 * Framework for Object Orientated Web Development (Foowd).
 * */

/**
 * Class for HTML and Textile formatted documents.
 *
 * $Id: smdoc.class.spec.php 7340 2004-05-01 19:55:48Z ebullient $
 *m  
 * @package smdoc
 * @subpackage text
 */

/** Class Descriptor/Meta information */
setClassMeta('smdoc_spec', 'HTML + Textile + Spec tracking');
setPermission('smdoc_spec', 'class',  'create', 'dev');
setPermission('smdoc_spec', 'object', 'revert', 'dev');


/**
 * HTML and Textile text object class.
 *
 * This class defines a HTML/Textile text area and 
 * methods to view and edit that area. Defines additional
 * elements for targeting/editing/documenting design intentions.
 *
 * @package smdoc
 * @subpackage text
 * @author Erin Schnabel
 */
class smdoc_spec extends smdoc_text_textile
{

}
