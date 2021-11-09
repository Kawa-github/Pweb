console.log(Math.ceil(6.1)) 

const obj1 = {} 
obj1.nome = 'Bola1'//atributo dentro de um objeto
//obj1['nome'] = 'Bola2'
console.log(obj1.nome)

function Obj (nome){
    this.nome = nome //nome associado ao objeto
    this.exec = function(){
        console.log('Exec.....')
    }
}

const obj2 = new Obj('Cadeira')
const obj3 = new Obj('Mesa')
console.log(obj2.nome) //acessando nome da function, com o (this.)
console.log(obj3.nome)
obj3.exec()