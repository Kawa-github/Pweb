function getInteiroAleatorioEntre(min,max){
    const valor = Math.random() * (max - min) + min
    return Math.floor(valor)
}


mk m mlet opcao = -1 
// let opcao //nao é necessario atribuir um valor para opcao. Fazendo isso, garante que a estrutura vá rodar pelo menos uma vez.
// tambem não é necessário criar a variavel, pois é declarada de forma dinamica

do{
    opcao = getInteiroAleatorioEntre(-1, 10)
    console.log(`Opção escolhida foi: ${opcao}`)
}while( opcao != 0);
console.log('Até a próxima')
