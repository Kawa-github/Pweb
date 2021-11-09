let number = 6  // em let não é possivel redeclarar, porém pode reatribuir
number = 12
console.log(number)

//var numero = 5
let numero = 1
{
    let numero = 2 //visivel apenas dentro do bloco
    console.log('dentro =', numero)
}
console.log('fora =', numero)

