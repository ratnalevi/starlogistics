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

	var $jq = jQuery.noConflict();

	$jq(function(){
		var p=$jq('#content').responsiveSlides({
			height:1003,						// slides conteiner height
			background:'#fff',				// background color and color of overlayer to fadeout on init
			autoStart:true,					// boolean autostart
			startDelay:0,					// start whit delay
			effectInterval:5000,			// time to swap photo
			effectTransition:1000,			// time effect
			pagination:[
				{
					active:true,			// activate pagination
					inner:true,				// pagination inside or aouside slides conteiner
					position:'B_L', 		/* 											*/
					margin:10, 				// pagination margin
					dotStyle:'', 			// dot pagination class style
					dotStyleHover:'', 		// dot pagination class hover style
					dotStyleDisable:''		// dot pagination class disable style
				}
			]
		});
	});