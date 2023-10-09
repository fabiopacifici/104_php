<?php
/* String & Strings manipulation */
$text = '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus possimus ipsa eveniet. Harum, reiciendis! Odit hic assumenda odio ut! Modi, reprehenderit optio culpa amet atque ipsam voluptas! Tenetur, ipsam. Totam?  ';


$text_exploded = explode(',', $text);
$text_exploded_spaces = explode(' ', $text);

var_dump($text_exploded);
var_dump($text_exploded_spaces);


var_dump($text);


var_dump(trim($text));

echo strlen($text);


$array = ['Michele', 'Fabio', 'Roberto'];

echo "<pre>";
var_dump($array);
echo "</pre>";
