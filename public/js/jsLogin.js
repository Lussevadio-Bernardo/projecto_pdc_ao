const form = document.getElementById('form');
const username=document.getElementById('username');
const senha =document.getElementById('senha'); 


form.addEventListener("submit",(e) => {
    e.preventDefault();
    checkInputs();
});

function checkInputs(){
    const usernamevalue=username.value;
    const senhavalue = senha.value;
    if(usernamevalue===""){
        setErrorFor(username,"O nome de usuário é obrigatorio.");
    }else{
        setSucessFor(username);
    }
    if(senhavalue===""){
        setErrorFor(senha,"A senha é obrigatorio.");
    }else{
        setSucessFor(senha);
    }    
}

function setErrorFor(input, massagem){
    const formControl= input.parentElement;
    const small = formControl.querySelector("small");

    //adicionar a mensagem de erro
    small.innerText =massagem;

    // adicionar a classe de erro

    formControl.className="form-control error";
}

function setSucessFor(input){
    const formControl= input.parentElement;
    // Adicionara classe de sucesso
    formControl.className="form-control sucess";
}