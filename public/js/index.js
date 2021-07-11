function inputChangeWomenGenre1(){
    const category = document.getElementsByClassName("category");
    const select = document.createElement("select");
    let option = document.createElement("option");
    let option.text = "トップス";
    let option.value = "トップス";
    document.category.appendChild(select).appendChild(option);
}

function inputChangeMensGenre1(){
    const newSelect = document.createElement("select");
}

const women = document.getElementByName("women");
women.addEventListener("change", inputChangeWomenGenre1);

const mens = document.getElementByName('mens');
mens.addEventListener('change', inputChangeMensGenre1);