
//validação data de nascimento//
const dataNascimento = document.querySelector('#nascimento')
dataNascimento.addEventListener('blur', (evento) => {     //adicionando o evento blur que quer dizer quando o elemento perder o foco, pasando o evento//
    validaDataNascimento(evento.target)     //chamando a funçaõ e passando o evento//
})
 function validaDataNascimento(input) {
     const dataRecebida = new Date(input.value)     //armazenando a data passada no input//
     let mensagem = ''
     if(!maiorQue18(dataRecebida)) {             //se a funçao maiorQue18 for false ou seja se o usuadrio for de menor//
        mensagem = 'Você deve ser maior que 18 anos para se cadastrar.'    //exibe essa mensagem//
     }
     input.setCustomValidity(mensagem)      //se for valida exibe a let mensagem que esta vazia//
 }

 function maiorQue18(data) {    // a (date) vai ser a data informada pelo usuario
     const dataAtual = new Date()   //deichando o new Date em branco ele pega a data atual//
     const dataMais18 = new Date(data.getUTCFullYear() + 18, data.getUTCMonth(), data.getUTCDate())     //pegando a data informada pelo usuario e somando 18//

     return dataMais18 <= dataAtual     //coparando se a dataMais18 e menor ou igual a dataAtual//
 }


