
$("#signup-submit").click((e)=>{
    e.preventDefault();

    let fullName = $('#fullnamme').val()
    let email = $('#emailaddress').val()
    let phone = $('#phonenumber').val()
    let password = $('#password').val()

    if(fullName !== '' && email !== '' && phone !== '' && password !== '' ){
        if(fullName.length > 5 && email.length > 9 && phone.length > 6 && password.length > 7 ){
            $.ajax({
                type: 'POST',
                url:'sever/signup.php',
                data:{
                    fullName:fullName,
                    email:email,
                    phone:phone,
                    pass:password,
                },
                dataType:'',
                success: function(response){
                    eval(response)
                }
            })
        }else{
            createAlert({type:'alert', message:'some field are too short'})
        }
    }else{
        let error = {
            type:'alert',
            message:'fields can\'t be empty',

        }
        createAlert(error);
    }
})

function createAlert(alert){
    if(alert.type === 'alert'){
        window.confirm(alert.message)
    }
}

