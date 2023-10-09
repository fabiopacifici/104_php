<?php

// Plain php code

//echo $argv[0]; // file name
//echo $argv[1]; // first argument 
//echo $argv[2]; // sendo argument 

echo $argc;

echo  'Ciao!' . $argv[1] . ' ' . $argv[2];


/* System command with backticks */
//``; // call system commands
//echo `ls -alt`;

/* System command with exec */
echo exec('ls -alt'); // call system commands
echo exec('mkdir test');

/* Debuggo ogni tipo di dato */
var_dump($argv);
