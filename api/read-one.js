$(document).ready(function(){
 
    // handle 'read one' button click
    $(document).on('click', '.read-one-product-button', function(){
        // product ID will be here
		var clientid = $(this).attr('data-id');
    });
	
	
	$.getJSON("http://canvas.millions.com/grfx4.dv/api/product/read.php?clientid=" + id, function(data){
    // read products button will be here
		
		var read_one_product_html="<div id='read-products' class='btn btn-primary pull-right m-b-15px read-products-button'><span class='glyphicon glyphicon-list'></span> Read Products</div><table class='table table-bordered table-hover'><tr><td class='w-30-pct'>Clientid</td><td class='w-70-pct'>"+data.clientid+"</td></tr><tr><td class='w-30-pct'>Email</td><td class='w-70-pct'>"+data.email+"</td></tr></table>";

});
	$("#page-content").html(read_one_product_html);
 
// chage page title
//changePageTitle("Create Product");
	
 
});