<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="offers.css">
    <title>Checkout - heavy Lifter</title>
</head>

<body>
    <header>
        <h1>Checkout</h1>
    </header>
    <section class="checkout-summary">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $offer_title = $_POST['offer_title'];
            $offer_price = $_POST['offer_price'];
            echo '<h2>Order Summary</h2>
                  <p><strong>Offer:</strong> ' . $offer_title . '</p>
                  <p><strong>Price:</strong> ' . $offer_price . '</p>
                  <p>Complete the payment process to avail the offer.</p>;
                  <button><a href="buy.html">Payment</a></button>';
        } else {
            echo '<p>No offer selected for checkout.</p>';
        }
        ?>
    </section>
    <footer>
        <p>&copy; 2024 Heavy Lifters. All rights reserved.</p>
    </footer>
</body>
</html>
