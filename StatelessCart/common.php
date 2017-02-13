<?php

// Todd Grimes

// Set individual product prices
  $apple_price  = number_format ((float) .5, 2);
  $orange_price = number_format ((float) .75, 2);
  $banana_price = number_format ((float) .65, 2);
  $tomato_price = number_format ((float) 1.50, 2);
  $grape_price  = number_format ((float) 2.50, 2);

// Set tax rate as decimal representation of a percentage
  $tax_rate = .085;

// Check for and inspect $_POST Data
  if (isset($_POST['Apples'])) {
    $number_apples = $_POST['Apples'];
    $total_price_apples = number_format((float) ($number_apples * $apple_price), 2);
  } else {
    $number_apples = 0;
    $total_price_apples = number_format((float) ($number_apples * $apple_price), 2);
  }

  if (isset($_POST['Oranges'])) {
    $number_oranges = $_POST['Oranges'];
    $total_price_oranges = number_format((float) ($number_oranges * $orange_price), 2);
  } else {
    $number_oranges = 0;
    $total_price_oranges = number_format((float) ($number_oranges * $orange_price), 2);
  }

  if (isset($_POST['Bananas'])) {
    $number_bananas = $_POST['Bananas'];
    $total_price_bananas = number_format((float) ($number_bananas * $banana_price), 2);
  } else {
    $number_bananas = 0;
    $total_price_bananas = number_format((float) ($number_bananas * $banana_price), 2);
  }

  if (isset($_POST['Tomatoes'])) {
    $number_tomatoes = $_POST['Tomatoes'];
    $total_price_tomatoes = number_format((float) ($number_tomatoes * $tomato_price), 2);
  } else {
    $number_tomatoes = 0;
    $total_price_tomatoes = number_format((float) ($number_tomatoes * $tomato_price), 2);
  }

  if (isset($_POST['Grapes'])) {
    $number_grapes = $_POST['Grapes'];
    $total_price_grapes = number_format((float) ($number_grapes * $grape_price), 2);
  } else {
    $number_grapes = 0;
    $total_price_grapes = number_format((float) ($number_grapes * $grape_price), 2);
  }

// Generate Taxes, Subtotal, and Total
  $subtotal = number_format ((float) ($total_price_apples + $total_price_oranges + $total_price_bananas + $total_price_tomatoes + $total_price_grapes), 2);
  $total_tax = number_format ((float) ($subtotal * $tax_rate), 2);
  $total = number_format ((float) ($subtotal + $total_tax), 2);

?>
