<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="offers.css">
    <title>Gym Management System Offers</title>
</head>

<body>
    <header>
        <h1>Special Offers</h1>
    </header>

    <section class="offers-card">
        <?php
        // Sample offer data
        $offers = array(
            array(
                'title' => 'Annual Membership',
                'price' => '$499',
                'description' => 'Get a full year of membership at a discounted rate!',
                'coupon_code' => 'GYM2024'
            ),
            array(
                'title' => 'Refer a Friend',
                'price' => '10% off',
                'description' => 'Refer a friend and both of you get a 10% discount on your next month\'s membership.',
                'coupon_code' => 'FRIEND10'
            ),
            array(
                'title' => 'Group Training Package',
                'price' => '$199/month',
                'description' => 'Join our group training sessions at a special monthly rate.',
                'coupon_code' => 'GROUPFIT'
            )
        );

        // Display offers
        foreach ($offers as $offer) {
            echo '<div class="offer">
                    <h2>' . $offer['title'] . '</h2>
                    <p class="price">' . $offer['price'] . '</p>
                    <p class="description">' . $offer['description'] . '</p>
                    <p class="coupon">Use coupon code: ' . $offer['coupon_code'] . '</p>
                    <form action="checkout.php" method="post">
                        <input type="hidden" name="offer_title" value="' . $offer['title'] . '">
                        <input type="hidden" name="offer_price" value="' . $offer['price'] . '">
                        <input type="submit" value="Pay Now">
                    </form>
                </div>';
        }
        ?>
    </section>

    <footer>
        <p>&copy; 2024 Heavy Lifters. All rights reserved.</p>
    </footer>
</body>

</html>
