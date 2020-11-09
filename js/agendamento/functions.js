function validaNome(){

    var nome = document.getElementById("nome").value;
    var bordaNome = document.getElementById("nome");

    // Validação do Nome
    var letras = /^[A-Za-z ]+$/;

    if(nome == ""){
        
        bordaNome.style.border = "3px solid #eb4934";
        
    }else if(nome.match(letras)){

       bordaNome.style.borderBottom = "3px solid #34eba4";
        
    }else{

        bordaNome.style.borderBottom = "3px solid #eb4934";
        
    }
 
}

// Validação de data
function validaData(){
    var data = document.getElementById("data").value;
    bordaData = document.getElementById("data");

    if(data == ""){
        bordaData.style.border = "3px solid #eb4934";
    }else{
        bordaData.style.borderBottom = "3px solid #34eba4";
    }
}

 //Validação do horário

function validaHorario(){
    var horario = document.getElementById("horario").value;
    bordaHorario = document.getElementById("horario");

    if(horario == ""){
        bordaHorario.style.border = "3px solid #eb4934";
    }else{
        bordaHorario.style.borderBottom = "3px solid #34eba4";
    }

}


//Validação da mensagem
function validaMensagem(){

    var mensagem = document.getElementById("mensagem").value;
    bordaMensagem = document.getElementById("mensagem");

    if(mensagem == ""){
        bordaMensagem.style.border = "3px solid #eb4934";
    }else{
        bordaMensagem.style.borderBottom = "3px solid #34eba4";
    }

}


function validacao(){
    var nome = document.getElementById("nome").value;
    var data = document.getElementById("data").value;
    var horario = document.getElementById("horario").value;
    var mensagem = document.getElementById("mensagem").value;

    if(nome != "" && data != "" && horario != "" && mensagem != ""){
        alert("Formulário enviado com sucesso!");
    }
}


// Funções de resetar os inputs

function tiraBordaNome(){
    var bordaNome = document.getElementById("nome");

    bordaNome.style.border = "none";
    

}

function tiraBordaData(){
    bordaData = document.getElementById("data");

    bordaData.style.border = "none";

}

function tiraBordaHorario(){
    bordaHorario = document.getElementById("horario");

    bordaHorario.style.border = "none";

}

function tiraBordaMensagem(){
    bordaMensagem = document.getElementById("mensagem");

    bordaMensagem.style.border = "none";

}