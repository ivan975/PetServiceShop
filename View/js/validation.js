const namee =  document.getElementById('username')
const password = document.getElementById('password')
const form = document.getElementById('form')

form.addEventListener('submit',(e) => {
        let messages = []

        if (namee.value==''||namee.value==null){
            alert('Name is required');
        }
});