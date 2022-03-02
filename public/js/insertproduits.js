const response = await fetch("./data/data.php");
// console.log(response);
const data = await response.json();
// console.log("data :", data);

console.log(data[0]);

let divFirstlign = document.getElementById("firstlign");


    for(let i = 0; i < data.length ; i++ ){
      
    let divContainer = document.createElement("div");
    divContainer.className = "produits";
    divFirstlign.appendChild(divContainer);

    let img = document.createElement("img");
    img.src = "./assets/img/" + data[i]["image"];
    divContainer.appendChild(img);
    
    let descript = document.createElement("p");
    descript.innerText = data[i]["description"];
    divContainer.appendChild(descript);
    
    let btn = document.createElement("button");
    btn.className = "btnAchat";
    divContainer.appendChild(btn);  
    btn.textContent = "AJOUTER AU PANIER";

}






