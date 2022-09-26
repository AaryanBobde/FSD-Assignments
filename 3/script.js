
		function Check(){

			var user = document.getElementById('user').value;
			var pass = document.getElementById('pass').value;
			var confirmpass = document.getElementById('conpass').value;
			var mobileNumber = document.getElementById('mobileNumber').value;
			var emails = document.getElementById('emails').value;


            var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;


			if(user == ""){
				document.getElementById('username').innerHTML =" Please fill the  field";
				return false;
			}

			if(pass == ""){
				document.getElementById('passwords').innerHTML =" Please fill the password field";
				return false;
			}

			if((pass.length <= 7)) {
				document.getElementById('passwords').innerHTML =" Passwords lenght must be more than  7 ";
				return false;
                                              
			}
            
            if((pass.match(passw))) {
	                                  
			}else{
                document.getElementById('passwords').innerHTML =" Passwords lenght must have one uppercase letter, one digit and one special character";
				return false;
            }

            if(pass.indexOf('@','#','$','&','*') <= 0 ){
				document.getElementById('passwords').innerHTML =" Must include any special Character @,#,$,& or *";
				return false;
                                                       }

			if(pass!=confirmpass){
				document.getElementById('confrmpass').innerHTML =" Passwords do not match ";
				return false;
			}

			if(confirmpass == ""){
				document.getElementById('confrmpass').innerHTML =" Please fill the field";
				return false;
			}


			if(mobileNumber == ""){
				document.getElementById('mobileno').innerHTML =" Please fill the mobile NUmber field";
				return false;
			}
			if(isNaN(mobileNumber)){
				document.getElementById('mobileno').innerHTML =" characters not allowed";
				return false;
			}
			if(mobileNumber.length!=10){
				document.getElementById('mobileno').innerHTML =" Mobile Number must be 10 digits ";
				return false;
			}

			if(emails == ""){
				document.getElementById('emailids').innerHTML =" Please fill the email id field";
				return false;
			}
			if(emails.indexOf('@') <= 0 ){
				document.getElementById('emailids').innerHTML =" Invalid Position of @";
				return false;
			}

			if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
				document.getElementById('emailids').innerHTML ="  Invalid Position of . (dot)";
				return false;
			}


		}
