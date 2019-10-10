$(document).ready(function(){
 
    // show list of product on first load
    showProducts();
	
	
	$(document).on('click', '.read-products-button', function(){
    showProducts();
});
 
});

function showProducts(){
	
	$.getJSON("http://canvas.millions.com/grfx4.dv/api/product/read.php", function(data){
		
		var read_products_html="<div id='create-product' class='btn btn-primary pull-right m-b-15px create-product-button'><span class='glyphicon glyphicon-plus'></span> Create Product</div> <table class='table table-bordered table-hover'><tr><th class='w-25-pct'>clientid</th><th class='w-10-pct'>email</th><th class='w-25-pct text-align-center'>Action</th></tr>";
		
		
		$.each(data.records, function(key, val) {
 
    // creating new table row per record
    read_products_html+="<tr> <td>"+val.clientid+" </td> <td>$"+val.email+"</td><td><button class='btn btn-primary m-r-10px read-one-product-button' data-id='` + val.clientid + `'><span class='glyphicon glyphicon-eye-open'></span> Read</button><button class='btn btn-info m-r-10px update-product-button' data-id='` + val.clientid + `'><span class='glyphicon glyphicon-edit'></span>Edit</button><button class='btn btn-danger delete-product-button' data-id='` + val.clientid + `'><span class='glyphicon glyphicon-remove'></span>Delete</button></td></tr>";
        
});
		
		read_products_html+="</table>";
		$("#page-content").html(read_products_html);
 
});
 
}