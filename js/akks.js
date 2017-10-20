function removalofpro(prid){
	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "include/remove.php?pid="+prid, true);
	xhttp.send();
	window.open('cart.php','_self');
}