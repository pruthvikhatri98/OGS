<?php
require('db_config.php');
require('hader.php');
$query = "SELECT product.*, category.category_name FROM product INNER JOIN category ON product.category_id=1 = category.category_id";
$data = mysqli_query($Server_Connection,$query);
?>
<br>
<section id="category" class="category-page-content page-content">
    <div class="container">
        <div class="row">

            <aside id="leftBar" class="col-md-3 hidden-sm hidden-xs">

                <div id="modNewReleases" class="sidebar-widget">
                    <h4 class="widget-header">New Releases</h4>
                    <div class="widget-body">
                       <?php
                            foreach($data as $row){
                            ?>
                        <div class="new-release-item new-releases-item-first product-item">
                            <div class="row">
                                <div class="col-xs-4">
                                <?php
                                echo "<img id='image".$row['prod_id']."' name='' src='".$row['prod_image']."' heigth='200' width='200' disabled>"; 
                                            ?>
<!--                                    <div class="img"><a href="DEMO-Womens-Shirt-Dress_p_8.html"><img src="assets/images/thumbnails/product_08_thumbnail.jpg" alt="[DEMO] Womens Shirt Dress" class="img-responsive" /></a></div>-->
                                </div>
                                <div class="col-xs-8">
                                    <div class="info">
                                        <div class="name"><a href="DEMO-Womens-Shirt-Dress_p_8.html" class="link"><?php echo $row['prod_name'] ?></a></div>

                                        <div class="price">
                                            <span class="regular-price">Rs.<?php echo $row['price'] ?></span>
                                        </div>
                                        <div class="reviews">
                                            <span class="reviews-stars rating-0"></span> <span class="reviews-count">(0)</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            }?>
                        <!--
<div class="new-release-item product-item">
<div class="row">
<div class="col-xs-4">
<div class="img"><a href="DEMO-Womens-Modern-Blouse_p_7.html"><img src="assets/images/thumbnails/product_07_thumbnail.jpg" alt="[DEMO] Womens Modern Blouse" class="img-responsive" /></a></div>
</div>
<div class="col-xs-8">
<div class="info">
<div class="name"><a href="DEMO-Womens-Modern-Blouse_p_7.html" class="link">[DEMO] Womens Modern Blouse</a></div>

<div class="price">
<span class="regular-price">$3.99</span>
</div>

<div class="reviews">
<span class="reviews-stars rating-5"></span> <span class="reviews-count">(1)</span>
</div>

</div>
</div>
</div>
</div>
<div class="new-release-item product-item">
<div class="row">
<div class="col-xs-4">
<div class="img"><a href="DEMO-Womens-Golf-Shorts_p_6.html"><img src="assets/images/thumbnails/product_06_thumbnail.jpg" alt="[DEMO] Womens Golf Shorts" class="img-responsive" /></a></div>
</div>
<div class="col-xs-8">
<div class="info">
<div class="name"><a href="DEMO-Womens-Golf-Shorts_p_6.html" class="link">[DEMO] Womens Golf Shorts</a></div>

<div class="price">
<span class="regular-price">$12.99</span>
</div>

<div class="reviews">
<span class="reviews-stars rating-0"></span> <span class="reviews-count">(0)</span>
</div>

</div>
</div>
</div>
</div>
<div class="new-release-item product-item">
<div class="row">
<div class="col-xs-4">
<div class="img"><a href="DEMO-Sleeveless-Blouse_p_5.html"><img src="assets/images/thumbnails/product_05_thumbnail.jpg" alt="[DEMO] Sleeveless Blouse" class="img-responsive" /></a></div>
</div>
<div class="col-xs-8">
<div class="info">
<div class="name"><a href="DEMO-Sleeveless-Blouse_p_5.html" class="link">[DEMO] Sleeveless Blouse</a></div>
<div class="status">
<span class="freeshipping">Free Shipping.</span>
</div>
<div class="price">
<span class="regular-price">$34.99</span>
</div>
<div class="reviews">
<span class="reviews-stars rating-0"></span> <span class="reviews-count">(0)</span>
</div>
</div>
</div>
</div>
</div>-->
                    </div>
                </div>
                <div id="modPrice" class="sidebar-widget">
                    <h4 class="widget-header">Browse by Price</h4>
                    <div class="widget-body">
                        <ul class="sidebarUL">
                            <li><a href="products_byprice_1-1-1.html">$0 - $24.99</a></li>
                            <li><a href="products_byprice_2-1-1.html">$25 - $49.99</a></li>
                            <li><a href="products_byprice_3-1-1.html">Over $50</a></li>

                        </ul>
                    </div>
                </div>
            </aside>
            <div class="col-md-9 cat-items-grid">
                <section class="breadcrumnb">
                    <ol itemscope="" itemtype="http://schema.org/BreadcrumbList" class="clearfix">
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <meta itemprop="position" content="1" /><a href="index.html" itemprop="item"><span itemprop="name">Home</span></a></li>
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <meta itemprop="position" content="2" /><a href="Accessories_c_8.html" itemprop="item"><span itemprop="name">Accessories</span></a></li>
                    </ol>
                </section>
                <section class="category-products clearfix">
                    <form action="https://veniam-preview-com.3dcartstores.com/view_category.asp?cat=8" method="post" name="frmsortby" id="frmsortby">
                        <div class="row category-toolbar">
                            <div class="col-sm-6 clearfix">
                                <div class="view-as-btn">
                                    <a href="javascript:void(0);" id="grid-view" title="Grid View" class="current-view">
                                        <div>
                                            <div class="icon-bar"></div>
                                            <div class="icon-bar"></div>
                                            <div class="icon-bar"></div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" id="list-view" title="List View" class="">
                                        <div>
                                            <div class="icon-bar"></div>
                                            <div class="icon-bar"></div>
                                            <div class="icon-bar"></div>
                                        </div>
                                    </a>
                                </div>
                                <h2 class="titles">Products [6]</h2>
                            </div>
                            <div class="col-sm-6">
                                <div class="sort-by">
                                    <span> Sort by:</span>
                                    <select id="sortby" name="sortby">
                                        <option value="0"> Use Default Sorting</option>
                                        <option value="0" selected>Order By</option>
                                        <option value="1">Price: Low to High</option>
                                        <option value="2">Price: High to Low</option>
                                        <option value="3">Name</option>
                                        <option value="4">Newest</option>
                                        <option value="13">Avg Review</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="category-actions clearfix">
                            <div class="paging">
                            </div>
                        </div>
                    </form>
                    <div class="product-items product-items-3">
                        <script class="slick-cloned" type="text/javascript">
                            if (typeof _3d_items_collection === "undefined") {
                                window._3d_items_collection = {};
                            }
                        </script>
                        <?php
                        foreach($data as $row){
                        ?>
                        <div class="product-item" data-catalogid="3" data-ajaxcart="1" data-addcart-callback="addcart_callback" data-categoryid="8">
                            <div class="img">
                                <a href="DEMO-Womens-Comfort-Shorts_p_3.html">
                                    <?php
                            echo "<img id='image".$row['prod_id']."' name='' src='".$row['prod_image']."' heigth='200' width='200' disabled>"; 
                                    ?>
                                    <!--                                    <img src="assets/images/thumbnails/product_03_thumbnail.jpg" alt="[DEMO] Womens Comfort Shorts" class="img-responsive" />-->
                                </a>
                                <button class="quickview" data-toggle="modal">Quick View</button>
                            </div>
                            <div class="product-content">
                                <div class="name">
                                    <a href="DEMO-Sleeveless-Blouse_p_5.html"><?php echo $row['prod_name'] ?></a> &nbsp &nbsp
                                    <a href="DEMO-Sleeveless-Blouse_p_5.html"><?php echo $row['category_name'] ?></a>

                                    <div class="price">
                                        <span class="regular-price"><?php echo $row['prod_name'] ?></span>
                                        <span class="regular-price"><?php echo $row['design_no'] ?></span>
                                    </div>
                                </div>
                                <div class="price">
                                    <span class="regular-price">Rs.<?php echo $row['price'] ?></span>
                                </div>
                                <div class="status">
                                    <span class="availability">Ships in 24hrs</span>
                                    <span class="freeshipping">Free Shipping.</span>
                                </div>
                                <div class="reviews">
                                    <span class="reviews-stars rating-0"></span> <span class="reviews-count">(0)</span>
                                </div>
                                <div class="action">
                                    <a href="view_cart509f.html?quick=1&amp;item_id=3&amp;cat_id=8" class="add-to-cart btn btn-default">
                                        <span class="buyitlink-text">Add To Cart</span>
                                        <span class="ajaxcart-loader icon-spin2 animate-spin"></span>
                                        <span class="ajaxcart-added icon-ok"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php
                        }?>
                        <!--
<div class="product-item" data-catalogid="4" data-ajaxcart="1" data-addcart-callback="addcart_callback" data-categoryid="8">
<div class="img">
<a href="DEMO-Womens-Elegant-Blouse_p_4.html">
<img src="assets/images/thumbnails/product_04_thumbnail.jpg" alt="[DEMO] Womens Elegant Blouse" class="img-responsive" />
</a>

<button class="quickview" data-toggle="modal">Quick View</button>

</div>
<div class="product-content">
<div class="name">
<a href="DEMO-Womens-Elegant-Blouse_p_4.html">[DEMO] Womens Elegant Blouse</a>
</div>
<div class="price">

<span class="regular-price">$14.99</span>

</div>
<div class="status">

<span class="availability">In Stock.</span>


<span class="freeshipping">Free Shipping.</span>

</div>
<div class="reviews">


<span class="reviews-stars rating-0"></span> <span class="reviews-count">(0)</span>


</div>


<div class="action">
<a href="view_cart509f.html?quick=1&amp;item_id=4&amp;cat_id=8" class="add-to-cart btn btn-default">
<span class="buyitlink-text">Add To Cart</span>
<span class="ajaxcart-loader icon-spin2 animate-spin"></span>
<span class="ajaxcart-added icon-ok"></span>
</a>
</div>


</div>
</div>

<div class="product-item" data-catalogid="5" data-ajaxcart="1" data-addcart-callback="addcart_callback" data-categoryid="8">
<div class="img">
<a href="DEMO-Sleeveless-Blouse_p_5.html">
<img src="assets/images/thumbnails/product_05_thumbnail.jpg" alt="[DEMO] Sleeveless Blouse" class="img-responsive" />
</a>

<button class="quickview" data-toggle="modal">Quick View</button>

</div>
<div class="product-content">
<div class="name">
<a href="DEMO-Sleeveless-Blouse_p_5.html">[DEMO] Sleeveless Blouse</a>
</div>
<div class="price">

<span class="regular-price">$34.99</span>

</div>
<div class="status">

<span class="availability">In Stock.</span>


<span class="freeshipping">Free Shipping.</span>

</div>
<div class="reviews">


<span class="reviews-stars rating-0"></span> <span class="reviews-count">(0)</span>


</div>


<div class="action">
<a href="view_cart509f.html?quick=1&amp;item_id=5&amp;cat_id=8" class="add-to-cart btn btn-default">
<span class="buyitlink-text">Add To Cart</span>
<span class="ajaxcart-loader icon-spin2 animate-spin"></span>
<span class="ajaxcart-added icon-ok"></span>
</a>
</div>


</div>
</div>

<div class="product-item" data-catalogid="6" data-ajaxcart="1" data-addcart-callback="addcart_callback" data-categoryid="8">
<div class="img">
<a href="DEMO-Womens-Golf-Shorts_p_6.html">
<img src="assets/images/thumbnails/product_06_thumbnail.jpg" alt="[DEMO] Womens Golf Shorts" class="img-responsive" />
</a>

<button class="quickview" data-toggle="modal">Quick View</button>

</div>
<div class="product-content">
<div class="name">
<a href="DEMO-Womens-Golf-Shorts_p_6.html">[DEMO] Womens Golf Shorts</a>
</div>
<div class="price">

<span class="regular-price">$12.99</span>

</div>
<div class="status">

<span class="availability">Back Order.</span>

</div>
<div class="reviews">


<span class="reviews-stars rating-0"></span> <span class="reviews-count">(0)</span>


</div>


<div class="action">
<a href="DEMO-Womens-Golf-Shorts_p_6.html?quick=1&amp;item_id=6&amp;cat_id=8" class="add-to-cart btn btn-default">
<span class="buyitlink-text"> Select Options</span>
<span class="ajaxcart-loader icon-spin2 animate-spin"></span>
<span class="ajaxcart-added icon-ok"></span>
</a>
</div>


</div>
</div>

<div class="product-item" data-catalogid="7" data-ajaxcart="1" data-addcart-callback="addcart_callback" data-categoryid="8">
<div class="img">
<a href="DEMO-Womens-Modern-Blouse_p_7.html">
<img src="assets/images/thumbnails/product_07_thumbnail.jpg" alt="[DEMO] Womens Modern Blouse" class="img-responsive" />
</a>

<button class="quickview" data-toggle="modal">Quick View</button>

</div>
<div class="product-content">
<div class="name">
<a href="DEMO-Womens-Modern-Blouse_p_7.html">[DEMO] Womens Modern Blouse</a>
</div>
<div class="price">

<span class="regular-price">$3.99</span>

</div>
<div class="status">

<span class="availability">In Stock.</span>

</div>
<div class="reviews">


<span class="reviews-stars rating-5"></span> <span class="reviews-count">(1)</span>


</div>


<div class="action">
<a href="view_cart509f.html?quick=1&amp;item_id=7&amp;cat_id=8" class="add-to-cart btn btn-default">
<span class="buyitlink-text">Add To Cart</span>
<span class="ajaxcart-loader icon-spin2 animate-spin"></span>
<span class="ajaxcart-added icon-ok"></span>
</a>
</div>


</div>
</div>

<div class="product-item" data-catalogid="8" data-ajaxcart="1" data-addcart-callback="addcart_callback" data-categoryid="8">
<div class="img">
<a href="DEMO-Womens-Shirt-Dress_p_8.html">
<img src="assets/images/thumbnails/product_08_thumbnail.jpg" alt="[DEMO] Womens Shirt Dress" class="img-responsive" />
</a>

<button class="quickview" data-toggle="modal">Quick View</button>

</div>
<div class="product-content">
<div class="name">
<a href="DEMO-Womens-Shirt-Dress_p_8.html">[DEMO] Womens Shirt Dress</a>
</div>
<div class="price">


<del class="regular-price">$43.99</del>
<span class="sale-price">$38.99</span>
<span class="on-sale-badge">Sale</span>

</div>
<div class="status">

<span class="availability">In Stock.</span>

</div>
<div class="reviews">


<span class="reviews-stars rating-0"></span> <span class="reviews-count">(0)</span>


</div>


<div class="action">
<a href="view_cart509f.html?quick=1&amp;item_id=8&amp;cat_id=8" class="add-to-cart btn btn-default">
<span class="buyitlink-text">Add To Cart</span>
<span class="ajaxcart-loader icon-spin2 animate-spin"></span>
<span class="ajaxcart-added icon-ok"></span>
</a>
</div>


</div>
</div>
-->
                    </div>
                    <div class="bottom_breadcrumb">
                        <div class="paging">
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>


<?php
require('footer.php');
?>s