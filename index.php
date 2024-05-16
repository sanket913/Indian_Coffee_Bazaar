<?php include 'config.php';  //include config
// set dynamic title
$db = new Database();
$db->select('options', 'site_title', null, null, null, null);
$result = $db->getResult();

if (!empty($result)) {
    $title = $result[0]['site_title'];
} else {
    $title = "Shopping Project";
}
// include header 
include 'header.php'; ?>
<section class="home" id="home">
    <?php

    if (isset($_SESSION['status'])) {
    ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong> <?php echo  $_SESSION['status'] ?>
        </div>
    <?php
        unset($_SESSION['status']);
    }
    ?>

    <div class="content" >
        <h3>fresh coffee in the morning</h3>
        <p>“I love my Saturday coffee the way I used to love Saturday morning cartoons.”</p>
        <a href="#menu" class="btn ">get yours now</a>

    </div>

</section>
<section class="about" id="about" data-aos="zoom-in" >

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="images/about1.jpeg" alt="">
        </div>

        <div class="content">
            <h3>what makes our coffee special?</h3>
            <p class="text">For a pristine cuppa, the Specialty Coffee Association (SCA) has preparation standards
                for everything
                from water temperature and quality to specific ratios that make a “perfect” cup of coffee, from the
                time the beans are harvested until they reach your cup. <br><span class="moreText"> Arabica is the
                    most popular type of coffee, hands down. Depending on who you ask, many coffee
                    enthusiasts prefer using Arabica beans due to its taste. Typically used for black coffee,
                    Arabica
                    beans have a sweeter, more complex flavor that you can drink straight. <br>Great coffee starts
                    with the producer whose family likely has spent generations perfecting their approach to farming
                    the highest quality coffee possible. Grown in select altitudes and climates and nursed for years
                    before the first harvest, the producer who creates specialty coffee devotes his or her life to
                    refining and perfecting the highest quality coffee on the planet. For them, it is quality not
                    quantity that is the most important consideration.</span></p>
            <button class="read-more-btn btn">Read More</button>

        </div>

    </div>

</section>
<div class="product-section " data-aos="zoom-in">
    <div class="container" id="menu">
        <div class="row">
            <div class="col-md-12">
                <h1 class="heading"> <span>Our</span> Menu </h1>
                <div class="popular-carousel owl-carousel owl-theme">
                    <?php
                    $db->select('products', '*', null, 'product_views >= 0', 'product_views DESC', 20);
                    $result = $db->getResult();
                    if (count($result) > 0) {
                        foreach ($result as $row) { ?>
                            <div class="product-grid latest item">
                                <div class="product-image popular">
                                    <a class="image" href="single_product.php?pid=<?php echo $row['product_id']; ?>">
                                        <img class="pic-1" src="product-images/<?php echo $row['featured_image']; ?>">
                                    </a>
                                    <div class="product-button-group">
                                        <a href="single_product.php?pid=<?php echo $row['product_id']; ?>"><i class="fa fa-eye"></i></a>
                                        <a href="" class="add-to-cart" data-id="<?php echo $row['product_id']; ?>"><i class="fa fa-shopping-cart"></i></a>
                                        <a href="" class="add-to-wishlist" data-id="<?php echo $row['product_id']; ?>"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="title">
                                        <a href="single_product.php?pid=<?php echo $row['product_id']; ?>"><?php echo substr($row['product_title'], 0, 25), '...'; ?></a>
                                    </h3>
                                    <div class="price"><?php echo $cur_format; ?> <?php echo $row['product_price']; ?></div>
                                </div>
                            </div>
                    <?php    }
                    } else {
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="review" id="review">

    <h1 class="heading" data-aos="zoom-in" > customer's <span>review</span> </h1>

    <div class="box-container">

        <div class="box" data-aos="flip-left">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Confident, balanced, bright. Lilac, cocoa nib, red plum, sandalwood, maple syrup in aroma and cup.
                Richly sweet structure with juicy, vibrant acidity; very full, syrupy-smooth mouthfeel. Crisp,
                smooth finish centered around notes of cocoa nib and sandalwood with lilac and plum undertones.</p>
            <img src="images/member2.jpg" class="user" alt="">
            <h3>Narendra Modi</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box" data-aos="zoom-out">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Gently fruit-toned, sweetly earthy. Golden raisin, hazelnut, freesia-like flowers, cedar, fresh
                leather in aroma and cup. Sweet-savory with round, fruity acidity; crisp, velvety mouthfeel. Finish
                consolidates to notes of golden raisin and fresh leather.</p>
            <img src="images/member-3.png" class="user" alt="">
            <h3>Mukesh Ambani</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box" data-aos="flip-right">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Complex, multi-layered, richly floral-toned. Lilac, rose hips, tangerine zest, Marcona almond, cocoa
                nib in aroma and cup. Balanced, high-toned structure with lyrically vibrant acidity; plush, very
                syrupy mouthfeel. Long, lingering, flavor-saturated finish that carries through on the promise of
                the cup.</p>
            <img src="images/member-1.jpg" class="user" alt="">
            <h3>Christanio Ronaldo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star alt"></i>
            </div>
        </div>
        <div class="box" data-aos="zoom-out">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Gently fruit-toned, sweetly earthy. Golden raisin, hazelnut, freesia-like flowers, cedar, fresh
                leather in aroma and cup. Sweet-savory with round, fruity acidity; crisp, velvety mouthfeel. Finish
                consolidates to notes of golden raisin and fresh leather.</p>
            <img src="images/member7.jpg" class="user" alt="">
            <h3>Shaleen Shukla</h3>

            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        <div class="box" data-aos="flip-left">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Really happy to order coffee from Indian Coffee Bazaar. The healthiest coffee in the world in 2022 For many of us, coffee is a morning ritual and people cannot live without having a cup of coffee every day. The Cofee was top notch&#128076; , great value of money .<br> Looking forward to place another order.</p>
            <img src="images/member5.jpg" class="user" alt="">
            <h3>Mohit Soni</h3>
            

            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
    </div>




</section>


<section class="contact" id="contact">

    <h1 class="heading" data-aos="zoom-in"> <span>contact</span> us </h1>

    <div class="row" data-aos="zoom-in">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.33343753207!2d73.14238831483875!3d22.30322594842494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc884e35199db%3A0x72c095032ab7f9fb!2sPanchamrut%20Milk%20Center!5e0!3m2!1sen!2sin!4v1632233765133!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        <form action="contact.php" method="POST">
            <h3>get in touch</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="Name" maxlength="20" name="name" required autocomplete="off">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="Email" name="email" required autocomplete="off">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" placeholder="Number" name="monumber" required autocomplete="off" minlength="10" maxlength="10">
            </div>
            <input type="submit" value="contact now" class="btn" onclick="s()">
        </form>

    </div>

</section>

<?php include 'footer.php'; ?>