@extends('admin_layouts.app')

@section('content')
<div class="content">
		<div id="page-wrapper">
			<form action="{{asset('')}}admin/home/{{$product->product_detail_id}}" method="POST" role="form" enctype="multipart/form-data" class="form-horizontal row">
				@csrf
				<input type="hidden" name="_method" value="put">
				<div class="col-md-6">            
		            <div class="card card-primary">
		            	<div class="card-body">
		              		<div class="form-group">
								<label for="">Code</label>
								<input type="text" class="form-control" id="" placeholder="Code" value="{{$product->code}}" name="code">
							</div>
		              	</div>
		              	<div class="card-body">
		              		<div class="form-group">
								<label for="">Name</label>
								<input type="text" class="form-control" id="" placeholder="Name" value="{{$product->name}}" name="name">
							</div>
		              	</div>	              	
		              	<div class="card-body">
		              		<div class="form-group">
								<label for="">Original cost</label>
								<input type="number" class="form-control" name="original_price" value="{{$product->original_price}}" placeholder="Original cost">
							</div>
		              	</div>
		              	<div class="card-body">
		              		<div class="form-group">
								<label for="">Price</label>
								<input type="number" class="form-control" name="price" value="{{$product->price}}" placeholder="Price">
							</div>
		              	</div>
		              	<div class="card-body">
		              		<div class="form-group">
								<label for="">Description</label>
								<textarea  class="form-control" name="description" rows="4">{{$product->description}}</textarea>
							</div>
		              	</div>
			        </div>
			                  
	          	</div>
	          	<div class="col-md-6 clearfix">
	          		<div class="card card-primary">
		          		<div class="card-body">
		              		<div class="form-group">
								<label for="">Vendor</label><br>
								<select class="form-control" required="required">
									<option value="{{$product->vendor_id}}" selected="">{{$product->name_vendor}}</option>

									@foreach($vendors as $vendor)
										<option value="{{$vendor->id}}">{{$vendor->name_vendor}}</option>
									@endforeach
								</select>
							</div>
		              	</div>
		              	
	              	</div> 
	          		<div class="card card-primary">
	          			<div class="card-body">
		              		<div class="form-group">
								<label for="">Quantity</label>
								<input type="number" class="form-control" name="quantity" placeholder="Quantity" value="{{$product->quantity}}" required="">
							</div>
		              	</div>
		          		<div class="card-body">
		              		<div class="form-group">
								<label for="">Size</label>
								<select class="form-control" required="required">
									<option value="{{$product->size_id}}" selected="">{{$product->size}}</option>

									@foreach($sizes as $size)
										<option value="{{$size->id}}">{{$size->size}}</option>
									@endforeach
								</select>
							</div>
		              	</div>
		              	<div class="card-body">
		              		<div class="form-group">
								<label for="">Color</label>
								<select class="form-control" required="required">
									<option value="{{$product->color_id}}" selected="">{{$product->color}}</option>

									@foreach($colors as $color)
										<option value="{{$color->id}}">{{$color->color}}</option>
									@endforeach
								</select>
							</div>
		              	</div>
		            </div>     
		            <button class="btn btn-success col-md-offset-8 col-md-4" type="submit">Create product</button>       	
	          	</div>
	          	
			</form>	
		</div>
	</div>
@endsection