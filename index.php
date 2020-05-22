<?php
$date = date('F', time());



if ($date == 'May'){
    $message=  "May arrived! Happy spring!";
    $color = "#fee715ff";
    $img = "http://www.fabuloussavers.com/new_wallpaper/Beautiful_Spring_Yellow_Flowers_freecomputerdesktopwallpaper_p.jpg";
} else{
   $message =  "It is not May yet, but it will be soon....";
    $color = "#cae1ff";
    $img = "http://data.whicdn.com/images/17730189/tumblr_luo9u8Sim21qmejd3o1_400_large.jpg";
}
 include "home.view.php";

