<?php
    // this refreshes current page after 20 seconds.
    header( "refresh:20;" );
    $dir = "lightning/*";
    $files = glob($dir, GLOB_BRACE); //creats an array of files in folder
    rsort($files); //sorts files in descending order 
 
    foreach($files as $file)
    {  
        echo "<a href=$file> $file </a> <br />";
    }
?>