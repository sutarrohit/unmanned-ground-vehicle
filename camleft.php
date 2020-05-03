<?php

system("gpio -1 mode 38 out"); 
system("gpio -1 mode 37 out"); 

system("gpio -1 write 38 0");
system("gpio -1 write 37 1");

sleep(0.1);

system("gpio -1 write 38 0");
system("gpio -1 write 37 0");

?>
