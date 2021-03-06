
<div role="tabpanel" class="tab-pane active" id="grid" aria-expanded="true">

    <?php require 'inc/components/product-image.php'; ?>

    <?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home';
    if($page=='shop-fw') {
		$column=4;
	}
    else {
		$column=3;
	}?>

    <ul class="products columns-<?php echo $column; ?>">
        <?php for ($i=1; $i <=15; $i++) { ?>
        <?php
                if ( empty( $loop ) ) {
                    $loop = 0;
                }
                $loop++;
                $classes = '';
                if ( 0 === ( $loop - 1 ) % $column || 1 === $column ) {
                    $classes = 'first';
                }
                if ( 0 === $loop % $column ) {
                    $classes = 'last';
                }
            ?>
            <li class="product <?php echo $classes; ?>">
                <div class="product-outer">
                    <div class="product-inner">
                        <span class="loop-product-categories"><a href="index.php?page=product-category" rel="tag">Smartphones</a></span>
                        <a href="index.php?page=single-product">
                            <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                            <div class="product-thumbnail">

                                <img data-echo="<?php echo $productImage[$i]['product_image'] ?>" src="assets/images/blank.gif" alt="">

                            </div>
                        </a>

                        <div class="price-add-to-cart">
                            <span class="price">
                                <span class="electro-price">
                                    <ins><span class="amount">&#036;1,999.00</span></ins>
                                    <del><span class="amount">&#036;2,299.00</span></del>
                                </span>
                            </span>
                            <a rel="nofollow" href="index.php?page=single-product" class="button add_to_cart_button">Add to cart</a>
                        </div><!-- /.price-add-to-cart -->

                        <div class="hover-area">
                            <div class="action-buttons">

                                <a href="#" rel="nofollow" class="add_to_wishlist">
                                        Wishlist</a>

                                <a href="#" class="add-to-compare-link">Compare</a>
                            </div>
                        </div>
                    </div><!-- /.product-inner -->
                </div><!-- /.product-outer -->
            </li>
        <?php } ?>

    </ul>
</div>
