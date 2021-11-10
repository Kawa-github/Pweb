// novo recurso do ES2015

const pessoa = {
    nome: 'Ana',
    idade: 5,
    endereco: {
        logradouro: 'Rua Souza Silva',
        numero: 1000
    }
}

//console.log(pessoa)

const { nome,idade } = pessoa //removendo o atributo nome e idade do objeto pessoa 
console.log(nome,idade)

const {nome: n, idade: i} = pessoa //renomeando o nome da variavel e exibindo
console.log(n, i)

const {sobrenome, bemHumorada = true} = pessoa //acessando atributo que não existe
console.log(sobrenome, bemHumorada)

const {endereco: { logradouro,numero,cep } } = pessoa
console.log(logradouro,cep,numero)


// const {logradouro} = pessoa.endereco
// /console.log(endereco)

// const { conta: { ag,num } } = pessoa
// console.log(ag,num)

const{} = pessoa.nome
console.log(nome)