export function criarRodape(){
    const FOOTER = document.getElementById("reduc-footer");
    if(!FOOTER.classList.contains("container-fluid")){
        FOOTER.classList.add("container-fluid")
    }
    if(!FOOTER.classList.contains("d-flex")){
        FOOTER.classList.add("d-flex")
    }
    if(!FOOTER.classList.contains("align-items-center")){
        FOOTER.classList.add("align-items-center")
    }
    
    // Textos do rodapé
    let txtH2 = document.createTextNode("REduc BETA")
    let copyrightTxt = document.createTextNode("Todos os direitos reservados")
    let link = document.createTextNode("Voltar ao topo")

    let divContainer = document.createElement("div")
    divContainer.setAttribute("class", "container text-light d-flex align-items-center justify-content-between")
    let divElementos = document.createElement("div")

    let h2 = document.createElement("h2")
    let p = document.createElement("p")
    let ul = document.createElement("ul")
    let li = document.createElement("li")
    let a = document.createElement("a")
    let img = document.createElement("img")
    let i = document.createElement("i")

    h2.setAttribute("class", "marca")
    p.setAttribute("class", "mx-2")
    ul.setAttribute("class", "list-inline")
    li.setAttribute("class", "list-inline-item")
    a.setAttribute("class", "btn text-light")
    a.setAttribute("id", "btn-footer")
    a.setAttribute("href", "#reduc-header")
    img.setAttribute("src", "img/logo.svg")
    img.setAttribute("alt", "Logo REduc")
    i.setAttribute("class", "bi bi-c-circle")

    h2.appendChild(txtH2)
    p.appendChild(i)
    p.appendChild(copyrightTxt)
    a.appendChild(link)
    li.appendChild(a)
    ul.appendChild(li)
    divElementos.appendChild(h2)
    divElementos.appendChild(p)
    divElementos.appendChild(ul)
    divContainer.appendChild(divElementos)
    divContainer.appendChild(img)
    FOOTER.appendChild(divContainer)
}