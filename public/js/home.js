$(document).on('click','#btnAddCartQuickView',function(e){
	// alert('hskjhf');
	e.preventDefault();
	var proID= $(this).attr('productID');
	console.log(proID);
	var form = document.forms.namedItem("formQuickView");
    var data = new FormData(form);
    console.log(data);
	$.ajax({
		
		url: url2 + proID,
		method: 'POST',
		data : data,
        contentType: false,
        processData: false,
		success: function(response){
			console.log(response);
			if(response.error== "true"){
				$('#outOfStock').html('');
				$('#outOfStock').append(" <b>Sản phẩm tạm thời hết hàng</b>.");;
			}else{
				// alert('dsd');
				$('#outOfStock').html('');
				toastr["success"]('Thêm vào gỏ hàng thành công');
			}
		},
		
	})
});


$(document).ready(function(){
	// e.preventDefault();
	$('.deleteCart a').click(function(e){
		e.preventDefault();
		// alert('dsfds');
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
	});
});