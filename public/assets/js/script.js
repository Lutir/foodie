$(document).ready(function(){ 

});
var menuItems = ['dashboard','addItem','addVendor','addHostel'];
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