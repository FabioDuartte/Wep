function disableInput() {
    const Id = document.getElementById.bind(document)
    if (Id("tipoDelete").value === "mainCourseDelete") {
        setToFood(Id);
    } else if (Id("tipoDelete").value === "drinkDelete") {
        setToDrink(Id);
    } else {
        setToAny(Id);
    }
}
function setToDrink(Id) {
    Id("nome").removeAttribute("disabled");    
}

function setToFood(Id) {
    Id("nome").removeAttribute("disabled");    
}

function setToAny(Id) {
     Id("submitDel").setAttribute("disabled", true);
}
