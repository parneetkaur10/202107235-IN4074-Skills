
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Check if any products were selected
  if (isset($_POST['products'])) {
    // Get the selected products
    $selectedProducts = $_POST['products'];

    // Process the order
    // You can do things like store the order in a database, send an email, etc.

    // Let the user know the order was successful
    echo "Your order for the following Apple products has been placed: ";
    foreach ($selectedProducts as $product) {
      echo $product . ", ";
    }
    echo "Thank you for your purchase!";
  } else {
    // No products were selected
    echo "Please select at least one Apple product.";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orderws</title>
</head>
<body>
<p> Go back to select more items </P>
<p> <a href="product.php"> BACK </P>  
</body>
</html>


