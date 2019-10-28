<?php
include('db_con.php');
?>
<?php
include('header.php');
?>
<br>
<!-- Shop -->
		<div class="innerf-pages section">
			<div class="container-cart">
				<!-- product left -->
				<div class="side-bar col-md-3">
					<!--preference -->
					<div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">
							Categories</h3>
						<ul>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">Biographies</span>
							</li>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">Fiction</span>
							</li>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">Management</span>
							</li>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">Business</span>
							</li>

						</ul>
					</div>
					<!-- // preference -->
					<div class="search-hotel">
						<h3 class="shopf-sear-headits-sear-head">
							<span>author</span> in focus</h3>
						<form action="#" method="post">
							<input type="search" placeholder="search here" name="search" required="">
							<input type="submit" value="Search">
						</form>
					</div>
					<!-- price range -->
					<div class="range">
						<h3 class="shopf-sear-headits-sear-head">
							<span>Price</span> range</h3>
						<ul class="dropdown-menu6">
							<li>

								<div id="slider-range"></div>
								<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
							</li>
						</ul>
					</div>
					<!-- //price range -->
					<!--preference -->
					<div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">
							<span>latest</span> arrivals</h3>
						<ul>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">last 30 days</span>
							</li>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">last 90 days</span>
							</li>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">last 150 days</span>
							</li>

						</ul>
					</div>
					<!-- // preference -->
					<!-- discounts -->
					<div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">Language</h3>
						<ul>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">English</span>
							</li>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">Spanish</span>
							</li>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">Japanese</span>
							</li>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">German</span>
							</li>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">Korean</span>
							</li>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">Chinese</span>
							</li>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">French</span>
							</li>
						</ul>
					</div>
					<!-- //discounts -->
					<!-- Binding -->
					<div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">Format</h3>
						<ul>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">Hardcover</span>
							</li>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">Board Book</span>
							</li>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">Bundle</span>
							</li>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">Paperback</span>
							</li>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">Audio Book</span>
							</li>
						</ul>
					</div>
					<!-- //Binding -->
					<!-- discounts -->
					<div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">Discount</h3>
						<ul>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">5% - 20%</span>
							</li>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">20% - 40%</span>
							</li>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">40% - 60%</span>
							</li>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">60% or more</span>
							</li>
						</ul>
					</div>
					<!-- //discounts -->
					<!-- reviews -->
					<div class="customer-rev left-side">
						<h3 class="shopf-sear-headits-sear-head">Customer Review</h3>
						<ul>
							<li>
								<a href="#">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<span>5.0</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<span>4.0</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half-o" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<span>3.5</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<span>3.0</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half-o" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<span>2.5</span>
								</a>
							</li>
						</ul>
					</div>
					<!-- //reviews -->


				</div>
				<!-- //product left -->
				<!-- product right -->
				<div class="left-ads-display col-md-9">
					<div class="wrapper_top_shop">
						<!-- product-sec1 -->
						<div class="product-sec1">
							<!-- row1-->
							<div class="col-md-3 product-men">
								<div class="product-chr-info chr">
									<div class="thumbnail">
										<a href="single_product.html">
											<img src="images/lib8.jpg" alt="">
										</a>
									</div>
									<div class="caption">
										<h4>be creative</h4>
										<p>Clayton Barton</p>
										<div class="matrlf-mid">
											<ul class="rating">
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star gray-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star gray-star" aria-hidden="true"></span>
													</a>
												</li>
											</ul>
											<ul class="price-list">
												<li>$ 100.00</li>
												<li>
													$200.00
												</li>
											</ul>

											<div class="clearfix"> </div>
										</div>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="chr_item" value="Book1">
											<input type="hidden" name="amount" value="100.00">
											<button type="submit" class="chr-cart pchr-cart">Add to cart
												<i class="fa fa-cart-plus" aria-hidden="true"></i>
											</button>
											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>
									</div>
								</div>
							</div>
							<div class="col-md-3 product-men">
								<div class="product-chr-info chr">
									<div class="thumbnail">
										<a href="single_product.html">
											<img src="images/lib7.jpg" alt="">
										</a>
									</div>
									<div class="caption">
										<h4>marketing</h4>
										<p>Niel Fontine</p>
										<div class="matrlf-mid">
											<ul class="rating">
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star gray-star" aria-hidden="true"></span>
													</a>
												</li>
											</ul>
											<ul class="price-list">
												<li>$ 200.00</li>
												<li>
													$250.00
												</li>
											</ul>

											<div class="clearfix"> </div>
										</div>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="chr_item" value="Book2">
											<input type="hidden" name="amount" value="200.00">
											<button type="submit" class="chr-cart pchr-cart">Add to cart
												<i class="fa fa-cart-plus" aria-hidden="true"></i>
											</button>
											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>
									</div>
								</div>
							</div>
							<div class="col-md-3 product-men">
								<div class="product-chr-info chr">
									<div class="thumbnail">
										<a href="single_product.html">
											<img src="images/lib3.jpg" alt="">
										</a>
									</div>
									<div class="caption">
										<h4>work from home</h4>
										<p>Jose portilla</p>
										<div class="matrlf-mid">
											<ul class="rating">
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
											</ul>
											<ul class="price-list">
												<li>$ 80.00</li>
												<li>
													$100.00
												</li>
											</ul>

											<div class="clearfix"> </div>
										</div>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="chr_item" value="Book3">
											<input type="hidden" name="amount" value="80.00">
											<button type="submit" class="chr-cart pchr-cart">Add to cart
												<i class="fa fa-cart-plus" aria-hidden="true"></i>
											</button>
											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>
									</div>
								</div>
							</div>
							<div class="col-md-3 product-men">
								<div class="product-chr-info chr">
									<div class="thumbnail">
										<a href="single_product.html">
											<img src="images/lib6.jpg" alt="">
										</a>
									</div>
									<div class="caption">
										<h4>online business</h4>
										<p>Clayton Barton</p>
										<div class="matrlf-mid">
											<ul class="rating">
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star gray-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star gray-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star gray-star" aria-hidden="true"></span>
													</a>
												</li>
											</ul>
											<ul class="price-list">
												<li>$ 120.00</li>
												<li>
													$130.00
												</li>
											</ul>

											<div class="clearfix"> </div>
										</div>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="chr_item" value="Book4">
											<input type="hidden" name="amount" value="120.00">
											<button type="submit" class="chr-cart pchr-cart">Add to cart
												<i class="fa fa-cart-plus" aria-hidden="true"></i>
											</button>
											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>
									</div>
								</div>
							</div>
							<!-- //row1 -->
							<!-- row2 -->
							<div class="col-md-3 product-men women_two">
								<div class="product-chr-info chr">
									<div class="thumbnail">
										<a href="single_product.html">
											<img src="images/lib6.jpg" alt="">
										</a>
									</div>
									<div class="caption">
										<h4>e-commerce</h4>
										<p>Chris Haroun</p>
										<div class="matrlf-mid">
											<ul class="rating">
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star gray-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star gray-star" aria-hidden="true"></span>
													</a>
												</li>
											</ul>
											<ul class="price-list">
												<li>$ 125.00</li>
												<li>
													$165.00
												</li>
											</ul>

											<div class="clearfix"> </div>
										</div>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="chr_item" value="Book5">
											<input type="hidden" name="amount" value="125.00">
											<button type="submit" class="chr-cart pchr-cart">Add to cart
												<i class="fa fa-cart-plus" aria-hidden="true"></i>
											</button>
											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>
									</div>
								</div>
							</div>
							<div class="col-md-3 product-men women_two">
								<div class="product-chr-info chr">
									<div class="thumbnail">
										<a href="single_product.html">
											<img src="images/lib2.jpg" alt="">
										</a>
									</div>
									<div class="caption">
										<h4>kids</h4>
										<p>Alex Even</p>
										<div class="matrlf-mid">
											<ul class="rating">
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star gray-star" aria-hidden="true"></span>
													</a>
												</li>
											</ul>
											<ul class="price-list">
												<li>$ 70.00</li>
												<li>
													$100.00
												</li>
											</ul>

											<div class="clearfix"> </div>
										</div>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="chr_item" value="Book6">
											<input type="hidden" name="amount" value="70.00">
											<button type="submit" class="chr-cart pchr-cart">Add to cart
												<i class="fa fa-cart-plus" aria-hidden="true"></i>
											</button>
											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>
									</div>
								</div>
							</div>
							<div class="col-md-3 product-men women_two">
								<div class="product-chr-info chr">
									<div class="thumbnail">
										<a href="single_product.html">
											<img src="images/lib5.jpg" alt="">
										</a>
									</div>
									<div class="caption">
										<h4>media</h4>
										<p>Alex Even</p>
										<div class="matrlf-mid">
											<ul class="rating">
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
											</ul>
											<ul class="price-list">
												<li>$ 220.00</li>
												<li>
													$300.00
												</li>
											</ul>

											<div class="clearfix"> </div>
										</div>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="chr_item" value="Book7">
											<input type="hidden" name="amount" value="220.00">
											<button type="submit" class="chr-cart pchr-cart">Add to cart
												<i class="fa fa-cart-plus" aria-hidden="true"></i>
											</button>
											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>
									</div>
								</div>
							</div>
							<div class="col-md-3 product-men women_two">
								<div class="product-chr-info chr">
									<div class="thumbnail">
										<a href="single_product.html">
											<img src="images/lib4.jpg" alt="">
										</a>
									</div>
									<div class="caption">
										<h4>membership</h4>
										<p>Hadilen de</p>
										<div class="matrlf-mid">
											<ul class="rating">
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star gray-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star gray-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star gray-star" aria-hidden="true"></span>
													</a>
												</li>
											</ul>
											<ul class="price-list">
												<li>$ 210.00</li>
												<li>
													$300.00
												</li>
											</ul>

											<div class="clearfix"> </div>
										</div>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="chr_item" value="Book8">
											<input type="hidden" name="amount" value="210.00">
											<button type="submit" class="chr-cart pchr-cart">Add to cart
												<i class="fa fa-cart-plus" aria-hidden="true"></i>
											</button>
											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>
									</div>
								</div>
							</div>
							<!-- //row2 -->
							<!-- row3 -->
							<div class="col-md-3 product-men">
								<div class="product-chr-info chr">
									<div class="thumbnail">
										<a href="single_product.html">
											<img src="images/lib7.jpg" alt="">
										</a>
									</div>
									<div class="caption">
										<h4>marketing</h4>
										<p>Scott Harris</p>
										<div class="matrlf-mid">
											<ul class="rating">
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star gray-star" aria-hidden="true"></span>
													</a>
												</li>
											</ul>
											<ul class="price-list">
												<li>$ 180.00</li>
												<li>
													$220.00
												</li>
											</ul>

											<div class="clearfix"> </div>
										</div>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="chr_item" value="Book9">
											<input type="hidden" name="amount" value="180.00">
											<button type="submit" class="chr-cart pchr-cart">Add to cart
												<i class="fa fa-cart-plus" aria-hidden="true"></i>
											</button>
											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>
									</div>
								</div>
							</div>
							<div class="col-md-3 product-men">
								<div class="product-chr-info chr">
									<div class="thumbnail">
										<a href="single_product.html">
											<img src="images/lib1.jpg" alt="">
										</a>
									</div>
									<div class="caption">
										<h4>online business</h4>
										<p>Scott Harris</p>
										<div class="matrlf-mid">
											<ul class="rating">
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
											</ul>
											<ul class="price-list">
												<li>$ 330.00</li>
												<li>
													$560.00
												</li>
											</ul>

											<div class="clearfix"> </div>
										</div>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="chr_item" value="Book10">
											<input type="hidden" name="amount" value="330.00">
											<button type="submit" class="chr-cart pchr-cart">Add to cart
												<i class="fa fa-cart-plus" aria-hidden="true"></i>
											</button>
											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>
									</div>
								</div>
							</div>
							<div class="col-md-3 product-men">
								<div class="product-chr-info chr">
									<div class="thumbnail">
										<a href="single_product.html">
											<img src="images/lib2.jpg" alt="">
										</a>
									</div>
									<div class="caption">
										<h4>kids</h4>
										<p>Cordebard</p>
										<div class="matrlf-mid">
											<ul class="rating">
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star gray-star" aria-hidden="true"></span>
													</a>
												</li>
											</ul>
											<ul class="price-list">
												<li>$ 280.00</li>
												<li>
													$500.00
												</li>
											</ul>

											<div class="clearfix"> </div>
										</div>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="chr_item" value="Book11">
											<input type="hidden" name="amount" value="280.00">
											<button type="submit" class="chr-cart pchr-cart">Add to cart
												<i class="fa fa-cart-plus" aria-hidden="true"></i>
											</button>
											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>
									</div>
								</div>
							</div>
							<div class="col-md-3 product-men">
								<div class="product-chr-info chr">
									<div class="thumbnail">
										<a href="single_product.html">
											<img src="images/lib3.jpg" alt="">
										</a>
									</div>
									<div class="caption">
										<h4>work from home</h4>
										<p>Cordebard</p>
										<div class="matrlf-mid">
											<ul class="rating">
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star gray-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star gray-star" aria-hidden="true"></span>
													</a>
												</li>
											</ul>
											<ul class="price-list">
												<li>$ 140.00</li>
												<li>
													$200.00
												</li>
											</ul>

											<div class="clearfix"> </div>
										</div>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="chr_item" value="Book12">
											<input type="hidden" name="amount" value="140.00">
											<button type="submit" class="chr-cart pchr-cart">Add to cart
												<i class="fa fa-cart-plus" aria-hidden="true"></i>
											</button>
											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>
									</div>
								</div>
							</div>
							<!-- //row3 -->
							<div class="clearfix"></div>

						</div>

						<!-- //product-sec1 -->
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>

			</div>
		</div>
		<!--// Shop -->
<?php 
include('footer.php');
?>