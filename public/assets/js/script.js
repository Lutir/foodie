$(document).ready(function(){ 
	$('.vendors li').hide();
	var count = 0;
	$('.vendors').click(function(){		
		if(count%2==0)
			$('.vendors li').show('slow');
		else
			$('.vendors li').hide('slow');
		count++;
	});

	$('.vendor-item').click(function()
	{
		var name = $(this).data('name');
		console.log(name);
		window.location = 'http://localhost:8000/home/order/'+ name;
	});
});
var menuItems = ['dashboard','addItem','addVendor','addHostel','addCateg'];
var hostelNames = ['diamond','opal','jade','coral','amber'];


function changeView(p){
		var a = p;
		$('#'+a).removeClass('no-view');
		for(var i=0;i<menuItems.length;i++)
		{
			if(menuItems[i] != p)
				$('#'+menuItems[i]).addClass('no-view');
		}
	}