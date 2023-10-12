<?php


function generatePassword($length): string
{

  $lowerCaseLetters = 'abcdefghilmnpqrstuvz';
  $upperCaseLetters = strtoupper($lowerCaseLetters);
  $numbers = '0123456789';
  $symbols = '*+-()!?#@';

  $chars = $lowerCaseLetters . $upperCaseLetters . $numbers . $symbols;

  $password = '';
  while (strlen($password) < $length) {
    # code...

    $char = $chars[rand(0, strlen($chars))];
    $password .= $char;
  }

  return $password;
}
