@extends('admin_layouts.app')

@section('header')
<style type="text/css">
    .main-section{
        margin:0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0px 0px 20px #c1c1c1;
    }
    .fileinput-remove,
    .fileinput-upload{
        display: none;
    }
</style>
@endsection

@section('content')
    <div class="card-body table-responsive">
        <button data-title="add" data-toggle="modal" data-target="#add" class="btn btn-sm btn-info add">ADD PRODUCT</button>
        
        <table class="table table-bordered" id="product-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Original Price</th>
                    <th style="width: 110px;">Action</th>
                </tr>
            </thead>
        </table>       
    </div>
    <!-- Add product-->
    <div class="modal fade" id="add" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">New Product</h4>
                </div>
                <div class="modal-body">
                    <form action="{{asset('')}}admin/home" id="addProductForm" method="POST" role="form"  >
                        @csrf 
                        
                        <div class="form-group">
                            <label for="">Code(*)</label>
                            <input type="text" class="form-control" id="" placeholder="Input field" name="code" value="{{old('code')}}">
                        </div>
                        
                        <p id="code-errors"></p>
                        <div class="form-group">
                            <label for="">Name(*)</label>
                            <input type="text" class="form-control" id="" placeholder="Input field" name="name" value="{{old('name')}}">
                        </div>
                        <p id="name-errors"></p>
                        <div class="form-group">
                            <label for="">Price</label>
                            
                            <input type="number" class="form-control" id="" placeholder="Input field" name="price" value="{{old('Price')}}">

                        </div>
                        <p id="price-errors"></p>
                        <div class="form-group">
                            <label for="">Original Price</label>
                            <input type="number" class="form-control" id="" placeholder="Input field" name="original_price" value="{{old('original_price')}}">
                            
                        </div>
                        <p id="original_price-errors"></p>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea  class="form-control" name="description"  rows="4"></textarea>
                        </div>
                        <p id="description-errors"></p>
                        <div class="form-group">
                            <label for="">Category</label>
                            <select id="categoryName" class="form-control" name="category_id">
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Vendor</label>
                            <select id="vendorName" class="form-control" name="vendor_id">
                            </select>
                        </div>
                        <button name= "submit" id="btn_add_product" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <!--  Add information detail product -->
    <div id="addDetail" class=" modal fade" role="dialog">
        <div class="modal-dialog" style="margin-left: 300px; ">
        <!-- Modal content-->
        <div class="container">
            <div class="modal-content uploadimage" style="width: 900px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Information Product</h4>
                </div>
                <div class="modal-body">
                    <div class="container"> 
                        <div class="row" >
                        <div class="table-responsive card-body">
                            <table class="table table-bordered" id="imformation-product-table" style="width: 100%">
                                <thead>
                                     <tr>
                                        <th >ID</th>
                                        <th>Color</th>
                                        <th>Size</th>
                                        <th>Quantity</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                            </div>     
                        </div>
                        <form name="form-add-infor-pro" style="margin-bottom: 30px" action="" method="POST" enctype="multipart/form-data" role="form" id="form-add-infor">
                            @csrf
                            <!-- <div id="formappend"> -->
                                
                                <div class="row" style=" margin-bottom: 20px">
                                    
                                    <div class="col-md-3 col-sm-3" style="display: inline-block;margin-right: 90px"  class="form-group">
                                        <input name="product_id" type="hidden" id="editxxx">
                                        <label>Màu sắc</label> <br>
                                        <select id="colorName" name="colorName" class="form-control colorName"></select>
                                    </div>
                                    <div class="col-md-3 col-sm-3" style="display: inline-block;"  class="form-group">
                                        <label for="">Số lượng</label><br>
                                        <input name="quantity" type="number" class="form-control">
                                    </div>
                                    <div  class="col-md-3 col-sm-3" class="form-group">
                                        <label for="">Size</label><br>
                                        <select id="sizeName" name="sizeName" class="form-control sizeName"></select>
                                    </div>
                                    <div  class="col-md-3 col-sm-3" class="form-group">
                                        <label for="">Image</label><br>
                                        <img src="" id="image" alt="">
                                        <input type="file" multiple="true" name="images[]" id="fileToUpload">
                                    </div>
                                </div>
                                
                                <div class="row">
                                     <div style="display: inline-block;"  class="form-group">
                                         <button type="submit" id="btn_add_product_detail" class="btn btn-primary">Add</button><br>
                                    </div>
                                </div>
                               
                            <!-- </div> -->
                           
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        </div>
            </div>
            <!-- /.modal-content --> 
        </div>
        </div>
        <!-- /.modal-dialog --> 
    </div>
    <!-- Edit product detail table-->
    <div class="modal fade" role="dialog" id="editProDetail" >
        <div class="modal-dialog"  style="margin-left: 350px; ">
            <div class="modal-content" style="width: 800px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Edit Product</h4>
                </div>
                <div class="modal-body" >
                    <form action="" id="formEditProDetail" name="form_edit_pro_detail" method="POST" role="form"  >
                        @csrf 
                        
                        <div class="form-group">
                            <label for="">ID(*)</label>
                            <input type="text" class="form-control" id="edit_product_id" placeholder="Input field" name="id" disabled="" value="{{old('code')}}">
                            <input type="hidden" name="product_id" value="">
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="">Quantity(*)</label>
                            <input type="text" class="form-control" id="" placeholder="Input field" required="" name="quantity" value="{{old('quantity')}}">
                            <input type="hidden" name="image" value="">
                        </div>
                        
                        <div class="form-group">
                            <label for="">Size</label>
                            <select id="sizeName1" name="size_id" class="form-control sizeName"></select>

                        </div>
                        
                        <div class="form-group">
                            <label for="">Color</label>
                            <select id="colorName1" name="color_id" class="form-control colorName"></select>
                            
                        </div>
                        <button  id="btn_edit_product" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    
@endsection


@section('footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="{{asset('js/admin.js')}}"></script>
<script type="text/javascript">


    // $(function(){
    //     var table = $('#product-table').DataTable({
    //         processing: true,
    //         serverSide: true,
    //         ajax: 'getlist',
    //         columns: [
    //             { data: 'code', name: 'code' },
    //             { data: 'name', name: 'name' },
    //             { data: 'vendor_id', name: 'vendor_id' },
    //             { data: 'action', name: 'action' },

    //         ]
    //     });
    // })
</script>
@endsection