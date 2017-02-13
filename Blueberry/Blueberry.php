<!DOCTYPE html>
<!-- Written by Todd Grimes <toddgrimes@outlook.com>                         -->
<!--
  Write a program that uses a loop to print the integers 1 to 100, one number on
  each line. When a number is divisible by 3, print "Blue" on the same line, and
  separate them by a space. When a number is divisible by 5, print "Berry"; and
  when a number is divisible by 15, print "Blueberry".

  Note that a number divisible by 15 will also be divisible by 3 and 5. In this
  case, only "Blueberry" should be printed.
 -->



<html>
  <head>
    <title>Blueberry</title>
  </head>
  <body>
<?php
  for ($i = 1; $i <= 100; $i++) {
    if ($i % 15 == 0) {
      echo "$i Blueberry<br>";
    } else if ($i % 5 == 0) {
      echo "$i Berry<br>";
    } else if ($i % 3 == 0) {
      echo "$i Blue<br>";
    } else {
      echo "$i<br>";
    }
  }
?>
  </body>
</html>
