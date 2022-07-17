(function(){
		'use strict';
		var usernameValid = false;
		var usernameErr = document.getElementById('usernameErr');
		var username = document.getElementById('username');
		var pass = document.getElementById('pass');
		var confPass = document.getElementById('confPass');
	
		confPass.addEventListener('keyup', function(){
			if(pass.value === confPass.value){
				confPass.className = "form-control is-valid";
			}
			else{
				confPass.className = "form-control is-invalid";
			}
		});
		
		pass.addEventListener('keyup', function(){
			if(pass.value === confPass.value){
				confPass.className = "form-control is-valid";
			}
			else{
				confPass.className = "form-control is-invalid";
			}
		});
					
			
		username.addEventListener('keyup', function(event){
			
			var xhttp = new XMLHttpRequest();
			
			console.log(username.value);
			
			xhttp.onreadystatechange = function(){
				if(xhttp.readyState === 4 && xhttp.status === 200){
					if(xhttp.responseText==="true"){
						usernameErr.innerHTML = "Available!";
						usernameErr.className = "text-success";
						username.className = "form-control is-valid";
						usernameValid = true;
					}
					else if(xhttp.responseText==="false"){
						usernameErr.innerHTML = "Username taken! Please Try another username";
						username.className = "form-control is-invalid";
						usernameErr.className = "text-danger";
						usernameValid = false;
					}
				}
			};
			var table = "setter";
			var link = "js/entity_availability.php?username=" + username.value + "&table="+table;
			console.log(link);
			xhttp.open("GET", link , true);
			xhttp.send();
			
		});
		
	window.addEventListener('load', function (){
		var form = document.getElementById('form');
		var firstName = document.getElementById('firstName');
		var lastName = document.getElementById('lastName');
		var username = document.getElementById('username');
		var dob = document.getElementById('dob');
		var gender = document.querySelector('input[name="gender"]');
		var type = document.querySelector('input[name="type"]');
		
		var institute = document.getElementById('institute');
		var address = document.getElementById('address');
		var email = document.getElementById('email');
		var mobNo = document.getElementById('mobNo');
		var pass = document.getElementById('pass');
		var confPass = document.getElementById('confPass');
		
	form.addEventListener('submit', function(event){

			
		
		
		if(
			  !lastName.checkValidity() ||
			  !username.checkValidity() ||
			  usernameValid === false ||
			  !dob.checkValidity() ||
			  !gender.checkValidity() ||
			  !type.checkValidity() ||
			  //!institute.checkValidity() ||
			  !address.checkValidity() ||
			  !email.checkValidity() ||
			  !mobNo.checkValidity() ||
			  !pass.checkValidity() ||
			  !confPass.checkValidity()){
			console.log("asdasd");
			event.preventDefault();
			event.stopPropagation();
			form.classList.add('was-validated');			
		}

	});			
	}, false);

}());



//			!firstName.checkValidity() ||
//			  !lastName.checkValidity() ||
//			  !username.checkValidity() ||
//			  usernameValid === false ||
//			  !dob.checkValidity() ||
//			  !gender.checkValidity() ||
//			  !institute.checkValidity() ||
//			  !address.checkValidity() ||
//			  !email.checkValidity() ||
//			  !mobNo.checkValidity() ||
//			  !pass.checkValidity() ||
//			  !confPass.checkValidity()

//				firstName.value === '' ||
//			  lastName.value === '' ||
//			  username.value === '' ||
//			  dob.value === '' ||
//			  gender.value === '' ||
//			  institute.value === '' ||
//			  address.value === '' ||
//			  !email.checkValidity() ||
//			  mobNo.value === '' ||
//			  pass.value === '' ||
//			  confPass.value === ''








