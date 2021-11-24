function soma (){
    let soma = 0
    for(i in arguments) //pegando cada elemento de arguments, que é um array
    {
        soma = soma + arguments[i]
    }
    return soma
}

console.log(soma())
console.log(soma(1,3))
console.log(soma(2.3, 5.5, 10.7))
console.log(soma(1.1,2.2, "Teste"))
console.log(soma("A","B","C"))