for(let i = 0; i < 10; i++){ //sai do laço depois que o i for 10
    console.log(i)
}


console.log('i =',i) // ERRO: não sera visivel fora do bloco
/*startando i com 10
 0 é menor que 10
 enquanto isso acrescente 1 ao 0
 assim contando até 10
*/

for(let i = 10; i > 0; i--){
    console.log('\n')
    console.log(i)
}

/*startando variavel i com 10
 10 é maior que 0
 assim tirando 1 do i e contando em ordem descrente, começando do 10 */


//let c = 1
console.log('\n TABUADA')
for(let c = 0; c <= 10; c++){
    let r = 0
    r = c * c
    console.log(c,'X',c,'=',r)
}

// c = contador / r = resultado
/*
startando c com valor 0;
0 é menor que 10; -- continua loop
acrescente 1 ao c com c++;

**dentro do bloco for
startando r com valor 0;
declarando que r é igual ao valor de c multiplicado por ele mesmo
e depois imprimindo na tela. (contador,'X',contador,'=',resultado)
*/