document.addEventListener("scroll", function(e) {
    const posicao = 200
    if (window.pageYOffset >= posicao){
        document.querySelector('header').style.height = '50px'
        document.querySelector('header img').style.width = '60px'
        document.querySelector('.cabecalho').style.paddingTop = '0px'
        document.querySelectorAll('.menu-button li').forEach(e => {
            e.style.fontSize = "20px"
        })
    }
    else{
        document.querySelector('header').style.height = '100px'
        document.querySelector('header img').style.width = '120px'
        document.querySelector('.cabecalho').style.paddingTop = '20px'
        document.querySelectorAll('.menu-button li').forEach(e => {
            e.style.fontSize = "25px"
        })
    }
});

// window.pageYOffset;

