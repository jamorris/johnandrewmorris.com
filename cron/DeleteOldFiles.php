<?php

/** define the directory **/
$dir = "../lightning/";

/*** cycle through all files in the directory ***/
foreach (glob($dir."*") as $file) {

    /*** echo file info ***/
    echo "name: ", $file;
    echo " *** age in seconds: ", time() - filemtime($file);
    echo "<br>";

    /*** if file is 24 hours (86400 seconds) old then delete it ***/
    if(time() - filemtime($file) > 86400){
        unlink($file);
        echo "deleted ", $file, "<br>";
    }
}

/*** completion info ***/
echo "finished at ", date(DATE_RFC2822), " time: ", time();

?>
