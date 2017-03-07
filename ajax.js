function signup()
{
  var xhttp= new XMLHttpRequest();
  xhttp.onreadystatechange=function() {
    if(this.readyState==4&&this.status==200) {
      document.getElementById("form1").innerHTML=this.responseText;
    }
  };
  xhttp.open("GET","signup.php",true);
  xhttp.send(); 
}

function showqr()
{
	var xhtml=new XMLHttpRequest();
	var fname1=document.getElementById('fname').value;
	var lname1=document.getElementById('lname').value;
	var email1=document.getElementById('email').value;
   	xhtml.open("POST","qr.php",true);
   	xhtml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhtml.onreadystatechange=function() {
   		if (this.readyState==4 && this.status==200) {
      		document.getElementById("qr1").innerHTML=this.responseText;
    	}
    	
	};
	xhtml.send("fname="+fname1+"&lname="+lname1+"&email="+email1);
	return false;    	
}
function pop()
{
	var sign1=document.getElementById("sign");
	var modal1=document.getElementById("moda");
	var close = document.getElementById("clos");
	sign1.onclick=function() {
		modal1.style.display= "block";
	}
	window.onclick = function(event) {
    	if (event.target == modal1) {
        	modal1.style.display = "none";
    	}
	}
    close.onclick = function() {
    	modal1.style.display = "none";
	}
    signup();
}