<?php
    spl_autoload_register('autoLoader');

    function autoLoader ($classname) {
        $path = "classes/";
        $extension = ".class.php";
        $fullpath = $path . $classname . $extension;
        
        include_once $fullpath;
    }