function tratarErroElancar(erro){
    //throw new Error('Deu erro ai patrão') //throw é usado para mostrar na tela que houve algum erro, por exemplo com uma mensagem
    //throw 10
    //throw true
    throw{
        nome: erro.name,
        msg: erro.message, //mensagem
        date: new Date, // mostrando data do erro
    }
}
 
function imprimirNomeGritado(obj) { //obj = parametro

    try{ //usado quando seu código pode gerar algum tipo de erro
         console.log(obj.name.toUpperCase() + '!!!!')

    }catch(e){ //quando há algum erro entra dentro dentro do catch
        tratarErroElancar(e)

    } finally{ // executado mesmo que não ocorra um erro.
        console.log('Final!')
    }
} 


const obj = { nome: 'Roberto' } //erro proposital para uso do try,catch
imprimirNomeGritado(obj)