<!-- Todd Grimes -->

<?php include 'common.php'; ?>
 <!DOCTYPE html>
  <html>
  <head>
      <meta charset="UTF-8">
      <title></title>
  </head>
  <body>

<p>Please confirm and adjust your order:</p>

<table>
  <tr>
    <td>Product</td>
    <td>Price</td>
    <td>Quantity</td>
    <td>Cost</td>
  </tr>
  <?php
    if ($number_apples > 0) {
  ?>
      <tr>
        <td>Apples</td>
        <td>$ <?php echo $apple_price; ?></td>
        <td><?php echo $number_apples; ?></td>
        <td>$ <?php echo number_format((float) ($apple_price * $number_apples), 2); ?></td>
      </tr>
  <?php
    }
    if ($number_oranges > 0) {
  ?>
      <tr>
        <td>Oranges</td>
        <td>$ <?php echo $orange_price; ?></td>
        <td><?php echo $number_oranges; ?></td>
        <td>$ <?php echo number_format((float) ($orange_price * $number_oranges), 2); ?></td>
      </tr>
  <?php
    }
    if ($number_bananas > 0) {
  ?>
      <tr>
        <td>Bananas</td>
        <td>$ <?php echo $banana_price; ?></td>
        <td><?php echo $number_bananas; ?></td>
        <td>$ <?php echo number_format((float) ($banana_price * $number_bananas), 2); ?></td>
      </tr>
  <?php
    }
    if ($number_tomatoes > 0) {
  ?>
  <tr>
    <td>Tomatoes</td>
    <td>$ <?php echo $tomato_price; ?></td>
    <td><?php echo $number_tomatoes; ?></td>
    <td>$ <?php echo number_format((float) ($tomato_price * $number_tomatoes), 2); ?></td>
  </tr>
  <?php
    }
    if ($number_grapes > 0) {
  ?>
  <tr>
    <td>Grapes</td>
    <td>$ <?php echo $grape_price; ?></td>
    <td><?php echo $number_grapes; ?></td>
    <td>$ <?php echo number_format((float) ($grape_price * $number_grapes), 2); ?></td>
  </tr>
  <?php
    }
  ?>
  <tr>
    <td colspan = 3>Subtotal</td>
    <td>$ <?php echo $subtotal; ?></td>
  </tr>
</table>
  <form method="post" action="checkout.php">
    <input name="Apples" value = "<?php echo $number_apples ?>" type="hidden">
    <input name="Oranges" value = "<?php echo $number_oranges ?>" type="hidden">
    <input name="Bananas" value = "<?php echo $number_bananas ?>" type="hidden">
    <input name="Tomatoes" value = "<?php echo $number_tomatoes ?>" type="hidden">
    <input name="Grapes" value = "<?php echo $number_grapes ?>" type="hidden">
    <input name="submit" type="submit" value="Confirm!">
  </form>
     </body>
 </html>
