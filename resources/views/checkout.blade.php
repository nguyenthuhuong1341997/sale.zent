@extends('layouts.app1')
@section('header')
<link rel="stylesheet" type="text/css" href="{{asset('css/jquery.steps.css')}}">

@endsection
@section('content')
<div class="container" style="font-family: Roboto,Helvetica,Arial,sans-serif;">
	<div class="row">
		<div class="col-md-8">
			<p></p>
			<form action="{{asset('')}}checkout" method="POST" role="form">
				@csrf
				<center><legend>Địa chỉ giao hàng</legend></center>
			
				<div class="form-group">
					<label for=""><b>Họ và tên</b></label>
					<input style="border-radius: 3px;" type="text" class="form-control" name="nameCustomer" value="" placeholder="Nhập họ tên">
				</div>
				@if($errors->has('nameCustomer'))
					<p style="color: red; font-size: 14px;">{{$errors->first('nameCustomer')}}</p>
				@endif
				<div class="form-group">
					<label for=""><b>Điện thoại</b></label>
					<input style="border-radius: 3px;" type="text" class="form-control"  name="phone" value="" placeholder="Nhập số điện thoại">
				</div>
				@if($errors->has('phone'))
					<p style="color: red; font-size: 14px;">{{$errors->first('phone')}}</p>
				@endif
				<div class="form-group">
					<label for=""><b>Địa chỉ</b></label>
					<input style="border-radius: 3px;" type="text" class="form-control" id="" name="address" value="" placeholder="Nhập địa chỉ">
				</div>
				@if($errors->has('address'))
					<p style="color: red; font-size: 14px;">{{$errors->first('address')}}</p>
				@endif
				<div class="form-group">
					<i style="font-size: 12px;">Để nhận hàng thuận tiện hơn, bạn vui lòng cho chúng tôi biết loại địa chỉ.</i> <br>
					<label for=""><b>Loại địa chỉ</b></label> <br>
					<input style="border-radius: 3px;" type="radio" name="gender" value="Nhà riêng / Chung cư" checked> Nhà riêng / Chung cư<br>
					<input type="radio" name="gender" value="Cơ quan / Công ty"> Cơ quan / Công ty<br>
				</div>
				
			
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
		<div class="col-md-4">
			<center><b style="font-size: 19px; color: red">Đơn hàng của bạn bao gồm</b></center>
			<a href="#" class="slide-column-close visible-sm visible-xs"><span class="icon icon-chevron_left"></span>back</a>
			@foreach($cart as $cartsx)
			<!-- shopping by block -->
			<div class="collapse-block open">
				<h4 class="collapse-block__title">{{$cartsx->name}}</h4>
				<div class="collapse-block__content">
					<ul class="filter-list">
						<li> Quantity: <span>{{$cartsx->qty}}</span><a href="#" class="icon icon-clear icon-to-right"></a> </li>
						<li> Price: <span>{{$cartsx->price}}</span><a href="#" class="icon icon-clear icon-to-right"></a> </li>
					</ul>
					
				</div>
			</div>
			<!-- /shopping by block --> 
			@endforeach		
			<div class="collapse-block open">
				<h4 >Total: <span style="float: right; color: orange ; font-size: 20px;">{{ Cart::total()}}</span></h4>
				
			</div> 
		</div>
	</div>

</div>
@endsection

@section('footer')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>
<script type="text/javascript">
	
</script>
@endsection