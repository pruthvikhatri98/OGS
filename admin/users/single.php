<?php
include 'db_config.php';
if (isset($_GET['id']) & !empty($_GET['id'])) {
	$id = $_GET['id'];
	$prodsql = "SELECT * FROM product WHERE prod_id=$id";
	$prodres = mysqli_query($Server_Connection, $prodsql);
	$prodr = mysqli_fetch_assoc($prodres);
}else{
	header('location: index.php');
}


?>
<section id="content">
	<div class="content-blog">
		<div class="container">
			<div class="row">
				<div class="page_header text-center">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							<div class="col-md-5">
								<div class="gal-wrap">
									<div id="gal-slider" class="flexslider">
										<ul class="slides">
											<li><img src="<?php echo $prodr['prod_image']; ?>" class="img-responsive"></li>
										</ul>
									</div>
									
								</div>
							</div>
							<div class="col-md-7 product-single">
								<h2 class="product-single-title no-margin"><?php echo $prodr['prod_name']; ?></h2>
								<div class="space10"></div>
								<div class="price"><span class="regularprice"><?php echo $prodr['price']; ?></span></div>
								<div class="product-quantity">
									<span>Quantity:</span>
									<form><input type="text" placeholder="1"></form>
								</div>
								<div class="shop-btn-wrap">
									<a href="#" class="button btn-small">Add to Cart</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>