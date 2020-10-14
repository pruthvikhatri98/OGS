<?php
require('db_config.php');
require('hader.php');
$query = "SELECT product.*, category.category_name FROM product INNER JOIN category ON product.category_id = category.category_id";
$data = mysqli_query($Server_Connection,$query);
?>
<!doctype html>
<html class="no-js" lang="en">

    <!-- Mirrored from veniam-preview-com.3dcartstores.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Jul 2020 10:15:07 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->



    <body class="home-page leftbar rightbar qv-enabled not-logged-in" data-currency="$" data-decimal="2">

        <section id="home" class="home-page-content page-content">
            <section class="homepage-slider">
                <div class="container">

                    <div class="homeCarousel flexslider" data-animation="fade" data-slideshowspeed="10000">
                        <ul class="slides">

                            <li><a href="patiyala.php"><img src="image/Kessi Patiyala 1.jpeg"/></a></li>

                        </ul>
                    </div>

                </div>
            </section>


            <section class="products-section">
                <div class="container">
                    <h2 class="header-specials">Featured Products</h2>
                    <div class="product-carousel flexslider">

                        <ul class="product-items slides" data-productcols="4">
                            <?php
                            foreach($data as $row){
                            ?>
                            <script class="slick-cloned" type="text/javascript">
                                if (typeof _3d_items_collection === "undefined") {
                                    window._3d_items_collection = {};
                                }

                            </script>
                            <li>
                                <div class="product-item" data-catalogid="5" data-ajaxcart="1" data-addcart-callback="addcart_callback" data-categoryid="0">
                                    <div class="img">
                                        <a href="DEMO-Sleeveless-Blouse_p_5.html">
                                            <?php
                                echo "<img id='image".$row['prod_id']."' name='' src='".$row['prod_image']."' heigth='200' width='200' disabled>"; 
                                            ?>
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
                                            <span class="availability">In Stock.</span>
                                            <span class="freeshipping">Free Shipping.</span>
                                        </div>
                                        <div class="reviews">
                                            <span class="reviews-stars rating-0"></span> <span class="reviews-count">(0)</span>
                                        </div>
                                        <div class="action">
                                            <a href="view_cart509f.html?quick=1&amp;item_id=5&amp;cat_id=0" class="add-to-cart btn btn-default">
                                                <span class="buyitlink-text">Add To Cart</span>
                                                <span class="ajaxcart-loader icon-spin2 animate-spin"></span>
                                                <span class="ajaxcart-added icon-ok"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php
                            }?>
                        </ul>

                    </div>
                </div>
            </section>

            <div id="modNewReleases" class="products-section">
                <div class="container">
                    <h2 class="header-specials">New Releases</h2>
                    <div class="product-carousel flexslider">
                        <ul class="product-items slides" data-productcols="[product-cols-number]">
                            <?php
                            foreach($data as $row){
                            ?>
                            <script class="slick-cloned" type="text/javascript">
                                if (typeof _3d_items_collection === "undefined") {
                                    window._3d_items_collection = {};
                                }

                            </script>
                            <li>
                                <div class="product-item" data-catalogid="5" data-ajaxcart="1" data-addcart-callback="addcart_callback" data-categoryid="0">
                                    <div class="img">
                                        <a href="DEMO-Sleeveless-Blouse_p_5.html">
                                            <?php
                                echo "<img class='imagesize' id='image".$row['prod_id']."' name='' src='".$row['prod_image']."'disabled>"; 
                                            ?>
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
                                            <span class="availability">In Stock.</span>
                                            <span class="freeshipping">Free Shipping.</span>
                                        </div>
                                        <div class="reviews">
                                            <span class="reviews-stars rating-0"></span> <span class="reviews-count">(0)</span>
                                        </div>
                                        <div class="action">
                                            <a href="view_cart509f.html?quick=1&amp;item_id=5&amp;cat_id=0" class="add-to-cart btn btn-default">
                                                <span class="buyitlink-text">Add To Cart</span>
                                                <span class="ajaxcart-loader icon-spin2 animate-spin"></span>
                                                <span class="ajaxcart-added icon-ok"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php
                            }?>

                            <!--
<li>
<div class="product-item" data-catalogid="7" data-ajaxcart="1" data-addcart-callback="addcart_callback" data-categoryid="[cat_id]">
<div class="img">
<a href="DEMO-Womens-Modern-Blouse_p_7.html">
<img src="assets/images/thumbnails/product_07_thumbnail.jpg" alt="[imagecaption1]" class="img-responsive" />
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
<a href="view_cart509f.html?quick=1&amp;item_id=7&amp;cat_id=[cat_id]" class="add-to-cart btn btn-default">
<span class="buyitlink-text">Add To Cart</span>
<span class="ajaxcart-loader icon-spin2 animate-spin"></span>
<span class="ajaxcart-added icon-ok"></span>
</a>
</div>


<div id="divPrevMessage_7" style="display: none; margin-bottom:15px;">
<em>You previously purchased this item on&nbsp;<span id="spnPrevPurchDate_7"></span></em>
<br /><a href="#" id="lnkPrevPurchOrderTracking_7">View this order</a>
</div>
<script>
if ("[userid_enc]" != "") {
setTimeout("checkPrevPurch('[userid_enc]','7');", 500);
}

</script>

</div>
</div>

<script>
function checkPrevPurch(userId, caId) {

jQuery.ajax({
url: 'ajaxPrevPurch.asp',
dataType: 'json',
type: 'get',
data: 'cu=' + userId + '&ca=' + caId,
cache: false,
success: function(strResult) {
if (strResult.trackinglink != '') {
jQuery("#lnkPrevPurchOrderTracking_" + String(caId)).attr("href", strResult.trackinglink);
jQuery("#divPrevMessage_" + String(caId)).css({
"display": "block"
});
jQuery("#spnPrevPurchDate_" + String(caId)).html(strResult.purchaseDate);
} else {
jQuery("#divPrevMessage_" + String(caId)).css({
"display": "none"
});
}
},
error: jQuery("#divPrevMessage_" + String(caId)).css({
"display": "none"
})

});
}

</script>

</li>
<li>
<div class="product-item" data-catalogid="6" data-ajaxcart="1" data-addcart-callback="addcart_callback" data-categoryid="[cat_id]">
<div class="img">
<a href="DEMO-Womens-Golf-Shorts_p_6.html">
<img src="assets/images/thumbnails/product_06_thumbnail.jpg" alt="[imagecaption1]" class="img-responsive" />
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

<span class="availability">In Stock.</span>


</div>
<div class="reviews">


<span class="reviews-stars rating-0"></span> <span class="reviews-count">(0)</span>


</div>


<div class="action">
<a href="DEMO-Womens-Golf-Shorts_p_6.html?quick=1&amp;item_id=6&amp;cat_id=[cat_id]" class="add-to-cart btn btn-default">
<span class="buyitlink-text">Select Options</span>
<span class="ajaxcart-loader icon-spin2 animate-spin"></span>
<span class="ajaxcart-added icon-ok"></span>
</a>
</div>


<div id="divPrevMessage_6" style="display: none; margin-bottom:15px;">
<em>You previously purchased this item on&nbsp;<span id="spnPrevPurchDate_6"></span></em>
<br /><a href="#" id="lnkPrevPurchOrderTracking_6">View this order</a>
</div>
<script>
if ("[userid_enc]" != "") {
setTimeout("checkPrevPurch('[userid_enc]','6');", 500);
}

</script>

</div>
</div>

<script>
function checkPrevPurch(userId, caId) {

jQuery.ajax({
url: 'ajaxPrevPurch.asp',
dataType: 'json',
type: 'get',
data: 'cu=' + userId + '&ca=' + caId,
cache: false,
success: function(strResult) {
if (strResult.trackinglink != '') {
jQuery("#lnkPrevPurchOrderTracking_" + String(caId)).attr("href", strResult.trackinglink);
jQuery("#divPrevMessage_" + String(caId)).css({
"display": "block"
});
jQuery("#spnPrevPurchDate_" + String(caId)).html(strResult.purchaseDate);
} else {
jQuery("#divPrevMessage_" + String(caId)).css({
"display": "none"
});
}
},
error: jQuery("#divPrevMessage_" + String(caId)).css({
"display": "none"
})

});
}

</script>

</li>
<li>
<div class="product-item" data-catalogid="5" data-ajaxcart="1" data-addcart-callback="addcart_callback" data-categoryid="[cat_id]">
<div class="img">
<a href="DEMO-Sleeveless-Blouse_p_5.html">
<img src="assets/images/thumbnails/product_05_thumbnail.jpg" alt="[imagecaption1]" class="img-responsive" />
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
<a href="view_cart509f.html?quick=1&amp;item_id=5&amp;cat_id=[cat_id]" class="add-to-cart btn btn-default">
<span class="buyitlink-text">Add To Cart</span>
<span class="ajaxcart-loader icon-spin2 animate-spin"></span>
<span class="ajaxcart-added icon-ok"></span>
</a>
</div>


<div id="divPrevMessage_5" style="display: none; margin-bottom:15px;">
<em>You previously purchased this item on&nbsp;<span id="spnPrevPurchDate_5"></span></em>
<br /><a href="#" id="lnkPrevPurchOrderTracking_5">View this order</a>
</div>
<script>
if ("[userid_enc]" != "") {
setTimeout("checkPrevPurch('[userid_enc]','5');", 500);
}

</script>

</div>
</div>

<script>
function checkPrevPurch(userId, caId) {

jQuery.ajax({
url: 'ajaxPrevPurch.asp',
dataType: 'json',
type: 'get',
data: 'cu=' + userId + '&ca=' + caId,
cache: false,
success: function(strResult) {
if (strResult.trackinglink != '') {
jQuery("#lnkPrevPurchOrderTracking_" + String(caId)).attr("href", strResult.trackinglink);
jQuery("#divPrevMessage_" + String(caId)).css({
"display": "block"
});
jQuery("#spnPrevPurchDate_" + String(caId)).html(strResult.purchaseDate);
} else {
jQuery("#divPrevMessage_" + String(caId)).css({
"display": "none"
});
}
},
error: jQuery("#divPrevMessage_" + String(caId)).css({
"display": "none"
})

});
}

</script>

</li>
-->
                        </ul>
                    </div>
                </div>
            </div>

            <section class="category-footer content-section">
                <div class="container">
                    <div class="content tc-pagebuilder"><br class="innova">
                        <div><span style="font-weight: bold; font-size: 20px;">Welcome To Pushpak</span>
                            <div><br></div>
                            <div>We Sale the all type of dress materials with good quality.
                            We have variety of materials in dresses like Cotton, Semi Cotton, Satin, Chanderi, Reyon, etc. We also Sale readymade suits and we have also many variety in readymade suits like Plazo, Garara, Crop-Top, Patiyala, etc.
                            We have a range in dress materials between 200-1500 and also a range in readymade suits between 800-2500.We don't compromise in quality because our moto is Customer is God. We also give home delivery to our customers. If you have any query please contact us we will give you response as soon as posible. &nbsp;</div>
                        </div>
                    </div>
                </div>
            </section>

        </section>
        <?php
        require('footer.php');
        ?>
        
        <nav id="mobile-menu" class="mobile-menu">
            <div class="mobile-menu-inner">
                <div class="mobile-menu-close">
                    <a href="#"></a>
                </div>
                <div class="mobile-menu-widget">
                    <h3>Menu Links</h3>
                    <div id="mobile-menulinks"></div>
                </div>
                <div class="mobile-menu-widget">
                    <h3>Categories</h3>
                    <div id="mobile-categories"></div>
                </div>
            </div>
        </nav>

        <aside id="qv-modal" class="qv qv-modal modal" tabindex="-1" role="dialog" data-catalogid="" data-price="0" data-sku="" data-backdrop="true">
            <div class="modal-dialog" role="document">
                <div class="modal-vcenter">
                    <div class="qv-loader">
                        <span class="mailing-btn-load icon-spin2 animate-spin"></span>
                    </div>
                    <div class="product-item modal-content">
                        <button type="button" class="qv-close close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <iframe id="qvIframe" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </aside>
        <script type="text/javascript" charset="utf-8">
            jQuery(function() {

                // Homepage Carousel
                jQuery('.homeCarousel').flexslider({
                    animation: jQuery('.homeCarousel').attr('data-animation'),
                    slideshow: true,
                    slideshowSpeed: jQuery('.homeCarousel').attr('data-slideshowspeed'),
                    controlNav: false,
                    keyboard: false
                });

                // Product Scroll
                // store the slider in a local variable
                var $window = jQuery(window),
                    flexslider = {
                        vars: {}
                    };

                // tiny helper function to add breakpoints
                function getGridSize() {
                    var proCol = jQuery(".product-carousel > ul.slides").attr("data-productcols");
                    return (window.innerWidth <= 567) ? 1 :
                    (window.innerWidth < 992) ? 2 : proCol;
                }

                $window.on("load", function() {
                    jQuery('.product-carousel').flexslider({
                        animation: "slide",
                        controlNav: false,
                        keyboard: false,
                        itemWidth: 210,
                        itemMargin: 0,
                        minItems: getGridSize(), // use function to pull in initial value
                        maxItems: getGridSize() // use function to pull in initial value

                    });

                    setTimeout(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 100);
                });

                // check grid size on resize event
                $window.resize(function() {
                    var gridSize = getGridSize();

                    flexslider.vars.minItems = gridSize;
                    flexslider.vars.maxItems = gridSize;

                });
                jQuery(document).ready(function() {
                    setTimeout(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 1000);
                });

            }());
        </script>
    </body>
</html>
