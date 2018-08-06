@extends('layouts.app1')

@section('content')

<!-- Noi dung nằm đây -->
    <div class="content offset-top-0" id="slider">
        <h2 class="hidden">Slider Section</h2>
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>        
                    <!-- SLIDE -1 -->
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
                        <!-- MAIN IMAGE --> 
                        <img src="{{asset('shop_asset/images/mau8.jpg') }}"  alt="slide1"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" > 
                        <!-- LAYERS --> 
                        <!-- TEXT -->
                        <div class="tp-caption lfl stb" 
                            data-x="205"              
                            data-y="center"    
                            data-voffset="60" 
                            data-speed="600" 
                            data-start="900" 
                            data-easing="Power4.easeOut" 
                            data-endeasing="Power4.easeIn" 
                            style="z-index: 2;">
                            <div class="tp-caption1--wd-1">SALE 2018</div>
                            <div class="tp-caption1--wd-2">Save 20% on</div>
                            <div class="tp-caption1--wd-3">new arrivals </div>
                            <a href="listing.html" class="link-button button--border-thick" data-text="Shop now!">Shop now!</a>
                        </div>
                    </li>
                    <!-- /SLIDE -1 -->
                    <!-- SLIDE 2  -->            
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
                        <!-- MAIN IMAGE --> 
                        <img src="{{asset('shop_asset/images/mau10.jpg') }}"  alt="slide2"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                        <!-- LAYERS -->
                        <!-- TEXT -->
                        <div class="tp-caption lfr stb" 
                            data-x="right"              
                            data-y="center"    
                            data-voffset="-5"
                            data-hoffset="-205" 
                            data-speed="600" 
                            data-start="900" 
                            data-easing="Power4.easeOut" 
                            data-endeasing="Power4.easeIn" 
                            style="z-index: 2;">
                            <div class="tp-caption2--wd-1">A great selection of superb brands </div>
                            <div class="tp-caption2--wd-2">50% off</div>
                            <div class="tp-caption2--wd-3">on all clothes</div>
                            <a href="listing.html" class="link-button button--border-thick pull-right" data-text="Shop now!">Shop now!</a>
                        </div>                          
                    </li>
                    <!-- /SLIDE 2  -->                      
                    <!-- SLIDE - 3 -->
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
                                    <img src="{{asset('shop_asset/images/mau2.jpg') }}"  alt="slide3"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-fade fadeout fullscreenvideo"
                                    data-x="0"
                                    data-y="0"
                                    data-speed="1000"
                                    data-start="1100"
                                    data-easing="Power4.easeOut"
                                    data-endspeed="1500"
                                    data-endeasing="Power4.easeIn"
                                    data-autoplay="true"
                                    data-autoplayonlyfirsttime="false"
                                    data-nextslideatend="true"
                                    data-forceCover="1"
                                    data-dottedoverlay="twoxtwo"
                                    data-aspectratio="16:9"
                                    data-forcerewind="on"
                                    style="z-index: 2">


                                    <!-- <video class="video-js vjs-default-skin" preload="none" 
                                        poster='{{asset('shop_asset/images/slides/video/video_img.jpg') }}' data-setup="{}">
                                        <source src='{{asset('shop_asset/images/slides/video/explore.mp4') }}' type='video/mp4' />
                                        <source src='{{asset('shop_asset/images/slides/video/explore.webm') }}' type='video/webm' />
                                        <source src='{{asset('shop_asset/images/slides/video/explore.ogv') }}' type='video/ogg'  />
                                    </video> -->

                                </div>
                                <!-- TEXT -->
                            <div class="tp-caption lfb stb" 
                            data-x="center"              
                            data-y="center"    
                            data-voffset="0"
                            data-hoffset="0" 
                            data-speed="600" 
                            data-start="900" 
                            data-easing="Power4.easeOut" 
                            data-endeasing="Power4.easeIn" 
                            style="z-index: 2;">
                            <div class="tp-caption3--wd-1 color-white">Spring -Summer 2016</div>
                            <div class="tp-caption3--wd-2">Season sale!</div>
                            <div class="tp-caption3--wd-3 color-white">Get huge</div>
                            <div class="tp-caption3--wd-3 color-white">savings!</div>
                            <div class="text-center"><a href="listing.html" class="link-button button--border-thick" data-text="Shop now!">Shop now!</a></div>
                        </div>  
                    
                    </li>
                    <!-- /SLIDE - 3 --> 
                                    
                    
                    
                </ul>
            </div>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER --> 
    <!-- CONTENT section -->
    <div id="pageContent">
        <!-- category section -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="category-carousel">
                        <div class="col-sm-4 col-md-4 col-lg-4" style="height: 400px;">
                            <a href="https://thoitrang.biz/bst/thoi-trang-nam" class="banner zoom-in">
                                <span class="figure">
                                    <img style="height: 400px;" src="{{asset('shop_asset/images/zarawomen.jpg') }}" alt=""/>
                                    <span class="figcaption">
                                        <span class="block-table">
                                            <span class="block-table-cell">
                                                <span class="banner__title size5">ladies</span>
                                                <span class="btn btn--ys btn--xl">Shop now!</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4" style="height: 400px;">
                            <a href="https://www.blogsudo.com/cach-phoi-ao-thun-dep-va-don-gian-cho-nam-gioi" class="banner zoom-in">
                            <span class="figure">
                                <img style="height: 400px;" src="{{asset('shop_asset/images/kid.jpeg') }}" alt=""/>
                                <span class="figcaption">
                                    <span class="block-table">
                                        <span class="block-table-cell">
                                            <span class="banner__title size5">kids</span>
                                            <span class="btn btn--ys btn--xl">Shop now!</span>
                                        </span>
                                    </span>
                                </span>
                            </span>
                            </a>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4" ">
                            <a href="https://thoitrang.biz/bst/thoi-trang-nam" class="banner zoom-in">
                            <span class="figure">
                                <img style="height: 400px;" src="{{asset('shop_asset/images/men.jpg') }}" alt=""/>
                                <span class="figcaption">
                                    <span class="block-table">
                                        <span class="block-table-cell">
                                            <span class="banner__title size5">men</span>
                                            <span class="btn btn--ys btn--xl">Shop now!</span>
                                        </span>
                                    </span>
                                </span>
                            </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /category section -->
        <!-- featured products -->
<!-- Đổ sản phẩm ơ đây -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-xl-8">
                        <!-- title -->
                        <div class="title-box">
                            <h2 class="text-center text-uppercase title-under">FEATURED PRODUCTS</h2>
                        </div>
                        <!-- /title -->
                        <div class="product-listing carousel-products-mobile row">
                        @foreach($products as $product)
                            
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                <!-- product -->
                                <div class="product product--zoom">
                                    <div class="product__inside">
                                        <!-- product image -->
                                        <div class="product__inside__image">
                                            <!-- product image carousel -->
                                            <div class="product__inside__carousel slide" data-ride="carousel">
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="item active" postID="{{$product->id}}"> <a href="product.html"><img style=" height: 330px;" src="{{asset('') }}/storage/{{$product->image}}" alt=""></a> </div>
                                                    <div class="item" postID={{$product->id}}> <a href="product.html"><img style=" height: 330px;"  src="{{asset('') }}/storage/{{$product->image}}" alt=""></a> </div>
                                                    
                                                </div>
                                                <!-- Controls --> 
                                                <a class="carousel-control next"></a> <a class="carousel-control prev"></a> 
                                            </div>
                                            <!-- /product image carousel -->  
                                            <!-- quick-view --> 
                                            <a href="{{asset('')}}quickview/{{$product->id}}" postID={{$product->id}} data-toggle="modal"  class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a> 
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
                                            <h2><a href="product.html">{{$product->name}}</a></h2>
                                        </div>
                                        <!-- /product name --> 
                                        <!-- product description --> 
                                        <!-- visible only in row-view mode -->
                                        <div class="product__inside__description row-mode-visible"> {{$product->description}}</div>
                                        <!-- /product description --> 
                                        <!-- product price -->
                                        <div class="product__inside__price price-box">{{number_format($product->price)}}<span style="color: red">VNĐ</span></div>
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
                                                <div class="product__inside__info__btns"> <a href="{{$product->id}}" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
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
                        <div class="text-center">
                            <div class="pagination">
                                {{$products->links()}}
                            </div>
                        </div>
                    </div>
                    <!-- lookbook -->
                    <!-- <div class="col-xl-4 visible-xl">
                        title
                        <div class="title-box">
                            <h2 class="text-left text-uppercase title-under pull-left">LOOKBOOK</h2>
                        </div>
                        /title
                        
                        <a class="link-img-hover" href="lookbook.html"><img src="{{asset('shop_asset/images/custom/lookbook.jpg') }}" class="img-responsive" alt=""></a>
                        
                    </div> -->
                    <!-- /lookbook -->
                </div>
            </div>
        </div>
        <!-- banners -->
<!-- Sale of năm ơ dây -->
        <div class="content fullwidth indent-col-none">
            <div class="container">
                <div class="row">
                    <div class="banner-carousel">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <a href="listing.html" class="banner zoom-in">
                            <span class="figure">
                                <img style="height: 500px" src="{{asset('shop_asset/images/hat.jpg') }}" alt=""/>
                                <span class="figcaption">
                                    <span class="block-table">
                                        <span class="block-table-cell">
                                            <span class="banner__title size3">Hats</span>
                                            <span class="text">GET UP TO</span>
                                            <span class="text size3">20% OFF</span>
                                            <span class="btn btn--ys btn--xl">Shop now!</span>
                                        </span>
                                    </span>
                                </span>
                            </span>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <a href="listing.html" class="banner zoom-in">
                                <span class="figure">
                                    <img style="height: 500px" src="{{asset('shop_asset/images/saleoff.jpeg') }}" alt=""/>
                                    <span class="figcaption">
                                        <span class="block-table">
                                            <span class="block-table-cell">
                                                <span class="banner__title size3-1">15% OFF</span>
                                                <span class="text size1"><em>on brand-new models</em></span>
                                                <span class="btn btn--ys btn--xl">Shop now!</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <a href="listing.html" class="banner zoom-in">
                                <span class="figure">
                                    <img style="height: 500px" src="{{asset('shop_asset/images/newcollection.jpg') }}" alt=""/>
                                    <span class="figcaption">
                                        <span class="block-table">
                                            <span class="block-table-cell">
                                                <span class="banner__title size4">New<br> collection</span>
                                                <span class="text size2">OF FASHION CLOTHES</span>
                                                <span class="btn btn--ys btn--xl offset-top">Shop now!</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        
        <!-- /recent-posts-carousel -->
<!-- Ảnh thuong hiệu ơ đây -->
        <div class="content section-indent-bottom">
            <div class="container">
                <div class="row">
                    <div class="brands-carousel">
                        <div><a href="#"><img src="{{asset('shop_asset/images/custom/brand-01.png') }}" alt=""></a></div>
                        <div><a href="#"><img src="{{asset('shop_asset/images/custom/brand-02.png') }}" alt=""></a></div>
                        <div><a href="#"><img src="{{asset('shop_asset/images/custom/brand-03.png') }}" alt=""></a></div>
                        <div><a href="#"><img src="{{asset('shop_asset/images/custom/brand-04.png') }}" alt=""></a></div>
                        <div><a href="#"><img src="{{asset('shop_asset/images/custom/brand-05.png') }}" alt=""></a></div>
                        <div><a href="#"><img src="{{asset('shop_asset/images/custom/brand-06.png') }}" alt=""></a></div>
                        <div><a href="#"><img src="{{asset('shop_asset/images/custom/brand-07.png') }}" alt=""></a></div>
                        <div><a href="#"><img src="{{asset('shop_asset/images/custom/brand-08.png') }}" alt=""></a></div>
                        <div><a href="#"><img src="{{asset('shop_asset/images/custom/brand-09.png') }}" alt=""></a></div>
                        <div><a href="#"><img src="{{asset('shop_asset/images/custom/brand-10.png') }}" alt=""></a></div>
                        <div><a href="#"><img src="{{asset('shop_asset/images/custom/brand-01.png') }}" alt=""></a></div>
                        <div><a href="#"><img src="{{asset('shop_asset/images/custom/brand-02.png') }}" alt=""></a></div>
                        <div><a href="#"><img src="{{asset('shop_asset/images/custom/brand-03.png') }}" alt=""></a></div>
                        <div><a href="#"><img src="{{asset('shop_asset/images/custom/brand-04.png') }}" alt=""></a></div>
                        <div><a href="#"><img src="{{asset('shop_asset/images/custom/brand-05.png') }}" alt=""></a></div>
                        <div><a href="#"><img src="{{asset('shop_asset/images/custom/brand-06.png') }}" alt=""></a></div>
                        <div><a href="#"><img src="{{asset('shop_asset/images/custom/brand-07.png') }}" alt=""></a></div>
                        <div><a href="#"><img src="{{asset('shop_asset/images/custom/brand-08.png') }}" alt=""></a></div>
                        <div><a href="#"><img src="{{asset('shop_asset/images/custom/brand-09.png') }}" alt=""></a></div>
                        <div><a href="#"><img src="{{asset('shop_asset/images/custom/brand-10.png') }}" alt=""></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- hêt noi dung -->


@endsection
@section('footer')

    <script type="text/javascript" src="{{asset('js/home.js')}}"></script>

@endsection