const imprimirResultado = function(nota){
    if(nota >=7){
        console.log('Aprovado')
    }else{ // else-senao //caso seja falso executa o bloco
        console.log('Reprovado!')
    }
}

imprimirResultado(10)
imprimirResultado(4)
imprimirResultado('Epa!') // cuidado!!


