 //<![CDATA[ 
function menuNav() {
	var x = document.getElementById("TopnavMenu");

	if (x.className === "topnav") {
	  x.className += " responsive";
	} else {
	  x.className = "topnav";
	}
}

