// 1 - this em funções comuns
function verificaThisFuncComum(param){
    return(param === this); // dentro de uma função normal this é o objeto 'global'
}

console.log(verificaThisFuncComum(this)); // this fora da função