
<?php

system("gpio -1 mode 19 out"); 
system("gpio -1 mode 21 out"); 
system("gpio -1 mode 13 out"); 
system("gpio -1 mode 15 out"); 

system("gpio -1 write 19 0");
system("gpio -1 write 21 1");
system("gpio -1 write 13 0");
system("gpio -1 write 15 1");

?>

