<!--program to edit the date and time of server.-->
 <?php
$d=mktime(12, 58, 54, 4, 12, 2015);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?> 