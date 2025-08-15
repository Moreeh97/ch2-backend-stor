<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Order</title>
</head>
<body>
    <h2>Create Order</h2>
  //for show product and select one of them
  <form action="createOrder.php" method="POST">
      <label for="product">Select Product:</label>
      <select name="product" id="product">
          <?php
          if (isset($_SESSION['products'])) {
              foreach ($_SESSION['products'] as $product) {
                  echo "<option value='" . $product->getId() . "'>" . $product->getName() . "</option>";
              }
          }
          ?>
      </select>
        <br>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" min="1" value="1">
        <br>
        <input type="submit" value="Create Order">
    </form>

</body>
</html>