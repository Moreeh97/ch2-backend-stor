
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
</head>
<body>
    <h2>Add New Product</h2>

    <form method="POST">
        <label>Product name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Product price:</label><br>
        <input type="number" step="0.01" name="price" required><br><br>

        <label>Quantity:</label><br>
        <input type="number" name="quantity" required><br><br>

        <button type="submit">Add Product</button>
    </form>

    <?php
require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/modules/Products/Products.php';

use Engmoreeh\Ch2BackendStor\Modules\Products\Products;

session_start();

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name     = $_POST['name'] ?? '';
    $price    = $_POST['price'] ?? '';
    $quantity = $_POST['quantity'] ?? '';

    $product = new Products($name, $price, $quantity);

    $_SESSION['products'][] = $product;
}

echo "<h2>Product List</h2>";
foreach ($_SESSION['products'] as $product) {
    echo "Product Name: " . $product->getName() . "<br>";
    echo "Price: $" . $product->getPrice() . "<br>";
    echo "Quantity: " . $product->getQuantity() . "<br><br>";
}
?>

</body>
</html>
