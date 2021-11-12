function teste1(num){
    if(num > 7){
        console.log(num)
        console.log('Finall')
    }
}

teste1(6)
teste1(8)


// não é correto
function teste2(num){
    if(num > 7);{ // cuidado com o ; , não usar com as estruturas de controle
        console.log(num)
    }
}

teste2(6)
teste2(8)