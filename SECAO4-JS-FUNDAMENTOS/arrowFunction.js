// 1 - this em funções comuns
// function verificaThisFuncComum(param){
//     return(param === this); // dentro de uma função normal this é o objeto 'global'
// }

// console.log(verificaThisFuncComum(this)); // this fora da função é module.exports e, por conseguinte, diferente de 'global'. Por isso retornará false

// // 2 - this apontando para objeto
// const obj = {}
// const verificaThisOnj = verificaThisFuncComum.bind(obj)