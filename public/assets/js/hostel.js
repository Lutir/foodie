$(document).ready(function(){
	
});

function addItem(type){
	var x = $('#dish').val();
	var y = $('#menuVenue option:selected').val();
	var z = $('#menuType option:selected').val();
	var a = $('#menuCateg option:selected').val();
	var b = $('#cost').val();
	if(a==''||b==''||x==''||y==''||z==''){
		var div = '<h4>Fill all the details!</h4>';
		$('.status .modal-body').html('');
		$('.status .modal-body').append(div);
		$('#success').modal('show');
		return false;
	}
	var data = {};
	data.name = x;
	data.cost = b;
	data.type = z;
	data.venue = y;
	data.categ = a;
	data.addorremove = type;
	console.log(data);
	y = 'addMenuItem'

	$.ajaxSetup(
		    {
		        headers:
		        {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        }
		    });	 		
			$.ajax(
		    {
		        type: "POST",
		        url: '/'+y,
		        data: data,
		        dataType: "json",
		        success: function(data){
		        	// console.log("helo");	
		        	console.log(data);		        			        	
		        	if(data=='add1'){
		        		var div = '<h4> Item has been successfully added!</h4>';
		        	}
		        	else if(data=='add0'){
		        		var div = '<h4>Item already exists!</h4>';
		        	}
		        	else if(data=='remove1'){
		        		var div = '<h4> Item has been successfully removed!</h4>';
		        	}
		        	else if(data=='remove0'){
		        		var div = '<h4> Item not found!</h4>';
		        	}
		        	$('.status .modal-body').html('');
		        	$('.status .modal-body').append(div);
		        	$('#success').modal('show');

		        },
		        error: function(jqXHR,testStatus,errorThrown){
		        	console.log(errorThrown);
		        }
			});


}

function removeName(type){
	if(type=='hostel'){
		var x = $('#hostelName').val();
		console.log(x);
	}
	else if(type=='vendor'){
		var x = $('#vendorName').val();
		console.log(x);
	}
	else if(type=='categ')
	if(x==''){
		var div = '<h4>Fill all the details!</h4>';
		$('.status .modal-body').html('');
		$('.status .modal-body').append(div);
		$('#success').modal('show');
		return false;
	}
	var y = 'removeName';
	$.ajaxSetup(
		    {
		        headers:
		        {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        }
		    });
	 		var data = {};
	 		data.name = x;
	 		data.type = type;
	 		console.log(data);
			$.ajax(
		    {
		        type: "POST",
		        url: '/'+y,
		        data: data,
		        dataType: "json",
		        success: function(data){
		        	// console.log("helo");	
		        	console.log(data);		        			        	
		        	if(data==1){
		        		var div = '<h4>'+ type +' name has been successfully deleted!</h4>';
		        	}
		        	else{
		        		var div = '<h4>'+ type +'name not found!</h4>';
		        	}
		        	$('.status .modal-body').html('');
		        	$('.status .modal-body').append(div);
		        	$('#success').modal('show');

		        },
		        error: function(jqXHR,testStatus,errorThrown){
		        	console.log(errorThrown);
		        }
			});
	
}

function addName(type){
	if(type=='hostel'){
		var x = $('#hostelName').val();		
	}
	else if(type=='vendor'){
		var x = $('#vendorName').val();
		console.log('bendor name is '+x);
	}
	else if(type=='categ'){
		var x = $('#categName').val();
		x = x.toLowerCase();
		console.log('categ name is '+x);	
	}
	if(x==''){
		var div = '<h4>Fill all the details!</h4>';
		$('.status .modal-body').html('');
		$('.status .modal-body').append(div);
		$('#success').modal('show');
		return false;
	}
	console.log(x);
	var y = '/addName';
	ajaxCall(x, y, type);
}

function viewAll(type){
	var y = '/viewAll';
	$.ajaxSetup(
		    {
		        headers:
		        {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        }
		    });
	 		var data = {};
	 		data.type = type;
	 		
	 		console.log(data);
			$.ajax(
		    {
		        type: "POST",
		        url: y,
		        data: data,
		        dataType: "json",
		        success: function(data){
		        	// console.log("helo");	
		        	console.log(data);
		        	var content = [];
		        	if(type=='hostel'){
			        	for(var i=0;i<data.length;i++){
			        		content[i] = data[i].hostelName;
			        	}
		        	}
		        	else if(type=='vendor'){
			        	for(var i=0;i<data.length;i++){
			        		content[i] = data[i].vendorName;
			        	}	
		        	}
		        	else if(type=='categ'){
		        		for(var i=0;i<data.length;i++){
			        		content[i] = data[i].name;
			        	}		
		        	}
		        	var div = '<h3><b>Lists of'+ type + 's </b></h3>';
		        	for(var i=1;i<=content.length;i++){
		        		div = div + '<p>'+ i + ')  ' + content[i-1]+' </p>';
		        	}
		        	$('.status .modal-body').html('');
		        	$('.status .modal-body').append(div);
		        	$('#success').modal('show');

		        	
		        },
		        error: function(jqXHR,testStatus,errorThrown){
		        	console.log(errorThrown);
		        }
			});
}





function ajaxCall(x,y,type){
	$.ajaxSetup(
		    {
		        headers:
		        {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        }
		    });
	 		var data = {};
	 		data.name = x;
	 		data.type = type;
			$.ajax(
		    {
		        type: "POST",
		        url: y,
		        data: data,
		        dataType: "json",
		        success: function(data){
		        	// console.log("helo");	
		        	console.log(data);
		        	if(data=='1'){
		        		var div = '<h4>' + type + ' Name successfully added!</h4>';
		        	}
		        	else{
		        		var div = '<h4>' + type +' Name already exists!</h4>';	
		        	}
		        	$('.status .modal-body').html('');
		        	$('.status .modal-body').append(div);
		        	$('#success').modal('show');
		        },
		        error: function(jqXHR,testStatus,errorThrown){
		        	console.log(errorThrown);
		        }
			});
}