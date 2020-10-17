function incrementaValor(valorMaximo, id){
  let value = parseInt(document.getElementById(id).value);
  value = isNaN(value) ? 0 : value;
  if(value >= valorMaximo) {
    value = valorMaximo;
  }else{
    value++;
  }
  document.getElementById(id).value = value;
}

function decrementaValor( id){
  let value = parseInt(document.getElementById(id).value);
  value = isNaN(value) ? 0 : value;
  if(value <= 1) {
    value = 1;
  }else{
    value--;
  }
  document.getElementById(id).value = value;
  
}

//REMOVE BUTTON

let removeCartButtons = document.getElementsByClassName("remove")
for(let i = 0; i< removeCartButtons.length; i++){
  let button = removeCartButtons[i]
  button.addEventListener('click', function(event){
    let buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
   updateTotal()
  })

}
// UPDATE TOTAL PRICE

function updateTotal(){
  let cartItemContainer = document.getElementsByClassName('cart-items')[0]
  let cartRows = cartItemContainer.getElementsByClassName('cart-row')
  let total = 0
  for(let i = 0; i < cartRows.length; i++){
    let cartRow = cartRows[i]
    let priceElement = cartRow.getElementsByClassName('cart-price')[0]
    let quantityElement = cartRow.getElementsByClassName('cart-quantity')[0]
    let price = parseFloat(priceElement.innerText.replace('R$', ''))
    let quantity = quantityElement.value
    total = total + (price * quantity)
  }
  document.getElementsByClassName('totalPrice')[0].innerText = 'Total R$ ' + total

}