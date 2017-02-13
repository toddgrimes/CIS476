<!-- Todd Grimes -->

<?php include 'common.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      <p>Here is your final ticket:</p><br>

      <table>
        <tr>
          <td>Product:</td>
          <td>Price:</td>
          <td>Qty Ordered:</td>
          <td>Cost:</td>
        </tr>
        <?php if ($number_apples > 0) { ?>
        <tr>
          <td>Apples</td>
          <td>$ <?php echo number_format((float) $apple_price, 2); ?></td>
          <td><?php echo $number_apples; ?></td>
          <td>$ <?php echo $total_price_apples; ?></td>
        </tr>
        <?php }
          if ($number_oranges > 0) { ?>
        <tr>
          <td>Oranges</td>
          <td>$ <?php echo number_format((float) $orange_price, 2); ?></td>
          <td><?php echo $number_oranges; ?></td>
          <td>$ <?php echo $total_price_oranges; ?></td>
        </tr>
        <?php }
        if ($number_bananas > 0) { ?>
        <tr>
          <td>Bananas</td>
          <td>$ <?php echo number_format((float) $banana_price, 2); ?></td>
          <td><?php echo $number_bananas; ?></td>
          <td>$ <?php echo $total_price_bananas; ?></td>
        </tr>
        <?php }
        if ($number_tomatoes > 0) { ?>
        <tr>
          <td>Tomatoes</td>
          <td>$ <?php echo number_format((float) $tomato_price, 2); ?></td>
          <td><?php echo $number_tomatoes; ?></td>
          <td>$ <?php echo $total_price_tomatoes; ?></td>
        </tr>
        <?php }
        if ($number_grapes > 0) { ?>
        <tr>
          <td>Grapes</td>
          <td>$ <?php echo number_format((float) $grape_price, 2); ?></td>
          <td><?php echo $number_grapes; ?></td>
          <td>$ <?php echo $total_price_grapes; ?></td>
        </tr>
        <?php } ?>
        <tr>
          <td colspan = 3>Subtotal:</td>
          <td>$ <?php echo $subtotal; ?></td>
        </tr>
        <tr>
          <td colspan = 3>Tax:</td>
          <td>$ <?php echo $total_tax; ?></td>
        </tr>
        <tr>
          <td colspan = 3>Total:</td>
          <td>$ <?php echo $total; ?></td>
        </tr>
      </table>


    </body>
</html>
