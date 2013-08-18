<?php

    /**
     *  Zookeeper
     *  Copyright (c) 2001 Partridge
     *  Licensed under the GNU GPL. For full terms see the file COPYING.
     *
     *  $Id: load.php 2449 2002-02-15 05:19:06Z philippe_mingo $
     **/
    
    function zkload_conf( &$zkld, $svcname ) {
    
        require_once( $zkld->libhome . '/' . $svcname . '/service.php' );
        return( TRUE );

    }

?>
