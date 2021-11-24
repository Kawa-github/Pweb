 function Pessoa(){
     this.idade = 0 //criando um atributo de objeto, a partir do this

     setInterval(function(){
         this.idade++
         console.log(this.idade)
     }/*.bind(this)*/, 1000)
 }

 new Pessoa 