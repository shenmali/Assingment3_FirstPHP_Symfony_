function msg(){  
	alert("Merhaba Hosgeldin");  
       }
       



  document.addEventListener("DOMContentLoaded", function() {
	var dt = new Date();
	document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
      });