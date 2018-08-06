@extends('layouts.app1')

@section('header')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<style>
	ul.ul_color li{
		width: 50px;
		height: 50px;
		display: inline-block;
		border: 1px solid #e2e2e2;
		border-radius: 5px;
	}
	ul.ul_color .active{
	    border: 3px solid orange !important;
	}
	
	ul.ul_size li{
		width: 50px;
		height: 50px;
		display: inline-block;
		border-radius: 5px;
		background: #e2e2e2;
	}
	ul.ul_size .active{
	    border: 3px solid red !important;
	}
</style>
@endsection

@section('content')

<div class="product-popup">
	<div class="product-popup-content">
		<div class="container-fluid">
			<div class="row product-info-outer">
				<div class="col-xs-12 col-sm-5 col-md-6 col-lg-6">
					<div class="product-main-image">
						<div id="carousel-id" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								@foreach($images as $key=>$image)
								<li data-target="#carousel-id" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
								@endforeach
							</ol>
							<div class="carousel-inner">
								@foreach($images as $image)
								<div class="item {{ $loop->first ? 'active' : '' }}">
									<img style="height: 700px;" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="{{ asset(\Storage::url($image->image)) }}">
									
								</div>
								@endforeach
							</div>
							<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
							<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
						</div>
					</div>
				</div>
				<div class="product-info col-xs-12 col-sm-7 col-md-6 col-lg-6">
					<div class="wrapper">
						<div class="product-info__sku pull-left">CODE: <strong>{{$product->code}}</strong></div>
						<div class="product-info__availabilitu pull-right">Availability:   <strong class="color">In Stock</strong></div>
					</div>
					<div class="product-info__title">
						<h2>{{$product->name}}</h2>
					</div>
					<div class="price-box product-info__price"><span class="price-box__new">{{number_format($product->price)}} VNĐ</span> <span class="price-box__old">840.000 VNĐ</span></div>
					<div class="divider divider--xs product-info__divider"></div>
					<div class="product-info__description">
						<div class="product-info__description__brand"><img src="{{asset('shop_asset/images/custom/brand.png')}}" alt=""> </div>
						<div class="product-info__description__text">{{$product->description}}</div>
					</div>
					<div class="divider divider--xs product-info__divider"></div>
					<form action="" method="POST" name="formQuickView">
						@csrf
						<div class="wrapper">
							<div class="pull-left">
								<span class="option-label">COLOR:</span> <br>
								
							</div>
							<div class="pull-right required">* Required Fields</div>
						</div>
						<div class="navbar-inner">
						    <div class="container">
					            <ul class="nav ul_color">
					            	@foreach($colors as $color)
										<li  id="{{$color->id}}" style="width:50px; height:50px; background: {{$color->color}}"></li>
									@endforeach
					            </ul>
					            <input type="hidden" id="color_quick_view"  name="color_quick_view" value="{{$color->id}}">
						    </div>
						</div>
						<div class="wrapper">
							<div class="pull-left"><span class="option-label">SIZE:</span></div>
							<div class="pull-left required">*</div>
						</div>
						<div class="navbar-inner">
						    <div class="container">
					            <ul class="nav ul_size">
					            	@foreach($sizes as $size)
										<li id="{{$size->id}}" style="width:50px; height:50px; background: #e2e2e2"><a href="">{{$size->size}}</a></li>
									@endforeach
									<input  type="hidden" id="size_quick_view" name="size_quick_view" value="{{$size->id}}">
					            </ul>
						    </div>
						</div>
						<div class="divider divider--sm"></div>
						<div class="wrapper">
							<div class="pull-left"><span class="qty-label">QTY:</span></div>
							<div class="pull-left">
								<span class="input-group-btn pull-left">
									<button id="btn_decrease_quantity" class="btn btn-default bootstrap-touchspin-down" type="button">-</button>
								</span>
								<span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
								<input id="qty" type="tel" name="qty" value="1" min="1" max="100" class="input--ys qty-input pull-left" style="display: block; height: 41px; margin: 0px 0px 20px 20px;">
								<span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
								<span class="input-group-btn "><button id="btn_increase_quantity" class="btn btn-default bootstrap-touchspin-up " type="button">+</button></span></div>

							<div class="pull-left"><button id="btnAddCartQuickView" productID="{{$product->id}}" class="btn btn--ys btn--xxl"><span class="icon icon-shopping_basket"></span> Add to cart</button></div>
							<p id="outOfStock" style="float: right; color: red;"></p>
						</div>
					</form>
					<ul class="product-link">
						<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
						<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#"><span class="text">Add to compare</span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('footer')
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- <script type="text/javascript" src="{{asset('js/home.js')}}"></script> -->
<script type="text/javascript">

	//Click mouse +,- increase/decrease quantity
	$('#btn_increase_quantity').click(function() {
	    var bla = parseInt($('#qty').val());
	    $('#qty').val(bla+1);
	});
	$('#btn_decrease_quantity').click(function() {
	    var bla = parseInt($('#qty').val());
	    if(bla==0){
	    	$('#qty').val(bla);
	    }else{
	    	$('#qty').val(bla-1);
	    }
	});

	//Choose color and size
	$('ul.ul_color > li').click(function (e) {
	    e.preventDefault();
	    $('ul.ul_color > li').removeClass('active');
	    $(this).addClass('active');
	});

	$('ul.ul_size > li').click(function (e) {
	    e.preventDefault();
	    $('ul.ul_size > li').removeClass('active');
	    $(this).addClass('active');
	});


	$("ul.ul_color li").click(function() {
	    $('#color_quick_view').val(this.id);
	});
	$("ul.ul_size li").click(function() {
	    $('#size_quick_view').val(this.id);
	});
</script>

@endsection