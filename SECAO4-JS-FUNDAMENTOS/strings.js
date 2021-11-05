const escola = "Cod3r"

console.log(escola.charAt(4)) //mostra a letra do indice 4
console.log(escola.charAt(1))
console.log(escola.charCodeAt(3)) //valor na tabela ASCI
console.log(escola.indexOf('3'))

console.log(escola.substring(1)) //mostra a partir do indice/letra 1
console.log(escola.substring(0,3))

// console.log(escola.replace(/\w/g, 'e')) // g- global - substitui todos os caracteres pela letra e
console.log('Escola '.concat(escola).concat("!")) //concatenando strings
console.log(escola.replace(3 , 'e')) //troca os caracteres, no exemplo troca o 3 pelo 'e'

console.log('Ana,Maria,Pedro'.split(',')) //transforma string em Array