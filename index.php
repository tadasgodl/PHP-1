<?php
$products = [
        [
                'name' => 'Holy Water',
                'price' => 1.50,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQk1WdxMZRencR7nZAMv8mhW4pRD8XaSyo6BQ&usqp=CAU'
        ],
        [
                'name' => 'Water',
                'price' => 1,
                'price_special' => 0.75,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRmCsfWz6wNNC-JLWXPPt7sSHZmH5rWZ8muJA&usqp=CAU'
        ],
        [
                'name' => 'Unfiltered Water',
                'price' => 0.25,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSPQZAFObJY-OBvT_77lEaFRMwmSQLOn7f66A&usqp=CAU'
        ],
        [
                'name' => 'Grape Juice',
                'price' => 2,
                'price_special' => 1.99,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRG88B5wPcQ0zZnVWI5AVjbOB-Z8jIrJgKVaQ&usqp=CAU'
        ]
];

foreach ($products as $key => $product) {
    $in_stock = rand(0, 1);
    $products[$key]['in_stock'] = $in_stock;

    if(isset($product['price_special'])) {
        $price_special_percent = round(100 - $products[$key]['price_special'] * 100 / $products[$key]['price']);
        $products[$key]['price_special_percent'] = $price_special_percent;
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cycles</title>
    <style>
        * {
            font-family: sans-serif;
            padding: 0;
            margin: 0;
        }
        section {
            display: flex;
            justify-content: center;
        }
        article {
            position: relative;
            border: 1px solid grey;
            margin: 5px;
        }
        p, h1 {
            text-align: center;
        }
        img {
            height: 200px;
            width: 200px;
        }
        .floating-price {
            position: absolute;
            right: 0;
            top: 0;
            background-color: orange;
        }
        .floating-discount {
            position: absolute;
            left: 0;
            top: 0;
            background-color: red;
        }
        .in-stock {
            padding-top: 5px;
            color: green;
        }
        .out-of-stock {
            padding-top: 5px;
            color: red;
        }
        .image-in-stock {

        }
        .image-out-of-stock {
            filter: grayscale(100%);
        }
    </style>
</head>
<body>
    <main>
        <h1>Drink Catalogue</h1>
        <section>
            <?php foreach ($products as $product): ?>
                <article>
                    <img src="<?php print $product['image']; ?>" alt="drinks" class="<?php print $product['in_stock'] ? 'image-in-stock' : 'image-out-of-stock'; ?>">
                    <p><?php print $product['name']; ?></p>

                    <?php if(isset($product['price_special'])): ?>
                        <p class="floating-price"><?php print $product['price_special'] . '$'; ?></p>
                        <p class="floating-discount"><?php print ' -' . $product['price_special_percent'] . '%'; ?></p>
                    <?php else: ?>
                        <p class="floating-price"><?php print $product['price'] . '$'; ?></p>
                    <?php endif; ?>

                    <p class="<?php print $product['in_stock'] ? 'in-stock' : 'out-of-stock'; ?>">
                        <?php print $product['in_stock'] ? 'In stock.' : 'Out of stock.'; ?>
                    </p>

                </article>
            <?php endforeach; ?>
        </section>
    </main>
</body>
</html>