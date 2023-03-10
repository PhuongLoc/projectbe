                    <!-- Products tab & slick -->
                    <div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab7" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
										<?php foreach($getAllProductsSelling as $value1): 
											foreach($getAllProtypes as $value2): 
												if($value1['type_id'] == $value2['type_id']): ?>
										<div class="product">
											<div class="product-img">
												
												<img style="height: 200px;" src="./img/<?php echo $value1['image']; ?>" alt="">
												<div class="product-label">
												    <span class="new">NEW</span>
										     	</div>
											</div>
											<div class="product-body">
												<p class="product-category"><?php echo $value2['type_name']; ?></p>
												<h3 class="product-name"><a href="product.php?id=<?php echo $value1['id'] ?>"><?php echo $value1['name']; ?></a></h3>
                                                <?php if($value1['feature'] == 1): ?>
                                                    <h4 class="product-price"> <?php echo number_format($value1['price']); ?>VNĐ</h4>
                                                <?php else: ?>
                                                    <h4 class="product-price"> <?php echo number_format($value1['price']); ?>VNĐ</h4>
                                                <?php endif; ?>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><a href="product.php?id=<?php echo $value1['id'] ?>"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></a></button>
												</div>
											</div>
											<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="index.php?id=<?php echo $value1['id'] ?>">add to cart</a></button>
											</div>
										</div>
										<?php endif; endforeach; endforeach;?>
										<!-- /product -->
									</div>														
								</div>                         
								<!-- /tab -->                       

								<!-- tab -->
								<div id="tab8" class="tab-pane">
									<div class="products-slick">
										<!-- product -->
										<?php
										$getAllProductsByTypeIdSelling = $Products->getAllProductsByTypeIdSelling(1);
										 foreach($getAllProductsByTypeIdSelling as $value1): 
											foreach($getAllProtypes as $value2): 
												if($value1['type_id'] == $value2['type_id']): ?>
										<div class="product">
											<div class="product-img">
												
												<img style="height: 200px;" src="./img/<?php echo $value1['image']; ?>" alt="">
												<div class="product-label">
												    <span class="new">NEW</span>
										     	</div>
											</div>
											<div class="product-body">
												<p class="product-category"><?php echo $value2['type_name']; ?></p>
												<h3 class="product-name"><a href="product.php?id=<?php echo $value1['id'] ?>"><?php echo $value1['name']; ?></a></h3>
                                                <?php if($value1['feature'] == 1): ?>
                                                    <h4 class="product-price"> <?php echo number_format($value1['price']); ?>VNĐ</h4>
                                                <?php else: ?>
                                                    <h4 class="product-price"> <?php echo number_format($value1['price']); ?>VNĐ</h4>
                                                <?php endif; ?>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><a href="product.php?id=<?php echo $value1['id'] ?>"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></a></button>
												</div>
											</div>
											<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="index.php?id=<?php echo $value1['id'] ?>">add to cart</a></button>
											</div>
										</div>
										<?php endif; endforeach; endforeach;?>
										<!-- /product -->
									</div>														
								</div>                         
								<!-- /tab -->       
								
								<!-- tab -->
								<div id="tab9" class="tab-pane">
									<div class="products-slick">
										<!-- product -->
										<?php
										$getAllProductsByTypeIdSelling = $Products->getAllProductsByTypeIdSelling(2);
										 foreach($getAllProductsByTypeIdSelling as $value1): 
											foreach($getAllProtypes as $value2): 
												if($value1['type_id'] == $value2['type_id']): ?>
										<div class="product">
											<div class="product-img">
												
												<img style="height: 200px;" src="./img/<?php echo $value1['image']; ?>" alt="">
												<div class="product-label">
												    <span class="new">NEW</span>
										     	</div>
											</div>
											<div class="product-body">
												<p class="product-category"><?php echo $value2['type_name']; ?></p>
												<h3 class="product-name"><a href="product.php?id=<?php echo $value1['id'] ?>"><?php echo $value1['name']; ?></a></h3>
                                                <?php if($value1['feature'] == 1): ?>
                                                    <h4 class="product-price"> <?php echo number_format($value1['price']); ?>VNĐ</h4>
                                                <?php else: ?>
                                                    <h4 class="product-price"> <?php echo number_format($value1['price']); ?>VNĐ</h4>
                                                <?php endif; ?>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><a href="product.php?id=<?php echo $value1['id'] ?>"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></a></button>
												</div>
											</div>
											<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="index.php?id=<?php echo $value1['id'] ?>">add to cart</a></button>
											</div>
										</div>
										<?php endif; endforeach; endforeach;?>
										<!-- /product -->
									</div>														
								</div>                         
								<!-- /tab -->     

								<!-- tab -->
								<div id="tab10" class="tab-pane">
									<div class="products-slick">
										<!-- product -->
										<?php
										$getAllProductsByTypeIdSelling = $Products->getAllProductsByTypeIdSelling(3);
										 foreach($getAllProductsByTypeIdSelling as $value1): 
											foreach($getAllProtypes as $value2): 
												if($value1['type_id'] == $value2['type_id']): ?>
										<div class="product">
											<div class="product-img">
												
												<img style="height: 200px;" src="./img/<?php echo $value1['image']; ?>" alt="">
												<div class="product-label">
												    <span class="new">NEW</span>
										     	</div>
											</div>
											<div class="product-body">
												<p class="product-category"><?php echo $value2['type_name']; ?></p>
												<h3 class="product-name"><a href="product.php?id=<?php echo $value1['id'] ?>"><?php echo $value1['name']; ?></a></h3>
                                                <?php if($value1['feature'] == 1): ?>
                                                    <h4 class="product-price"> <?php echo number_format($value1['price']); ?>VNĐ</h4>
                                                <?php else: ?>
                                                    <h4 class="product-price"> <?php echo number_format($value1['price']); ?>VNĐ</h4>
                                                <?php endif; ?>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><a href="product.php?id=<?php echo $value1['id'] ?>"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></a></button>
												</div>
											</div>
											<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="index.php?id=<?php echo $value1['id'] ?>">add to cart</a></button>
											</div>
										</div>
										<?php endif; endforeach; endforeach;?>
										<!-- /product -->
									</div>														
								</div>                         
								<!-- /tab -->     

								<!-- tab -->
								<div id="tab11" class="tab-pane">
									<div class="products-slick">
										<!-- product -->
										<?php
										$getAllProductsByTypeIdSelling = $Products->getAllProductsByTypeIdSelling(4);
										 foreach($getAllProductsByTypeIdSelling as $value1): 
											foreach($getAllProtypes as $value2): 
												if($value1['type_id'] == $value2['type_id']): ?>
										<div class="product">
											<div class="product-img">
												
												<img style="height: 200px;" src="./img/<?php echo $value1['image']; ?>" alt="">
												<div class="product-label">
												    <span class="new">NEW</span>
										     	</div>
											</div>
											<div class="product-body">
												<p class="product-category"><?php echo $value2['type_name']; ?></p>
												<h3 class="product-name"><a href="product.php?id=<?php echo $value1['id'] ?>"><?php echo $value1['name']; ?></a></h3>
                                                <?php if($value1['feature'] == 1): ?>
                                                    <h4 class="product-price"> <?php echo number_format($value1['price']);?></h4>
                                                <?php else: ?>
                                                    <h4 class="product-price"> <?php echo number_format($value1['price']); ?>VNĐ</h4>
                                                <?php endif; ?>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><a href="product.php?id=<?php echo $value1['id'] ?>"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></a></button>
												</div>
											</div>
											<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="index.php?id=<?php echo $value1['id'] ?>">add to cart</a></button>
											</div>
										</div>
										<?php endif; endforeach; endforeach;?>
										<!-- /product -->
									</div>														
								</div>                         
								<!-- /tab -->     

								<!-- tab -->
								<div id="tab12" class="tab-pane">
									<div class="products-slick">
										<!-- product -->
										<?php
										$getAllProductsByTypeIdSelling = $Products->getAllProductsByTypeIdSelling(5);
										 foreach($getAllProductsByTypeIdSelling as $value1): 
											foreach($getAllProtypes as $value2): 
												if($value1['type_id'] == $value2['type_id']): ?>
										<div class="product">
											<div class="product-img">
												
												<img style="height: 200px;" src="./img/<?php echo $value1['image']; ?>" alt="">
												<div class="product-label">
												    <span class="new">NEW</span>
										     	</div>
											</div>
											<div class="product-body">
												<p class="product-category"><?php echo $value2['type_name']; ?></p>
												<h3 class="product-name"><a href="product.php?id=<?php echo $value1['id'] ?>"><?php echo $value1['name']; ?></a></h3>
                                                <?php if($value1['feature'] == 1): ?>
                                                    <h4 class="product-price"> <?php echo number_format($value1['price']); ?>VNĐ</h4>
                                                <?php else: ?>
                                                    <h4 class="product-price"> <?php echo number_format($value1['price']); ?>VNĐ</h4>
                                                <?php endif; ?>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><a href="product.php?id=<?php echo $value1['id'] ?>"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></a></button>
												</div>
											</div>
											<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="index.php?id=<?php echo $value1['id'] ?>">add to cart</a></button>
											</div>
										</div>
										<?php endif; endforeach; endforeach;?>
										<!-- /product -->
									</div>														
								</div>                         
								<!-- /tab -->     

								<div id="slick-nav-2" class="products-slick-nav"></div>	                         
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->