<?php

$test_variable = 'it works';

/**
 * This function checks if an email address contains '@/.'
 * and returns an array
 */
function checkEmailAddress(string $email): array
{

  if (str_contains($email, '@') and str_contains($email, '.')) {
    //var_dump('email ok');

    $alert = [
      'color' => 'success',
      'message' => 'Thanks for joining our newsletter!'
    ];
  } else {
    //var_dump('errore');
    $alert = [
      'color' => 'danger',
      'message' => 'Email Address format incorrect!'
    ];
  }

  return $alert;
}
