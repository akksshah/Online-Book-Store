function removalofpro(prid){
	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "include/remove.php?pid="+prid, true);
	xhttp.send();
	window.open('cart.php','_self');
}
function increaseqty(prid,quan){
	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "include/increase.php?pid="+prid+"&quan="+quan, true);
	xhttp.send();
	alert("de dana dan");
	window.open('cart.php','_self');
}
function insertintocart(pid){
	alert("insert?");
}