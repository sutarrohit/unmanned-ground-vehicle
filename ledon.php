<?php

system("gpio -1 mode 37 out"); 
system("gpio -1 mode 33 out"); 
//system("gpio -1 mode 13 out"); 
//system("gpio -1 mode 15 out"); 

system("gpio -1 write 37 1");
system("gpio -1 write 33 1");
//system("gpio -1 write 13 0");
//system("gpio -1 write 15 0");

?>

