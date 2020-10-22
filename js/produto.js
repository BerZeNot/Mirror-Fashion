var inputTamanho = document.querySelector('[name=tamanho]')
var outputTamanho = document.querySelector('[name=valortamanho]')

function mostraTamanho(){
    outputTamanho.value = inputTamanho.value
}

inputTamanho.oninput = mostraTamanho


// Versão anônima da função mostraTamanho
// inputTamanho.oninput = function(){
//     outputTamanho.value = inputTamanho.value
// }