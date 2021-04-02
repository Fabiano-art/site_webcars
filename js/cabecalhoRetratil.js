document.addEventListener("scroll", function() {
    let posicao = window.pageYOffset;
    // console.log(posicao)
    if (posicao >= 300){
        document.querySelector('header').style.visibility = "hidden"
    }
    else {
        document.querySelector('header').style.visibility = "visible"
    }
});