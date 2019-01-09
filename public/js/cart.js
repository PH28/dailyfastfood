     var storageKey='cart';
		//var cart = [];
		var datastring=localStorage.getItem(storageKey);
		var cart;
		if(datastring){
			cart =JSON.parse(datastring);
			drawCheckout();
		}else{
			cart=[];
		}
		
		$(document).ready(function(){
			
			$('.add2cart').on('click', function(){
				var proId = $(this).attr('productId');
				
				var pName = $('#pro-'+proId).find('#productName').text();
				var imgUrl = $('#pro-'+proId).find('img').attr('src');
				var price = $('#pro-'+proId).find('#price').text();
				var obj = {
					id: proId,
					productName: pName,
					imageUrl: imgUrl,
					price: price
				};
				// Check san pham co trong gio hang hay chua
				var flag = false;
				for (var i = 0; i < cart.length; i++) {
					if(cart[i].id == obj.id){
						flag = true;
						break;
					}
				}
				// san pham chua co trong gio hang
				if(flag === false){
					obj.quantity = 1;
					cart.push(obj);
				}else{ // san pham da co trong gio hang
					cart[i].quantity += 1;
				}
				    drawCheckout();
				
			});
		});
		function drawCheckout(){
            
			$('.tbody').empty();
			var ckUnit = "";
			var totalMoney = 0;
			
			for (var i = 0; i < cart.length; i++) {
				totalMoney += cart[i].price * cart[i].quantity;
				ckUnit += `
					<tr>
						<td>${cart[i].id}</td>
						<td>${cart[i].productName}</td>
						<td>
							<img src="${cart[i].imageUrl}" alt="" width="100"  height="80">
						</td>
						<td>
							<input type="number" onchange="changeUnitQuantity(this, ${cart[i].id})" name="" value="${cart[i].quantity}" min="0" step="1">
							<button type="button" onclick="removeUnit(${cart[i].id})" class="btn btn-xs btn-info">
								<span class="glyphicon glyphicon-remove"></span>
							</button>
						</td>
						<td>
							<b>$<span class="unit-price">${cart[i].price * cart[i].quantity}</span></b>
						</td>
					</tr>			
				`;
			}
			ckUnit += `
				<tr>
					<td colspan="4">Total Price</td>
					<td><b>$${totalMoney}</b></td>
				</tr>	
			`;
			$('.item').append(ckUnit);
			localStorage.setItem(storageKey,JSON.stringify(cart));
		}
		function removeUnit(id){
			// Check san pham co trong gio hang hay chua
			for (var i = 0; i < cart.length; i++) {
				if(cart[i].id == id){
					cart.splice(i, 1);
					break;
				}
			}
			drawCheckout();
		}
		function changeUnitQuantity(e, id){
			var ipValue = e.value;
			if(ipValue > 0){
				for (var i = 0; i < cart.length; i++) {
					if(cart[i].id == id){
						cart[i].quantity = parseInt(ipValue);
						break;
					}
				}
				drawCheckout();
			}else{
				removeUnit(id);
			}
		}