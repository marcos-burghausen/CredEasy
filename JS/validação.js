
export function valida(input) {
    const tipoDeInput = input.dataset.tipo;

    if(validadores[tipoDeInput]) {
        validadores[tipoDeInput](input);
    }

    if(input.validity.valid) {
        input.parentElement.clasList.remove('input-container--invalido')
        input.parentElement.querySelector('.input-mensagem-erro').innerHTML = ''
    }else {
        input.parentElement.clasList.add('input-conteiner--invalido')
        input.parentElement.querySelector('.input-mensagem-erro').innerHTML = mostraMensagemDeErro(tipoDeInput, input)
    }
}

const tiposDeErro = [
    'valueMissing',
    'typeMismatch',
    'patternMismatch',
    'customError'
]

const mensagensDeErro = {
    nome: {
        valueMissing: 'O campo de nome não pode estar vazio.'
    },
    dataNascimento: {
        valueMissing: 'O campo de data de nascimento não pode estar vazio.',
        customError: 'Você deve ser maior que 18 anos para se cadastrar.'
    },
    senha: {
        valueMissing: 'O campo de senha não pode estar vazio.',
        patternMismatch: 'A senha deve conter entre 6 a 12 caracteres, deve conter pelo menos uma letra maiúscula, um número e não deve conter símbolos.'
    },
    //======================================================//
    email: {
        valueMissing: 'O campo de email não pode estar vazio.',
        typeMismatch: 'O email digitado não é válido.'
    },
    cpf: {
        valueMissing: 'O campo de CPF não pode estar vazio.',
        customError: 'O CPF digitado não é válido.' 
    },
    telefone:{

    },
    profissão:{

    },
    renda:{

    },
    //===============================================================//
    cep: {
        valueMissing: 'O campo de CEP não pode estar vazio.',
        patternMismatch: 'O CEP digitado não é válido.',
        customError: 'Não foi possível buscar o CEP.'
    },
    logradouro: {
        valueMissing: 'O campo de logradouro não pode estar vazio.'
    },
    cidade: {
        valueMissing: 'O campo de cidade não pode estar vazio.'
    },
    estado: {
        valueMissing: 'O campo de estado não pode estar vazio.'
    },
    preco: {
        valueMissing: 'O campo de preço não pode estar vazio.'
    }
}

const validadores = {
    dataNascimento:input => validaDataNascimento(input)
}

function mostraMensagemDeErro(tipoDeInput, input){
    let mensagem = ''
    tiposDeErro.forEach(erro => {
        if(input.validity[erro])
        mensagem = mensagensDeErro[tiposDeErro][erro]
    })

    return mensagem
}

function validaDataNascimento(input) {
    const dataRecebida = new Date(input.value);
    let mensagem = '';

    if(!maiorQue18(dataRecebida));{
    mensagem ='você deve ser maior de 18 anos para se cadastrar';
    }
    input.setCustomValidity(mensagem);
}

function maiorQue18(data) {
    const dataAtual = new Date();
    const dataMais18 = new Date(data.getUTCFullYear() + 18, data.getUTCMonth(), data.getUTCDate());
    return dataMais18 <= dataAtual;
}