<!-- We will use $pro as in top-sale as every file is in index.php therfore same variable. -->
<?php
$brand = array_map(function ($p) {
    return $p['item_brand'];
}, $pro);
$unique = array_unique($brand);
sort($unique);

shuffle($pro);

// request method post
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['special_price_submit'])) {
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}
$incart = $Cart->getCartId($product->getData('cart')) ?? [];
?>

<section id="special-price">
    <div class="container">
        <h4 class="font-rubik font-size-20">Special Price</h4>
        <div id="filters" class="button-group text-right font-baloo font-size-16">
            <button class="btn is-checked" data-filter="*">All Brand</button>
            <?php
            array_map(function ($brand) {
                printf('<button class="btn" data-filter=".%s">%s</button>', $brand, $brand);
            }, $unique)
            ?>


        </div>

        <div class="grid">
            <?php array_map(function ($item) use ($incart) { ?>
                <div class="grid-item border <?php echo $item['item_brand']; ?>">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <a href="<?php printf('%s?item_id=%s', 'product.php', $item['item_id']) ?>"><img src=<?php echo $item['item_image'] ?? "assets/products/1.png"; ?> alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6><?php echo $item['item_name'] ?></h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span><?php echo $item['item_price'] ?></span>
                                </div>
                                <form method="post">
                                    <input type="hidden" name="item_id" value="<?php echo $items['item_id'] ?? '1'; ?>">
                                    <input type="hidden" name="user_id" value="<?php echo '1'; ?>">
                                    <?php
                                    // Pass nul array as well because if there is no cart item then it displays error.Therefore add in every section
                                    if (in_array($item['item_id'], $incart)) {
                                        echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                                    } else {
                                        echo '<button type="submit" name="special_price_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                                    }
                                    ?>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            <?php }, $pro) ?>


        </div>
    </div>
</section>