@extends('admin_layouts.app')


@section('content')
    <div class="card-body table-responsive">
        <button data-title="add" data-toggle="modal" data-target="#addColor" class="btn btn-sm btn-info addColor">ADD COLOR</button>
        
        <table class="table table-bordered" id="color-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Color Name</th>
                    <th>Color</th>
                    <th style="width: 110px;">Action</th>
                </tr>
            </thead>
        </table>       
    </div>
    <!-- Add product-->
    <div class="modal fade" id="addColor" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">New Color</h4>
                </div>
                <div class="modal-body">
                    <form action="{{asset('')}}admin/color" id="addColorForm" method="POST" role="form"  >
                        @csrf 
                        
                        <div class="form-group">
                            <label for="">Color</label>
                            <input type="color" required="" name="color">
                        </div>
                        
                        <div class="form-group">
                            <label for="">Color Name</label>
                            <input type="text" required="" name="color_name">
                        </div>
                        
                        <button name= "submit" id="btn_add_product" class="btn btn-primary">Submit</button>
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
<script type="text/javascript" src="{{asset('js/color.js')}}"></script>

@endsection