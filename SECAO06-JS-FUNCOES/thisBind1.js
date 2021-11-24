const pessoa = {
    saudacao: 'Bom dia..',
    falar(){
        console.log(this.saudacao) // acessando um atributo do obj Pessoa   

    }
}

pessoa.falar()
const falar = pessoa.falar
falar() //conflito entre paradigmas: funcional e OO

const falarDePessoa = pessoa.falar.bind(pessoa) //bind- passar um objeto no qual quer ser resolvido/referenciado o this
falarDePessoa( )