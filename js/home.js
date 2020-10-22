let alterarExibirNovidades = false;
let alterarExibirMVendidos = false;

$('.novidades button').click(function(){
    $('.novidades').toggleClass('painel-aberto');
    if(alterarExibirNovidades==false){
        $('.novidades button').text('Mostrar menos')
        alterarExibirNovidades = true;
    } else {
        $('.novidades button').text('Mostrar mais')
        alterarExibirNovidades = false;
    }
});

$('.mais-vendidos button').click(function(){
    $('.mais-vendidos').toggleClass('painel-aberto');
    if(alterarExibirMVendidos==false){
        $('.mais-vendidos button').text('Mostrar menos')
        alterarExibirMVendidos = true;
    } else {
        $('.mais-vendidos button').text('Mostrar mais')
        alterarExibirMVendidos = false;
    }
});