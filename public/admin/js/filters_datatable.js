jQuery(function ($) {
    
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
		"dom": '<"length col-md-1"l><"filters col-md-11"f>tp<"clear">',
        ajax: "/admin/orders/display",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'customers_name', name: 'customers_name'},
            {data: 'ordered_source_label', name: 'ordered_source_label'},
			{data: 'order_price', name: 'order_price'},
            {data: 'date_purchased', name: 'date_purchased'},
            {data: 'orders_status', name: 'orders_status'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ],
		initComplete: function () {
            //this.api().columns().every( function (idx) {
			this.api().columns().indexes().flatten().each( function ( idx ) {

				var column = this;
				var column = this.column( idx );
				console.log(idx);
				label = ['Customers', 'Sources', 'Dated', '', 'Statuses'];
				if(idx != 0 && idx != 4 && idx != 6){ //Skip ID & Action column
					console.log(column);
					var select = $('<label><select id="filter-'+label[idx-1]+'" class="form-control form-control-sm"><option value="">'+label[idx-1]+'</option></select></label>')
						.appendTo( $("#example1_filter") )
						.on( 'change', 'select', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
							);
							column
								.search( val ? '^'+val+'$' : '', true, false )
								.draw();
						} );
	 
					column.data().unique().sort().each( function ( d, j ) {
						select.find('select').append( '<option value="'+d+'">'+d+'</option>' )
					} );
					
					if(idx == 5){
						
						var btnGroup = $('<div class="btn-group" role="group" aria-label="..."><button type="button" class="btn btn-default active" data-value="">All</button></div>')
							.appendTo($("#filter-btn-row"))
							.on( 'click', 'button', function () {
								var val = $.fn.dataTable.util.escapeRegex(
									$(this).data('value')
								);
								column
									.search( val ? '^'+val+'$' : '', true, false )
									.draw();
									
								$("#filter-btn-row .btn").removeClass("active");
								$(this).addClass("active");
								$(this).blur();
							});
							
						column.data().unique().sort().each( function ( d, j ) {
							btnGroup.append( '<button type="button" class="btn btn-default" data-value="'+d+'">'+d+'</button>' );
						} );
					}
				}
            } );
			
			var moreFilters = $('<label><button class="btn btn-default" type="button" id="more-filters" >More filters</button></label>')
							//+'<aside id="morefilter-aside">'
							//+'<button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
							//+'<ul class="asideList"><li><a href="" class="asideAnchor">Link</a></li></ul></aside>')
							.appendTo($("#example1_filter"))
							.on( 'click', 'button', function () {
								console.log("More btn clicked");
								console.log($("#morefilter-aside"));
								$("#morefilter-aside").toggleClass('active');
							});
							
			$("#example1_filter").on( 'click', '.close', function () {
								$("#morefilter-aside").toggleClass('active');
							});
							
			var sortDropdown = $('<div class="dropdown">'
								  +'<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'
									+'Sort'
									+'<span class="caret"></span>'
								  +'</button>'
								  +'<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">'
									+'<li class="dropdown-header">Sort By</li>'
									+'<li><label class="radio-inline"><input type="radio" name="optradio">Date (oldest first)</label></li>'
									+'<li><label class="radio-inline"><input type="radio" name="optradio">Date (newest first)</label></li>'
									+'<li><label class="radio-inline"><input type="radio" name="optradio">Customer name (A-Z)</label></li>'
									+'<li><label class="radio-inline"><input type="radio" name="optradio">Customer name (Z-A)</label></li>'
									+'<li><label class="radio-inline"><input type="radio" name="optradio">Order status (A-Z)</label></li>'
									+'<li><label class="radio-inline"><input type="radio" name="optradio">Order status (Z-A)</label></li>'
									+'<li><label class="radio-inline"><input type="radio" name="optradio">Total price (low to high)</label></li>'
									+'<li><label class="radio-inline"><input type="radio" name="optradio">Total price (high to low)</label></li>'
								  +'</ul>'
								+'</div>')
							//<div class="btn-group" role="group" aria-label="..."><button type="button" class="btn btn-default" data-value="">All</button></div>')
							.appendTo($("#example1_filter"))
							.on( 'click', 'button', function () {
								
							});
        }
    }); 
	
	$.fn.DataTable.ext.order['dom-radio'] = function ( settings, col ) {
		return this.api().column( col, {order:'index'} ).nodes().map( function ( td, i ) {
			return $('input[type=radio]:checked', td).val();
		} );
	};
});