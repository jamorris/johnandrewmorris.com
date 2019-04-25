<?php
    // this refreshes current page after 60 seconds.
    header( "refresh:60;" );
    
    echo "This is for experimental use only! Do not rely on this map for your safety! <br>";
    
    $images = glob('lightning/*.{gif,png,jpg,jpeg}', GLOB_BRACE); //formats to look for
    rsort($images);

    $num_of_files = 5; //number of images to display

    foreach($images as $image)
    {
         $num_of_files--;

         if($num_of_files > -1) //know when to stop
           echo "<b>".$image."</b><br>Created on ".date('D, d M y H:i:s', filemtime($image)) ."<br><img src="."'".$image."'"."><br><br>" ; //display images
         else
           break;
    }
?>