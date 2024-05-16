<?php
include 'config.php';
if($_GET['search'] == ''){
    header("Location: " . $hostname);
}else {
    $db = new Database();
    $db->select('options','site_title',null,null,null,null);
    $result = $db->getResult();
    if(!empty($result)){ 
        $title = $result[0]['site_title']; 
    }else{ 
        $title = "Shopping Project";
    }
    include 'header.php';  ?>
    
    <div class="product-section content">
        <div class="container">
            <div class="row">
                <div class="col-md-11">
                <h1 class="heading"> <span>Search </span> Results </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1 left-sidebar">
                    <?php
                    $db = new Database();
                    $search = $db->escapeString($_GET['search']);
                    $db->sql('SELECT categories.cat_id,categories.cat_title FROM products 
                    LEFT JOIN categories ON products.product_cat = categories.cat_id 
                    WHERE products.product_title LIKE "%' . $search . '%"');
                    $result = $db->getResult();  ?>
                   
                    
                </div>
                <div class="col-md-10">
                    <?php
                    $limit = 8;
                    $db->select('products','*',null,"product_title LIKE '%{$search}%'",null,$limit);
                    $result3 = $db->getResult();
                    if (count($result3) > 0) {
                        foreach($result3 as $row3) {
                            ?>
                            <div class="col-md-3 col-sm-6">
                                <div class="product-grid">
                                    <div class="product-image">
                                        <a class="image" href="single_product.php?pid=<?php echo $row3['product_id']; ?>">
                                            <img class="pic-1"
                                                 src="product-images/<?php echo $row3['featured_image']; ?>">
                                        </a>
                                        <div class="product-button-group">
                                            <a href="single_product.php?pid=<?php echo $row3['product_id']; ?>"><i
                                                    class="fa fa-eye"></i></a>
                                            <a href="" class="add-to-cart"
                                               data-id="<?php echo $row3['product_id']; ?>"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                            <a href="" class="add-to-wishlist"
                                               data-id="<?php echo $row3['product_id']; ?>"><i
                                                    class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title">
                                            <a href="single_product.php?pid=<?php echo $row3['product_id']; ?>"><?php echo substr($row3['product_title'],0,30).'...'; ?></a>
                                        </h3>
                                        <div class="price"><?php echo $cur_format; ?> <?php echo $row3['product_price']; ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                    } else {
                        ?>
                        <div class="empty-result">!!! Result Not Found !!!</div>
                    <?php } ?>
                    <div class="pagination-outer">
                        <?php
                        echo $db->pagination('products',null,"product_title LIKE '%{$search}%'",$limit);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'footer.php';

} ?>