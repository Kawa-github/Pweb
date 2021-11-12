function soBoaNoticia(nota){
    if(nota >=7){
        console.log('Aprovado com ', nota) //é possivel concatenar com +
         
    }
}

soBoaNoticia(8.1)
soBoaNoticia(6)

function seForVerdadeEuFalo(valor){
    if(valor){ //como não tem um valor especificado, o js entende que precisa de um valor verdadeiro ou falso 
        console.log('É verdadee...', valor)

    }
}

seForVerdadeEuFalo() //false
seForVerdadeEuFalo(null) //false
seForVerdadeEuFalo(undefined) //false
seForVerdadeEuFalo(NaN) //false   
seForVerdadeEuFalo('') //string vazia é false  
seForVerdadeEuFalo(0) //unico numero falso
seForVerdadeEuFalo(-1) //true
seForVerdadeEuFalo(' ') //string vazia é true, pois há um espaço
seForVerdadeEuFalo('?') //true
seForVerdadeEuFalo([]) // Array vazio é true, pois dentro de um array ocupa um espaço, mesmo que vazio [...espaço...]
seForVerdadeEuFalo([1,2]) //Array com elementos
seForVerdadeEuFalo({}) //objeto vazio é true. Mesma ideia do array

