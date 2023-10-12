<?php
/* Functions */
# function no params 
function greetings()
{
  var_dump('I am a function');
}

// invoke the function
greetings();


# Function with params
function sayHello($name)
{
  var_dump('Hi ' . $name);
}

// invoke the function
sayHello('Fabio');

# Function with return and param
function showAge($age)
{
  return 'Your age is: ' . $age;
}

// invoke the function 
$age_message = showAge(43);

var_dump($age_message);



/* Variable scope */
/* Disney function */


$pippo = 'Pippo';

function showPippo($arg1, $arg2, $pippo)
{
  echo $arg1; // stampa il valore passato come parametro, cioè 1
  echo $arg2;
  echo $pippo; // genera un Notice: Undefined variable
}

showPippo(1, 2, $pippo); // invochiamo la funzione, passando 2 parametri
var_dump($pippo);
