function chamar_funcao(parametro) {
    var url = "funcoes.php?parametro=" + parametro;
    var xhr = new XMLHttpRequest();
    xhr.open("GET", url, true);
    xhr.send();
}



function calculer_total(){

    var prix = document.getElementById("prix").value;
    var quantite = document.getElementById("quantite").value;
    var total = document.getElementById("total");
    
    var total_commande = prix * quantite;
    
    // console.log(total_commande);
    total.textContent = total_commande + " euros";

    // return total;
}

function validation_fomulaire(){
    var form = document.getElementById("form");
    var nom = document.getElementById("nom");
    var adresse = document.getElementById("adresse");
   var  numero = document.getElementById("numero");
    email = document.getElementById("email");
     form.addEventListener('submit',  e=> )
}


 
