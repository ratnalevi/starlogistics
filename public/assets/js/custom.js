function validateform(){
	if(document.getElementById('name').value == '') {
		alert("Name Field Should Not Be Empty");
		document.getElementById('name').focus();
		return false;
	}

	if(document.getElementById('mobile').value == '') {
		alert("Please Enter Mobile Number");
		document.getElementById('mobile').focus();
		return false;
	}

	if(document.getElementById('mobile').value.length < 10 ) {
		alert("Please Enter Valid Mobile Number");
		document.getElementById('mobile').focus();
		return false;
	    }

   if(isNaN(document.getElementById('mobile').value)) {
	alert("Please Enter Valid Mobile Number");
	document.getElementById('mobile').focus();
	return false;
   }

	if(document.getElementById('email').value == '') {
		alert("Please Enter Email-Id");
		document.getElementById('email').focus();
		return false;
	}

	var email = document.getElementById('email').value

	var at="@"
	var dot="."
	var lat=email.indexOf(at)
	var lstr=email.length
	var ldot=email.indexOf(dot)
	
	if (email.indexOf(at)==-1){
	   alert("Invalid E-mail ID");
	   return false;
	}

	if (email.indexOf(at)==-1 || email.indexOf(at)==0 || email.indexOf(at)==lstr){
	   alert("Invalid E-mail ID")
	   return false;
	}

	if (email.indexOf(dot)==-1 || email.indexOf(dot)==0 || email.indexOf(dot)==lstr){
	   alert("Invalid E-mail ID")
	    return false;
	}

	 if (email.indexOf(at,(lat+1))!=-1){
	    alert("Invalid E-mail ID")
	    return false;
	 }

	 if (email.substring(lat-1,lat)==dot || email.substring(lat+1,lat+2)==dot){
	    alert("Invalid E-mail ID")
	    return false;
	 }

	 if (email.indexOf(dot,(lat+2))==-1){
	    alert("Invalid E-mail ID")
	    return false;
	 }

	 if (email.indexOf(" ")!=-1){
	    alert("Invalid E-mail ID")
	    return false;
	 }
	return true;
}