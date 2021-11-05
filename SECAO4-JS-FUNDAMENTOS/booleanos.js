let isAtivo = false;
console.log(isAtivo)

isAtivo = true
console.log(isAtivo)

isAtivo  = 1 //como esta startando com o valor 1, o !!indica que continua o mesmo valor. Já o ! diferente
console.log(!isAtivo)


isAtivo  = 1 //como esta startando com o valor 1, o !!indica que continua o mesmo valor. Já o ! diferente
console.log(!!isAtivo)

// console.log('os verdadeiros...')
// console.log(!!3)
// console.log(!!-1)
// console.log(!!' ')
// console.log([])
// console.log(!!{})
// console.log(!!Infinity)
// console.log(!!(isAtivo = Infinity ))
// console.log(!!(isAtivo = true ))

//----------------------------//
console.log('\nfalsos....')
console.log(!!0)
console.log(!!'') //string vazia
console.log(!!null)
console.log(!!NaN)
console.log(!!undefined)
console.log(!!(isAtivo = false))

console.log('\npra finalizar')
console.log(!!('' || null || 0 || ' ')) //true pois o || executa se uma condição estiver verdadeira, no caso o ' '

let nome ='Kawã'
console.log(nome || 'Desconhecido')