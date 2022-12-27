<?php session_start(); ?>
<?php
require("config.php");
require("models/db.php");
require("models/products.php");
require("models/protypes.php");
require("models/manufactures.php");

// Products
$Products = new Products;
$getAllProducts = $Products->getAllProducts();
$getAllProductsNew = $Products->getAllProductsNew();
$getProductsLimit3 = $Products->getProductsLimit3();
$getProductsLimit6 = $Products->getProductsLimit6();
$getProductsLimit66 = $Products->getProductsLimit66();
$getProductsLimit12 = $Products->getProductsLimit12();
$getAllProductsSelling = $Products->getAllProductsSelling();

// Protypes
$Protypes = new Protypes;
$getAllProtypes = $Protypes->getAllProtypes();
?>

<!-- HEADER -->
<?php include("header.php"); ?>
<!-- /HEADER -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Thông tin</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="first-name" placeholder="Họ">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last-name" placeholder="Tên">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Địa chỉ">
							</div>
							<!-- <div class="form-group">
								<input class="input" type="text" name="city" placeholder="Thành Phố">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="country" placeholder="Quốc Gia">
							</div> -->
							<!-- <div class="form-group">
								<input class="input" type="text" name="zip-code" placeholder="ZIP Code">
							</div> -->
							<div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="Số điện thoại">
							</div>
							<div class="form-group">
								<div class="input-checkbox">
									<input type="checkbox" id="create-account">
									<label for="create-account">
										<span></span>
										Đăng ký tài khoản?
									</label>
									<div class="caption">
										
										<input class="input" type="password" name="password" placeholder="Enter Your Password">
									</div>
								</div>
							</div>
						</div>
						<!-- /Billing Details -->

						<!-- Shiping Details -->
						<!-- <div class="shiping-details">
							<div class="section-title">
								<h3 class="title">Shiping address</h3>
							</div>
							<div class="input-checkbox">
								<input type="checkbox" id="shiping-address">
								<label for="shiping-address">
									<span></span>
									Ship to a diffrent address?
								</label>
								<div class="caption">
									<div class="form-group">
										<input class="input" type="text" name="first-name" placeholder="First Name">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="last-name" placeholder="Last Name">
									</div>
									<div class="form-group">
										<input class="input" type="email" name="email" placeholder="Email">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="address" placeholder="Address">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="city" placeholder="City">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="country" placeholder="Country">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="zip-code" placeholder="ZIP Code">
									</div>
									<div class="form-group">
										<input class="input" type="tel" name="tel" placeholder="Telephone">
									</div>
								</div>
							</div>
						</div> -->
						<!-- /Shiping Details -->

						<!-- Order notes -->
						<div class="order-notes">
							<textarea class="input" placeholder="Ghi chú"></textarea>
						</div>
						<!-- /Order notes -->
					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Đơn hàng của bạn</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>Sản phẩm</strong></div>
								<div><strong>Giá</strong></div>
							</div>

							<div class="order-products">
								<?php $totalP = 0;
								if(isset($_SESSION['cart'])): ?>
								<?php foreach($_SESSION['cart'] as $key=>$value): 
								foreach($getAllProducts as $p):
								if($p['id'] == $key):?>
								<!-- product -->
								<div class="order-col">
									<div><?= $value ?> <?php echo $p['name']; ?></div>
									<?php if($p['feature'] == 1): ?>
										<div><?php echo number_format($p['price']); ?>VNĐ</div>
										<?php $totalP += ($p['price'] ) * $value; ?>
									<?php else : ?>
										<div><?php echo number_format($p['price']); ?>VNĐ</div>
										<?php $totalP += ($p['price']) * $value; ?>
									<?php endif; ?>

								</div>
								<?php endif; endforeach; endforeach; endif;?>
								<!-- /product -->
							</div>	

							<div class="order-col">
								<div>Shipping</div>
								<div><strong>Miễn phí</strong></div>
							</div>
							<div class="order-col">
								<div><strong>Tổng</strong></div>
								<div><strong class="order-total"><?php echo number_format($totalP); ?>VNĐ</strong></div>
							</div>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1">
								<label for="payment-1">
									<span></span>
									Thanh toán bằng thẻ
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-2">
								<label for="payment-2">
									<span></span>
									Thanh toán bằng ví điện tử
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-3">
								<label for="payment-3">
									<span></span>
									Thanh toán khi nhận hàng
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								Tôi đã đọc và chấp nhận <a href="#">điều khoản</a>
							</label>
						</div>
						<a href="#" class="primary-btn order-submit">Place order</a>
					</div>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- FOOTER -->
		<?php include("footer.php"); ?>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
