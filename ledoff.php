<?php

system("gpio -1 mode 37 out"); 
system("gpio -1 mode 35 out"); 
//system("gpio -1 mode 13 out"); 
//system("gpio -1 mode 15 out"); 

system("gpio -1 write 37 0");
system("gpio -1 write 33 0");
//system("gpio -1 write 13 1");
//system("gpio -1 write 15 0");

?>

