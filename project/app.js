function togglePW(){
    var password = document.querySelector('[name=password]');
    if(password.getAttribute('type')==='password'){
        password.setAttribute('type', 'text');
        document.getElementById("font").style.color='black';
    }
    else{
        password.setAttribute('type', 'password');
        document.getElementById("font").style.color=" #4158d0";
    }
}

