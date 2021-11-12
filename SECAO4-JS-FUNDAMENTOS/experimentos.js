//this is node!!

let a = 3

global.b = 123

this.c = 456
this.d = false
this.e = 'teste'

console.log(a)
console.log(global.b)
console.log(this.c)
console.log(module.exports.c)
console.log(module.exports === this)
console.log(module.exports)

//criando variavel sem var nem let. Irá armazenar uma variavel no escopo global. BADD
abc = 3 // não faça isso !!
console.log(global.abc)

// module.exports = {e:456, f: false, g: 'teste'}

