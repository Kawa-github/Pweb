Number.prototype.entre = function (inicio,fim) {//prototype para comparar
    return this >= inicio && this <= fim // comparando os valores e retornando verdadeiro
}

const imprimirResultado = function (nota) {
    if (nota.entre(9,10)){ //chamar a função a partir de nota
        console.log('Quadro de Honra')

    }else if(nota.entre(7 , 8.99)){
        console.log('Aprovado')

    } else if (nota.entre(4, 6.99)){
        console.log('Recuperação')

    } else if(nota.entre(0, 3.99)){
        console.log('Reprovado!')
    }else{
        console.log('Nota inválida')
    }

    console.log('\n')
}

imprimirResultado(10)
imprimirResultado(7.5)
imprimirResultado(4.5)
imprimirResultado(2)
imprimirResultado(-1)
imprimirResultado(11)
