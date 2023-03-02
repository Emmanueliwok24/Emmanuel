const loginForm = document.getElementById('login-form')

loginForm.addEventListener('submit', (e)=>{
    e.preventDefault();
    const email = loginForm.querySelector('#email')  
    const password = loginForm.querySelector('#password')  

    if(typeof email.value === null){
        alert('sorry, We need an Email')
    }else if(typeof password.value === ''){
        alert('sorry, a password is needed')
    }else if(email.value.length < 8){
        alert('sorry your email is too short')
    }else if(password.value.length < 8){
        
        alert('password is too short')
    }else{
        loginForm.submit()
    }
})


