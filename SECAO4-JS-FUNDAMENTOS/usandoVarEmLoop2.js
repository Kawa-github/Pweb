const funcs = [] //array vazio

for (var i = 0; i < 10; i++) {

    funcs.push(function(){
        console.log(i)
    })
}

/*Como utilizei o var seu valor continua
sendo visível fora do laço for, e nesse
momento o valor de i ainda é igual a 10*/

//pega o ultimo valor do laço

funcs[2]()
funcs[8]()