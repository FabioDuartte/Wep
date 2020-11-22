function disableInput() {
    const Id = document.getElementById.bind(document)
    if (Id("tipoUpdate").value === "mainCourseUpdate") {
        setToFood(Id);
    } else if (Id("tipoUpdate").value === "drinkUpdate") {
        setToDrink(Id);
    } else {
        setToAny(Id);
    }
}

function setToDrink(Id) {
    Id("nome").removeAttribute("disabled");
    Id("novo-nome").removeAttribute("disabled");
    Id("preco").removeAttribute("disabled");
    Id("fornecedor").removeAttribute("disabled");
    Id("submitAlter").removeAttribute("disabled");
    Id("ingredientes").setAttribute("disabled", true);
}

function setToFood(Id) {
    Id("nome").removeAttribute("disabled");
    Id("novo-nome").removeAttribute("disabled");
    Id("preco").removeAttribute("disabled");
    Id("ingredientes").removeAttribute("disabled");
    Id("submitAlter").removeAttribute("disabled");
    Id("fornecedor").setAttribute("disabled", true);
}

function setToAny(Id) {
    Id("nome").setAttribute("disabled", true);
    Id("novo-nome").setAttribute("disabled", true);
    Id("preco").setAttribute("disabled", true);
    Id("fornecedor").setAttribute("disabled", true);
    Id("ingredientes").setAttribute("disabled", true);
    Id("submitAlter").setAttribute("disabled", true);
}
