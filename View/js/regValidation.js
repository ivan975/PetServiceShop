const form = document.getElementById('form')
const firstName = document.getElementById('firstname')
const lastName = document.getElementById('lastname')
const email = document.getElementById('email')
const username = document.getElementById('username')
const password = document.getElementById('password')
const confirmPassword = document.getElementById('confirmpassword')

form.addEventListener('submit',(e) => {
	if(firstName.value==''||firstName.value==null){
		e.preventDefault();
		alert("Firstname is empty...")
	}
	if(lastName.value==''||lastName.value==null){
		e.preventDefault();
		alert('Lastname is empty...')
	}
	if(email.value==''||email.value==null){
		e.preventDefault();
		alert('Email is empty...')
	}
	if(username.value==''||username.value==null){
		e.preventDefault();
		alert('Username is empty...')
	}
	if(password.value==''||password.value==null){
		e.preventDefault();
		alert('Password is empty...')
	}
	if(confirmPassword.value==''||confirmPassword.value==null){
		e.preventDefault();
		alert('Confirm Password is empty...')
	}
});