<html>
<head>
  <title>Blueberry</title>
</head>
<body>
<?php
  for ($i = 1; $i <= 100; $i++) {
    if ($i % 15 == 0) {
      echo $i . " " . "Blueberry<br>";
    } else if ($i % 5 == 0) {
      echo $i . " " . "Berry<br>";
    } else if ($i % 3 == 0) {
      echo $i . " " . "Blue<br>";
    } else {
      echo $i . "<br>";
    }
  }
?>
</body>
</html>
