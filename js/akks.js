    function removalofpro(prid){
	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "include/remove.php?pid="+prid, true);
	xhttp.send();
	window.open('cart.php','_self');
}
function increaseqty(prid,quan){
	var xhttp = new XMLHttpRequest();
	var x = "include/increase.php?pid="+prid+"&quan="+quan;
	xhttp.open("GET", "include/increase.php?pid="+prid+"&quan="+quan, true);
	xhttp.send();
	window.open('cart.php','_self');
}
function decreaseqty(prid,quan){
	var xhttp = new XMLHttpRequest();
	var x = "include/increase.php?pid="+prid+"&quan="+quan;
	xhttp.open("GET", "include/decrease.php?pid="+prid+"&quan="+quan, true);
	xhttp.send();
	window.open('cart.php','_self');
}
function insertcart(prid){                                          
	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "include/insertintocart.php?pid="+prid, true);
	xhttp.send();
	alert("Product has been to the cart");
}