<!-- Todd Grimes -->

<?php include 'common.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="cart.php">
          <label for="Apples">Apples: $ <?php echo number_format((float) $apple_price, 2); ?> ea.</label><input name="Apples" type="text"></br>
          <label for="Oranges">Oranges: $ <?php echo number_format((float) $orange_price, 2); ?> ea.</label><input name="Oranges" type="text"></br>
          <label for="Bananas">Bananas: $ <?php echo number_format((float) $banana_price, 2); ?> ea.</label><input name="Bananas" type="text"></br>
          <label for="Tomatoes">Tomatoes: $ <?php echo number_format((float) $tomato_price, 2); ?> ea.</label><input name="Tomatoes" type="text"></br>
          <label for="Grapes">Grapes: $ <?php echo number_format((float) $grape_price, 2); ?>/bunch</label><input name="Grapes" type="text"></br>
          <input name="submit" type="submit">
        </form>
    </body>
</html>
