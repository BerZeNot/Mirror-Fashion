let banners = ["img/destaque-home-min.png", "img/destaque-home-2-min.png"]
let bannerAtual = 0

function trocaBanner(){
    bannerAtual == 0 ? bannerAtual++ : bannerAtual--
    document.querySelector('.banner-destaque img').src = banners[bannerAtual]
}

setInterval(trocaBanner, 4000)

