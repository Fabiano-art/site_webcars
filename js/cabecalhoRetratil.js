document.addEventListener("scroll", function(e) {
    const posicao = 300
    if (window.pageYOffset >= posicao){
        document.querySelector('header').style.height = '50px'
        document.querySelector('header img').style.width = '60px'
        document.querySelector('.cabecalho').style.paddingTop = '0px'
    }
    else{
        document.querySelector('header').style.height = '100px'
        document.querySelector('header img').style.width = '120px'
        document.querySelector('.cabecalho').style.paddingTop = '20px'
    }
});

// window.pageYOffset;

