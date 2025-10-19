document.addEventListener('DOMContentLoaded',function(){
    var form = document.getElementById('contactform');
    if(form){
        form.addEventListener('submit',e =>{
            e.preventDefault();
            validateInputs();
        });
    }
});
    
    const setError = (element,message) => {
        const inputControl = element.parentElement;
        const errorDisplay = inputControl.querySelector('.error');
        
        errorDisplay.innerText = message;
        errorDisplay.style.color = 'red';
        inputControl.classList.add('error');
        inputControl.classList.remove('success');
    }
    
    const setSuccess = (element,message) => {
        const inputControl = element.parentElement;
        const errorDisplay = inputControl.querySelector('.error');
        
        errorDisplay.innerText = message;
        inputControl.classList.add('success');
        inputControl.classList.remove('error');
    }

    const isValidEmail = email =>{
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(String(email).toLowerCase());
    }

    const isValidPhone = phone =>{
        const re = /^\(?([0-9]{4})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3})$/
        return re.test(phone);
    }
    
    const validateInputs = () =>{
        var name = document.getElementById('name');
        var email = document.getElementById('email');
        var phone = document.getElementById('phone');
        var password = document.getElementById('password');
        
        if(name.value.trim() === '') {
            setError(name, 'Username is required');
        }else{
            setSuccess(name,'');
        }

        if (email.value.trim()==='') {
            setError(email,'Email is required');
        } else if(!isValidEmail(email.value.trim())){
            setError(email,'Provide a valid email address');
        } else{
            setSuccess(email,'');
        }

        if (phone.value.trim()==='') {
            setError(phone,'Phone is required');
        } else if(!isValidPhone(phone.value.trim())){
            setError(phone,'Provide a valid phone number');
        } else{
            setSuccess(phone,'');
        }

        if(password.value.trim()===''){
            setError(password,'Password is required');
        }else if(password.value.length < 8){
            setError(password,'Password need to be greater than 8');
        }else{
            setSuccess(password,'');
        }

        



    }

