<?php


function dd(...$params)
{
  foreach ($params as $param) {
    var_dump($param);
  }
  die;
}
