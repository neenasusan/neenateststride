function readProductsTemplate(data, keywords){
 
    var read_products_html=" <form id='search-product-form' action='#' method='post'>"+
        "<div class='input-group pull-left w-30-pct'>"+
 
            "<input type='text' value='" + keywords + "' name='keywords' class='form-control product-search-keywords' placeholder='Search products...' />"+
 
            "<span class='input-group-btn'><button type='submit' class='btn btn-default' type='button'><span class='glyphicon glyphicon-search'></span></button></span></div></form>"+
 
//        <!-- when clicked, it will load the create product form -->
        "<div id='create-product' class='btn btn-primary pull-right m-b-15px create-product-button'><span class='glyphicon glyphicon-plus'></span> Create Product</div>"+
 
//        <!-- start table -->
        "<table class='table table-bordered table-hover'><tr><th class='w-25-pct'>Clientid</th><th class='w-10-pct'>Email</th></tr>";
 
 
    // loop through returned list of data
    $.each(data.records, function(key, val) {
 
        // creating new table row per record
        read_products_html+="<tr><td>"+val.clientid+"</td><td>"+val.email+"</td><td><button class='btn btn-primary m-r-10px read-one-product-button' data-id='` + val.id + `'><span class='glyphicon glyphicon-eye-open'></span> Read</button><button class='btn btn-info m-r-10px update-product-button' data-id='` + val.id + `'><span class='glyphicon glyphicon-edit'></span> Edit</button><button class='btn btn-danger delete-product-button' data-id='` + val.id + `'><span class='glyphicon glyphicon-remove'></span> Delete</button></td></tr>";
    });
 
    // end table
    read_products_html+="</table>";
 
    // inject to 'page-content' of our app
    $("#page-content").html(read_products_html);
}