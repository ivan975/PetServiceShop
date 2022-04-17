const form = document.getElementById('form');
const firstName = document.getElementById('firstname');
const lastName = document.getElementById('lastname');
const email = document.getElementById('email');
const username = document.getElementById('username');
const password = document.getElementById('password');
const confirmPassword = document.getElementById('confirmpassword');

form.addEventListener('submit',(e) => {
	e.preventDefault();
	validate();
	
	function validate(){
		if(firstName.value==''){
			alert("Firstname is empty...");
		}
		if(lastName.value==''){
			alert('Lastname is empty...');
		}
		if(email.value==''){
			alert('Email is empty...');
		}
		if(username.value==''){
			alert('Username is empty...');
		}
		if(password.value==''){
			alert('Password is empty...');
		}
		if(confirmPassword.value==''){
			alert('Confirm Password is empty...');
		}
	}
});