function compras(trabalho1, trabalho2){
    const comprarSorvete  = trabalho1 || trabalho2
    
    const comprarTv50 = trabalho1 && trabalho2

    // const comprarTv32 = !!(trabalho1 ^ trabalho2) //bitwise xor

    const comprarTv32 = trabalho1 != trabalho2

    const manterSaudavel = !comprarSorvete // operador unário

    return{
        comprarSorvete, //cria implicitamente a chave, sem precisar inserir chave. Exemplo: comprarSorvete: comprarSorvete. Nova mudança do ECMA2015
        comprarTv50,
        comprarTv32, 
        manterSaudavel
    }
    
    // return{ sorvete: comprarSorvete, tv50: comprarTv50, tv32: comprarTv32, mSaudavel: manterSaudavel
    // }
}
    
console.log(compras(true,true))
console.log(compras(false,true))
console.log(compras(true,false))
console.log(compras(false,false))