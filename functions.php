<?php

function generatePassword()
{
  $number = $_GET['number'] ?? '';

  $characters = 'aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ1234567890-!?=%$/&*';

  for ($i = 0; $i < $number; $i++) {

    $characters_index = rand(0, strlen($characters) - 1);

    echo $characters[$characters_index];
  }
}
