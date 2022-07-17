function search_table() {
	var xhttp = new XMLHttpRequest();
	var name = document.getElementById("search").value;

	xhttp.onreadystatechange = function () {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			document.getElementById("results").innerHTML = xhttp.responseText;
		}
	}

	xhttp.open("GET", "../controller/search_con.php?name=" + name, true);
	xhttp.send();
}
// var x = document.getElementById('search');
// x.addEventListener('keyup', search_table(x.value));
