<!--program to display the time according to the time zone-->
 <?php
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
?> 