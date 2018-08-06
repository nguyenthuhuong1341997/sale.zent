var table = $('#product-table').DataTable({
    processing: true,
    serverSide: true,
    ajax: url,
    orders: [],
    columns: [
        { data: 'id', name: 'id' },
        { data: 'code', name: 'code' },
        { data: 'name', name: 'name' },
        { data: 'price', name: 'price' },
        { data: 'original_price', name: 'original_price' },
        { data: 'action', name: 'action' },

    ]
});

//Find all category product
$.post('categories', function(response){
    if(response.success)
    {
        var categoryName = $('#categoryName').empty();
        $.each(response.category, function(i, categories){
            $('<option/>', {
                value:categories.id,
                text:categories.sex +'/ '+ categories.name
            }).appendTo(categoryName);
        })
    }
}, 'json');

//find all vendors product
$.post('vendors',function(response){
    if(response.success)
    {
        var vendorName= $('#vendorName').empty();
        $.each(response.vendors, function(i,vendor){
            $('<option>',{
                value: vendor.id,
                text:vendor.name_vendor
            }).appendTo(vendorName);
        })
    }
});

//find all sizes
$.post('sizes',function(response){
    if(response.success)
    {
        var sizeName= $('.sizeName').empty();
        $.each(response.sizes, function(i,size){
            $('<option>',{
                value: size.id,
                text: size.size
            }).appendTo(sizeName);
        })
    }
});

//find all colors
$.post('colors',function(response){
    if(response.success)
    {
        var colorName= $('.colorName').empty();
        $.each(response.colors, function(i,color){
            $('<option>',{
                value: color.id,
                text: color.color_name
            }).appendTo(colorName);
        })
    }
})

//Add product
$(document).on('click','#btn_add_product',function(e){
    e.preventDefault();
    $.ajax({
        url: 'home',
        method: 'POST',
        data : $('#add').find('form').serialize(),
        success : function(data){
            if(data.success == "yes"){
                $('#add').modal('toggle');
                table.ajax.reload();

            }
            
        },
        error: function(data){
        $('#validation-errors').html('');
           $.each(data.responseJSON.errors, function(key,value) {

                if(key=='code'){
                    $('#code-errors').html('');
                    $('#code-errors').append('<p style="color: red;">'+value+'</p');
                }
                if(key=='name'){
                    $('#name-errors').html('');
                    $('#name-errors').append('<p style="color: red;">'+value+'</p');
                }
                if(key=='price'){
                    $('#price-errors').html('');
                    $('#price-errors').append('<p style="color: red;">'+value+'</p');
                }
                if(key=='original_price'){
                    $('#original_price-errors').html('');
                    $('#original_price-errors').append('<p style="color: red;">'+value+'</p');
                }
                if(key=='description'){
                    $('#description-errors').html('');
                    $('#description-errors').append('<p style="color: red;">'+value+'</p');
                }

            }); 
        }
    })     
});


//show table of information product and form add information product
$('#product-table').on('click','.add_detail',function(e){
    var user_id= $(this).attr('userId');
    // console.log(user_id);
    document.getElementById("editxxx").value= user_id;
    $('#imformation-product-table').DataTable().destroy();
    var table= $('#imformation-product-table').DataTable({
        paging: false,
        retrieve: true,
        processing: true,
        serverSide: true,
        ajax: url1 + user_id,
        orders: [],
        columns: [
            { data: 'id', name: 'id' },
            { data: 'color_name', name: 'color' },
            { data: 'size', name: 'size' },
            { data: 'quantity', name: 'quantity' },
            {data: 'image', name:'image'},
            {data: 'action', name:'action'},
        ]
    });
});

//Add products_details table and request
$(document).on('click','#btn_add_product_detail',function(e){
    e.preventDefault();
    var product_idxx= $("#editxxx").val();
    
    var form = document.forms.namedItem("form-add-infor-pro");
    var data = new FormData(form);
    console.log(url1+product_idxx);
    $.ajax({
        url: url1+product_idxx,
        method: 'POST',
        data : data,
        contentType: false,
        processData: false,
        success : function(data){
            console.log(data);
            if(data.success == "yes"){
               $('#imformation-product-table').DataTable().ajax.reload();
            }
        },
    })     
});


//Delete product
$('#product-table').on('click','.btn-danger',function(){
    var user_id= $(this).attr('userId');
    
    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this product!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        $.ajax({
            type: 'delete',
            url: 'admin_res/' + user_id,
            success:function(response){
                table.ajax.reload();
            }
        })
        swal("Poof! Product has been deleted!", {
          icon: "success",
        });
      } else {
        swal("Product is safe!");
      }
    });
    // })
});

//Delete product-details table
$('#imformation-product-table').on('click','.delete_infor_product',function(){
    var pro_detail= $(this).attr('proDetail');
    
    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this product!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        $.ajax({
            type: 'delete',
            url: url1 + pro_detail,
            success:function(data){
                console.log(data);
                if(data.success == "yes"){
               $('#imformation-product-table').DataTable().ajax.reload();
            }
            }
        })
        swal("Poof! Product has been deleted!", {
          icon: "success",
        });
      } else {
        swal("Product is safe!");
      }
    });
    // })
});

//Show 
$(document).on('click','.show', function(){
    var id=$(this).attr("userId");
    $.ajax({
        url: 'proShow/'+id,
        method: 'GET',
        
        // dataType: 'JSON',
        success: function (response) {
            console.log(response);
            
            $('#name').text(response.name);
            document.getElementById("image").src=response.image;
            $('#size').text(response.size);
            $('#color').text(response.color);
            $('#description').text(response.description);
            $('#quantity').text(response.quantity);
            $('#vendor').text(response.name_vendor);
            $('#price').text(response.price);

        }
    });
});

$('#imformation-product-table').on('click','.edit_detail_infor_product',function(){
    var product_detail_id= $(this).attr("proDetail");
    $.ajax({
        url: url1 +'edit/'+product_detail_id,
        method: 'GET',
        success: function(response){
            console.log(response[0].image);
            $('#formEditProDetail').find('input[name="id"]').val(response[0].id);
            $('#formEditProDetail').find('input[name="product_id"]').val(response[0].product_id);
            $('#formEditProDetail').find('input[name="quantity"]').val(response[0].quantity);
            $('#formEditProDetail').find('input[name="image"]').val(response[0].image);
            // document.getElementById("image").src= 'Storage/public'+ response[0].image;
        }
    })
})

 //Edit
$(document).on('click','#btn_edit_product',function(e){
    // e.preventDefault();
    var product_idxx= $("#edit_product_id").val();
    // alert(product_idxx);
    var form = document.forms.namedItem("form_edit_pro_detail");
    var data = new FormData(form);
    console.log(data);
    $.ajax({
        url: url1+'update/'+product_idxx,
        method: 'POST',
        data : data,
        contentType: false,
        processData: false,
        success : function(data){
            console.log(data);
            if(data.success == "yes"){
               $('#imformation-product-table').DataTable().ajax.reload();
               // alert('sfasfas');
            }
        },
    })   
});


$(document).on('click','#editProduct', function(){
    var id=$(this).attr("userId");
     location.href = 'productsEdit/'+id;
    // alert( "Handler for .click() called." );
 });

