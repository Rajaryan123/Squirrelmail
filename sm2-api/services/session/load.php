<?php

    /**
     *  Zookeeper
     *  Copyright (c) 2001 Partridge
     *  Licensed under the GNU GPL. For full terms see the file COPYING.
     *
     *  $Id: load.php 1578 2001-10-17 19:23:08Z philippe_mingo $
     **/
    
    function zkload_session( &$zkld, $svcname ) {

        require_once( $zkld->libhome . '/' . $svcname . '/service.php' );
        return( TRUE );

    }

?>
