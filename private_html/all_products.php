<?php include 'config.php'; ?>
<?php include 'header.php'; ?>


   
        <section class="deal" id="Deal">

        <h1 class="heading"> deal of the day </h1>

        <div class="row">

            <div class="content">
                <h3 class="title">don't miss the deal</h3>
                <p>Don't miss out on our limited-time discount offer! Enjoy upto 50% off on selected items in-store and online. Shop now to take advantage of this great deal before it ends. Hurry, the clock is ticking!
                </p>
                <div class="count-down">
                    <div class="box">
                        <h3 id="day">00</h3>
                        <span>day</span>
                    </div>
                    <div class="box">
                        <h3 id="hour">00</h3>
                        <span>hour</span>
                    </div>
                    <div class="box">
                        <h3 id="minute">00</h3>
                        <span>minute</span>
                    </div>
                    <div class="box">
                        <h3 id="second">00</h3>
                        <span>second</span>
                    </div>
                </div>
                <a href="#" class="btn">check out deal</a>
            </div>

            <div class="image">
                <img src="images/deal-img.jpg" alt="">
            </div>

        </div>

    </section>
    <div class="product-section content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-head">All Products</h2>
                    <?php
                    $limit = 8;
                    $db = new Database();
                    $db->select('products','*',null,'product_status = 1 AND qty > 0','product_id DESC',$limit);
                    $result = $db->getResult();
                    //print_r($result);
                    //die;
                    if(count($result) > 0){
                        foreach($result as $row){ ?>
                            <div class="col-md-3 col-sm-6">
                                <div class="product-grid">
                                    <div class="product-image latest">
                                        <a class="image" href="single_product.php?pid=<?php echo $row['product_id']; ?>">
                                            <img class="pic-1" src="product-images/<?php echo $row['featured_image']; ?>">
                                        </a>
                                        <div class="product-button-group">
                                            <a href="single_product.php?pid=<?php echo $row['product_id']; ?>" ><i class="fa fa-eye"></i></a>
                                            <a href="" class="add-to-cart" data-id="<?php echo $row['product_id']; ?>"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="" class="add-to-wishlist" data-id="<?php echo $row['product_id']; ?>"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title">
                                            <a href="single_product.php?pid=<?php echo $row['product_id']; ?>"><?php echo $row['product_title']; ?></a>
                                        </h3>
                                        <div class="price"><?php echo $cur_format; ?> <?php echo $row['product_price']; ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php    }
                    } ?>
                </div>
                <div class="col-md-12">
                    <div class="pagination-outer">
                    <?php echo $db->pagination('products',null,'product_status = 1 AND qty > 0',$limit); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>