document.getElementById("buttonSearch").disabled = true;

document.getElementById("input").addEventListener("input", function(event){

    var conteudo = document.getElementById("input").value;
    
    if (conteudo !== null && conteudo !== '') {
      //habilita o botão
      document.getElementById("buttonSearch").disabled = false;
    } else {
      //desabilita o botão se o conteúdo do input ficar em branco
      document.getElementById("buttonSearch").disabled = true;
    }
});