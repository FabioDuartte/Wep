function disableInput() {
    const Id = document.getElementById.bind(document)
    if (Id("tipo").value === "mainCourse") {
        setToFood(Id);
    } else if (Id("tipo").value === "drink") {
        setToDrink(Id);
    } else {
        setToAny(Id);
    }
}

function setToDrink(Id) {
    Id("nome").removeAttribute("disabled");
    Id("preco").removeAttribute("disabled");
    Id("fornecedor").removeAttribute("disabled");
    Id("submit").removeAttribute("disabled");
    Id("ingredientes").setAttribute("disabled", true);
}

function setToFood(Id) {
    Id("nome").removeAttribute("disabled");
    Id("preco").removeAttribute("disabled");
    Id("ingredientes").removeAttribute("disabled");
    Id("submit").removeAttribute("disabled");
    Id("fornecedor").setAttribute("disabled", true);
}

function setToAny(Id) {
    Id("nome").setAttribute("disabled", true);
    Id("preco").setAttribute("disabled", true);
    Id("fornecedor").setAttribute("disabled", true);
    Id("ingredientes").setAttribute("disabled", true);
    Id("submit").setAttribute("disabled", true);
}
