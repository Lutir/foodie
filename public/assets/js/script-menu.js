$(document).ready(function()
{	
	var order = [];
	$('.addToMenu').click(function()
	{		
		var name = $(this).parent().parent().find("h4").first().text();
		var temp = $(this).parent().parent().find("h4").text();
		var type = $(this).parent().parent().find("span").first().text();
		console.log(type);
		var cost='';
		var quantity = 1;		
		console.log(temp[2]);
		for(var j=name.length;j<temp.length;j++){
			cost+=temp[j];
		}

		console.log(cost);
		console.log(name);
		cost = Number(cost);
		console.log(cost);
		var counter=0;
		for(var i=0;i<order.length;i++){
			if(order[i].name==name){
				order[i].quantity = Number(order[i].quantity)+1;
				order[i].totalCost = Number(order[i].cost)*Number(order[i].quantity);
				$(this).parent().find('span').text(Number(order[i].quantity));				
				console.log("Quantity is-"+order[i].quantity +"cost is-"+ order[i].cost+"hey");
				break;
			}
			counter++;
		}
		if(counter == order.length)
		{
			var obj = {
					'name':name,
					'quantity':quantity,
					'cost':Number(cost),
					'totalCost':Number(cost)*Number(quantity),
					'type':type
				};
				$(this).parent().find('span').text(Number(obj.quantity));				
				order.push(obj);				
		}
		console.log(order);
	});

	$('.removeFromMenu').click(function()
	{
		var name = $(this).parent().parent().find("h4").first().text();
		var counter=0;
		for(var i=0;i<order.length;i++){
			if(order[i].name==name){
				if(order[i].quantity>1)
				{
					order[i].quantity--;
					order[i].totalCost =order[i].quantity*order[i].cost;
					$(this).parent().find('span').text(Number(order[i].quantity));
					break;
				}
				else if(order[i].quantity==1){
					order.splice(i, 1);
					console.log(order);
					$(this).parent().find('span').text('0');				
				}
			}
			counter++;
		}
		console.log(order);
	});	

});