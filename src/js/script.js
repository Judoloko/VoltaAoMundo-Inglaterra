// Obtendo referências aos elementos do formulário no HTML
const form = document.getElementById("form") // Obtém o formulário
const nome = document.getElementById("nome") // Obtém o campo "nome"
const email = document.getElementById("email") // Obtém o campo "email"
const idade = document.getElementById("idade") // Obtém o campo "email"
const cidade = document.getElementById("cidade") // Obtém o campo "cidade"
const nota = document.getElementById("nota") // Obtém o campo "nota"

// Adicionando um ouvinte de evento para o evento "submit" do formulário
form.addEventListener("submit", (event) => {
  event.preventDefault() // Impede o envio padrão do formulário

  checkForm() // Chama a função para validar o formulário
})

// Adicionando um ouvinte de evento para o evento "blur" no campo "nome"
nome.addEventListener("blur", () => {
  checkInputNome()
})

// Adicionando um ouvinte de evento para o evento "blur" no campo "email"
email.addEventListener("blur", () => {
  checkInputEmail()
})

idade.addEventListener("blur", () => {
  checkInputIdade()
})

cidade.addEventListener("blur", () => {
  checkInputCidade()
})

nota.addEventListener("blur", () => {
  checkInputNota()
})

// Função para verificar o campo "nome"
function checkInputNome() {
  const nomeValue = nome.value

  if (nomeValue === "") {
    errorInput(nome, "Preencha o campo nome!") // Chama a função de erro para exibir uma mensagem de erro
  } else {
    const formItem = nome.parentElement
    formItem.className = "form-content" // Atualiza a classe do elemento pai para indicar sucesso
  }
}

// Função para verificar o campo "email"
function checkInputEmail() {
  const emailValue = email.value

  if (emailValue === "") {
    errorInput(email, "O email é obrigatório.") // Chama a função de erro para exibir uma mensagem de erro
  } else {
    const formItem = email.parentElement
    formItem.className = "form-content" // Atualiza a classe do elemento pai para indicar sucesso
  }
}
// Função para verificar o campo "idade"
function checkInputIdade() {
  const idadeValue = idade.value

  if (idadeValue === "") {
    errorInput(idade, "A idade é obrigatório.") // Chama a função de erro para exibir uma mensagem de erro
  } else {
    const formItem = idade.parentElement
    formItem.className = "form-content" // Atualiza a classe do elemento pai para indicar sucesso
  }
}

// Função para verificar o campo "cidade"
function checkInputCidade() {
  const cidadeValue = cidade.value

  if (cidadeValue === "") {
    errorInput(cidade, "A cidade é obrigatório.") // Chama a função de erro para exibir uma mensagem de erro
  } else {
    const formItem = cidade.parentElement
    formItem.className = "form-content" // Atualiza a classe do elemento pai para indicar sucesso
  }
}

// Função para verificar o campo "nota"
function checkInputNota() {
  const notaValue = nota.value

  if (notaValue === "") {
    errorInput(nota, "A nota é obrigatório.") // Chama a função de erro para exibir uma mensagem de erro
  } else {
    const formItem = nota.parentElement
    formItem.className = "form-content" // Atualiza a classe do elemento pai para indicar sucesso
  }
}



// Função para validar o formulário como um todo
function checkForm() {
  checkInputNome()
  checkInputEmail()
  checkInputIdade()
  checkInputCidade()
  checkInputNota()

  const formItems = form.querySelectorAll(".form-content") // Obtém todos os elementos com a classe "form-content"

  // Verifica se todos os campos têm a classe "form-content" (ou seja, estão válidos)
  const isValid = [...formItems].every((item) => {
    return item.className === "form-content"
  })

  if (isValid) {
    alert("FEEDBACK ENVIADO COM SUCESSO!") // Exibe uma mensagem de sucesso se o formulário for válido
  }
}

// Função para exibir uma mensagem de erro
function errorInput(input, message) {
  const formItem = input.parentElement
  const textMessage = formItem.querySelector("a")

  textMessage.innerText = message // Atualiza o texto da mensagem de erro
  formItem.className = "form-content error" // Atualiza a classe do elemento pai para destacar o erro visualmente
}
