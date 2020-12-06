/* Valida CPF*/
let fieldCpf = document.getElementById('cpf');
fieldCpf.onkeyup = function(){
    let cpf = fieldCpf.value;    
    if(cpf.length == 3 || cpf.length == 7)
        fieldCpf.value += '.';
    if(cpf.length == 11)
        fieldCpf.value += '-'

}
/* Valida Número do cartão*/
let fieldCard = document.getElementById('card');
fieldCard.onkeyup = function(){
    let card = fieldCard.value;
    if(card.length == 4 || card.length == 9 || card.length == 14 )
        fieldCard.value +=' ';

}

/* Valida data de validade do cartão*/
let fieldDateCard = document.getElementById('validade')
fieldDateCard.onkeyup = function(){
    let validade = fieldDateCard.value;
    if(validade.length == 2)
        fieldDateCard.value  +='/';
}