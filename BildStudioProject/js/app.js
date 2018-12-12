

let btnLista = document.querySelector("#lista");
let btnMreza = document.querySelector("#mreza");

let divLista = document.querySelector(".list");
let divMreza = document.querySelector(".grid");

btnLista.addEventListener("click",prikaziListu);
btnMreza.addEventListener("click",prikaziMrezu);

function prikaziListu(){
    divMreza.setAttribute("class","sakriti");
    divLista.removeAttribute("class","sakriti");
}
function prikaziMrezu(){
    divLista.setAttribute("class","sakriti");
    divMreza.removeAttribute("class","sakriti");
}

