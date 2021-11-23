const nums = [1,2,3,4,5,6,7,8,9,10]

for(x in nums){
    if(x == 5) {
        break; //interrompe o laço de repetição e sai para o mais próximo   
    }
    console.log(`${x} = ${nums[x]}`)
}

for (y in nums){
    if(y == 5){
        continue // mesma coisa do break, porém não age dentro de um switch
    }
    console.log(`${y} = ${nums[y]}`)

    externo: for (s in nums){ //externo: rótulo
        for(b in nums){

            if(a == 2 && b == 3){
                break; externo  
            }   
            console.log(`PAR = ${a}, ${b}`)
        }
    }
}