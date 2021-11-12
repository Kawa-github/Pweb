// Armazenando uma função em uma variável
const imprimirSoma = function (a, b){ // função anonima
    console.log(a + b)
}

imprimirSoma(2, 3)

//Armazenando um função arrow em uma variavel
const soma = (a , b) => {
    return a + b
}



let mult = (a,b) =>{
    return a * b;
}
    
console.log(mult(1,8))

console.log(mult(5,5))

console.log(soma(2,3))

//retorno implicito
const subtracao = (a, b) => a - b
console.log(subtracao(2,3))

const imprimir2 = a => console.log(a)
imprimir2('Legalll')


const add = (a) =>{
    return a + 1
}
console.log(add(41))


const soma2 = (a) => a + 1
console.log(soma2(12))


const segundos = (a) =>{
    return a * 60;
}

console.log(segundos(2))
console.log(segundos(3))
console.log(segundos(5))

const raio = (base,alt) =>{
    return (base * alt) /2
}
console.log(raio(7,4))
console.log(raio(10,4))