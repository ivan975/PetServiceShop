const form = document.getElementById('form')
const username = document.getElementById('username')
const password = document.getElementById('password')

form.addEventListener('submit',(e) => {
    if(username.value==''||username.value==null){
        e.preventDefault();
        alert("Username is empty");
    }
    if(password.value==''||password.value==null){
        e.preventDefault();
        alert("Password is empty...");
    }
});