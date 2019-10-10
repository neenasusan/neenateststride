$(document).ready(function(){
 
    // show html form when 'create product' button was clicked
    $(document).on('click', '.create-product-button', function(){
        // categories api call will be here
		$.getJSON("http://canvas.millions.com/grfx4.dv/api/product/read.php", function(data){
			
			var categories_options_html="<select name='category_id' class='form-control'>";
			
			$.each(data.records, function(key, val){
				categories_options_html+="<option value="+val.clientid+">` + val.name + `</option>";
			});
			categories_options_html+="</select>";
			
 			var create_product_html="<div id='read-products' class='btn btn-primary pull-right m-b-15px read-products-button'><span class='glyphicon glyphicon-list'></span> Read Products </div><form id='create-product-form' action='#' method='post' border='0'><table class='table table-hover table-responsive table-bordered'><tr><td>Clientid</td><td><input type='text' name='clientid' class='form-control' required /></td></tr><tr><td>Email</td><td><input type='text' name='email' class='form-control' required /></td></tr><tr><td></td><td><button type='submit' class='btn btn-primary'><span class='glyphicon glyphicon-plus'></span> Create Product</button></td></tr></table></form>";
			
			$("#page-content").html(create_product_html);
 
			// chage page title
			changePageTitle("Create Product");

			
		});
		
		
		
		
    });
 
    // 'create product form' handle will be here
	$(document).on('submit', '#create-product-form', function(){
    // form data will be here
		var form_data=JSON.stringify($(this).serializeObject());
});
	
$.ajax({
    url: "http://canvas.millions.com/grfx4.dv/api/product/read.php",
    type : "POST",
    contentType : 'application/json',
    data : form_data,
    success : function(result) {
        // product was created, go back to products list
        showProducts();
    },
    error: function(xhr, resp, text) {
        // show error to console
        console.log(xhr, resp, text);
    }
});
 
return false;	
	
	
});