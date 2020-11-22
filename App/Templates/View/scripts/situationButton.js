function changeStatus()
{
    let status = document.getElementById('change').value;

    if(status == 'Em aberto'){
        
        document.getElementById('change').value = 'Finalizado';
        document.getElementById('change').style.backgroundColor = 'green';
        document.getElementById('change').style.color = 'white';
        
    }
   
}

