function chamar_funcao(parametro) {
    var url = "funcoes.php?parametro=" + parametro;
    var xhr = new XMLHttpRequest();
    xhr.open("GET", url, true);
    xhr.send();
}



