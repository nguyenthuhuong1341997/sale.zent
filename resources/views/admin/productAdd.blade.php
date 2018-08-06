@extends('admin_layouts.app')

@section('content')
<div class="content">
		<div id="page-wrapper">
			<form action="{{asset('admin/home')}}" method="POST" role="form" enctype="multipart/form-data" class="form-horizontal row">
				@csrf
				<div class="col-md-6">            
		            <div class="card card-primary">
		            	<div class="card-body">
		              		<div class="form-group">
								<label for="">Code</label>
								<input type="text" class="form-control" id="" placeholder="Code" name="code">
							</div>
		              	</div>
		              	<div class="card-body">
		              		<div class="form-group">
								<label for="">Name</label>
								<input type="text" class="form-control" id="" placeholder="Name" name="name">
							</div>
		              	</div>	              	
		              	<div class="card-body">
		              		<div class="form-group">
								<label for="">Original cost</label>
								<input type="number" class="form-control" name="original_price" placeholder="Original cost">
							</div>
		              	</div>
		              	<div class="card-body">
		              		<div class="form-group">
								<label for="">Price</label>
								<input type="number" class="form-control" name="price" placeholder="Price">
							</div>
		              	</div>
		              	<div class="card-body">
		              		<div class="form-group">
								<label for="">Description</label>
								<textarea  class="form-control" name="description"  rows="4"></textarea>
							</div>
		              	</div>
			        </div>
			                  
	          	</div>
	          	<div class="col-md-6 clearfix">
	          		<div class="card card-primary">
		          		<div class="card-body">
		              		<div class="form-group">
								<label for="">Vendor</label><br>
								<select name="vendor_id" size="4" class="form-control" required="required">
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
								<input type="number" class="form-control" name="quantity" placeholder="Quantity" required="">
							</div>
		              	</div>
		          		<div class="card-body">
		              		<div class="form-group">
								<label for="">Size</label>
								<select name="size_id" size="4" class="form-control" required="required" >
									@foreach($sizes as $size)
										<option value="{{$size->id}}">{{$size->size}}</option>
									@endforeach
								</select>
							</div>
		              	</div>
		              	<div class="card-body">
		              		<div class="form-group">
								<label for="">Color</label>
								<select name="color_id" size="4" class="form-control" required="required" >
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