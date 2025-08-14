<?php
require __DIR__ . '/../vendor/autoload.php';

use Engmoreeh\Ch2BackendStor\Modules\Products\Products;

$product = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name     = $_POST['name'] ?? '';
    $price    = $_POST['price'] ?? '';
    $quantity = $_POST['quantity'] ?? '';

chore/change-ar-to-en
  main
    $product = new Products($name, $price, $quantity);
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
 chore/change-ar-to-en
    <title> add product</title>
</head>
<body>
    <h2>add new</h2>

    <form method="POST">
        <label>product name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>product price:</label><br>
        <input type="number" step="0.01" name="price" required><br><br>

        <label>quantity:</label><br>
        <input type="number" name="quantity" required><br><br>

        <button type="submit">add product</button>
    </form>

    <?php if ($product): ?>
        <h3>The product has been added</h3>
        <p>Name : <?= $product->getName(); ?></p>
        <p>price: <?= $product->getPrice(); ?></p>
        <p>quantity: <?= $product->getQuantity(); ?></p>
    <title>إضافة منتج</title>
</head>
<body>
    <h2>إضافة منتج جديد</h2>

    <form method="POST">
        <label>اسم المنتج:</label><br>
        <input type="text" name="name" required><br><br>

        <label>سعر المنتج:</label><br>
        <input type="number" step="0.01" name="price" required><br><br>

        <label>الكمية:</label><br>
        <input type="number" name="quantity" required><br><br>

        <button type="submit">إضافة المنتج</button>
    </form>

    <?php if ($product): ?>
        <h3>✅ تم إضافة المنتج:</h3>
        <p>📦 الاسم: <?= $product->getName(); ?></p>
        <p>💲 السعر: <?= $product->getPrice(); ?></p>
        <p>📊 الكمية: <?= $product->getQuantity(); ?></p>
 main
    <?php endif; ?>
</body>
</html>
