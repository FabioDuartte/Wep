function increaseValue() {
    if (document.getElementById('increase-quantity').value < 200) {
        document.getElementById('increase-quantity').value++;
    }
}

function decreaseValue() {
    if (document.getElementById('increase-quantity').value != 1) {
        document.getElementById('increase-quantity').value--;
    }
}