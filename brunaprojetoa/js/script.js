document.addEventListener("DOMContentLoaded", function() {
    // Adiciona um evento de envio para o formulário de cadastro de usuário
    const formCadastroUsuario = document.querySelector("form[action='inseriruser.php']");
    formCadastroUsuario.addEventListener("submit", function(event) {
        event.preventDefault(); // Impede o envio do formulário por padrão

        // Validação do formulário de cadastro de usuário
        const nome = formCadastroUsuario.querySelector("input[name='cxnome']").value.trim();
        const email = formCadastroUsuario.querySelector("input[name='cxemail']").value.trim();
        const senha = formCadastroUsuario.querySelector("input[name='cxsenha']").value.trim();

        if (nome === "" || email === "" || senha === "") {
            alert("Por favor, preencha todos os campos.");
        } else {
            // Envie os dados do formulário para o servidor
            formCadastroUsuario.submit();
        }
    });

    // Adiciona um evento de envio para o formulário de consulta de usuário
    const formConsultaUsuario = document.querySelector("form[action='consultanomeuser.php']");
    formConsultaUsuario.addEventListener("submit", function(event) {
        event.preventDefault(); // Impede o envio do formulário por padrão

        // Validação do formulário de consulta de usuário
        const nomePesquisa = formConsultaUsuario.querySelector("input[name='cxpesquisa']").value.trim();

        if (nomePesquisa === "") {
            alert("Por favor, digite o nome do usuário para pesquisar.");
        } else {
            // Envie os dados do formulário para o servidor
            formConsultaUsuario.submit();
        }
    });
});
