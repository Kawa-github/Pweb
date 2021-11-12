const pessoa = {
    nome: 'João'
}


mostrarNota = (nota) => {
    nota = 8 // dando valor ao parametro.
    if(nota >=7){
        console.log(pessoa.nome,',parabéns voce está aprovado!!')
    }else console.log(pessoa.nome, '...infelizmente voce foi reprovado.')
}

//mostrarNota(5) //outra maneira, que é dando valor ao parametro dentro dos ()
mostrarNota()

