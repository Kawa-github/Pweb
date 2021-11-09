{
    {
        {
            {
                var sera = 'Será????' // se criar uma variavel do tipo var fora de uma função, 
                                      // ela se torna global e ficará visivel para todos.
                console.log(sera)
            }
        }
    }
}

console.log(sera)

function teste() { // var local - só é visivel dentro da função
    var local = 123
    console.log(local)
}

teste()
console.log(local)

// VAR pode ser redeclarada e reatribuída.

// LET não pode ser redeclarada, mas posso ser reatribuída.

// CONST não pode ser nem redeclarada, nem reatribuída.