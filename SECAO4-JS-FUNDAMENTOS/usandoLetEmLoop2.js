const funcs = [] //array vazio

for (let i = 0; i < 10; i++) {

    funcs.push(function(){
        console.log(i)
    })
}
//armazena devidamente os valores, diferente do var que armazena somente o último

funcs[1]()
funcs[2]()
funcs[8]()
funcs[9]()

