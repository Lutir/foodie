$(document).ready(function(){
	$('.viewMenu').click(function()
	{
		var place = $('#vendorName option:selected').val();
		console.log(place);
		ajaxCall(place, 'viewMenu');
	});
});

function addHostelName(){
	var x = $('#hostelName').val();
	console.log(x);
	var y = 'addHostel';
	ajaxCall(x, y);
}



function ajaxCall(x,y){
	$.ajaxSetup(
		    {
		        headers:
		        {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        }
		    });
	 		var data = {};
	 		data.hostelName = x;
	 		
	 		console.log(data);
			$.ajax(
		    {
		        type: "POST",
		        url: '/'+y,
		        data: data,
		        dataType: "json",
		        success: function(data){
		        	// console.log("helo");
		        	$('#success').modal('show');
		        },
		        error: function(jqXHR,testStatus,errorThrown){
		        	console.log(errorThrown);
		        }
			});
}