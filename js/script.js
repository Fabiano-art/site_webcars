if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
    console.log('aeee');
    document.querySelectorAll('.menu-button li').forEach(e => {
        e.style.fontSize = "20px"
    })
}

//    .apresentacao-carro {
//     display: flex;
//     flex-direction: column;
//     padding: 10px 20px 10px 20px;
//     width: 42%;
//     height: 500px;
//     align-items: center;

//     margin: 5px;
//     border: solid 1px #CCC;
//     box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.3);

// }