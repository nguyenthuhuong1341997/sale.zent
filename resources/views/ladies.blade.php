@extends('layouts.app1')

@section('content')
<!-- CONTENT section -->
		<div id="pageContent">
			<div class="container">
				<!-- two columns -->
				<div class="row">
					<!-- left column -->
					<aside class="col-md-4 col-lg-3 col-xl-2" id="leftColumn">
						<a href="#" class="slide-column-close visible-sm visible-xs"><span class="icon icon-chevron_left"></span>back</a>
						<div class="filters-block visible-xs">
							<div class="filters-row__select">
								<label>Sort by: </label>
								<div class="select-wrapper">
									<select class="select--ys">
										<option>Position</option>
										<option>Price</option>
										<option>Rating</option>
									</select>
								</div>
								<a href="#" class="sort-direction icon icon-arrow_back"></a> 
							</div>
							<div class="filters-row__select">
								<label>Show: </label>
								<div class="select-wrapper">
									<select class="select--ys">
										<option>25</option>
										<option>50</option>
										<option>100</option>
									</select>
								</div>
							</div>
							<a href="#" class="icon icon-arrow-down active"></a><a href="#" class="icon icon-arrow-up"></a> 
						</div>
						<!-- shopping by block -->
						<div class="collapse-block open">
							<h4 class="collapse-block__title">SHOPPING BY:</h4>
							<div class="collapse-block__content">
								<ul class="filter-list">
									<li> Color: <span>White</span><a href="#" class="icon icon-clear icon-to-right"></a> </li>
									<li> Size: <span>S</span><a href="#" class="icon icon-clear icon-to-right"></a> </li>
								</ul>
								<a class="btn btn--ys btn--sm btn--light">Clear All</a> 
							</div>
						</div>
						<!-- /shopping by block --> 
						<!-- category block -->
						<div class="collapse-block open">
							<h4 class="collapse-block__title ">WOMENS</h4>
							<div class="collapse-block__content">
								<ul class="expander-list">
									<li class="active">
										<a href="#">TOPS</a><span class="expander"></span>
										<ul>
											<li class="active"><a href="#">Blouses &amp; Shirts</a></li>
											<li><a href="#">Dresses</a></li>
										</ul>
									</li>
									<li>
										<a href="#">BOTTOMS</a><span class="expander"></span>
										<ul>
											<li><a href="#">Trousers</a></li>
											<li><a href="#">Jeans</a></li>
											<li><a href="#">Leggings</a></li>
											<li><a href="#">Jumpsuit &amp; shorts</a></li>
											<li><a href="#">Skirts</a></li>
											<li><a href="#">Tights</a></li>
										</ul>
									</li>
									<li>
										<a href="#">ACCESSORIES</a><span class="expander"></span>
										<ul>
											<li><a href="#">Jewellery</a></li>
											<li><a href="#">Hats</a></li>
											<li><a href="#">Scarves &amp; snoods</a></li>
											<li><a href="#">Belts</a></li>
											<li><a href="#">Bags</a></li>
											<li><a href="#">Shoes</a></li>
											<li><a href="#">Sunglasses</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
						<!-- /category block --> 
						 
						<!-- size block -->
						<div class="collapse-block open">
							<h4 class="collapse-block__title">SIZE</h4>
							<div class="collapse-block__content">
								<ul class="options-swatch options-swatch--size options-swatch--lg">
									<li><a href="#">XS</a></li>
									<li><a href="#">S</a></li>
									<li><a href="#">M</a></li>
									<li><a href="#">L</a></li>
									<li><a href="#">XL</a></li>
									<li><a href="#">2XL</a></li>
									<li><a href="#">3XL</a></li>
								</ul>
							</div>
						</div>
						<!-- /size block --> 
					</aside>
					<!-- /left column --> 
					<!-- center column -->
					<aside class="col-md-8 col-lg-9 col-xl-10" id="centerColumn">
						<!-- title -->
						<div class="title-box">
							<h2 class="text-center text-uppercase title-under">women’s</h2>
						</div>
						<!-- /title -->
						
						<div class="divider"></div>
						<div class="row">
							@foreach($categories as $category)
							<div class="subcategory-item col-sm-4 col-xs-6 col-xl-one-fifth">
								<a href="listing-without-col-without-static-block_06.html">
									<span class="figure"> <img src="{{$category->image}}" alt="" class="img-responsive" style="width: 269px; height: 350px;" /> </span>
									<h3 class="subcategory-item__title">{{$category->name}}</h3>
								</a>
							</div>
							@endforeach
						</div>
						<!-- filters row -->
						<div class="filters-row">
							<div class="pull-left">
								<div class="filters-row__mode">
									<a href="#" class="btn btn--ys slide-column-open visible-xs visible-sm hidden-xl hidden-lg hidden-md">Filter</a> 
									<a class="filters-row__view active link-grid-view btn-img btn-img-view_module"><span></span></a> 
									<a class="filters-row__view link-row-view btn-img btn-img-view_list"><span></span></a> 
								</div>
								<div class="filters-row__select hidden-sm hidden-xs">
									<label>Sort by: </label>
									<div class="select-wrapper">
										<select class="select--ys sort-position">
											<option>Position</option>
											<option>Price</option>
											<option>Rating</option>
										</select>
									</div>
									<a href="#" class="sort-direction icon icon-arrow_back"></a> 
								</div>
							</div>
							<div class="pull-right">
								<div class="filters-row__items hidden-sm hidden-xs">28 Item(s)</div>
								<div class="filters-row__select hidden-sm hidden-xs">
									<label>Show: </label>
									<div class="select-wrapper">
										<select class="select--ys show-qty">
											<option>25</option>
											<option>50</option>
											<option>100</option>
										</select>
									</div>
									<a href="#" class="icon icon-arrow-down active"></a><a href="#" class="icon icon-arrow-up"></a> 
								</div>
								<div class="filters-row__pagination">
									<ul class="pagination">
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#"><span class="icon icon-chevron_right"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /filters row -->
						<div class="product-listing row">
							@foreach($detailLadies as $detailLady)
                            
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                <!-- product -->
                                <div class="product product--zoom">
                                    <div class="product__inside">
                                        <!-- product image -->
                                        <div class="product__inside__image">
                                            <!-- product image carousel -->
                                            <div class="product__inside__carousel slide" data-ride="carousel">
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="item active" postID="{{$detailLady->id}}"> <a href="product.html"><img style=" height: 330px;" src="{{asset('') }}/storage/{{$detailLady->image}}" alt=""></a> </div>
                                                    <div class="item" postID={{$detailLady->id}}> <a href="product.html"><img style=" height: 330px;"  src="{{asset('') }}/storage/{{$detailLady->image}}" alt=""></a> </div>
                                                    
                                                </div>
                                                <!-- Controls --> 
                                                <a class="carousel-control next"></a> <a class="carousel-control prev"></a> 
                                            </div>
                                            <!-- /product image carousel -->  
                                            <!-- quick-view --> 
                                            <a href="{{asset('')}}quickview/{{$detailLady->id}}" postID={{$detailLady->id}} data-toggle="modal"  class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a> 
                                            <!-- /quick-view --> 
                                            <!-- countdown_box -->
                                            <div class="countdown_box">
                                                <div class="countdown_inner">
                                                    <div id="countdown1"></div>
                                                </div>
                                            </div>
                                            <!-- /countdown_box --> 
                                        </div>
                                        <!-- /product image --> 
                                        <!-- label news -->
                                        <div class="product__label product__label--right product__label--new"> <span>new</span> </div>
                                        <!-- /label news --> 
                                        <!-- label sale -->
                                        <div class="product__label product__label--left product__label--sale"> <span>Sale<br>
                                            -20%</span> 
                                        </div>
                                        <!-- /label sale --> 
                                        <!-- product name -->
                                        <div class="product__inside__name">
                                            <h2><a href="product.html">{{$detailLady->name}}</a></h2>
                                        </div>
                                        <!-- /product name --> 
                                        <!-- product description --> 
                                        <!-- visible only in row-view mode -->
                                        <div class="product__inside__description row-mode-visible"> {{$detailLady->description}}</div>
                                        <!-- /product description --> 
                                        <!-- product price -->
                                        <div class="product__inside__price price-box">{{number_format($detailLady->price)}}<span style="color: red">VNĐ</span></div>
                                        <!-- /product price --> 
                                        <!-- product review --> 
                                        <!-- visible only in row-view mode -->
                                        <div class="product__inside__review row-mode-visible">
                                            <div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                            <a href="#">1 Review(s)</a> <a href="#">Add Your Review</a> 
                                        </div>
                                        <!-- /product review --> 
                                        <div class="product__inside__hover">
                                            <!-- product info -->
                                            <div class="product__inside__info">
                                                <!-- Màu ơ đây -->
                                                <ul class="options-swatch options-swatch--color">
                                                    <li><a href="#"><span class="swatch-label"><img src="{{asset('shop_asset/images/colors/blue.png') }}"  alt=""/></span></a></li>
                                                    <li><a href="#"><span class="swatch-label"><img src="{{asset('shop_asset/images/colors/yellow.png') }}"  alt=""/></span></a></li>
                                                    <li><a href="#"><span class="swatch-label"><img src="{{asset('shop_asset/images/colors/red.png') }}"  alt=""/></span></a></li>
                                                </ul>
                                                <div class="product__inside__info__btns"> <a href="{{$detailLady->id}}" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
                                                <a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
                                                <a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
                                                <a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
                                                <ul class="product__inside__info__link hidden-xs">
                                                    <li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
                                                    <li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
                                                </ul>
                                            </div>
                                            <!-- /product info --> 
                                            <!-- product rating -->
                                            <div class="rating row-mode-hide"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                            <!-- /product rating -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /product --> 
                            </div>
                            
                        @endforeach
												
						</div>
						<!-- filters row -->
						<div class="filters-row">
							<div class="pull-left">
								<div class="filters-row__mode">
									<a href="#" class="btn btn--ys slide-column-open visible-xs visible-sm hidden-xl hidden-lg hidden-md">Filter</a> 
									<a class="filters-row__view active link-grid-view btn-img btn-img-view_module"><span></span></a> 
									<a class="filters-row__view link-row-view btn-img btn-img-view_list"><span></span></a> 
								</div>
								<div class="filters-row__select hidden-sm hidden-xs">
									<label>Sort by: </label>
									<div class="select-wrapper">
										<select class="select--ys sort-position">
											<option>Position</option>
											<option>Price</option>
											<option>Rating</option>
										</select>
									</div>
									<a href="#" class="sort-direction icon icon-arrow_back"></a> 
								</div>
							</div>
							<div class="pull-right">
								<div class="filters-row__items hidden-sm hidden-xs">28 Item(s)</div>
								<div class="filters-row__select hidden-sm hidden-xs">
									<label>Show: </label>
									<div class="select-wrapper">
										<select class="select--ys show-qty">
											<option>25</option>
											<option>50</option>
											<option>100</option>
										</select>
									</div>
									<a href="#" class="icon icon-arrow-down active"></a><a href="#" class="icon icon-arrow-up"></a> 
								</div>
								<div class="filters-row__pagination">
									<ul class="pagination">
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#"><span class="icon icon-chevron_right"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /filters row --> 
					</aside>
					<!-- center column --> 
				</div>
				<!-- /two columns --> 
			</div>
		</div>
		<!-- End CONTENT section --> 
		<!-- FOOTER section -->
@endsection