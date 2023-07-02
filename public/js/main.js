function habilitarBotaoEditCategoria() {
    var valorInicial = document.getElementById("input").value;

    if (valorInicial === "") {
        document.getElementById("botao").disabled = true;
    }

    document.getElementById("input").addEventListener("input", function(event) {
        var conteudo = document.getElementById("input").value;

        if (conteudo !== valorInicial && conteudo.trim() !== "") {
            document.getElementById("botao").disabled = false;
        } else {
            document.getElementById("botao").disabled = true;
        }
    });
}
