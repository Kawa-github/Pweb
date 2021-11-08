// Função sem retorno
function imprimirSoma(a, b){ //a e b são parametros da função
    console.log(a+b)

}

imprimirSoma(2,3)

imprimirSoma(2)

imprimirSoma(7,1,4,8,6,14,2) //pega apenas os 2 primeiros números. Que são os parametros A e B. 

imprimirSoma()

// Função com retorno
function soma (a, b = 0){
    return a + b //para retornar os valores
}

console.log(soma(2 , 3))
console.log(soma(2)) //vai somar o 2 com o valor declarado de b, que é 0
console.log(soma()) // gera NaN pois não há nenhum valor declarado em A.