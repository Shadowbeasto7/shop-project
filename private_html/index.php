<?php include 'config.php';  //include config
// set dynamic title
$db = new Database();
$db->select('options','site_title',null,null,null,null);
$result = $db->getResult();



// include header 
include 'header.php'; ?>
 <!--Home section starts-->
 <section class="Home" id="Home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="box" style="background:url(images/Creekside-0109.jpg);">
                        <div class="content">
                            <span> </span>
                            <h3>Welcome to New Basanta Nursery WebSite </h3>
                            <a href="" class="btn">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box" style="background:url(images/IMG_2741.webp);">
                        <div class="content">
                            <span></span>
                            <h3>Plant are now avilable in a special price </h3>
                            <a href="popular_products" class="btn">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box" style="background:url(./images/IMG_3443.webp);">
                        <div class="content">
                            <span></span>
                            <h3>Plants special offer</h3>
                            <a href="#" class="btn">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
     <section class="banner-container">
        <div class="banner">
            <img src="images/IMG_2407.webp" alt="may content image of flower">
            <div class="content">
                <span>New Arrivals</span>
                <h3>Flowering Plants</h3>
                <a href="category?cat=29" class="btn">Shop now</a>
            </div>
        </div>
        <div class="banner">
            <img src="images/IMG_E1933.webp" alt="may content image of flower">
            <div class="content">
                <span>New arrivals</span>
                <h3>Indoor Plants</h3>
                <a href="category?cat=24" class="btn">Shop now</a>
            </div>
        </div>
        </section>
<!--category section starts-->
<section class="Category" id="Category">
        <h1 class="heading">Shop by category</h1>
        <div class="box-container">
            <div class="box">
                <img src="./images/cat1.jpg" alt="">
                <div class="content">
                    <h3>Bonsai</h3>
                    <a href="#" class="btn">Shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="./images/cat2.jpg" alt="">
                <div class="content">
                    <h3>Plants for house</h3>
                    <a href="#" class="btn">Shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="./images/cat3.jpg" alt="">
                <div class="content">
                    <h3>Plants for office</h3>
                    <a href="#" class="btn">Shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="./images/cat4.jpg" alt="">
                <div class="content">
                    <h3>Gift plants</h3>
                    <a href="#" class="btn">Shop now</a>
                </div>
            </div>

        </div>

    </section>
    <!--category section ends-->
    <!--poduct section starts-->
   
<div class="product-section popular-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-head">Popular Products</h2>
                <div class="popular-carousel owl-carousel owl-theme">
                    <?php
                        $db->select('products','*',null,'product_views > 0','product_views DESC',10);
                        $result = $db->getResult();
                        if(count($result) > 0){
                            foreach($result as $row){ ?>
                    <div class="product-grid latest item">
                        <div class="product-image popular">
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
                                <a href="single_product.php?pid=<?php echo $row['product_id']; ?>"><?php echo substr($row['product_title'],0,25),'...'; ?></a>
                            </h3>
                            <div class="price"><?php echo $cur_format; ?> <?php echo $row['product_price']; ?></div>
                        </div>
                    </div>
                    <?php    }
                    }else{
                } ?>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<?php include 'footer.php'; ?>